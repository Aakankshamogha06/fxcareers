
<style>
    .mission-card {
        position: relative;
        z-index: 0;
        overflow: hidden;
        transition: all .3s ease-in;
        height: 100%;
        padding: 20px 0px;
        border: none;
        box-shadow: 0px 0px 10px rgb(0 0 0/15%);
    }

    .mission-card::after {
        position: absolute;
        z-index: -1;
        content: '';
        bottom: 0;
        right: 0;
        background-color: #0f0f0f;
        width: 100%;
        height: 100%;
        transform: translateY(100%);
        transition: all .3s ease-in;
    }

    .mission-card:hover::after {
        transform: translateY(0);
    }

    .mission-card:hover .card-title {
        color: #f8c311;
    }

    .mission-card:hover .card-text {
        color: #fff;
    }

    .custom-card-img {
        aspect-ratio: 1/1;
        height: 80px;
        object-fit: contain;
    }
</style>

<!-- Header Start -->
<section>
    <div class="breadcrumb-sec about-bg main-section position-relative overlay-bottom">
        <div class="container position-relative text-center text-lg-left">
            <div class="breadscrumb-title">
                <h1 class="text-white display-3  mb-4 wow fadeInUp">FXCareers About</h1>
                <div class="d-inline-flex text-white mb-4 wow fadeInUp" data-wow-delay="100ms">
                    <p class="m-0 text-uppercase">
                        <a class="text-secondary" href="./">Home</a>
                    </p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Company Profile</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Header End -->

<!-- About Start -->
<section class="space-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="wow fadeInLeft" data-wow-duration="1000ms">
                    <img class="img-fluid" src="<?=base_url()?>public/assets/img/about.png">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-title position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2 wow fadeInRight">About Us</h6>
                    <h2 class="display-5 wow fadeInRight" data-wow-delay="150ms">About Our Company</h2>
                </div>
                <p class="wow fadeInRight" data-wow-delay="300ms">Welcome to FXCareers, India's foremost institute dedicated to shaping the future of currency trading. At FXCareers, we believe that education is not just about acquiring knowledge; it's about transformation, empowerment, and pioneering a path to success. Our story is one of commitment, innovation, and a relentless pursuit of excellence in the dynamic world of Currency Markets.</p>
                <p class="wow fadeInRight" data-wow-delay="400ms">At the core of our mission is the commitment to empower individuals with the knowledge and skills needed to thrive in the currency market. We aim to be the catalyst that transforms passionate learners into skilled traders, setting new standards for excellence in Financial Education.</p>
            </div>
        </div>
        <div class="row mt-5 g-4 justify-content-center">
            <div class=" col-lg-6 col-md-6">
                <div class="mission-card card text-center border-primary wow slideInLeft">
                    <img src="<?=base_url()?>public/assets/img/mission.png" class="img-fluid mx-auto mt-3" alt="OUR MISSION" width="100" />
                    <div class="card-body">
                        <h5 class="card-title">OUR MISSION</h5>
                        <p class="card-text">To promulgate the potential of financial markets by training ardent traders with effective knowledge and trading skills.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="mission-card card text-center border-primary wow slideInRight">
                    <img src="<?=base_url()?>public/assets/img/vission.png" class="img-fluid mx-auto mt-3" alt="OUR VISION" width="100" />
                    <div class="card-body">
                        <h5 class="card-title">OUR VISION</h5>
                        <p class="card-text">To become a leading global trading academy, delivering world-class education and mentorship programs to traders of all levels.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- About End -->
<!-- How we start Start -->
<section class="space-sec bg-secondary overflow-hidden">
    <div class="container">
        <div class="row  gy-4">
            <div class="col-lg-12 text-center text-white">
                <h2 class="text-secondary display-5 wow slideInLeft" data-wow-delay="100ms">HOW WE STARTED</h2>
                <p class="mb-4 wow slideInLeft" data-wow-delay="200ms">We recognised the immense potential of the Indian Currency Markets and dedicated ourselves to promoting the financial literacy needed to trade in these markets confidently.</p>

            </div>
            <div class="col-lg-12">
                <div class="row gy-4">
                    <div class="col-md-4">
                        <div class="how-we-card card overflow-hidden text-center bg-transparent text-white h-100 border-primary wow slideInRight" data-wow-delay="200ms">
                            <img src="<?=base_url()?>public/assets/img/Learn.png" class="img-fluid custom-card-img mx-auto mt-3" alt="Learn" />
                            <div class="card-body">
                                <h5 class="card-title text-secondary">Learn</h5>
                                <p class="card-text">Get the knowledge and skills needed for successful trading.</p>
                            </div>
                            <div class="shine"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class=" how-we-card  card overflow-hidden text-center bg-transparent text-white h-100 border-primary wow slideInRight" data-wow-delay="400ms">
                            <img src="<?=base_url()?>public/assets/img/Grow.png" class="img-fluid custom-card-img mx-auto mt-3" alt="Grow" />
                            <div class="card-body">
                                <h5 class="card-title text-secondary">Grow</h5>
                                <p class="card-text">Develop your trading abilities and make informed decisions.</p>
                            </div>
                            <div class="shine"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class=" how-we-card card overflow-hidden text-center bg-transparent text-white h-100 border-primary wow slideInRight" data-wow-delay="600ms">
                            <img src="<?=base_url()?>public/assets/img/Sucess.png" class="img-fluid custom-card-img mx-auto mt-3" alt="Succeed" />
                            <div class="card-body">
                                <h5 class="card-title text-secondary">Succeed</h5>
                                <p class="card-text">Achieve your financial goals in the world of financial markets.</p>
                            </div>
                            <div class="shine"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How we start End -->
<!-- <section class=" space-sec bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
            <h4 class="text-secondary wow slideInLeft" data-wow-delay="300ms">HOW WE HELP YOU</h4>
                <p class="wow slideInLeft mb-4" data-wow-delay="400ms">At FXCareers, our focus is not just on who we are but what we can do for you. We understand that our success is measured by your success. We help you:</p>
                <a href="#" class="btn btn-primary wow slideInLeft" data-wow-delay="500ms">Explore Programs</a>
            </div>
        </div>
    </div>
</section> -->
<section class="learning-sec">
    <div class="container-fluid">
        <div class="row align-items-center  mb-md-0">
            <div class="col-md-6 wow fadeInLeft h-100 p-0">
                <img src="<?=base_url()?>public/assets/img/learning.jpg" alt="Learning at FXCareers" class="img-fluid" />
            </div>
            <div class="col-lg-6 col-md-6 h-100 ">
                <div class="learning-caption">
                    <h3 class="display-6 wow fadeInRight">Learning at FXCareers</h3>
                    <p class="mb-0 wow fadeInRight">Learning at FXCareers gives you an exclusive and satisfying experience. We know that the financial trading world might seem difficult and overwhelming, but we teach and give training in a way that makes learning more engaging, practical, and satisfying.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center col-reverse learning-bg">
            <div class="col-lg-6 col-md-6 h-100  order-xs">
                <div class="learning-caption">
                    <h3 class="display-6 wow fadeInLeft">Learning at FXCareers</h3>
                    <p class="mb-0 wow fadeInLeft text-dark">Learning at FXCareers gives you an exclusive and satisfying experience. We know that the financial trading world might seem difficult and overwhelming, but we teach and give training in a way that makes learning more engaging, practical, and satisfying.</p>
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight h-100 p-0">
                <img src="<?=base_url()?>public/assets/img/learning.jpg" alt="Learning at FXCareers" class="img-fluid" />
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Start -->
<section class="bg-image space-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="section-title position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-1">WHAT OUR STUDENTS LOVE ABOUT FXCAREERS</h6>
                    <h2 class="display-6">Students Feedback</h2>
                </div>
                <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, quidem magnam officia sunt unde, quibusdam totam cum quae, maxime magni a ut repudiandae veniam! Fugit accusantium id fuga aliquid eius.</p>
            </div>
            <div class="col-lg-7">
                <div class="owl-carousel testimonial-carousel">
                    <div class="bg-white p-5">
                        <i class="fa fa-3x fa-quote-left text-primary opacity-25 mb-4"></i>
                        <p>FXCareers Best Technical Analysis Program not only taught me about technical analysis but also emphasized the importance of discipline and Risk Management. It's a comprehensive programme for anyone serious about trading. Thank you to FXCAREERS!</p>
                        <div class="d-flex gap-1">
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                        </div>
                        <div class="d-flex flex-shrink-0 align-items-center mt-4">
                            <div class="mr-4">
                                <img class="img-fluid rounded-circle" src="<?=base_url()?>public/assets/img/nittiin.png" alt="" />
                            </div>
                            <div>
                                <h5>Nitin Shokeen</h5>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-5">
                        <i class="fa fa-3x fa-quote-left text-primary opacity-25 mb-4"></i>
                        <p>I've been trading for years, but I wanted to refine my strategies. This course exceeded my expectations. The advanced techniques and real world examples were incredibly valuable.</p>
                        <div class="d-flex gap-1">
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                        </div>
                        <div class="d-flex flex-shrink-0 align-items-center mt-4">
                            <div class="mr-4">
                                <img class="img-fluid rounded-circle" src="<?=base_url()?>public/assets/img/rejeshh.png" alt="" />
                            </div>
                            <div>
                                <h5>Rajesh</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial End -->

