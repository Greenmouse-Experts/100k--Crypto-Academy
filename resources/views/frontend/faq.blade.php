@extends('layouts.frontend')

@section('page-content')
<!-- Assets -->
<section class="assets">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="question">
                    <p>
                        FAQs
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
                                    Q: What does 100kCrypto Investing do?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                A: Hundred kay crypto Investing Community is made up of a team of highly connected crypto experts whose mission is to filter out the noise in the space and deliver only the best crypto recommendations to the members on a regular basis.
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
                                A: Signup and subscribe to our platform. After your subscription, you will have access to our paid members forum to start your crypto investment journey.  
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Q: What if I have questions while learning or investing?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">A: All questions will be answered in the support section of our forum. Our experts will be waiting to answer all your questions.
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                 Q: How do I pay?
                                </button>
                            </h2>
                            <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">A: We only accept USDT (Trc20 Chain). You could buy USDT on Binance or from friends. Here is a video guide on how to buy crypto on Binance <a href="https://youtu.be/hAPWvXQg9PM">https://youtu.be/hAPWvXQg9PM</a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                Q: Do you provide financial advice?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">A: A: No. We only train and make project recommendations. You are required to do your own due diligence as well as apply every risk management practices we taught you.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                Q:  Can I get paid by referring members?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">A. Yes. We have an awesome affiliate plan that gives you 50% per referral. We also have in-house marketers that will promote your affiliate links with paid and organic ads. Do signup and grab your affiliate link and start earning
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                    Q: What happens if someone visits 100kcrypto.com with my link but did not sign up?
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">A: Our cookie lifespan is 90 days. Therefore the person has till 90 days to signup on our website for the referral to count for you. One smart strategy you could apply is to ensure they sign up even if they are not subscribing immediately. That way you will own the referral forever.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>
<!-- Accordion Ends -->
<!-- Footer Page-->
@endsection