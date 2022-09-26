<?php

namespace App\Http\Livewire;

use App\Models\Vacancy;
use Livewire\Component;
use Livewire\WithFileUploads;

class ApplyForVacancy extends Component
{
    use WithFileUploads;

    public $cv;
    public $vacancy;
    protected $rules = [
        'cv'=>'required|mimes:pdf'
    ];

    public function mount(Vacancy $vacancy)
    {
        $this->vacancy = $vacancy;
    }
    public function apply()
    {
        $data = $this->validate();

        // almacenar CV en el disco duro
        $cv = $this->cv->store('public/cvs');
        $data['cv'] = str_replace('public/cvs/', '', $cv);

        // cguardar candidato de la vacante
        $this->vacancy->candidates()->create([
            'user_id' => auth()->user()->id,
            'cv' => $data['cv']
        ]);

        // crear notificacion y enviar email

        // Mostrar al usuario un mensaje ok
        session()->flash('message', 'Se envio tu aplicación correctamente, mucha suerte!!!');
        return redirect()->back();

    }

    public function render()
    {
        return view('livewire.apply-for-vacancy');
    }
}
