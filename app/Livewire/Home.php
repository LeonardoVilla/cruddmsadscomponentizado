<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        // return view('livewire.home'); //usando </x-app-layout>
        // return view('livewire.home')->layout('layouts.app'); //usando ->layout('layouts.app')

        return view('livewire.home')->layout('layouts.app');
    }



}
