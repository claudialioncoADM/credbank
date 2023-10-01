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

    {{-- <button wire:click="create()">Criar Conta</button>
    @if ($isOpen)
        @include('/page/conta')
    @endif --}}

    <div>
        <table class="table-fixed w-full">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2">Nome</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contas as $conta)
                    <tr>
                        <td class="border px-4 py-2">
                            {{ $conta->nome }}</td>
                        <td class="border px-4 py-2">
                            {{ $conta->email }}</td>
                        <td class="border px-4 py-2">
                            <button wire:click="edit({{ $conta->id }})">Editar</button>
                            <button wire:click="destroy({{ $conta->id }})">Apagar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
