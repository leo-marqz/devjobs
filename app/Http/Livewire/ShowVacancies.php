<?php

namespace App\Http\Livewire;

use App\Models\Vacancy;
use Livewire\Component;

class ShowVacancies extends Component
{

    //eventos livewire
    protected $listeners = ['deleteVacancy'];

    public function deleteVacancy(Vacancy $vacancy)
    {
        $vacancy->delete();
    }

    public function render()
    {
        $vacancies = Vacancy::where('user_id', auth()->user()->id)
                              ->paginate(10);
        return view('livewire.show-vacancies', [
            'vacancies'=>$vacancies
        ]);
    }
}
