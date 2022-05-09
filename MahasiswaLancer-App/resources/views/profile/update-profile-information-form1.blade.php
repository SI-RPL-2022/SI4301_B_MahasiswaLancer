<x-jet-form-section submit="updateProfileInformation">
    {{-- <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot> --}}

    <x-slot name="form">

        <x-jet-action-message on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div class="mb-3" x-data="{ photoName: null, photoPreview: null }">
                <!-- Profile Photo File Input -->
                <input type="file" hidden wire:model="photo" x-ref="photo" x-on:change="
                        photoName = $refs.photo.files[0].name;
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            photoPreview = e.target.result;
                        };
                        reader.readAsDataURL($refs.photo.files[0]);
                " />

                {{-- <x-jet-label for="photo" value="{{ __('Photo') }}" /> --}}

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" class="rounded-circle" height="180px" width="180px"
                        style="border-radius: 50%; margin-left: 38%; margin-top:-135px;">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <img x-bind:src="photoPreview" class="rounded-circle" width="180px" height="180px"
                        style="border-radius: 50%; margin-left: 38%; margin-top:-135px;">
                </div>

                <x-jet-secondary-button class="mt-2 me-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        <div wire:loading wire:target="deleteProfilePhoto" class="spinner-border spinner-border-sm"
                            role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>

                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        {{-- <img src="assetsmhs/images/faces/face27.jpg" alt="..."
            style="border-radius: 50%; margin-left: 38%; width:180px; height: auto; margin-top:-135px;">
        <a class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
            style="position: absolute; left: 408px; top: 100px;">Edit Photo</a> --}}

        <div>

            <div style="margin-left: 10%; margin-right: 10%; margin-top: 90px;">



                <div class="w-md-75">
                    <!-- Name -->
                    <div class="mb-3">
                        <x-jet-label for="name" value="{{ __('Nama Lengkap') }}" />
                        <x-jet-input id="name" type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                            wire:model.defer="state.name" autocomplete="name" />
                        <x-jet-input-error for="name" />
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                            wire:model.defer="state.email" />
                        <x-jet-input-error for="email" />
                    </div>

                    <!-- NoHp -->
                    <div class="mb-3">
                        <x-jet-label for="nohp" value="{{ __('No Hp') }}" />
                        <x-jet-input id="nohp" type="nohp" class="{{ $errors->has('nohp') ? 'is-invalid' : '' }}"
                            wire:model.defer="state.nohp" />
                        <x-jet-input-error for="nohp" />
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-3">
                        <x-jet-label for="deskripsi" value="{{ __('Deskripsi Biodata') }}" />
                        <x-jet-input id="deskripsi" type="deskripsi"
                            class="{{ $errors->has('deskripsi') ? 'is-invalid' : '' }}"
                            wire:model.defer="state.deskripsi" />
                        <x-jet-input-error for="deskripsi" />
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <x-slot name="actions">
        <div class="d-flex align-items-baseline">
            <x-jet-button>
                <div wire:loading class="spinner-border spinner-border-sm" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>

                {{ __('Save') }}
            </x-jet-button>
        </div>
    </x-slot>
</x-jet-form-section>
