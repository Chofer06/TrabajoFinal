<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <style>
                h1 {color: #000000;}
            </style>
            <a href="https://www.udenar.edu.co/">
                <h1><strong>"PAN DE MAIZ LA 13"</strong></h1><br>
                <div align="center">
                    <img src="{{url('imagenes/logo.jpg')}}" height="150" width="150"> 
                </div>     
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('')" /><strong>Correo</strong>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password"/><strong>Contraseña</strong>

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recuerdame') }}</span>
                </label>
            </div>

            <div>
                <div align="center">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Olvidaste Tu Contraseña') }}
                        </a>
                    @endif
                </div>
                <div align="left">
                    <a href="login"><x-button class="ml-3">{{ __('Ingresar') }}</x-button></a>
                </div>
                <!--div align="left">
                    <x-button class="ml-3">{{ __('Ingresar') }}</x-button>
                </div-->
                
            </div>
        </form>
        <div align="right">
            <a href="register"><x-button class="ml-3">{{ __('Registrate') }}</x-button></a>
        </div>
    </x-auth-card>
</x-guest-layout>

