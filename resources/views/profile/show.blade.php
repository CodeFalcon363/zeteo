<x-app-layout>

    <div class="container-fluid contents py-3">

        <x-pages.profile.pagination />

        <div class="row mb-2">
            <div class="col">
                <h3>
                    Account Profile
                </h3>
            </div>
        </div>
        <div class="row my-2 align-items-sm-strech">

            <div class="col-12 col-sm-6">
                <x-users.profiles.personal-info />
            </div>

            <div class="col-12 col-sm-6">
                <x-users.profiles.account-security />
            </div>

        </div>

        <div class="row my-2">
            <div class="col-12 col-sm-auto">
                <x-users.profiles.more-configs />
            </div>
        </div>
    </div>
</x-app-layout>
