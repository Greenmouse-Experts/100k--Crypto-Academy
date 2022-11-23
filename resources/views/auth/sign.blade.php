<!DOCTYPE html>
<html lang="en">
    <head>
    <meta http-equiv="X-UA-Compatible" content="Welcome To EPROD">
    <meta name="viewport" content="Welcome To EPROD">
    <!-- Favocon -->
    <link rel="shortcut icon" href="{{URL::asset('assets/images/fav.png')}}" type="image/x-icon">
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
    <title>1ook Crypto Academy-Home</title>
</head>

<body id="lent">
    <!-- Sign-up -->
    <section class="log">
        <div class="container-fuild">
            <div class="row">
                <div class="col-lg-6">
                    <div class="pack">
                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1667572967/EProd%20Images/Group_1779_tn38rs.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="images">
                                <a href="{{route('index')}}">
                                    <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1667483700/EProd%20Images/log_fltrgb.png" alt="">
                                </a>
                            </div>
                            <div class="sign">
                                <form class="sign-div">
                                    <h5>
                                        Welcome
                                    </h5>
                                    <p>
                                        Please enter the details below to sign in to your account
                                    </p>
                                    <div class="row">
                                        <!--Email-->
                                        <div class="col-lg-12">
                                            <label>Email</label>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <input type="email" placeholder="Enter your email address" name="email" class="input" required>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Password-->
                                        <div class="col-lg-12">
                                            <label>Password</label>
                                            <div class="row">
                                                <div class="col-md-12 mb-4">
                                                    <input type="password" placeholder="Enter Your Password" name="phone" class="input" required>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-end">
                                            <a href="{{route('forgot')}}">
                                                Forgot Password
                                            </a>
                                        </p>
                                        <div class="col-md-12 mb-3">
                                            <a href="#">
                                                <button value="">Log in </button>
                                            </a>
                                        </div>
                                        <!--Message-->
                                        <p style="text-align: center;margin-top: 20px;">Don’t have an account ? <a href="{{route('signUp')}}">Sign Up</a> </p>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>