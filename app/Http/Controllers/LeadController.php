<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Jobs\SendLeadToEvolutionAPI;
use App\Jobs\SendLeadToBrevo;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        // Honeypot anti-spam check: se um robô preencher o campo escondido, retorna sucesso silencioso
        if ($request->filled('b_website')) {
            return back()->with('success', 'Cadastro realizado com sucesso!');
        }

        $validated = $request->validate([
            'type' => 'required|string|max:100',
            'nome' => 'required|string|max:255',
            'email' => 'required|email:rfc,dns|max:255',
            'whatsapp' => 'nullable|string|max:20',
            'nivel' => 'nullable|string|max:255',
            'temas' => 'nullable|string|max:255',
            'formato' => 'nullable|string|max:255',
        ]);

        $validated['nome'] = trim(strip_tags($validated['nome']));
        $validated['email'] = strtolower(trim($validated['email']));

        $lead = Lead::create($validated);

        // Envia para o Brevo em background
        SendLeadToBrevo::dispatch($lead);

        if ($lead->whatsapp) {
            // Envia para a API de WhatsApp em background
            SendLeadToEvolutionAPI::dispatch($lead);
        }

        return back()->with('success', 'Cadastro realizado com sucesso!');
    }
}
