<?php

namespace App\Http\Livewire;

use App\Models\Vacancy;
use Livewire\Component;

class HomeVacancies extends Component
{
    public $term;
    public $category;
    public $salary;
    protected $listeners = ['searchTerms' => 'search'];
    public function search($term, $category, $salary)
    {
        $this->term = $term;
        $this->category = $category;
        $this->salary = $salary;
    }
    public function render()
    {
        // $vacancies = Vacancy::paginate(3);
        $vacancies = Vacancy::when($this->term, function($query){
            $query->where('title', 'LIKE', '%'. $this->term . '%');
        })
        ->when($this->term, function($query){
            $query->orWhere('company', $this->term);
        })
        ->when($this->category, function($query){
            $query->where('category_id', $this->category);
        })
        ->when($this->salary, function($query){
            $query->where('salary_id', $this->salary);
        })
        ->paginate(10);
        return view('livewire.home-vacancies', [
            'vacancies' => $vacancies
        ]);
    }
}
