<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tarifas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:tarifas/>
                {{-- <div>
                    <p>Tabela de Tarifas</p>
                    <a href="{{ url('/tarifas/create') }}">Novo</a>
                    <ul>
                        @foreach ($dados as $item)
                            <li> {{ $item->descricao }}
                                <br />
                                {{ $item->Preco }}
                            </li>
                        @endforeach
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>

</x-app-layout>
