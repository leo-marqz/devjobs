<div>

    <div>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        @forelse($vacancies as $vacancy)
            <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
                <div class="leading-10">
                    <a href="{{route('vacancies.show', $vacancy)}}" class="text-xl font-bold">
                        {{$vacancy->title}}
                    </a>
                    <p class="text-sm font-bold text-gray-600">
                        {{$vacancy->company}}
                    </p>
                    <p class="text-sm text-gray-400">
                        Ultimo dia de aplicación: {{$vacancy->last_day_apply->format('d/m/y')}}
                    </p>
                </div>
                <div class="flex gap-3 items-center mt-3 md:mt-0">
                    <a href="#" class="text-sm bg-slate-800 hover:bg-slate-700 py-2 px-4 rounded-lg text-white font-bold uppercase">
                        Candidatos
                    </a>
                    <a href="{{route('vacancies.edit', $vacancy)}}" class="text-sm bg-sky-600 hover:bg-sky-500 py-2 px-4 rounded-lg text-white font-bold uppercase">
                        Editar
                    </a>
                    <button wire:click="$emit('delete', {{$vacancy->id}})" class="text-sm bg-red-600 hover:bg-red-500 py-2 px-4 rounded-lg text-white font-bold uppercase">
                        Eliminar
                    </button>
                </div>
            </div>
            @empty
            <p class="p-3 text-center text-sm text-gray-600 font-bold">No hay vacantes que mostrar ...</p>
            @endforelse
        </div>

        <div class=" mt-10">
            {{$vacancies->links()}}
        </div>

    </div>
    @push('scripts')
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script >

        Livewire.on('delete', (vacancyId)=>deleteVacancy(vacancyId))


        function deleteVacancy(vacancyId)
        {
            Swal.fire({
                title: `Eliminar Vacante?`,
                text: "Una vacante eliminada no se puede recuperar!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
            if (result.isConfirmed) {
                //eliminar vacante
                Livewire.emit('deleteVacancy', vacancyId)
                Swal.fire(
                'Eliminada!',
                'La vacante ha sido eliminada!',
                'success'
                )
            }
            })
        }

     </script>
    @endpush
</div>

