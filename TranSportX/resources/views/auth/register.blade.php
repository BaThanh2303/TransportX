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
                                <div class="logo mt-5 mb-5 mb-lg-0"> <a href="https://harnishdesign.net/demo/html/oxyy/index.html" title="Oxyy"><img src="https://harnishdesign.net/demo/html/oxyy/images/logo-light.png" alt="Oxyy"></a> </div>
                            </div>
                        </div>
                        <div class="row g-0 my-auto">
                            <div class="col-11 col-lg-10 mx-auto">
                                <h1 class="text-11 text-white mb-3">You're new here!</h1>
                                <p class="text-5 text-white lh-base mb-4">Sign up with your email and personal details to get started!</p>
                                <a class="btn btn-dark rounded-pill shadow-none video-btn py-1 px-3 d-inline-flex align-items-center mb-5" href="#" data-src="https://www.youtube.com/embed/9-IEcZOa4rg" data-bs-toggle="modal" data-bs-target="#videoModal"><span class="me-2 text-7"><i class="fas fa-play-circle"></i></span>Watch demo</a> </div>
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

                            <form id="registerForm" class="form-dark" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label text-light" for="name">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required placeholder="Enter Your Name">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-light" for="email">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required placeholder="Enter Your Email">
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-light" for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required placeholder="Enter Password">
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-light" for="password_confirmation">Confirm Password</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="Confirm Password">
                                </div>
                                <div class="d-grid my-4">
                                    <button class="btn btn-primary" type="submit">Sign Up</button>
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
                            <p class="text-2 text-center text-light">Already have an account? <a href="{{url('login')}}">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Register Form End -->
        </div>
    </div>
</div>
