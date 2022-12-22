<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible">
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
    <title>{{config('app.name')}} - Forget Password</title>

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
    <!-- Alerts End -->
    <!-- Sign-up -->
    <section class="log">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="imagess">
                            <a href="{{route('index')}}">
                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669630298/EProd%20Images/WhatsApp_Image_2022-11-26_at_10.13.06_AM_ycwms2.jpg" alt="">
                            </a>
                        </div>
                        <div class="sign">
                            <form class="sign-div" method="POST" action="{{ route('user.forget.password')}}">
                                @csrf
                                <h5>Reset your password</h5>
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
                                    <p class="text-end">

                                    </p>
                                    <div class="col-md-12 mb-3">
                                        <button class="form-btn" type="submit">Continue</button>
                                    </div>
                                    <!--Message-->
                                    <p style="text-align: center;margin-top: 20px;">Return to <a href="{{route('signIn')}}">Sign In</a> </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6"></div>
            </div>
        </div>
    </section>
</body>