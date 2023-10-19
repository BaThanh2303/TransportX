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
                                <h1 class="text-11 text-white mb-3">We care about your account security.</h1>
                                <p class="text-5 text-white lh-base mb-4">Get access to your Orders, Wishlist and Recommendations.</p>
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
                            <h3 class="text-white text-center mb-4">Reset Password</h3>

                            <!-- Begin Form -->
                            <form method="POST" action="{{ route('password.store') }}" class="form-dark">
                                @csrf

                                <!-- Password Reset Token -->
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <div class="mb-3">
                                    <label class="form-label text-light" for="email">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" :value="old('email', $request->email)" required placeholder="Enter Your Email">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label text-light" for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required placeholder="Enter Password">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label text-light" for="password_confirmation">Confirm Password</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="Confirm Password">
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                                </div>

                                <div class="d-grid my-4">
                                    <button class="btn btn-primary" type="submit">Reset Password</button>
                                </div>
                            </form>



                            <p class="text-2 text-center text-light">Already have an account? <a href="{{url('login')}}">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Register Form End -->
        </div>
    </div>
</div>
