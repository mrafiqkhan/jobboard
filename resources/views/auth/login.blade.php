<x-app>
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Login</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="sample-text-area">
        <div class="container box_1170">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mt-10">
                    <input type="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''"
                           onblur="this.placeholder = 'Email Address'" required="" class="single-input">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mt-10">
                    <input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''"
                           onblur="this.placeholder = 'Password'" required="" class="single-input">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mt-30 col-2">
                    <div class="switch-wrap d-flex justify-content-between">
                        <p>{{ __('Remember Me') }}</p>
                        <div class="primary-checkbox ">
                            <input type="checkbox" id="default-checkbox" name="remember"
                                   id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="default-checkbox"></label>
                        </div>
                    </div>
                </div>

                <div class="mt-10">
                    <button type="submit" class="genric-btn info radius">Login</button>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>

            </form>
        </div>
    </section>
</x-app>
