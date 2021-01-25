<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Worker extends Component
{

    public $count;

    public $titulo;

    public $description;

    public function mount($data){
        $this->titulo = $data['titulo'];
        $this->description = $data['description'];
    }

    public function render()
    {
        return view('livewire.worker');
    }

    public function increment(){
        $this->count++;
    }
}
