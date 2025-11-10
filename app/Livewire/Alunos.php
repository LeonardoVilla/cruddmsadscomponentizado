<?php

namespace App\Livewire;

use App\Models\Aluno;
use Livewire\Component;

class Alunos extends Component
{
    public $nome;

    public $email;

    public $telefone;

    public $nascimento;

    public $curso;

    public function render()
    {
        return view('livewire.alunos')->layout('layouts.app');
    }

    protected $rules = [
        'nome' => 'required|min:3',
        'email' => 'required|email|unique:aluno,email',
        'telefone' => ['nullable', 'string', 'unique:alunos,telefone'],
        'telefone' => 'nullable|string',
        'nascimento' => 'nullable|date',
        'curso' => 'required|string',
    ];

    public function store()
    {

        $this->validate();

        Aluno::create([
            'nome' => $this->nome,
            'email' => $this->email,
            'telefone' => $this->telefone,
            'nascimento' => $this->nascimento,
            'curso' => $this->curso,
        ]);

        $this->reset(['nome', 'email', 'telefone', 'nascimento', 'curso']);

        session()->flash('success', 'Aluno cadastrado com sucesso!');

        // Redireciona de volta para a mesma rota
        return redirect(request()->header('Referer'));

    }

    public function update() {}

    public function delete() {}
}
