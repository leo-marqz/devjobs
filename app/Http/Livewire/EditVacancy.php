<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Salary;
use App\Models\Category;
use App\Models\Vacancy;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class EditVacancy extends Component
{
    use WithFileUploads;
    public $vacancy_id;
    public $title;
    public $salary;
    public $category;
    public $company;
    public $last_day_apply;
    public $description;
    public $image;
    public $new_image;
    protected $rules = [
        'title'=>'required|string',
        'salary'=>'required',
        'category'=>'required',
        'company'=>'required|string',
        'last_day_apply'=>'required',
        'description'=>'required|string',
        'new_image'=>'nullable|image|max:1024'
    ];




    public function mount(Vacancy $vacancy)
    {
        $this->vacancy_id = $vacancy->id;
        $this->title = $vacancy->title;
        $this->salary = $vacancy->salary_id;
        $this->category = $vacancy->category_id;
        $this->company = $vacancy->company;
        $this->last_day_apply = Carbon::parse($vacancy->last_day_apply)->format('Y-m-d');
        $this->description = $vacancy->description;
        $this->image = $vacancy->image;
    }

    public function editVacancy()
    {
        $data = $this->validate();

        // verificar si hay nueva Imagen
        if($this->new_image)
        {
            $this->image = $this->new_image->store('public/vacancies');
            $data['image'] = str_replace('public/vacancies/', '', $this->image);
        }


        // encontrar vacante a Editar
        $vacancy = Vacancy::find($this->vacancy_id);

        // asignar los valores
        $vacancy->title = $data['title'];
        $vacancy->salary_id = $data['salary'];
        $vacancy->category_id = $data['category'];
        $vacancy->company = $data['company'];
        $vacancy->last_day_apply = $data['last_day_apply'];
        $vacancy->description = $data['description'];
        $vacancy->image = $data['image'] ?? $vacancy->image;

        // guardar vacante
        $vacancy->save();

        // redireccionar
        session()->flash('message', 'Se actualizo correctamente');
        return redirect()->route('vacancies.index');
    }

    public function render()
    {
        $salaries = Salary::all();
        $categories = Category::all();
        return view('livewire.edit-vacancy', [
            'salaries'=>$salaries,
            'categories'=>$categories
        ]);
    }
}
