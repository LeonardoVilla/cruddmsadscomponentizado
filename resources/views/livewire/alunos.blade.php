<x-app-layout>
    <div class="max-w-3xl mx-auto mt-10 bg-white shadow-md rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-gray-700 mb-6 text-center">Cadastro de Aluno</h2>

        <form wire:submit.prevent="store">
            <input type="text" wire:model="nome" placeholder="Digite o nome completo" class="...">
            @error('nome')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror

            <input type="email" wire:model="email" placeholder="exemplo@email.com" class="...">
            @error('email')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror

            <input type="text" wire:model="telefone" placeholder="(99) 99999-9999" class="...">
            @error('telefone')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror

            <input type="text" wire:model="curso" placeholder="Informe o curso" class="...">
            @error('curso')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror

            <input type="date" wire:model="nascimento" class="...">
            @error('nascimento')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror

            <button type="submit" class="...">Cadastrar</button>
        </form>

        @if (session()->has('success'))
            <div class="mb-4 p-4 bg-green-200 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

    </div>
</x-app-layout>
