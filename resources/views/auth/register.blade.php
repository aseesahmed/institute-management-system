<x-guest-layout>
    <x-auth-card>
        {{-- <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot> --}}

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name -->
            <div class="form-group">
                <x-label for="name" :value="__('Full Name')" />

                <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" placeholder="Enter your name" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="form-group">
                <x-label for="email" :value="__('Email address')" />

                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="Enter your email" required />
            </div>

            <!-- Password -->
            <div class="form-group">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="form-control"
                                type="password"
                                name="password"
                                placeholder="Enter your password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="form-control"
                                type="password"
                                placeholder="Confirm password"
                                name="password_confirmation" required />
            </div>

            <div class="form-group">
                <a class="btn btn-primary btn-block" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="btn btn-primary btn-block">
                    <i class="mdi mdi-account-circle"></i>{{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
