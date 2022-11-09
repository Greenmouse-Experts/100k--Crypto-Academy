@extends('layouts.frontend')

@section('page-content')
<!-- Assets -->
<section class="assets">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="question">
                    <p>
                        FAQ
                    </p>
                    <h1>
                        Frequently Asked Questions
                    </h1>
                    <p>
                        Have questions ? We’re here to help
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Assets Ends -->

<!-- Accordion -->
<section class="Accordion">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="accord">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Q: What does 100kCrypto Academy do?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    A: 100kCrypto Academy offers guided crypto trainings from beginning to advance as well as
                                    crypto call recommendations for its subscribers
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Q: How do I get started?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    A: Upon your subscription, you will have access to our paid members forum to start your
                                    learning. You will also be added to our Premium signal forum to start investing in projects we
                                    recommend. It is important you go through the guided crypto training lessons to be able to
                                    participate correctly.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Q: What if I have questions while learning?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">A: All questions will be answered in our Telegram Support Group. Do ask your questions there
                                    and you will get immediate help. For questions relating to your account and payments do
                                    contact us at <a href="contact">
                                        support@100kcrypto.com
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                    Q: Do you provide financial advice
                                </button>
                            </h2>
                            <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">A: No. We only train and make project recommendations. You are required to do your own due
                                    diligence as well as apply every risk management practices we taught you.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-12">
                <h1>
                    Add a Review
                </h1>
                <div class="signn">
                    <form class="sign-div">
                        <div class="row">
                            <!--Nmase-->
                            <div class="col-lg-6">
                                <label>Full Name</label>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <input type="text" placeholder="First Name" name="name" class="input" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label>Last Name</label>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <input type="text" placeholder="Last Name" name="name" class="input" required>
                                    </div>
                                </div>
                            </div>
                            <!--message-->
                            <div class="col-lg-12">
                                <label>Review</label>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <textarea name="" id="" cols="2" rows="6" placeholder="Enter Your Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3"></div>
                            <div class="col-md-4 mb-3">
                                <a href="#">
                                    <button value="">Submit Review</button>
                                </a>
                            </div>
                            <div class="col-md-4 mb-3"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Accordion Ends -->
@endsection