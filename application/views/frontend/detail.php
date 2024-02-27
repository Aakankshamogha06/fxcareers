<style>
    .courses-list-item img {
        height: 300px;
        object-fit: cover;
        object-position: center;
    }

    .accordian-detail {
        border-radius: 4px;
        margin-bottom: .4rem;
        overflow: clip;
    }

    .accordian-detail>summary {
        padding: 1rem;
        background-color: #f8c311;
        color: #fff;
        font-weight: bold;
    }

    .accordian-detail .accord-item {
        background: #eee;
        padding: .5rem 1rem;
    }

    .accordian-detail .accord-item li:not(:last-child) {
        margin-bottom: .4rem;
    }

    .accordian-detail .accord-item li::marker {
        font-weight: bold;
    }
</style>

<!-- Header Start -->
<div class="program-detail-bg position-relative overlay-bottom main-section" style="margin-bottom: 40px;">
    <div class="container position-relative py-5">
        <div class="py-5 text-center text-md-left">
            <h1 class="text-white display-3 mb-5">Program Detail</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase">
                    <a class="text-secondary" href="./">Home</a>
                </p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Program Detail</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Detail Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="mb-5">
                    <div class="section-title position-relative mb-5">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Course Detail</h6>
                        <h2 class="display-4">Basic Program</h2>
                    </div>
                    <img class="img-fluid rounded w-100 mb-4" src="<?=base_url()?>public/web/img/header.jpg" alt="Image">
                    <p>Join our Basic Program to dive into the fascinating world of Financial Markets. You'll learn the basics of currency trading, gaining a solid understanding of how investments work.</p>
                    <p class="mb-5">Financial markets are important for any country's economy, aiding entrepreneurs in getting funds and allowing companies to grow. This growth leads to more jobs and a better life for everyone. That's why investing or trading in financial markets matters. It helps build wealth, support families, and plan for retirement.</p>

                    <h3>Why enroll in this Program?</h3>
                    <p>If you're new to Financial Markets or a beginner trader struggling to make consistent profits, this Basic Program is for you. Welcome to the exciting world of currency trading!</p>
                    <p class="mb-5">Here is how the program is delivered:</p>

                    <h4>Program Content</h4>
                    <details class="accordian-detail">
                        <summary>INTRODUCTION OF FINANCIAL MARKET</summary>
                        <div class="accord-item">
                            <ol>
                                <li>Why trading and Investment is important?</li>
                                <li>What is Financial Market?</li>
                                <li>Types of Financial Market- on the basis of settlement (Stock/commodities/Currency/Crypto’s) etc.</li>
                            </ol>
                        </div>
                    </details>
                    <details class="accordian-detail">
                        <summary>DETAILS OF CURRENCY MARKET</summary>
                        <div class="accord-item">
                            <ol>
                                <li>What is Currency market?</li>
                                <li>Why trade Currency market?</li>
                                <li>Time to trade in Currency Market</li>
                                <li>Concept of PIP/Leverage/Lot</li>
                            </ol>
                        </div>
                    </details>
                    <details class="accordian-detail">
                        <summary>TRADING SOFTWARE TRAINING</summary>
                        <div class="accord-item">
                            <ol>
                                <li>Working with Practical Application</li>
                            </ol>
                        </div>
                    </details>
                </div>
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0">
                <div class="sticky-top">
                    <div class="bg-primary mb-5 py-3">
                        <h3 class="text-dark py-3 px-4 m-0">Program Features</h3>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-dark my-3">Programme Fee</h6>
                            <h6 class="text-dark my-3">₹ 25000</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-dark my-3">Duration</h6>
                            <h6 class="text-dark my-3">20hrs</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-dark my-3">Mode</h6>
                            <h6 class="text-dark my-3">Offline</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-dark my-3">Language</h6>
                            <h6 class="text-dark my-3">English</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-dark my-3">Certificate</h6>
                            <h6 class="text-dark my-3">Yes</h6>
                        </div>
                        <h5 class="text-dark py-3 px-4 m-0">Total Price: ₹25000</h5>
                        <div class="py-3 px-4">
                            <a class="btn btn-block btn-secondary py-3 px-5" href="">Enroll Now</a>
                        </div>
                    </div>

                    <!-- <div class="mb-5">
                        <h2 class="mb-4">Recent Courses</h2>
                        <a class="d-flex align-items-center text-decoration-none mb-4" href="">
                            <img class="img-fluid rounded" src="img/courses-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6>Web design & development courses for beginners</h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-user text-primary mr-2"></i>Jhon Doe</small>
                                    <small class="text-body"><i class="fa fa-star text-primary mr-2"></i>4.5 (250)</small>
                                </div>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none mb-4" href="">
                            <img class="img-fluid rounded" src="img/courses-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6>Web design & development courses for beginners</h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-user text-primary mr-2"></i>Jhon Doe</small>
                                    <small class="text-body"><i class="fa fa-star text-primary mr-2"></i>4.5 (250)</small>
                                </div>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none mb-4" href="">
                            <img class="img-fluid rounded" src="img/courses-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6>Web design & development courses for beginners</h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-user text-primary mr-2"></i>Jhon Doe</small>
                                    <small class="text-body"><i class="fa fa-star text-primary mr-2"></i>4.5 (250)</small>
                                </div>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none" href="">
                            <img class="img-fluid rounded" src="img/courses-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6>Web design & development courses for beginners</h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-user text-primary mr-2"></i>Jhon Doe</small>
                                    <small class="text-body"><i class="fa fa-star text-primary mr-2"></i>4.5 (250)</small>
                                </div>
                            </div>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Detail End -->

<!-- Related Programs Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="mb-3">Related Programs</h2>
                <div class="owl-carousel related-carousel position-relative" style="padding: 0 20px;">
                    <?php for ($i = 0; $i < 6; $i++) { ?>
                        <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="<?=base_url()?>detail">
                            <img class="img-fluid" src="<?=base_url()?>public/web/img/program1.jpg" alt="">
                            <div class="courses-text">
                                <h4 class="text-center text-white px-3">Intermediate Program</h4>
                                <div class="border-top w-100 mt-3">
                                    <div class="d-flex justify-content-between p-4">
                                        <span class="text-white"><i class="fa fa-user mr-2"></i>Live Classes</span>
                                        <span class="text-white"><i class="fa-solid fa-clock mr-2"></i>20hrs</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Related Programs End -->

