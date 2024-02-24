<?php

namespace App\Livewire;

use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostularVacante extends Component
{
    use WithFileUploads;
    public $cv;
    public $vacante;

    protected $rules = [
        'cv' => 'required|mimes:pdf'
    ];

    public function mount(Vacante $vacante)
    {
        $this->vacante = $vacante;
    }

    public function postularme()
    {
        $this->validate();

        //Almacenar CV en el disco duro
        $cv = $this->cv->store('public/cv');
        $datos['cv'] = str_replace('public/cv/', '', $cv);
        //Crear elcandidato a la vacante

        $this->vacante->candidatos()->create([
            'user_id' => auth()->user()->id,
            'cv' => $datos['cv']
        ]);

        //Crear notificacion y enviar email

        //mostrar al usuario un mensaje de ok
        session()->flash('mensaje', 'Se envio correctamente tu informacion, mucha suerte');

        return redirect()->back();
    }
    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
