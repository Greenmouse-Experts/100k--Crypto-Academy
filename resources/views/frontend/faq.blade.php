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
                                    A: 100kCrypto Investing offers guided crypto trainings from beginning to advance as well as
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
                                    Q: What if I have questions while learning or investing?
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
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                Q: Can I get paid by referring others?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">A: Yes. We have an awesome affiliate plan that gives you 40% per referral. We also have in-house marketers you could contract to help you promote your affiliate links with paid and organic ads. Do signup for free and grab your affiliate link and start earning 
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                Q: What happens if someone visits 100kcrypto.com with my affiliate link but did not sign up? 
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">A.Our cookie lifespan is 90 days. Therefore the person has till 90 days to signup on our website for the referral to count for you. One smart strategy you could apply is to ensure they sign up even if they are not subscribing immediately. That way you will own the referral forever. 
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