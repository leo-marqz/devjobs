<form
    action=""
    class="md:w-1/2 space-y-5"
    wire:submit.prevent='createVacancy'
>

    <div>
        <x-label for="title" :value="__('Titulo')" />

        <x-input
            id="title"
            class="block mt-1 w-full"
            type="text"
            wire:model="title"
            :value="old('title')"
            placeholder="Titulo de la vacante"
        />
        @error('title')
            <livewire:alert :message="$message" />
        @enderror
    </div>

    <div class="mt-4">
        <x-label for="salary" :value="__('Salario')" />
        <select wire:model="salary" id="salary" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <option value="">--- Selecciona un salario ---</option>
            @foreach ($salaries as $salary)
            <option value="{{$salary->id}}" > {{$salary->salary}} </option>
            @endforeach
        </select>
        @error('salary')
            <livewire:alert :message="$message" />
        @enderror
    </div>

    <div class="mt-4">
        <x-label for="category" :value="__('Categoria')" />
        <select wire:model="category" id="category" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <option value="">--- Selecciona una categoria ---</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->category}}</option>
            @endforeach
        </select>
        @error('category')
            <livewire:alert :message="$message" />
        @enderror
    </div>

    <div>
        <x-label for="company" :value="__('Empresa')" />

        <x-input
            id="company"
            class="block mt-1 w-full"
            type="text"
            wire:model="company"
            :value="old('company')"
            placeholder="Nombre de empresa"
        />
        @error('company')
            <livewire:alert :message="$message" />
        @enderror
    </div>

    <div>
        <x-label for="lastDayApply" :value="__('Fecha limite para postularse')" />

        <x-input
            id="last_day_apply"
            class="block mt-1 w-full"
            type="date"
            wire:model="last_day_apply"
            :value="old('last_day_apply')"
            placeholder="Titulo de la vacante"
        />
        @error('last_day_apply')
            <livewire:alert :message="$message" />
        @enderror
    </div>

    <div>
        <x-label for="description" :value="__('Descripción de la vacante')" />

        <textarea
            class="w-full h-72 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            wire:model="description"
            id="description"
            placeholder="Descripción de la vacante..experiencia, etc"
        ></textarea>
        @error('description')
            <livewire:alert :message="$message" />
        @enderror
    </div>

    <div>
        <x-label for="image" :value="__('Imagen')" />

        <x-input
            id="image"
            class="block mt-1 w-full"
            type="file" wire:model="image"
            accept="image/*"
        />
        <div class="my-3">
            @if ($image)
            Image:
            <img src="{{$image->temporaryUrl()}}" alt="">
            @endif
        </div>
        @error('image')
            <livewire:alert :message="$message" />
        @enderror
    </div>

    <x-button>Crear Vacante</x-button>

</form>

