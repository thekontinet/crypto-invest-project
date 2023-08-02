<x-guest-layout>
        <x-auth-card title="Sign In" description="Access your account using your email and passcode.">
            <form method="post" action="{{route('login')}}">
                @csrf
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
                        @if (Route::has('password.request'))
                            <a class="link link-primary link-sm" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
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
                    <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                </div>
            </form>
            <div class="form-note-s2 text-center pt-4">
                New on our platform ? <a href="{{route('register')}}">Create an account</a>
            </div>
        </x-auth-card>
</x-guest-layout>
