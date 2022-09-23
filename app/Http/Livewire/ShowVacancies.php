<?php

namespace App\Http\Livewire;

use App\Models\Vacancy;
use Livewire\Component;

class ShowVacancies extends Component
{
    public function render()
    {
        $vacancies = Vacancy::where('user_id', auth()->user()->id)
                              ->paginate(3);
        return view('livewire.show-vacancies', [
            'vacancies'=>$vacancies
        ]);
    }
}
