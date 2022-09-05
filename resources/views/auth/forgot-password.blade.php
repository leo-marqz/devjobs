<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Olvidaste tu contraseña ? Ingresa tu email de registro y te enviaremos un email con un enlace para que crees una nueva contraseña.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="grid justify-start">
                <x-button class="mt-4 mb-3">
                    {{ __('Enviar instrucciones') }}
                </x-button>
            </div>

            <div class="flex justify-between">

                <x-link :href="route('login')" >
                    Iniciar Sesión >
                </x-link>
                <x-link :href="route('password.request')" >
                    Olvidaste tu contraseña ?
                </x-link>

            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
