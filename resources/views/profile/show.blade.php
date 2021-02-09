<x-guest-layout>
    <a href="/dashboard">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 72.552 107.505" style="position:absolute;top:0;left:0px;margin-top:50px;margin-left:20px;" >
        <defs>
            <filter id="Tracé_94" x="0" y="0" width="72.552" height="107.505" filterUnits="userSpaceOnUse">
                <feOffset dy="3" input="SourceAlpha"/>
                <feGaussianBlur stdDeviation="5" result="blur"/>
                <feFlood flood-opacity="0.161"/>
                <feComposite operator="in" in2="blur"/>
                <feComposite in="SourceGraphic"/>
            </filter>
        </defs>
    <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Tracé_94)">
        <path id="Tracé_94-2" data-name="Tracé 94" d="M439.469,316.567l-33.5,33.5,34.1,34.1" transform="translate(-387.47 -299.62)" fill="none" stroke="#020202" stroke-linecap="round" stroke-linejoin="round" stroke-width="7"/>
    </g>
    </svg>
</a>


    <div style="margin-top: 100px;">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-jet-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-guest-layout>
