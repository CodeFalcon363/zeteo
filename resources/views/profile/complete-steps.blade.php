<x-app-layout>
    @if ($user['current_profile_step'] == 1)
    <x-forms.profiles.step-one />
    @endif

    @if ($user['current_profile_step'] == 2)
    <x-forms.profiles.step-two />
    @endif
</x-app-layout>