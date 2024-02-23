<?php

namespace App\Livewire;

use App\Models\Salario;
use Livewire\Component;

class CrearVacante extends Component
{
    public function render()
    {
        $salarios = Salario::all();

        return view('livewire.crear-vacante', [
            'salarios' => $salarios
        ]);
    }
}
