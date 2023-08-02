<div class="modal fade" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Update Profile</h5>
                    <div class="tab-pane active" id="personal">
                        <form action="{{route('profile.update')}}" method="post" class="row gy-4">
                            @csrf
                            @method('PATCH')
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="full-name">Full Name</label>
                                    <input type="text" class="form-control form-control-lg" id="full-name" name="name" value="{{old('name', $user->name)}}" placeholder="Enter Full name">
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Phone Number</label>
                                    <input type="text" class="form-control form-control-lg" id="phone-no" name="phone" value="{{old('phone', $user->phone)}}" placeholder="Phone Number">
                                    <span class="text-danger">{{$errors->first('phone')}}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="country">Country</label>
                                    <input type="text" class="form-control form-control-lg" id="country" name="country" value="{{old('country', $user->country)}}" placeholder="Country">
                                    <span class="text-danger">{{$errors->first('country')}}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="state">State</label>
                                    <input type="text" class="form-control form-control-lg" id="state" name="state" value="{{old('state', $user->state)}}" placeholder="State/Province">
                                    <span class="text-danger">{{$errors->first('state')}}</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button class="btn btn-lg btn-primary">Update Profile</button>
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
