<div class="modal fade" role="dialog" id="change-password">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg">
                <h5 class="title">Change Password</h5>
                <div class="tab-pane active" id="personal">
                    <form action="{{route('password.update')}}" method="post" class="row gy-4">
                        @csrf
                        @method('PUT')
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="current_password">Password</label>
                                <div class="form-control-wrap">
                                    <button href="#" class="btn form-icon form-icon-right passcode-switch lg" data-target="current_password">
                                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                    </button>
                                    <input type="password"
                                           name="current_password"
                                           class="form-control form-control-lg @error('password') is-invalid @enderror"
                                           id="current_password"
                                           placeholder="Current password">
                                    <span class="text-danger">{{$errors->updatePassword->first('current_password')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="new-password">New Password</label>
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
                                    <span class="text-danger">{{$errors->updatePassword->first('password')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li>
                                    <button class="btn btn-lg btn-primary">Update Password</button>
                                </li>
                                <li>
                                    <button data-bs-dismiss="modal" class="link link-light">Cancel</buttonhref=>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div><!-- .tab-pane -->
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- .modal -->
