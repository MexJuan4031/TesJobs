<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('¿Olvidaste tu contraseña? No hay problema, solo coloca el correo electrónico que esta vinculado
            a tu cuenta para mandarte un correo de recuperación') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" novalidate>
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Correo electrónico')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex justify-between" style="margin-top: 4px;">
           
           <x-link 
               :href="route('login')"
               >
               Iniciar sesión
   
               </x-link>
               
               <x-link
               :href="route('register')"
               >
               Crear cuenta
               </x-link> 
           </div>

           <x-primary-button class="w-full justify-center" style="margin-top: 10px;">
                {{ __('Enviar enlace de recuperación') }}
            </x-primary-button>


    </form>
</x-guest-layout>
