<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notificaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class=" text-3xl font-bold mb-7 py-10 text-center">Mis Notificaciones</h1>


                    <div class="divide-y divide-gray-200">
                        @forelse ($notifications as $notification)
                          <div class="p-5 md:flex md:justify-between md:items-center">
                            <div>
                                <p>
                                    Tienes un nuevo candidato en:
                                    <span class="font-bold ">
                                        {{$notification->data['vacancy_title']}}
                                    </span>
                                </p>
                                <p>
                                    Hace:
                                    <span class="font-bold ">
                                        {{$notification->created_at->diffForHumans()}}
                                    </span>
                                </p>
                            </div>
                            <div class="mt-5 md:mt-0">
                                <a
                                    class="text-bold text-sm bg-indigo-700 hover:bg-indigo-600 text-white border p-3 rounded-lg"
                                    href="{{route('candidates.index', $notification->data['vacancy_id'])}}"
                                >
                                    Ver candidatos
                                </a>
                            </div>
                          </div>
                        @empty
                          <p class="text-center text-gray-600">No hay notificaciones</p>
                        @endforelse
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
