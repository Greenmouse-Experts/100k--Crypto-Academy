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
                        “ Members satisfaction is our top priority! Our support service is available 24/7 to assist you with any questions you may have on our Platform: 
                        </p>
                        <p>
                        For our subscribed members, use the support section in our signal forum. For non-subscribers and/or other issues, send us an email or use the contact form.”
                        </p>
                        <ul>
                            <li>
                                
                            </li>
                            <li>
                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1667815607/EProd%20Images/Group_221_lfiz3t.png" alt="">
                            </li>
                            <li>
                                
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accept">
                        <div class="sign">
                            <form class="sign-div">
                                <h4>
                                    Contact Form
                                </h4>
                                <div class="row">
                                    
                                    <!--Nmase-->
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <input type="text" placeholder="Name" name="name" class="input" required>
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
                                    <div class="cap">
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669284502/EProd%20Images/Group_8852_dqasma.png" draggable="false" alt="">
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