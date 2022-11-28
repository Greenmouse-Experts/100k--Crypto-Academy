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
    <title>100k Crypto Academy-Home</title>
</head>

<body id="lent">
    <!-- Sign-up -->
    <section class="sign-in">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="images">
                            <a href="{{route('index')}}">
                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669630298/EProd%20Images/WhatsApp_Image_2022-11-26_at_10.13.06_AM_ycwms2.jpg" alt="">
                            </a>
                        </div>
                        <div class="sign">
                            <form class="sign-div">
                                <h4>
                                    Sign up to create an account
                                </h4>
                                <div class="row">
                                    <!--Full Name-->
                                    <div class="col-lg-12">
                                        <label>First Name</label>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <input type="text" placeholder="Enter your Full Name" name="phone" class="input" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Full Name-->
                                    <div class="col-lg-12">
                                        <label>Last Name</label>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <input type="text" placeholder="Enter your Last Name" name="phone" class="input" required>
                                            </div>
                                        </div>
                                    </div>
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
                                        <label>Create Password</label>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <input type="password" placeholder="Enter Your Password" name="phone" class="input" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Password-->
                                    <div class="col-lg-12">
                                        <label>Confirm Password</label>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <input type="password" placeholder="Enter Your Confirm Password" name="phone" class="input" required>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        By clicking Sign Up, you agree to the terms and conditions
                                    </p>
                                    <div class="cap">
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669284502/EProd%20Images/Group_8852_dqasma.png" draggable="false" alt="">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <a href="#">
                                            <button value=""> Sign Up </button>
                                        </a>
                                    </div>
                                    <!--Message-->
                                    <p style="text-align: center;margin-top: 20px;">Already have an account ? <a href="{{route('sign')}}">Login</a> </p>

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