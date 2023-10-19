@include("layouts.head")
    <div id="main-wrapper" class="oxyy-login-register bg-dark">
        <div class="container">
            <div class="row g-0 min-vh-100 py-4 py-md-5">
                <!-- Welcome Text
                ========================= -->
                <div class="col-lg-7 shadow-lg">
                    <div class="hero-wrap d-flex align-items-center rounded-3 rounded-end-0 h-100">
                        <div class="hero-mask opacity-9 bg-primary"></div>
                        <div class="hero-bg hero-bg-scroll" style="background-image:url('https://www.easyhaul.com/blog/wp-content/uploads/2021/07/Blog-EasyHaul-Modes-of-Transport-Title-1-1000x563.png');"></div>
                        <div class="hero-content mx-auto w-100 h-100 d-flex flex-column">
                            <div class="row g-0">
                                <div class="col-11 col-lg-10 mx-auto">
                                    <div class="logo mt-5 mb-5 mb-lg-0"> <a href="https://harnishdesign.net/demo/html/oxyy/index.html" title="Oxyy"><img src="assets/img/logo/logo.png" alt="Oxyy"></a> </div>
                                </div>
                            </div>
                            <div class="row g-0 my-auto">
                                <div class="col-11 col-lg-10 mx-auto">
                                    <h1 class="text-11 text-white mb-3">Welcome back!</h1>
                                    <p class="text-5 text-white lh-base mb-4">Get access to your Orders, Wishlist and Recommendations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Welcome Text End -->

                <!-- Register Form
                ========================= -->
                <div class="col-lg-5 shadow-lg d-flex align-items-center rounded-3 rounded-start-0 bg-dark">
                    <div class="container my-auto py-5">
                        <div class="row">
                            <div class="col-11 col-lg-10 mx-auto">
                                <h3 class="text-white text-center mb-4">Sign Up</h3>

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label text-light" for="emailAddress">Email Address</label>
                                        <input type="email" class="form-control" id="emailAddress" name="email" value="{{ old('email') }}" required placeholder="Enter Email">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label text-light" for="loginPassword">Password</label>
                                        <input type="password" class="form-control" id="loginPassword" name="password" required placeholder="Enter Password">
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col">
                                            <div class="form-check text-2">
                                                <input id="remember-me" name="remember" class="form-check-input" type="checkbox">
                                                <label class="form-check-label text-light" for="remember-me">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="col-sm text-2 text-end">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}">Forgot Password ?</a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="d-grid my-4">
                                        <button class="btn btn-primary" type="submit">Sign In</button>
                                    </div>
                                </form>

                                <div class="d-flex align-items-center my-3">
                                    <hr class="flex-grow-1 bg-dark-4">
                                    <span class="mx-2 text-2 text-muted">Or with Social Profile</span>
                                    <hr class="flex-grow-1 bg-dark-4">
                                </div>
                                <div class="d-flex flex-column align-items-center mb-4">
                                    <ul class="social-icons social-icons-circle">
                                        <li class="social-icons-facebook"><a href="#" data-bs-toggle="tooltip" data-bs-original-title="Log In with Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-icons-twitter"><a href="#" data-bs-toggle="tooltip" data-bs-original-title="Log In with Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-icons-google"><a href="#" data-bs-toggle="tooltip" data-bs-original-title="Log In with Google"><i class="fab fa-google"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="#" data-bs-toggle="tooltip" data-bs-original-title="Log In with Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <p class="text-2 text-center text-light mb-0">Don't have an account? <a href="{{url('register')}}">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Register Form End -->
            </div>
        </div>
    </div>
