<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="card-body">

            <div class="mb-3">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <x-jet-validation-errors class="mb-3" />

            <form method="POST" action="/forgot-password">
                @csrf

                <div class="mb-3">
                    <x-jet-label value="Email" />
                    <x-jet-input type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <x-jet-button class="btn-lg w-75">
                        {{ __('Reset Password') }}
                    </x-jet-button>
                </div>
                <div class="mt-3 py-2 border-top">
                    <label>
                        You can also <a class="text-muted" href="{{ route('login') }}">
                            {{ __('login instead') }}
                        </a>
                    </label>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>