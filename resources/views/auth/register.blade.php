<x-guest-layout>
    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
        <div class="brand-logo pb-4 text-center">
            <x-application-logo/>
        </div>
        <div class="card card-bordered">
            <div class="card-inner card-inner-lg">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h4 class="nk-block-title">Sign up</h4>
                        <div class="nk-block-des">
                            <p>Create a new {{config('app.name')}} account</p>
                        </div>
                    </div>
                </div>
                <form method="post" action="{{route('register')}}">
                    @csrf
                    <div class="form-group">
                        <div class="form-label-group">
                            <label class="form-label" for="name">Name</label>
                        </div>
                        <div class="form-control-wrap">
                            <input type="text"
                                   name="name"
                                   class="form-control form-control-lg @error('name') is-invalid @enderror"
                                   id="name"
                                   value="{{old('name')}}"
                                   placeholder="Enter your Name">
                            <span class="invalid-feedback">{{$errors->first('name')}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-label-group">
                            <label class="form-label" for="email">Email</label>
                        </div>
                        <div class="form-control-wrap">
                            <input type="text"
                                   name="email"
                                   class="form-control form-control-lg @error('email') is-invalid @enderror"
                                   id="email"
                                   value="{{old('email')}}"
                                   placeholder="Enter your email address">
                            <span class="invalid-feedback">{{$errors->first('email')}}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <label class="form-label" for="password">Password</label>
                        </div>
                        <div class="form-control-wrap">
                            <button href="#" class="btn form-icon form-icon-right passcode-switch lg" data-target="password">
                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                            </button>
                            <input type="password"
                                   name="password"
                                   class="form-control form-control-lg @error('password') is-invalid @enderror"
                                   id="password"
                                   placeholder="Enter your password">
                            <span class="invalid-feedback">{{$errors->first('password')}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-control-xs custom-checkbox">
                            <input name="agree" type="checkbox" class="custom-control-input @error('agree') is-invalid @enderror" id="checkbox">
                            <label class="custom-control-label" for="checkbox">I agree to {{config('app.name')}} <a href="#">Privacy Policy</a> &amp; <a href="#"> Terms.</a></label>
                        </div>
                        @error('agree')<p class="text-danger">{{$errors->first('agree')}}</p>@enderror
                    </div>

                    <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                    </div>
                </form>
                <div class="form-note-s2 text-center pt-4"> Already have an account ? <a href="{{route('login')}}">Sign in</a> instead
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
