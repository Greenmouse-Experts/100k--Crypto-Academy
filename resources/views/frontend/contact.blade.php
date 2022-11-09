@extends('layouts.frontend')

@section('page-content')
<!--OBJECTIVE-->
<section class="objective">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>
    </div>
</section>
<!--OBJECTIVE Ends-->

<!--Connect-->
<section class="connect">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-white text-center">LET’S GET IN TOUCH</h1>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="support">
                        <p>
                            Consumer satisfaction is our top prirority! Our support
                            service is available 24/7 to assist you with any
                            questions you may have aout our Platform:
                        </p>
                        <p>
                            deposits
                            and withdrawals, trading operations, accounts and
                            settings, etc.
                        </p>
                        <p>
                            You can contact us any way you prefer:
                        </p>
                        <ul>
                            <li>
                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1667815607/EProd%20Images/Group_220_cqajak.png" alt="">
                            </li>
                            <li>
                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1667815607/EProd%20Images/Group_222_cjecpg.png" alt="">
                            </li>
                            <li>
                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1667815607/EProd%20Images/Group_221_lfiz3t.png" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accept">
                        <div class="sign">
                            <form class="sign-div">
                                <div class="row">
                                    <!--Nmase-->
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <input type="text" placeholder="First Name" name="name" class="input" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <input type="text" placeholder="First Name" name="name" class="input" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Phone-->
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-md-12 mb-4">
                                                <input type="tel" placeholder="Phone Number" name="phone" class="input" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Email-->
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-md-12 mb-4">
                                                <input type="email" placeholder="Email" name="phone" class="input" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--message-->
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-md-12 mb-4">
                                                <textarea name="" id="" cols="2" rows="5" placeholder="Enter Your Message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <a href="#">
                                            <button value="">Submit</button>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Connect Ends-->
@endsection