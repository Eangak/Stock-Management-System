<x-guest-layout>
    <style>
        h2{
            font-family: Tahoma !important;
            font-size: 24px !important;
            color: brown !important;
            text-align: center;
            font-weight: bold;
        }

        input::placeholder{
            font-size: 14px;
            color: #999 !important;
            opacity: 0.7 !important;
        }

        a{
                font-size:16px !important;
                color: brown !important;
            }

        
    </style>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h2>Sing Up</h2>
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input placeholder="Username" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input placeholder="Email" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input placeholder="Password" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input placeholder="Confirm Password" id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

         
         <div class="flex items-center justify-center mt-4">
            <x-primary-button class="ms-4">
                {{ __('Sign Up') }}
            </x-primary-button>
         </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        </div>
    </form>
</x-guest-layout>
