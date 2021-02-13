<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <style>
                h1 {color: #000000;}
            </style>
            <a href="https://www.udenar.edu.co/">
            <h1><strong>"PAN DE MAIZ LA 13"</strong></h1><br>
                <img src="{{url('imagenes/logo.jpg')}}" height="170" width="170">
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('¿Olvidaste tu contraseña? No hay problema. Simplemente díganos su dirección de correo electrónico y le enviaremos un enlace para restablecer la contraseña que le permitirá elegir una nueva.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('')" /><strong>Correo</strong>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Correo de Recuperacion') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
