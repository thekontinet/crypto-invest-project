<x-app-layout>
    <div class="card-inner card-inner-lg">
        <div class="nk-block-head nk-block-head-lg">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">Personal Information</h4>
                    <div class="nk-block-des">
                        <p>Basic info that you use on our Platform.</p>
                    </div>
                </div>
                <div class="nk-block-head-content align-self-start d-lg-none">
                    <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                </div>
            </div>
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="nk-data data-list">
                <div class="data-head">
                    <h6 class="overline-title">Basics</h6>
                </div>
                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                    <div class="data-col">
                        <span class="data-label">Full Name</span>
                        <span class="data-value">{{$user->name}}</span>
                    </div>
                    <div class="data-col data-col-end">
                        <span class="data-more"><em class="icon ni ni-forward-ios"></em></span>
                    </div>
                </div><!-- data-item -->
                <div class="data-item">
                    <div class="data-col">
                        <span class="data-label">Email</span>
                        <span class="data-value">{{$user->email}}</span>
                    </div>
                    <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                </div><!-- data-item -->
                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                    <div class="data-col">
                        <span class="data-label">Phone Number</span>
                        <span class="data-value text-soft">{{$user->phone ?? 'Not added yet'}}</span>
                    </div>
                    <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                </div><!-- data-item -->
                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                    <div class="data-col">
                        <span class="data-label">Country</span>
                        <span class="data-value">{{$user->country ?? 'Not added yet'}}</span>
                    </div>
                    <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                </div><!-- data-item -->
                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                    <div class="data-col">
                        <span class="data-label">State / Province</span>
                        <span class="data-value">{{$user->state ?? 'Not added yet'}}</span>
                    </div>
                    <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                </div><!-- data-item -->
            </div><!-- data-list -->
            <div class="nk-data data-list">
                <div class="data-head">
                    <h6 class="overline-title">Preferences</h6>
                </div>
                <div class="data-item">
                    <div class="data-col">
                        <span class="data-label">Change Password</span>
                        <span class="data-value"></span>
                    </div>
                    <div class="data-col data-col-end"><a href="#change-password" class="link link-primary" data-bs-toggle="modal">Change Password</a></div>
                </div><!-- data-item -->
                <div class="data-item">
                    <div class="data-col">
                        <span class="data-label">Delete Account</span>
                        <span class="data-value"></span>
                    </div>
                    <div class="data-col data-col-end"><a href="#delete-account-modal" class="link link-danger" data-bs-toggle="modal">Delete Account</a></div>
                </div><!-- data-item -->
            </div><!-- data-list -->
        </div><!-- .nk-block -->
    </div>

    @include('profile.partials.profile-edit-modal')
    @include('profile.partials.update-password-modal')
    @include('profile.partials.delete-account-modal')


    @push('scripts')
        @if ($errors->count())
        <script>
            (new bootstrap.Modal(document.getElementById('profile-edit'), {show:true, backdrop:true})).show()
        </script>
        @endif
        @if ($errors->updatePassword->count())
        <script>
            (new bootstrap.Modal(document.getElementById('change-password'), {show:true, backdrop:true})).show()
        </script>
        @endif
        @if ($errors->userDeletion->count())
        <script>
            (new bootstrap.Modal(document.getElementById('delete-account-modal'), {show:true, backdrop:true})).show()
        </script>
        @endif
    @endpush
</x-app-layout>
