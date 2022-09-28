<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Candidatos") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
                <h1 class=" text-3xl font-bold mb-7 py-10 text-center">
                    Candidatos de vacante: {{$vacancy->title}}
                </h1>

                <div class="md:flex md:justify-center p-5">
                    <ul class="divide-y divide-gray-200 w-full">
                        @forelse ($vacancy->candidates as $candidate)
                            <li class="p-3 flex items-center">
                                <div class="flex-1">
                                    <p class="text-xl font-bold text-gray-800">
                                        {{$candidate->user->name}}
                                    </p>
                                    <p class="text-sm text-gray-800">
                                        {{$candidate->user->email}}
                                    </p>
                                    <p class="text-sm font-medium text-gray-800">
                                        Hace cuanto se postulo:
                                        <span class="text-gray-500 font-normal"> {{$candidate->created_at->diffForHumans()}}</span>
                                    </p>
                                </div>
                                <div>
                                    <a
                                        class="inline-flex items-center shadow px-2.5 py-0.5 border-gray-300 text-sm leading-5 font-mediun rounded-full bg-white hover:bg-gray-50"
                                        href="{{asset('storage/cvs/' . $candidate->cv )}}"
                                        target="_blank"
                                        rel="noreferrer noopener"
                                        >
                                        Ver CV
                                    </a>
                                </div>
                            </li>
                        @empty
                            <p class="p-3 text-sm text-center text-gray-600">No hay candidatos</p>
                        @endforelse
                    </ul>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
