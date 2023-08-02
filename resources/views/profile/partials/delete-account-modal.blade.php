<!-- Modal Content Code -->
<div class="modal fade" tabindex="-1" id="delete-account-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Account Deletion</h5>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete your account?</p>
                <p>
                    Deleting your account will permanently remove all your personal information, including profile data, saved preferences, and any associated wallets.
                    This action cannot be undone, and you will lose access to your account.
                </p>
                <p> If you are certain about this decision, please <strong>enter your password and click DELETE ACCOUNT</strong> below. Otherwise, click <strong>"Cancel"</strong> to retain your account and all associated data.</p>

                <form action="{{route('profile.destroy')}}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="form-group">
                        <label class="form-label" for="new-password">Password</label>
                        <div class="form-control-wrap">
                            <button href="#" class="btn form-icon form-icon-right passcode-switch lg" data-target="new-password">
                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                            </button>
                            <input type="password"
                                   name="password"
                                   class="form-control form-control-lg @error('password') is-invalid @enderror"
                                   id="new-password"
                                   placeholder="New password">
                            <span class="text-danger">{{$errors->userDeletion->first('password')}}</span>
                        </div>
                    </div>
                    <button class="btn btn-danger">DELETE ACCOUNT</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                </form>
             </div>
        </div>
    </div>
