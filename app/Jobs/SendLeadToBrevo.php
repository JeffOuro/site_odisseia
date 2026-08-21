<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Lead;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SendLeadToBrevo implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $lead;

    public function __construct(Lead $lead)
    {
        $this->lead = $lead;
    }

    public function handle(): void
    {
        $brevoApiKey = env('BREVO_API_KEY');

        if (!$brevoApiKey) {
            Log::info('BREVO_API_KEY não configurada no .env. Ignorando envio para o Brevo.');
            return;
        }

        $listId = env('BREVO_LIST_ID');
        $listIds = $listId ? [(int) $listId] : [1];

        $payload = [
            'email' => $this->lead->email,
            'attributes' => array_filter([
                'FIRSTNAME' => $this->lead->nome,
                'NOME' => $this->lead->nome,
                'TYPE' => $this->lead->type ?? 'newsletter',
                'SMS' => $this->lead->whatsapp ? $this->lead->whatsapp : null,
                'DATA_CADASTRO' => date('Y-m-d H:i:s'),
                'OPT_IN' => true,
            ]),
            'listIds' => $listIds,
            'updateEnabled' => true,
        ];

        $response = Http::withHeaders([
            'api-key' => $brevoApiKey,
            'accept' => 'application/json',
            'content-type' => 'application/json',
        ])->post('https://api.brevo.com/v3/contacts', $payload);

        if ($response->failed()) {
            Log::error('Erro ao enviar lead para Brevo: ' . $response->status() . ' - ' . $response->body());
        } else {
            Log::info('Lead enviado com sucesso para Brevo: ' . $this->lead->email);
        }
    }
}
