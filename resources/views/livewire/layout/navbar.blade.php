<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Faz logout do usuário atual.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/login', navigate: true);
    }
};
?>

<!-- Navbar responsiva e interativa (Tailwind + Alpine.js) -->
<header class="relative z-20 w-full border-b shadow-lg border-slate-200 bg-white/90 shadow-slate-700/5 lg:border-slate-200 lg:backdrop-blur-sm">
  <div class="relative mx-auto max-w-full px-6 lg:max-w-5xl xl:max-w-7xl 2xl:max-w-[96rem]">

    <!-- Alpine.js controlando dropdown e menu mobile -->
    <nav x-data="{ openMenu: false, openUser: false }"
         class="flex h-[5.5rem] items-stretch justify-between font-medium text-slate-700"
         aria-label="main navigation">

      <!-- Logo -->
      <a href="{{ route('home') }}" class="flex items-center gap-2 py-3 text-lg whitespace-nowrap focus:outline-none lg:flex-1">
        <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=emerald&shade=500" alt="Logo" class="w-10 h-10">
        <span class="font-semibold text-emerald-600">Laravel Cloud</span>
      </a>

      <!-- Botão Mobile -->
      <button @click="openMenu = !openMenu" class="relative self-center order-10 block w-10 h-10 lg:hidden" aria-label="Alternar menu">
        <div class="absolute w-6 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
          <span :class="{ 'rotate-45 translate-y-0.5': openMenu }" class="block h-0.5 w-6 bg-slate-900 transition-all duration-300"></span>
          <span :class="{ 'opacity-0': openMenu }" class="block h-0.5 w-6 my-1 bg-slate-900 transition-all duration-300"></span>
          <span :class="{ '-rotate-45 -translate-y-0.5': openMenu }" class="block h-0.5 w-6 bg-slate-900 transition-all duration-300"></span>
        </div>
      </button>

      <!-- Links de Navegação -->
      <ul 
        :class="{ 'opacity-100 visible': openMenu, 'opacity-0 invisible': !openMenu }"
        class="absolute top-0 left-0 z-[-1] flex flex-col items-center justify-center gap-4 h-screen w-full overflow-y-auto bg-white/90 text-center font-medium opacity-0 transition-all duration-300
              lg:visible lg:relative lg:z-0 lg:flex lg:h-full lg:w-auto lg:flex-row lg:items-center lg:justify-start lg:bg-transparent lg:px-0 lg:pt-0 lg:opacity-100 lg:text-left">

        <li><a href="{{ route('home') }}" class="block py-2 px-6 text-lg hover:text-emerald-600 transition">Home</a></li>
        <li><a href="{{ route('login') }}" class="block py-2 px-6 text-lg hover:text-emerald-600 transition">Login</a></li>
        <li><a href="{{ route('register') }}" class="block py-2 px-6 text-lg hover:text-emerald-600 transition">Cadastrar-se</a></li>
        <li><a href="{{ route('profile') }}" class="block py-2 px-6 text-lg hover:text-emerald-600 transition">Conta</a></li>
        <li><a href="{{ route('alunos') }}" class="block py-2 px-6 text-lg hover:text-emerald-600 transition">Aluno</a></li>
      </ul>


      <!-- Avatar + Dropdown -->
      <div class="flex items-center px-6 ml-auto lg:ml-0 lg:p-0 relative">
        <button @click="openUser = !openUser" class="relative inline-flex items-center justify-center w-10 h-10 text-white rounded-full focus:outline-none">
          <img src="{{ asset('images/cabecaghibli.png') }}" alt="Usuário" class="max-w-full rounded-full">
          <span class="absolute bottom-0 right-0 inline-flex items-center justify-center p-1 text-sm text-white bg-pink-500 border-2 border-white rounded-full"></span>
        </button>

        <!-- Dropdown -->
        <div x-show="openUser" @click.away="openUser = false"
             x-transition
             class="absolute right-0 top-14 w-48 bg-white shadow-md rounded-md overflow-hidden border border-gray-100">
          <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Perfil</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Configurações</a>
          <a wire:click="logout" href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sair</a>
        </div>
      </div>

    </nav>
  </div>
</header>