<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-center text-2xl font-bold my-4 ">
        Postularme a esta vacante
    </h3>

    @if (session()->has('message'))
        <div class="border border-green-600 text-sm rounded-lg text-green-600 bg-green-100 p-2 font-bold my-5">
            {{session('message')}}
        </div>
    @else
        <form wire:submit.prevent='apply' action="" class="w-96 mt-5">
            <div class="mb-4">
                <x-label for="cv" :value="__('Curriculum u Hoja de vida (PDF)')" />
                <x-input id="cv" wire:model="cv" accept=".pdf" type="file" class="block mt-1 w-full" />
            </div>

            @error('cv')
            <livewire:alert :message="$message" />
            @enderror

            <x-button class="my-2" >
                Aplicar
            </x-button>
        </form>
    @endif

</div>
