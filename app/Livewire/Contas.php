<?php

namespace App\Livewire;

use App\Models\ContaModel;
use Livewire\Component;

class Contas extends Component
{
    public $contas;
    public $conta_id;
    public $nome;
    public $email;

    public $isOpen = 0; // controla exibição do modal

    public function render()
    {
        $this->contas = ContaModel::all();

        return view('livewire.contas');
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->resetInputFields(); // limpa campos
        $this->isOpen = false;
    }

    public function create()
    {
        $this->resetInputFields(); // limpa campos
        $this->openModal();
    }

    public function store()
    {
        $this->validate([
            'nome' => 'required',
            'email' => 'required',
        ]);

        Contas::updateOrCreate(['id' => $this->conta_id], [
            'nome' => $this->nome,
            'email' => $this->email
        ]);

        session()->flash(
            'resultado',
            $this->conta_id ? 'Conta Editada.' : 'Conta criada.'
        );

        $this->closeModal();
        $this->resetInputFields(); // limpa campos
    }

    public function edit($id)
    {

        // busca dados
        $conta = ContaModel::findOrFail($id);

        //preenche as propriedades
        $this->conta_id = $id;
        $this->nome = $conta->nome;
        $this->email = $conta->email;

        //mandar abrir o modal
        $this->openModal();
    }

    public function resetInputFields()
    {
        $this->conta_id = '';
        $this->nome = '';
        $this->email = '';
        //session()->flash('message','');
        $this->resetErrorBag();
    }

    public function destroy($id)
    {
        ContaModel::find($id)->delete();
        session()->flash('resultado','Conta Apagada.');

    }
}
