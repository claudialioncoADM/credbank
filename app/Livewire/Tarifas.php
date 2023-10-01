<?php

namespace App\Livewire;

use App\Models\Tarifa;
use Livewire\Component;

class Tarifas extends Component
{
    public $tarifas;
    public $tarifa_id;
    public $descricao;
    public $preco;

    public $isOpen = 0; // controla exibição do modal

    public function render()
    {
        $this->tarifas = Tarifa::all();

        return view('livewire.tarifas');
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
            'descricao' => 'required',
            'preco' => 'required|numeric',
        ]);

        Tarifa::updateOrCreate(['id' => $this->tarifa_id], [
            'descricao' => $this->descricao,
            'preco' => $this->preco
        ]);

        session()->flash(
            'resultado',
            $this->tarifa_id ? 'Tarifa Editada.' : 'Tarifa criada.'
        );

        $this->closeModal();
        $this->resetInputFields(); // limpa campos
    }

    public function edit($id)
    {
        // busca dados
        $tarifa = Tarifa::findOrFail($id);

        //preenche as propriedades
        $this->tarifa_id = $id;
        $this->descricao = $tarifa->descricao;
        $this->preco = $tarifa->preco;

        //mandar abrir o modal
        $this->openModal();
    }

    public function resetInputFields()
    {
        $this->tarifa_id = '';
        $this->descricao = '';
        $this->preco = '';
        //session()->flash('message','');
        $this->resetErrorBag();
    }

    public function destroy($id)
    {
        Tarifa::find($id)->delete();
        session()->flash('resultado','Tarifa Apagada.');

    }
}
