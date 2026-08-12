<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastros - Odisseia Filosófica</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-8 bg-gray-100 text-gray-800">
    <div class="max-w-6xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Leads Capturados</h1>
            <span class="bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded">Total: {{ $leads->count() }}</span>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 border-b-2 border-gray-200">
                        <th class="p-3 font-semibold text-gray-600">Data</th>
                        <th class="p-3 font-semibold text-gray-600">Origem</th>
                        <th class="p-3 font-semibold text-gray-600">Nome</th>
                        <th class="p-3 font-semibold text-gray-600">E-mail</th>
                        <th class="p-3 font-semibold text-gray-600">WhatsApp</th>
                        <th class="p-3 font-semibold text-gray-600">Detalhes</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($leads as $lead)
                    <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                        <td class="p-3 whitespace-nowrap">{{ $lead->created_at->format('d/m/Y H:i') }}</td>
                        <td class="p-3">
                            @if($lead->type == 'newsletter')
                                <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded">Newsletter</span>
                            @else
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Cursos</span>
                            @endif
                        </td>
                        <td class="p-3">{{ $lead->nome }}</td>
                        <td class="p-3">{{ $lead->email }}</td>
                        <td class="p-3">{{ $lead->whatsapp ?? '-' }}</td>
                        <td class="p-3 text-sm text-gray-500">
                            @if($lead->nivel) <strong>Nível:</strong> {{ $lead->nivel }} <br> @endif
                            @if($lead->temas) <strong>Temas:</strong> {{ $lead->temas }} <br> @endif
                            @if($lead->formato) <strong>Formato:</strong> {{ $lead->formato }} @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="p-6 text-center text-gray-500">Nenhum cadastro recebido ainda.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
