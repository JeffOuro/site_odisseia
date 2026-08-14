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
        $validated = $request->validate([
            'type' => 'required|string',
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'whatsapp' => 'nullable|string|max:20',
            'nivel' => 'nullable|string|max:255',
            'temas' => 'nullable|string|max:255',
            'formato' => 'nullable|string|max:255',
        ]);

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
