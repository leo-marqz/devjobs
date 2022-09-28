<div>

    <livewire:filter-vacancies />

    <div class="py-12 px-2 md:px-2 lg:px-0">
        <div class="max-w-7xl mx-auto">
            <h3 class="font-extrabold text-4xl text-center md:text-left lg:text-left text-gray-700 mb-12">
                Nuestras vacantes disponibles
            </h3>
            <div class="bg-white shadow-sm rounded-lg p-6 divide-y divide-gray-200">
                @forelse ($vacancies as $vacancy)
                    <div class="md:flex md:justify-between md:items-center py-5 ">
                        <div class="md:flex-1">
                            <a
                                class="text-3xl font-extrabold text-gray-600 hover:text-indigo-600"
                                href="{{route('vacancies.show', $vacancy->id)}}">
                                {{$vacancy->title}}
                            </a>
                            <p class="text-base text-gray-600 mb-1"> {{$vacancy->company}} </p>
                            <p class="text-base text-gray-600 mb-1"> {{$vacancy->category->category}} </p>
                            <p class="text-base text-gray-600 mb-1"> {{$vacancy->salary->salary}} </p>
                            <p class="font-bold text-xs">
                                Ultimo dia para postular:
                                <span class="font-normal">{{$vacancy->last_day_apply->format('d/m/Y')}}</span>
                            </p>
                        </div>
                        <div class="mt-5 md:mt-0">
                            <a
                                href="{{route('vacancies.show', $vacancy->id)}}"
                                class="text-bold text-sm bg-indigo-700 hover:bg-indigo-600 text-white border p-2 md:p-3 lg:p-3 rounded-lg">
                                Ver vacante
                            </a>
                        </div>
                    </div>
                @empty
                  <p class="p-3 text-center text-sm text-gray-600"></p>
                @endforelse
            </div>
            <div class="p-3">
                {{$vacancies->links()}}
            </div>
        </div>
    </div>
</div>
