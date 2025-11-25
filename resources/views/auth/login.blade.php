<x-guest-layout>
        <style>
            h2{
                font-family: Tahoma;
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
            p{
                font-size:16px;
                color: black;
            }
            a{
                font-size:16px !important;
                color: brown !important;
            }

        </style>
        
        <form method="POST" action="{{ route('login') }}">
        @csrf
         <h2>Management System</h2>

        <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email:')" />
                <x-text-input placeholder="Email" id="email" class="block mt-1 w-full" 
                                type="email" 
                                name="email" :value="old('email')"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

        <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password:')" />
                <x-text-input placeholder="Password" id="password" class="block mt-1 w-full"
                                type="password"
                                name="password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

        <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-primary-button class="ms-3 text-white font-[sans-serif] text-[17px] capitalize tracking-tight ">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>

            <div class="flex items-center justify-end mt-4">
                <p>You don't have an account.
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                        {{ __('Register') }}
                    </a>
                </p>

             <!-- @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif -->
        </form>
    </x-guest-layout>
