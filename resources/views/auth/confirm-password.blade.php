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
            {{ __('Esta es un área segura de la aplicación. Confirme su contraseña antes de continuar.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <div class="flex justify-end mt-4">
                <x-button>
                    {{ __('Confirmar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
