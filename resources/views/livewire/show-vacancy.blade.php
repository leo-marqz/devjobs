<div class="p-10">
    <div class="font-extrabold text-3xl my-3">
        {{$vacancy->title}}
    </div>
    <div class="md:grid md:grid-cols-2 p-4 my-7 bg-gray-50 rounded-lg">
        <p class="font-bold  capitalize text-gray-800 my-3 ">
            Empresa:
            <span class="font-normal text-gray-600">{{$vacancy->company}}</span>
        </p>
        <p class="font-bold  capitalize text-gray-800 my-3 ">
            Ultimo dia de aplicación:
            <span class="font-normal text-gray-600">
                {{$vacancy->last_day_apply->toFormattedDateString()}}
            </span>
        </p>
        <p class="font-bold  capitalize text-gray-800 my-3 ">
            Categoria:
            <span class="font-normal text-gray-600">
                {{$vacancy->category->category}}
            </span>
        </p>
        <p class="font-bold  capitalize text-gray-800 my-3 ">
            Salario:
            <span class="font-normal text-gray-600">
                {{$vacancy->salary->salary}}
            </span>
        </p>
    </div>

    <div class="md:grid md:grid-cols-6 gap-5">
        <div class="md:col-span-2">
            <img src="{{asset('storage/vacancies/' . $vacancy->image)}}" alt="{{$vacancy->title}}">
        </div>
        <div class="md:col-span-4">
            <h2 class="text-2xl font-bold mb-5">Descripción del puesto</h2>
            <p>
                {{$vacancy->description}}
            </p>
        </div>
    </div>

    @guest
        <div class="mt-5 bg-gray-50 border-dashed border p-5 text-center">
            <p>Deseas aplicar a esta vacante?
                <a class="font-bold text-indigo-600" href="{{route('register')}}">Obten una cuenta y aplica a esta y otras vacantes mas</a>
            </p>
        </div>
    @endguest

    @cannot('create', App\Models\Vacancy::class)
        <livewire:apply-for-vacancy :vacancy="$vacancy" />
    @endcan

</div>
