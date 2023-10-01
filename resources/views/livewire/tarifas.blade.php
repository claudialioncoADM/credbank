<div>

    @if (session()->has('resultado'))
        <div role="alert">
            <div class='flex'>
                <p class="text-sm">
                    {{ session('resultado') }}
                </p>
            </div>
        </div>
    @endif

    <button wire:click="create()">Criar Tarifa</button>
    @if ($isOpen)
        @include('livewire.create')
    @endif

    <div>
        <table class="table-fixed w-full">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2">Descrição</th>
                    <th class="px-4 py-2">Preço</th>
                    <th class="px-4 py-2">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tarifas as $tarifa)
                    <tr>
                        <td class="border px-4 py-2">
                            {{ $tarifa->descricao }}</td>
                        <td class="border px-4 py-2">
                            {{ $tarifa->preco }}</td>
                        <td class="border px-4 py-2">
                            <button wire:click="edit({{ $tarifa->id }})">Editar</button>
                            <button wire:click="destroy({{ $tarifa->id }})">Apagar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
