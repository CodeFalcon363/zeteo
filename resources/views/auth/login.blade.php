<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="card-body">

            <x-jet-validation-errors class="mb-3 rounded-0" />

            @if (session('status'))
                <div class="alert alert-success mb-3 rounded-0" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <div class="mb-2">
                    <x-jet-label value="{{ __('Email') }}" />
                    </div>

                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email"
                                 name="email" :value="old('email')" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>

                <div class="mb-3 ">
                    <div class="d-flex justify-content-between mb-2">
                        <x-jet-label value="{{ __('Password') }}" />
                        
                        <a class="text-muted" href="{{ route('password.request') }}">
                            {{ __('Forgotten?') }}
                        </a>
                        
                    </div>

                    <x-jet-input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"
                                 name="password" required autocomplete="current-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <div class="custom-control custom-checkbox">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <label class="custom-control-label" for="remember_me">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <div class="mb-2">
                    <div class="d-flex justify-content-center align-items-baseline">
                        
                        <x-jet-button class="btn-lg w-75">
                            {{ __('Sign in') }}
                        </x-jet-button>
                    </div>
                </div>
                <div class="mt-3 border-top py-4">
                    <label>Don't have account? <a class="text-muted" href="{{ route('register') }}">
                            {{ __('Register') }}
                        </a></label>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>