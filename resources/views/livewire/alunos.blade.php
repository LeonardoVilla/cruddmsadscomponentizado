
    <div class="max-w-3xl mx-auto mt-10 bg-white shadow-md rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-gray-700 mb-6 text-center">Cadastro de Aluno</h2>

        <form wire:submit.prevent="{{ 'store' }}" method="POST">
            @csrf

            {{-- Nome --}}
            <div class="mb-5">
                <label for="nome" class="block text-sm font-medium text-gray-700 mb-1">Nome completo</label>
                <input type="text" id="nome" name="nome" wire:model="nome"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Digite o nome completo" required>
                @error('nome')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Email --}}
            <div class="mb-5">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" id="email" name="email" wire:model="email"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="exemplo@email.com" required>
                @error('email')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Telefone --}}
            <div class="mb-5">
                <label for="telefone" class="block text-sm font-medium text-gray-700 mb-1">Telefone</label>
                <input type="text" id="telefone" name="telefone" wire:model="telefone"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="(99) 99999-9999">
                @error('telefone')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror

            </div>

            {{-- Curso --}}
            <div class="mb-5">
                <label for="curso" class="block text-sm font-medium text-gray-700 mb-1">Curso</label>
                <input type="text" id="curso" name="curso" wire:model="curso"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Informe o curso">
                @error('curso')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Data de Nascimento --}}
            <div class="mb-5">
                <label for="data_nascimento" class="block text-sm font-medium text-gray-700 mb-1">Data de
                    Nascimento</label>
                <input type="date" id="data_nascimento" name="nascimento" wire:model="nascimento"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                @error('nascimento')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Botão --}}
            <div class="text-center mt-5">
                <button type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                    Cadastrar
                </button>
            </div>
        </form>

        @if (session()->has('success'))
            <div class="mb-4 p-4 bg-green-200 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif
    </div>
