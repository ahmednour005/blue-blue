<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts-admin.style')

    </head>

    <body class="loading auth-fluid-pages pb-0">

        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="card-body">

                        <!-- Logo -->
                        <div class="auth-brand text-center text-lg-start">
                            <div class="auth-logo">
                                <a href="{{route('home')}}" class="logo logo-dark text-center">
                                    <span class="logo-lg">
                                        <img src="{{asset('dashboard/assets/images/logo-dark.png')}}" alt="" height="22">
                                    </span>
                                </a>
            
                                <a href="{{route('home')}}" class="logo logo-light text-center">
                                    <span class="logo-lg">
                                        <img src="{{asset('dashboard/assets/images/logo-light.png')}}" alt="" height="22">
                                    </span>
                                </a>
                            </div>
                        </div>

                        <!-- title-->
                        <h4 class="mt-0"> تسجيل دخول</h4>
                        <p class="text-muted mb-4">أدخل عنوان بريدك الإلكتروني وكلمة المرور للوصول إلى الحساب.</p>

                        <!-- form -->
                        <form method="POST" action="{{ route('login') }}" >
                            @csrf
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">البريد الالكتروني</label>
                                {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email" autofocus> --}}

                               
                                <input class="form-control  @error('email') is-invalid @enderror" type="email" id="emailaddress" name="email" required="" value="{{ old('email') }}" placeholder="Enter your email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="mb-3">
                               
                                <label for="password" class="form-label">كلمة المرور</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control  @error('password') is-invalid @enderror" name="password" placeholder="Enter your password">
                                    {{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> --}}

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                                {{-- <a href="auth-recoverpw-2.html" class="text-muted float-end"><small>Forgot your password?</small></a> --}}
                            </div>
                            
                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="remember" id="checkbox-signin" {{ old('remember') ? 'checked' : '' }}>
                                    {{-- <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> --}}
                                    <label class="form-check-label" for="checkbox-signin">تذكرني</label>
                                </div>
                            </div>
                            <div class="text-center d-grid">
                                <button class="btn btn-primary" type="submit">دخول  </button>
                            </div>
                            <!-- social-->
                            
                        </form>
                        <!-- end form-->

                        <!-- Footer-->
                       

                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <!-- end auth-fluid-form-box-->

            <!-- Auth fluid right content -->
            {{-- <div class="auth-fluid-right text-center">
                <div class="auth-user-testimonial">
                    <h2 class="mb-3 text-white">av;m</h2>
                    <p class="lead"><i class="mdi mdi-format-quote-open"></i> I've been using your theme from the previous developer for our web app, once I knew new version is out, I immediately bought with no hesitation. Great themes, good documentation with lots of customization available and sample app that really fit our need. <i class="mdi mdi-format-quote-close"></i>
                    </p>
                    <h5 class="text-white">
                        - Fadlisaad (Ubold Admin User)
                    </h5>
                </div> <!-- end auth-user-testimonial-->
            </div> --}}
            <!-- end Auth fluid right content -->
        </div>
        <!-- end auth-fluid-->

        @include('layouts-admin.script')
        
    </body>
</html>

















                    
                
