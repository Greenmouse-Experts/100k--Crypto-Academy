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
    <title>{{config('app.name')}} - Verify Account</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                        <div class="images">
                            <a href="{{route('index')}}">
                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669718215/EProd%20Images/20221125_224354_1_bku9wb.jpg" alt="">
                            </a>
                       </div>
                        <div class="sign">
                            <form class="sign-div" method="POST" action="{{ route('user.update.password')}}">
                                @csrf
                                <h5>Reset Password</h5>
                                <p> To complete the reset password process, Please enter the code sent to the email address
                                        <code>{{$email}}</code>
                                </p>
                                <div class="row">
                                    <!--Code-->
                                    <div class="col-lg-12">
                                        <label>Code</label>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <input type="text" placeholder="Enter Code" name="code" class="input" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Password-->
                                    <div class="col-lg-12">
                                        <label>Create New Password</label>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <input type="password" placeholder="Enter Your New Password" name="password" class="input" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Password-->
                                    <div class="col-lg-12">
                                        <label>Confirm New Password</label>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <input type="password" placeholder="Enter Your Confirm New Password" name="password_confirmation" class="input" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button class="form-btn" type="submit">Verify</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </section>
</body>