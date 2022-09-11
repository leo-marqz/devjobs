<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Salary;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateVacancy extends Component
{
    use WithFileUploads;
    public $title;
    public $salary;
    public $category;
    public $company;
    public $lastDayApply;
    public $description;
    public $image;
    protected $rules = [
        'title'=>'required|string',
        'salary'=>'required',
        'category'=>'required',
        'company'=>'required|string',
        'lastDayApply'=>'required',
        'description'=>'required|string',
        'image'=>'required|image|max:1024'
    ];

    public function createVacancy()
    {
        $data = $this->validate();
    }

    public function render()
    {
        $salaries = Salary::all();
        $categories = Category::all();

        return view('livewire.create-vacancy', [
            'salaries'=>$salaries,
            'categories'=>$categories,
        ]);
    }
}
