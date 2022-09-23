<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Salary;
use App\Models\Vacancy;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateVacancy extends Component
{
    use WithFileUploads;
    public $title;
    public $salary;
    public $category;
    public $company;
    public $last_day_apply;
    public $description;
    public $image;
    protected $rules = [
        'title'=>'required|string',
        'salary'=>'required',
        'category'=>'required',
        'company'=>'required|string',
        'last_day_apply'=>'required',
        'description'=>'required|string',
        'image'=>'required|image|max:1024'
    ];

    public function createVacancy()
    {
        $data = $this->validate();

        //almacenar imagen
        $imagePath = $this->image->store('public/vacancies');
        $imageName = str_replace('public/vacancies/', '', $imagePath);

        //crear vacante
        Vacancy::create([
            'salary_id'=>$data['salary'],
            'category_id'=>$data['category'],
            'user_id'=>auth()->user()->id,
            'title'=>$data['title'],
            'company'=>$data['company'],
            'last_day_apply'=>$data['last_day_apply'],
            'description'=>$data['description'],
            'image'=>$imageName
        ]);

        //crear mensaje
        session()->flash('message', 'La vacante se publico correctamente!!');

        //redireccionar al usuario
        return redirect()->route('vacancies.index');
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
