<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" >
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <!-- Favocon -->
    <link rel="shortcut icon" href="https://res.cloudinary.com/greenmouse-tech/image/upload/v1671715599/EProd%20Images/20221125_224354_1_bku9wb_1_voaw4e.jpg" type="image/x-icon">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Style -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.map')}}">
    <link rel="stylesheet" href="{{URL::asset('auth/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- AOS Amination -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>{{config('app.name')}} - Signup</title>

    <script>
        window.setTimeout(function() {
            $(".alert-timeout").fadeTo(500, 0).slideUp(1000, function(){
                $(this).remove();
            });
        }, 8000);
    </script>
</head>

<body id="lent">
    <!-- Alerts  Start-->
    <div style="z-index: 100000; width: 100%; position: absolute;">
        @include('layouts.alert')
    </div>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top" id="header">
            <div class="container">
                <a class="navbar-brand" href="{{route('index')}}">
                    <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669718215/EProd%20Images/20221125_224354_1_bku9wb.jpg" alt="EPROD">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <i class="bi bi-list"></i>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-offcanvas-close" data-bs-dismiss="offcanvas" aria-label="Close">
                            <i class="bi bi-x-square"></i>
                        </button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav me-auto mb-2">
                            <li class="nav-item">
                                <a href="{{route('index')}}" class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" class="routers">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('about')}}" class="nav-link {{ (request()->is('about')) ? 'active' : '' }}" class="routers">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('affiliate')}}" class="nav-link {{ (request()->is('affiliate')) ? 'active' : '' }}" class="routers">
                                    Affiliate
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('faq')}}" class="nav-link {{ (request()->is('faq')) ? 'active' : '' }}" class="routers">
                                    FAQs
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('contact')}}" class="nav-link {{ (request()->is('contact')) ? 'active' : '' }}" class="routers">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                        <div class="nav-auth">
                            <a href="{{route('signIn')}}" class="btn-login">Sign In</a>
                            <a href="{{route('signUp')}}" class="btn-signup">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Alerts End -->
    <!-- Sign-up -->
    <section class="sign-in">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="row">
                        <!-- <div class="images">
                            <a href="{{route('index')}}">
                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669718215/EProd%20Images/20221125_224354_1_bku9wb.jpg" alt="">
                            </a>
                        </div> -->
                        <div class="sign">
                            <form class="sign-div" action="{{ route('register')}}" method="post">
                                @csrf
                                <h4>
                                    Sign up to create an account
                                </h4>
                                <div class="row">
                                    <!--Full Name-->
                                    <div class="col-lg-12">
                                        <label>Name</label>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <input type="text" placeholder="Enter Your First Name" name="name" class="input" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Email-->
                                    <div class="col-lg-12">
                                        <label>Email</label>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <input type="email" placeholder="Enter Your Email Address" name="email" class="input" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Password-->
                                    <div class="col-lg-12">
                                        <label>Create Password</label>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <input type="password" placeholder="Enter Your Password" name="password" class="input" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Password-->
                                    <div class="col-lg-12">
                                        <label>Confirm Password</label>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <input type="password" placeholder="Enter Your Confirm Password" name="password_confirmation" class="input" required>
                                            </div>
                                        </div>
                                    </div>
                                    @if(Session::has('ref_by'))
                                        <div class="col-lg-12">
                                            <label>Referral ID <span class="text-danger">*</span></label>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <input type="text" placeholder="optional referral id" value="{{session('ref_by')}}" name="ref_by" class="input" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="col-lg-12">
                                            <label>Referral ID <span class="text-danger">*</span></label>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <input type="text" placeholder="optional referral id"  name="ref_by" class="input" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <p>
                                        By clicking Sign Up, you agree to the terms and conditions
                                    </p>
                                    <div class="col-md-12 mb-3">
                                        <button class="form-btn" type="submit"> Sign Up </button>
                                    </div>
                                    <!--Message-->
                                    <p style="text-align: center;margin-top: 20px;">Already have an account ? <a href="{{route('signIn')}}">Login</a> </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </section>
    <script src="{{URL::asset('auth/js/bootstrap.min.js')}}"></script>
</body>
