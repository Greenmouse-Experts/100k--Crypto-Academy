@extends('layouts.frontend')

@section('page-content')
<!-- Learning -->
<section class="learn">
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="What do you want to learn" aria-label="Search">
                    <button class="btn control" type="submit">Search</button>
                </form>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-12">
                <h1>
                    Explore Topics and Skills
                </h1>
            </div>
            <div class="col-lg-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="topic">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="explore">
                                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1667822757/EProd%20Images/Group_236_uwik8t.png" draggable="false" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="exploret">
                                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1667822757/EProd%20Images/Group_230_ejrgkc.png" draggable="false" alt="">
                                        </div>
                                        <div class="explore">
                                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1667822757/EProd%20Images/Group_227_oukvzu.png" draggable="false" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="exploret">
                                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1667822757/EProd%20Images/Group_229_uumy30.png" draggable="false" alt="">
                                        </div>
                                        <div class="explore">
                                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1667822756/EProd%20Images/Group_228_mtl2yx.png" draggable="false" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="exploret">
                                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1667822757/EProd%20Images/Group_230_ejrgkc.png" draggable="false" alt="">
                                        </div>
                                        <div class="explore">
                                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1667822757/EProd%20Images/Group_227_oukvzu.png" draggable="false" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="exploret">
                                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1667822757/EProd%20Images/Group_229_uumy30.png" draggable="false" alt="">
                                        </div>
                                        <div class="explore">
                                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1667822756/EProd%20Images/Group_228_mtl2yx.png" draggable="false" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="explore">
                                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1667822757/EProd%20Images/Group_236_uwik8t.png" draggable="false" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="exploret">
                                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1667822757/EProd%20Images/Group_230_ejrgkc.png" draggable="false" alt="">
                                        </div>
                                        <div class="explore">
                                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1667822757/EProd%20Images/Group_227_oukvzu.png" draggable="false" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="explore">
                                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1667822757/EProd%20Images/Group_236_uwik8t.png" draggable="false" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="exploret">
                                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1667822757/EProd%20Images/Group_229_uumy30.png" draggable="false" alt="">
                                        </div>
                                        <div class="explore">
                                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1667822756/EProd%20Images/Group_228_mtl2yx.png" draggable="false" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Learning Ends -->

<!-- Features Page-->
<section class="feature">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- <div class="object">
                            <div class="row">
                                <div class="col-md-4">
                                    <p>
                                        Find a Course
                                    </p>
                                    <h1>
                                        Featured Courses
                                    </h1>
                                </div>
                                <div class="col-md-6"></div>
                            </div>
                        </div> -->
            </div>
            <div class="col-lg-12">
                <h1>
                    Most Popular Courses
                </h1>
            </div>
            <div class="col-lg-12">
                <div class="learner">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="avalable">
                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666689171/EProd%20Images/Rectangle_19346_t7jnm7.png" draggable="false" alt="">
                                <div class="moving">
                                    Available
                                </div>
                                <div class="calling">
                                    <h1>
                                        Web Design
                                    </h1>
                                    <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666690492/EProd%20Images/Group_145_cyzlin.png" draggable="false">
                                    <hr>
                                    <div class="images">
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666690874/EProd%20Images/Rectangle_19362_fuvw3f.png" draggable="false" alt="">
                                        <span>13,000</span>
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666690874/EProd%20Images/Rectangle_19363_ax8oer.png" draggable="false" alt="">
                                        <span>12h 10m</span>
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666690874/EProd%20Images/Rectangle_19364_eer8v1.png" draggable="false" alt="">
                                        <span>18,000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="avalable">
                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666689170/EProd%20Images/Recta_kk9anw.png" draggable="false" alt="">
                                <div class="moving">
                                    Available
                                </div>
                                <div class="calling">
                                    <h1>
                                        Software Design
                                    </h1>
                                    <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666690492/EProd%20Images/Group_145_cyzlin.png" draggable="false">
                                    <hr>
                                    <div class="images">
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666690874/EProd%20Images/Rectangle_19362_fuvw3f.png" draggable="false" alt="">
                                        <span>13,000</span>
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666690874/EProd%20Images/Rectangle_19363_ax8oer.png" draggable="false" alt="">
                                        <span>12h 10m</span>
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666690874/EProd%20Images/Rectangle_19364_eer8v1.png" draggable="false" alt="">
                                        <span>18,000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="avalable">
                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666689170/EProd%20Images/Rectangl_ppcvdp.png" draggable="false" alt="">
                                <div class="moving">
                                    Available
                                </div>
                                <div class="calling">
                                    <h1>
                                        Frontend Design
                                    </h1>
                                    <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666690492/EProd%20Images/Group_145_cyzlin.png" draggable="false">
                                    <hr>
                                    <div class="images">
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666690874/EProd%20Images/Rectangle_19362_fuvw3f.png" draggable="false" alt="">
                                        <span>13,000</span>
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666690874/EProd%20Images/Rectangle_19363_ax8oer.png" draggable="false" alt="">
                                        <span>12h 10m</span>
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666690874/EProd%20Images/Rectangle_19364_eer8v1.png" draggable="false" alt="">
                                        <span>18,000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="avalable">
                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666689175/EProd%20Images/Rec_rtc5tk.png" draggable="false" alt="">
                                <div class="moving">
                                    Available
                                </div>
                                <div class="calling">
                                    <h1>
                                        Backend Design
                                    </h1>
                                    <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666690492/EProd%20Images/Group_145_cyzlin.png" draggable="false">
                                    <hr>
                                    <div class="images">
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666690874/EProd%20Images/Rectangle_19362_fuvw3f.png" draggable="false" alt="">
                                        <span>13,000</span>
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666690874/EProd%20Images/Rectangle_19363_ax8oer.png" draggable="false" alt="">
                                        <span>12h 10m</span>
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666690874/EProd%20Images/Rectangle_19364_eer8v1.png" draggable="false" alt="">
                                        <span>18,000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="avalable">
                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666689170/EProd%20Images/Rect_hlkwph.png" draggable="false" alt="">
                                <div class="moving">
                                    Available
                                </div>
                                <div class="calling">
                                    <h1>
                                        Data Science
                                    </h1>
                                    <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666690492/EProd%20Images/Group_145_cyzlin.png" draggable="false">
                                    <hr>
                                    <div class="images">
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666690874/EProd%20Images/Rectangle_19362_fuvw3f.png" draggable="false" alt="">
                                        <span>13,000</span>
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666690874/EProd%20Images/Rectangle_19363_ax8oer.png" draggable="false" alt="">
                                        <span>12h 10m</span>
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666690874/EProd%20Images/Rectangle_19364_eer8v1.png" draggable="false" alt="">
                                        <span>18,000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="avalable">
                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666689173/EProd%20Images/Rectang_m4pi35.png" draggable="false" alt="">
                                <div class="moving">
                                    Available
                                </div>
                                <div class="calling">
                                    <h1>
                                        UI / UX Design
                                    </h1>
                                    <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666690492/EProd%20Images/Group_145_cyzlin.png" draggable="false">
                                    <hr>
                                    <div class="images">
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666690874/EProd%20Images/Rectangle_19362_fuvw3f.png" draggable="false" alt="">
                                        <span>13,000</span>
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666690874/EProd%20Images/Rectangle_19363_ax8oer.png" draggable="false" alt="">
                                        <span>12h 10m</span>
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1666690874/EProd%20Images/Rectangle_19364_eer8v1.png" draggable="false" alt="">
                                        <span>18,000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features-Us Page-->
@endsection