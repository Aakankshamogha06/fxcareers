<style>
    .show-modal-btn {
        position: absolute;
        bottom: -100%;
        left: 0;
        width: 100%;
        height: 100%;
        transition: all .3s ease-in-out;
        display: grid;
        place-content: center;
        background: #fff;
        box-shadow: inset 0 0px 30px #0004;
    }

    .team-item:hover .show-modal-btn {
        bottom: 0;
    }

    .team-item:hover>img {
        filter: grayscale(1);
    }
</style>

<!-- Header Start -->
<section>
<div class="breadcrumb-sec team-bg main-section position-relative overlay-bottom">
    <div class="container position-relative text-center text-lg-left">
        <div class="breadscrumb-title">
            <h1 class="text-white display-3 mb-4 wow fadeInUp">Our Team</h1>
            <div class="d-inline-flex text-white mb-4 wow fadeInUp" data-wow-delay="100ms">
                <p class="m-0 text-uppercase"><a class="text-secondary" href="./">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Our Team</p>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Header End -->


<!-- Team Start -->
<section class="space-sec">
    <div class="container">
        <div class="section-title text-center position-relative mb-5">
            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Instructors</h6>
            <h2 class="display-5">Meet FXCareers Expert Team</h2>
        </div>
        <!-- <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;"> -->
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
                <div class="team-item">
                    <img class="img-fluid w-100" src="<?=base_url()?>public/web/img/rekha-sharma.jpg" alt="Ms. Rekha Sharma" />
                    <div class="bg-light text-center p-4 position-relative overflow-hidden">
                        <h5 class="mb-3">Ms. Rekha Sharma</h5>
                        <p class="mb-2">L & D Head</p>
                        <div class="show-modal-btn">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#rekha">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item">
                    <img class="img-fluid w-100" src="<?=base_url()?>public/web/img/nitin-vishnoi.jpg" alt="Mr. Nitin Vishnoi" />
                    <div class="bg-light text-center p-4 position-relative overflow-hidden">
                        <h5 class="mb-3">Mr. Nitin Vishnoi</h5>
                        <p class="mb-2">L & D Head</p>
                        <div class="show-modal-btn">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nitin">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item">
                    <img class="img-fluid w-100" src="<?=base_url()?>public/web/img/ruchit-thakur.jpg" alt="Mr. Ruchit Thakur" />
                    <div class="bg-light text-center p-4 position-relative overflow-hidden">
                        <h5 class="mb-3">Mr. Ruchit Thakur</h5>
                        <p class="mb-2">Trainer & Analyst</p>
                        <div class="show-modal-btn">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ruchit">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>

</section>
<!-- Team End -->

<!-- Modal -->
<div class="modal fade" id="rekha" tabindex="-1" role="dialog" aria-labelledby="rekhaTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <figure>
                    <img src="<?=base_url()?>public/web/img/rekha-sharma.jpg" alt="" class="img-fluid rounded-circle w-50" />
                </figure>
                <h3>Ms. Rekha Sharma</h3>
                <p class="text-muted">L & D Head</p>
                <p>Ms. Rekha Sharma is having more than a decade experience in financial markets. Her experience spread over equity and currency research and analysis with deep understanding of fundamental and technical aspects of markets. </p>
                <p>She has worked with big broking houses as Research head with a degree in Finance.</p>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="nitin" tabindex="-1" role="dialog" aria-labelledby="nitinTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <figure>
                    <img src="<?=base_url()?>public/web/img/nitin-vishnoi.jpg" alt="" class="img-fluid rounded-circle w-50" />
                </figure>
                <h3>Mr. Nitin Vishnoi</h3>
                <p class="text-muted">L & D Head</p>
                <p>Nitin Vishnoi is a highly accomplished financial market professional and technical analyst with over 15 years of experience. He is a graduate of Financial Planning and Wealth Management, and his academic prowess has laid the foundation for a stellar career. Nitin has a passion for the markets and a relentless drive to understand the intricacies of trading and investment.</p>
                <p>Nitin's expertise lies in the realm of technical analysis. He has unparalleled proficiency in analyzing market trends, price patterns, and key indicators. This has allowed him to decipher complex market movements; making him a sought-after authority in the industry. Nitin's command over various technical tools and methodologies allows him to craft a comprehensive and data-driven approach to trading and investment.</p>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="ruchit" tabindex="-1" role="dialog" aria-labelledby="ruchitTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <figure>
                    <img src="<?=base_url()?>public/web/img/ruchit-thakur.jpg" alt="" class="img-fluid rounded-circle w-50" />
                </figure>
                <h3>Mr. Ruchit Thakur</h3>
                <p class="text-muted">Trainer & Analyst</p>
                <p>Ruchit Thakur is a specialist in both the Indian Market and in the Currency Segment with over 9 Years of experience. He is post graduate in Financial Markets and specialized in Wealth Management, His academic background and Experience provides a wide range of instruments.</p>

                <p>Ruchit's vast experience is in instruments like Bank Nifty, Nifty and in the currency segment with all #INR pairs; His command in reading price action and in analyzing market trends is just flawless. </p>

                <p>Ruchit's Expertise is in Forex Research and always look for new opportunities in market with the help of various confirmation through price. His key expertise is in Relative Strength Index with the collaboration of price action makes him unbeatable in the Financial Market. His solid academic background, passion and foundation differentiates from others.</p>

                <p>He has also worked with various organizations and has a dynamic approach to manage Money with multiple years of experience.</p>
            </div>
        </div>
    </div>
</div>

