<?php

namespace App\Livewire;

use App\Models\Vacante;
use Livewire\Component;

class HomeVacantes extends Component
{

    public function buscar()
    {
        dd('Desde Componente Padre');
    }

    public function render()
    {
        $vacantes = Vacante::all();

        return view('livewire.home-vacantes', [
            'vacantes' => $vacantes
        ]);
    }
}
