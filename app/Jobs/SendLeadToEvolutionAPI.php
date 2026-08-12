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

class SendLeadToEvolutionAPI implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $lead;

    public function __construct(Lead $lead)
    {
        $this->lead = $lead;
    }

    public function handle(): void
    {
        $evolutionUrl = env('EVOLUTION_API_URL');
        $evolutionKey = env('EVOLUTION_API_KEY');
        $instance = env('EVOLUTION_INSTANCE');

        if (!$evolutionUrl || !$evolutionKey || !$instance) {
            Log::warning('Evolution API não configurada. Lead não enviado.');
            return;
        }

        // Formatação simples do WhatsApp (removendo não-numéricos)
        $whatsapp = preg_replace('/[^0-9]/', '', $this->lead->whatsapp);
        
        if (strlen($whatsapp) < 10) {
            return; // Número inválido
        }

        // Adiciona DDI do Brasil se não tiver
        if (strlen($whatsapp) <= 11) {
            $whatsapp = '55' . $whatsapp;
        }

        $mensagem = "Olá {$this->lead->nome}! Agradecemos seu interesse na Odisseia Filosófica. Em breve enviaremos novidades.";

        $response = Http::withHeaders([
            'apikey' => $evolutionKey
        ])->post("{$evolutionUrl}/message/sendText/{$instance}", [
            'number' => $whatsapp,
            'options' => [
                'delay' => 1200,
                'presence' => 'composing',
            ],
            'textMessage' => [
                'text' => $mensagem
            ]
        ]);

        if ($response->failed()) {
            Log::error('Erro ao enviar mensagem via Evolution API: ' . $response->body());
        }
    }
}
