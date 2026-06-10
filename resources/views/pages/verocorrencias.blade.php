<x-layout>
    <x-slot:title>
        Mapa
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <div>
                    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Ocorrências Registradas</h1>

        @if($ocorrencias->isEmpty())
            <p class="text-gray-500">Nenhuma ocorrência registrada ainda.</p>
        @else
            <table class="table w-full">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Lugar</th>
                        <th>Nível</th>
                        <th>Motivo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ocorrencias as $ocorrencia)
                        <tr>
                            <td>{{ $ocorrencia->id }}</td>
                            <td>{{ $ocorrencia->lugar }}</td>
                            <td>{{ $ocorrencia->nivel }}</td>
                            <td>{{ $ocorrencia->motivo }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>