<?php include_once './include/header.php' ?>

<style>
  .jumbotron>video {
    position: absolute;
    width: 100%;
    inset: 0;
    top: -20px;
    z-index: 1;
    height: 103%;
    object-fit: cover;
  }

  .jumbotron>.container {
    position: relative;
    z-index: 2;
    transform: translateY(80px);
  }

  .about-points>.col-sm-6>div {
    background-color: #0f0f0f;
  }

  .about-points>.col-sm-6>div>h6 {
    color: #f9c311;
  }

  .about-points>.col-sm-6:first-child>div,
  .about-points>.col-sm-6:last-child>div {
    background-color: #f9c311;
  }

  .about-points>.col-sm-6:first-child>div>h6,
  .about-points>.col-sm-6:last-child>div>h6 {
    color: #0f0f0f;
  }

  .courses-item>img {
    height: 450px;
    object-fit: cover;
    object-position: center;
  }

  .team-item {
    position: relative;
  }

  .team-carousel.owl-carousel .owl-item img {
    height: 200px;
    object-fit: cover;
    object-position: center;
  }

  .team-item>.play-btn {
    position: absolute;
    padding: .4rem 0;
    width: 100%;
    height: 20%;
    bottom: -20%;
    background-color: #fff;
    box-shadow: inset 0px -4px 4px rgba(0, 0, 0, 0.2);
    display: grid;
    place-content: center;
    transition: all .3s ease-in-out;
  }

  .team-item:hover>.play-btn {
    bottom: 0;
  }

  .team-item:hover>.play-btn>a {
    color: rgb(205, 32, 31);
    font-size: 2rem;
  }

  .marque {
    height: 370px;
    overflow: hidden auto;
    padding: 1rem .4rem;
  }
</style>

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid position-relative overlay-bottom overflow-hidden d-flex align-items-center">
  <video autoplay muted loop>
    <source src="./video/fxcareersExpo.mp4" type="video/mp4" />
  </video>
  <div class="container text-white text-center text-lg-left my-5 py-5">
    <div>
      <h1 class="mb-2 text-secondary wow fadeInUp" data-wow-delay="0.2s">FXCareers</h1>
      <div class="h1 text-white display-3 fw-bolder mb-4 wow fadeInUp" data-wow-delay="0.3s">A Leading Financial Education Institute</div>
      <p class="fs-2 mb-0 wow fadeInUp" data-wow-delay="0.4s">#1 India's Premier Currency Trading Education Institute!</p>
    </div>
    <!-- <div class="mx-auto mb-5" style="width: 100%; max-width: 600px">
      <div class="input-group">
        <div class="input-group-prepend">
          <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Courses
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Courses 1</a>
            <a class="dropdown-item" href="#">Courses 2</a>
            <a class="dropdown-item" href="#">Courses 3</a>
          </div>
        </div>
        <input type="text" class="form-control border-light" style="padding: 30px 25px" placeholder="Keyword" />
        <div class="input-group-append">
          <button class="btn btn-secondary px-4 px-lg-5">Search</button>
        </div>
      </div>
    </div> -->
  </div>
</div>
<!-- Header End -->

<!-- About Start -->
<section class="space-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title position-relative mb-4">
          <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2 wow fadeInUp">FXCareers</h6>
          <h2 class="display-5 wow fadeInRight" data-wow-delay="100ms">About FXCareers</h2>
          <p class="wow fadeInRight" data-wow-delay="200ms">FXCareers, a trusted financial markets institute, offers in-depth currency trading programs and training in financial markets. The programs are taught by expert mentors who have years of experience in the financial markets and cover all aspects of advance trading concepts with live market analysis.</p>
        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-lg-7 mb-md-4 mb-xs-4">
        <div class="row  mx-0 about-points">
          <div class="col-sm-6 px-0 wow fadeInUp" data-wow-delay="200ms">
            <div class="h-100 text-center p-4">
              <!-- <h1 class="text-white" data-toggle="counter-up">123</h1> -->
              <h6 class="text-uppercase">Market Analysis</h6>
              <p class="mb-0 text-white">Receive daily market analysis and news on trending events and other economic factors.</p>
            </div>
          </div>
          <div class="col-sm-6 px-0 wow fadeInUp" data-wow-delay="300ms">
            <div class="h-100 text-center p-4">
              <!-- <h1 class="text-white" data-toggle="counter-up">1234</h1> -->
              <h6 class="text-uppercase">Valuable E-books</h6>
              <p class="mb-0 text-white">Explore our topical e-books on popular trading strategies and concepts.</p>
            </div>
          </div>
          <div class="col-sm-6 px-0 wow fadeInUp" data-wow-delay="400ms">
            <div class="h-100 text-center p-4">
              <!-- <h1 class="text-white" data-toggle="counter-up">123</h1> -->
              <h6 class="text-uppercase">Informative Blogs</h6>
              <p class="mb-0 text-white">Get valuable market insights and knowledge through our informative blogs.</p>
            </div>
          </div>
          <div class="col-sm-6 px-0 wow fadeInUp" data-wow-delay="500ms">
            <div class="h-100 text-center p-4">
              <!-- <h1 class="text-white" data-toggle="counter-up">1234</h1> -->
              <h6 class="text-uppercase">Webinar Sessions</h6>
              <p class="mb-0 text-white">Participate in our interactive webinar sessions led by advance traders.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 mt-4 wow fadeInUp">
            <a href="#" class="theme-btn">Explore Programs</a>
          </div>
        </div>
      </div>
      <div class="col-lg-5 text-center wow fadeInLeft">
        <img class="img-fluid" src="img/about-img.png" />
      </div>
    </div>
  </div>
</section>
<!-- About End -->

<!-- Feature Start -->
<section class="space-sec  bg-image">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 align-self-center">
        <div class="section-title position-relative mb-4">
          <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2 wow fadeInLeft" data-wow-delay="100ms">
            Why Choose Us?
          </h6>
          <h2 class="display-6 wow fadeInLeft" data-wow-delay="200ms">Improve Your Trading Skills with Our Online and Offline Trading Programs</h2>
        </div>
        <p class="mb-4 pb-2 wow fadeInLeft" data-wow-delay="300ms">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente quod reiciendis, fuga recusandae porro culpa asperiores similique dolore! Illum, mollitia!</p>
      </div>
      <div class="col-lg-6 wow fadeInRight">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="why-choose-wrapper text-center mb-4 wow fadeInDown" data-wow-delay="100ms">
              <div class="icon-wrap">
                <i class="fa fa-2x fa-book-reader text-white btn-icon bg-warning  rounded-circle "></i>
              </div>
              <div class="caption-text mt-n1 wow fadeInRight">
                <h4>Online Classes</h4>
                <p class="m-0">Learn from Anywhere</p>
              </div>
            </div>
            <div class="why-choose-wrapper text-center wow fadeInDown" data-wow-delay="200ms">
              <div class="icon-wrap">
                <i class="fa-solid fa-2x text-white fa-chalkboard-user btn-icon bg-dark  rounded-circle"></i>
              </div>
              <div class="caption-text mt-n1 wow fadeInRight">
                <h4>Mentor Support</h4>
                <p class="m-0">Clear your Doubts</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="why-choose-wrapper text-center mt-4 mb-4 wow fadeInDown" data-wow-delay="400ms">
              <div class="icon-wrap">
                <i class="fa-solid fa-2x text-white fa-graduation-cap  btn-icon bg-dark  rounded-circle "></i>
              </div>
              <div class="mt-n1 caption-text wow fadeInRight">
                <h4>Flexible Classes</h4>
                <p class="mb-0">You pick the Schedule</p>
              </div>
            </div>
            <div class="why-choose-wrapper text-center  wow fadeInDown" data-wow-delay="500ms">
              <div class="icon-wrap">
                <i class="fa-solid fa-2x text-white fa-certificate  btn-icon bg-warning  rounded-circle wow fadeInLeft"></i>
              </div>
              <div class="mt-n1 caption-text wow fadeInRight">
                <h4>Interactive Learning</h4>
                <p class="mb-0">Fulfill your Curiosity</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Feature Start -->
<!-- Feature Start -->

<!-- Program Start -->
<section class="space-sec">
  <div class="container-fluid">
    <div class="row mx-0 justify-content-center ">
      <div class="col-lg-6">
        <div class="section-title text-center position-relative mb-4">
          <!-- <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">
          Our Courses
        </h6> -->
          <h2 class="display-5  wow fadeInUp" data-wow-delay="300ms">Choose the Program that Suits you Best!</h2>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-tabs program-tabs scroll-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="Online-Programs" data-bs-toggle="tab" data-bs-target="#OnlinePrograms" type="button" role="tab" aria-controls="Online-Programs-pane" aria-selected="true">Online Programs</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="Offline-Programs" data-bs-toggle="tab" data-bs-target="#OfflinePrograms" type="button" role="tab" aria-controls="Offline-Programs-pane" aria-selected="false">Offline Programs</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="Recorded-Videos" data-bs-toggle="tab" data-bs-target="#RecordedVideos" type="button" role="tab" aria-controls="Recorded-Videos-pane" aria-selected="false">Recorded Videos</button>
            </li>

          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="OnlinePrograms" role="tabpanel" aria-labelledby="Online-Programs" tabindex="0">
          <div class="owl-carousel courses-carousel">
            <div class="courses-item position-relative">
              <img class="img-fluid" src="img/program1.jpg" alt="Basic Program" />
              <div class="courses-text">
                <h4 class="text-center text-white px-3">Basic Program</h4>
                <div class="border-top w-100 mt-3">
                  <div class="d-flex align-items-center justify-content-between p-4">
                    <div class="d-flex gap-3">
                      <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                      <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>20hrs</span>
                    </div>
                    <span class="text-secondary fs-4">₹ 25000</span>
                  </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                  <a class="theme-btn" href="./detail.php">Read More</a>
                </div>
              </div>
            </div>
            <div class="courses-item position-relative">
              <img class="img-fluid" src="img/program2.jpg" alt="Intermediate Program" />
              <div class="courses-text">
                <h4 class="text-center text-white px-3">Intermediate Program</h4>
                <div class="border-top w-100 mt-3">
                  <div class="d-flex align-items-center justify-content-between p-4">
                    <div class="d-flex gap-3">
                      <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                      <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>20hrs</span>
                    </div>
                    <span class="text-secondary fs-4">₹ 35000</span>
                  </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                  <a class="theme-btn" href="./detail.php">Read More</a>
                </div>
              </div>
            </div>
            <div class="courses-item position-relative">
              <img class="img-fluid" src="img/program3.jpg" alt="Advanced Program" />
              <div class="courses-text">
                <h4 class="text-center text-white px-3">Advanced Program</h4>
                <div class="border-top w-100 mt-3">
                  <div class="d-flex align-items-center justify-content-between p-4">
                    <div class="d-flex gap-3">
                      <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                      <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>30hrs</span>
                    </div>
                    <span class="text-secondary fs-4 font-xm">₹ 35000</span>
                  </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                  <a class="theme-btn" href="./detail.php">Read More</a>
                </div>
              </div>
            </div>
            <div class="courses-item position-relative">
              <img class="img-fluid" src="img/program4.jpg" alt="Mastering Currency Market" />
              <div class="courses-text">
                <h4 class="text-center text-white px-3">Mastering Currency Market</h4>
                <div class="border-top w-100 mt-3">
                  <div class="d-flex align-items-center justify-content-between p-4">
                    <div class="d-flex gap-3">
                      <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                      <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>60hrs</span>
                    </div>
                    <span class="text-secondary fs-4 font-xm">₹ 50000</span>
                  </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                  <a class="theme-btn" href="./detail.php">Read More</a>
                </div>
              </div>
            </div>
            <div class="courses-item position-relative">
              <img class="img-fluid" src="img/program5.jpg" alt="Mastering Currency Market VIP" />
              <div class="courses-text">
                <h4 class="text-center text-white px-3">Mastering Currency Market VIP</h4>
                <div class="border-top w-100 mt-3">
                  <div class="d-flex align-items-center justify-content-between p-4">
                    <div class="d-flex gap-3">
                      <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                      <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>60hrs</span>
                    </div>
                    <span class="text-secondary fs-4 font-xm">₹ 100000</span>
                  </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                  <a class="theme-btn" href="./detail.php">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="OfflinePrograms" role="tabpanel" aria-labelledby="Offline-Programs" tabindex="0">
          <div class="owl-carousel courses-carousel">
            <div class="courses-item position-relative">
              <img class="img-fluid" src="img/program1.jpg" alt="Basic Program" />
              <div class="courses-text">
                <h4 class="text-center text-white px-3">Basic Program</h4>
                <div class="border-top w-100 mt-3">
                  <div class="d-flex align-items-center justify-content-between p-4">
                    <div class="d-flex gap-3">
                      <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                      <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>20hrs</span>
                    </div>
                    <span class="text-secondary fs-4 font-xm">₹ 25000</span>
                  </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                  <a class="theme-btn" href="./detail.php">Read More</a>
                </div>
              </div>
            </div>
            <div class="courses-item position-relative">
              <img class="img-fluid" src="img/program2.jpg" alt="Intermediate Program" />
              <div class="courses-text">
                <h4 class="text-center text-white px-3">Intermediate Program</h4>
                <div class="border-top w-100 mt-3">
                  <div class="d-flex align-items-center justify-content-between p-4">
                    <div class="d-flex gap-3">
                      <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                      <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>20hrs</span>
                    </div>
                    <span class="text-secondary fs-4 font-xm">₹ 35000</span>
                  </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                  <a class="theme-btn" href="./detail.php">Read More</a>
                </div>
              </div>
            </div>
            <div class="courses-item position-relative">
              <img class="img-fluid" src="img/program3.jpg" alt="Advanced Program" />
              <div class="courses-text">
                <h4 class="text-center text-white px-3">Advanced Program</h4>
                <div class="border-top w-100 mt-3">
                  <div class="d-flex align-items-center justify-content-between p-4">
                    <div class="d-flex gap-3">
                      <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                      <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>30hrs</span>
                    </div>
                    <span class="text-secondary fs-4 font-xm">₹ 35000</span>
                  </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                  <a class="theme-btn" href="./detail.php">Read More</a>
                </div>
              </div>
            </div>
            <div class="courses-item position-relative">
              <img class="img-fluid" src="img/program4.jpg" alt="Mastering Currency Market" />
              <div class="courses-text">
                <h4 class="text-center text-white px-3">Mastering Currency Market</h4>
                <div class="border-top w-100 mt-3">
                  <div class="d-flex align-items-center justify-content-between p-4">
                    <div class="d-flex gap-3">
                      <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                      <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>60hrs</span>
                    </div>
                    <span class="text-secondary fs-4 font-xm">₹ 50000</span>
                  </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                  <a class="theme-btn" href="./detail.php">Read More</a>
                </div>
              </div>
            </div>
            <div class="courses-item position-relative">
              <img class="img-fluid" src="img/program5.jpg" alt="Mastering Currency Market VIP" />
              <div class="courses-text">
                <h4 class="text-center text-white px-3">Mastering Currency Market VIP</h4>
                <div class="border-top w-100 mt-3">
                  <div class="d-flex align-items-center justify-content-between p-4">
                    <div class="d-flex gap-3">
                      <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                      <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>60hrs</span>
                    </div>
                    <span class="text-secondary fs-4 font-xm">₹ 100000</span>
                  </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                  <a class="theme-btn" href="./detail.php">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="RecordedVideos" role="tabpanel" aria-labelledby="Recorded-Videos" tabindex="0">
          <div class="owl-carousel courses-carousel">
            <div class="courses-item position-relative">
              <img class="img-fluid" src="img/program1.jpg" alt="Basic Program" />
              <div class="courses-text">
                <h4 class="text-center text-white px-3">Basic Program</h4>
                <div class="border-top w-100 mt-3">
                  <div class="d-flex align-items-center justify-content-between p-4">
                    <div class="d-flex gap-3">
                      <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                      <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>20hrs</span>
                    </div>
                    <span class="text-secondary fs-4">₹ 25000</span>
                  </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                  <a class="theme-btn" href="./detail.php">Read More</a>
                </div>
              </div>
            </div>
            <div class="courses-item position-relative">
              <img class="img-fluid" src="img/program2.jpg" alt="Intermediate Program" />
              <div class="courses-text">
                <h4 class="text-center text-white px-3">Intermediate Program</h4>
                <div class="border-top w-100 mt-3">
                  <div class="d-flex align-items-center justify-content-between p-4">
                    <div class="d-flex gap-3">
                      <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                      <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>20hrs</span>
                    </div>
                    <span class="text-secondary fs-4">₹ 35000</span>
                  </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                  <a class="theme-btn" href="./detail.php">Read More</a>
                </div>
              </div>
            </div>
            <div class="courses-item position-relative">
              <img class="img-fluid" src="img/program3.jpg" alt="Advanced Program" />
              <div class="courses-text">
                <h4 class="text-center text-white px-3">Advanced Program</h4>
                <div class="border-top w-100 mt-3">
                  <div class="d-flex align-items-center justify-content-between p-4">
                    <div class="d-flex gap-3">
                      <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                      <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>30hrs</span>
                    </div>
                    <span class="text-secondary fs-4 font-xm">₹ 35000</span>
                  </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                  <a class="theme-btn" href="./detail.php">Read More</a>
                </div>
              </div>
            </div>
            <div class="courses-item position-relative">
              <img class="img-fluid" src="img/program4.jpg" alt="Mastering Currency Market" />
              <div class="courses-text">
                <h4 class="text-center text-white px-3">Mastering Currency Market</h4>
                <div class="border-top w-100 mt-3">
                  <div class="d-flex align-items-center justify-content-between p-4">
                    <div class="d-flex gap-3">
                      <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                      <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>60hrs</span>
                    </div>
                    <span class="text-secondary fs-4 font-xm">₹ 50000</span>
                  </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                  <a class="theme-btn" href="./detail.php">Read More</a>
                </div>
              </div>
            </div>
            <div class="courses-item position-relative">
              <img class="img-fluid" src="img/program5.jpg" alt="Mastering Currency Market VIP" />
              <div class="courses-text">
                <h4 class="text-center text-white px-3">Mastering Currency Market VIP</h4>
                <div class="border-top w-100 mt-3">
                  <div class="d-flex align-items-center justify-content-between p-4">
                    <div class="d-flex gap-3">
                      <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                      <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>60hrs</span>
                    </div>
                    <span class="text-secondary fs-4 font-xm">₹ 100000</span>
                  </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                  <a class="theme-btn" href="./detail.php">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Programs tabs --
    <div class="container">
      <div class="row">
        <div class="col-12 overflow-x-auto overflow-y-hidden">
          <ul class="nav nav-pills gap-2 mb-3 flex-nowrap text-nowrap scroll-tabs" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="offline-tab" data-toggle="pill" href="#offline" role="tab" aria-controls="offline" aria-selected="true">Offline Programs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="online-tab" data-toggle="pill" href="#online" role="tab" aria-controls="online" aria-selected="false">Online Programs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="recorded-tab" data-toggle="pill" href="#recorded" role="tab" aria-controls="recorded" aria-selected="false">Recorded Videos</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="offline" role="tabpanel" aria-labelledby="offline-tab">
        <div class="owl-carousel courses-carousel">
          <div class="courses-item position-relative">
            <img class="img-fluid" src="img/program1.jpg" alt="Basic Program" />
            <div class="courses-text">
              <h4 class="text-center text-white px-3">Basic Program</h4>
              <div class="border-top w-100 mt-3">
                <div class="d-flex align-items-center justify-content-between p-4">
                  <div class="d-flex gap-3">
                    <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                    <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>20hrs</span>
                  </div>
                  <span class="text-secondary fs-4">₹ 25000</span>
                </div>
              </div>
              <div class="w-100 bg-white text-center p-4">
                <a class="theme-btn" href="./detail.php">Read More</a>
              </div>
            </div>
          </div>
          <div class="courses-item position-relative">
            <img class="img-fluid" src="img/program2.jpg" alt="Intermediate Program" />
            <div class="courses-text">
              <h4 class="text-center text-white px-3">Intermediate Program</h4>
              <div class="border-top w-100 mt-3">
                <div class="d-flex align-items-center justify-content-between p-4">
                  <div class="d-flex gap-3">
                    <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                    <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>20hrs</span>
                  </div>
                  <span class="text-secondary fs-4">₹ 35000</span>
                </div>
              </div>
              <div class="w-100 bg-white text-center p-4">
                <a class="theme-btn" href="./detail.php">Read More</a>
              </div>
            </div>
          </div>
          <div class="courses-item position-relative">
            <img class="img-fluid" src="img/program3.jpg" alt="Advanced Program" />
            <div class="courses-text">
              <h4 class="text-center text-white px-3">Advanced Program</h4>
              <div class="border-top w-100 mt-3">
                <div class="d-flex align-items-center justify-content-between p-4">
                  <div class="d-flex gap-3">
                    <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                    <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>30hrs</span>
                  </div>
                  <span class="text-secondary fs-4 font-xm">₹ 35000</span>
                </div>
              </div>
              <div class="w-100 bg-white text-center p-4">
                <a class="theme-btn" href="./detail.php">Read More</a>
              </div>
            </div>
          </div>
          <div class="courses-item position-relative">
            <img class="img-fluid" src="img/program4.jpg" alt="Mastering Currency Market" />
            <div class="courses-text">
              <h4 class="text-center text-white px-3">Mastering Currency Market</h4>
              <div class="border-top w-100 mt-3">
                <div class="d-flex align-items-center justify-content-between p-4">
                  <div class="d-flex gap-3">
                    <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                    <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>60hrs</span>
                  </div>
                  <span class="text-secondary fs-4 font-xm">₹ 50000</span>
                </div>
              </div>
              <div class="w-100 bg-white text-center p-4">
                <a class="theme-btn" href="./detail.php">Read More</a>
              </div>
            </div>
          </div>
          <div class="courses-item position-relative">
            <img class="img-fluid" src="img/program5.jpg" alt="Mastering Currency Market VIP" />
            <div class="courses-text">
              <h4 class="text-center text-white px-3">Mastering Currency Market VIP</h4>
              <div class="border-top w-100 mt-3">
                <div class="d-flex align-items-center justify-content-between p-4">
                  <div class="d-flex gap-3">
                    <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                    <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>60hrs</span>
                  </div>
                  <span class="text-secondary fs-4 font-xm">₹ 100000</span>
                </div>
              </div>
              <div class="w-100 bg-white text-center p-4">
                <a class="theme-btn" href="./detail.php">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="online" role="tabpanel" aria-labelledby="online-tab">
        <div class="owl-carousel courses-carousel">
          <div class="courses-item position-relative">
            <img class="img-fluid" src="img/program1.jpg" alt="Basic Program" />
            <div class="courses-text">
              <h4 class="text-center text-white px-3">Basic Program</h4>
              <div class="border-top w-100 mt-3">
                <div class="d-flex align-items-center justify-content-between p-4">
                  <div class="d-flex gap-3">
                    <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                    <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>20hrs</span>
                  </div>
                  <span class="text-secondary fs-4 font-xm">₹ 25000</span>
                </div>
              </div>
              <div class="w-100 bg-white text-center p-4">
                <a class="theme-btn" href="./detail.php">Read More</a>
              </div>
            </div>
          </div>
          <div class="courses-item position-relative">
            <img class="img-fluid" src="img/program2.jpg" alt="Intermediate Program" />
            <div class="courses-text">
              <h4 class="text-center text-white px-3">Intermediate Program</h4>
              <div class="border-top w-100 mt-3">
                <div class="d-flex align-items-center justify-content-between p-4">
                  <div class="d-flex gap-3">
                    <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                    <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>20hrs</span>
                  </div>
                  <span class="text-secondary fs-4 font-xm">₹ 35000</span>
                </div>
              </div>
              <div class="w-100 bg-white text-center p-4">
                <a class="theme-btn" href="./detail.php">Read More</a>
              </div>
            </div>
          </div>
          <div class="courses-item position-relative">
            <img class="img-fluid" src="img/program3.jpg" alt="Advanced Program" />
            <div class="courses-text">
              <h4 class="text-center text-white px-3">Advanced Program</h4>
              <div class="border-top w-100 mt-3">
                <div class="d-flex align-items-center justify-content-between p-4">
                  <div class="d-flex gap-3">
                    <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                    <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>30hrs</span>
                  </div>
                  <span class="text-secondary fs-4 font-xm">₹ 35000</span>
                </div>
              </div>
              <div class="w-100 bg-white text-center p-4">
                <a class="theme-btn" href="./detail.php">Read More</a>
              </div>
            </div>
          </div>
          <div class="courses-item position-relative">
            <img class="img-fluid" src="img/program4.jpg" alt="Mastering Currency Market" />
            <div class="courses-text">
              <h4 class="text-center text-white px-3">Mastering Currency Market</h4>
              <div class="border-top w-100 mt-3">
                <div class="d-flex align-items-center justify-content-between p-4">
                  <div class="d-flex gap-3">
                    <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                    <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>60hrs</span>
                  </div>
                  <span class="text-secondary fs-4 font-xm">₹ 50000</span>
                </div>
              </div>
              <div class="w-100 bg-white text-center p-4">
                <a class="theme-btn" href="./detail.php">Read More</a>
              </div>
            </div>
          </div>
          <div class="courses-item position-relative">
            <img class="img-fluid" src="img/program5.jpg" alt="Mastering Currency Market VIP" />
            <div class="courses-text">
              <h4 class="text-center text-white px-3">Mastering Currency Market VIP</h4>
              <div class="border-top w-100 mt-3">
                <div class="d-flex align-items-center justify-content-between p-4">
                  <div class="d-flex gap-3">
                    <span class="text-white font-xm"><i class="fa fa-user mr-2"></i>Live Classes</span>
                    <span class="text-white font-xm"><i class="fa-solid fa-clock mr-2"></i>60hrs</span>
                  </div>
                  <span class="text-secondary fs-4 font-xm">₹ 100000</span>
                </div>
              </div>
              <div class="w-100 bg-white text-center p-4">
                <a class="theme-btn" href="./detail.php">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="recorded" role="tabpanel" aria-labelledby="recorded-tab">...</div>
    </div>-->

    <!-- <div class="row justify-content-center bg-image mx-0 mb-5">
    <div class="col-lg-6 py-5">
      <div class="bg-white p-5 my-5">
        <h1 class="text-center mb-4">30% Off For New Students</h1>
        <form>
          <div class="form-row">
            <div class="col-sm-6">
              <div class="form-group">
                <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="padding: 30px 20px" />
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="padding: 30px 20px" />
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-sm-6">
              <div class="form-group">
                <select class="custom-select bg-light border-0 px-3" style="height: 60px">
                  <option selected>Select A courses</option>
                  <option value="1">courses 1</option>
                  <option value="2">courses 1</option>
                  <option value="3">courses 1</option>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <button class="theme-btn btn-block" type="submit" style="height: 60px">
                Sign Up Now
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div> -->
  </div>
</section>

<!-- Program End -->

<!-- Team Start -->

<section class="space-sec pt-0">
  <div class="container">
    <div class="section-title text-center position-relative mb-5">
      <!-- <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Instructors</h6> -->
      <h2 class="display-5 wow fadeInUp" data-wow-delay="0.2s">Knowledge Hub of FXCareers</h2>
    </div>
    <div class="owl-carousel team-carousel position-relative mb-3" style="padding: 0 30px">
      <div class="team-item">
        <img class="img-fluid w-100" src="img/thumbnail-1.jpg" alt="" />
        <div class="play-btn">
          <a href="https://www.youtube.com/watch?v=h19Gq4P5ieA" target="_blank">
            <i class="fa-brands fa-youtube"></i>
          </a>
        </div>
      </div>
      <div class="team-item">
        <img class="img-fluid w-100" src="img/thumbnail-2.jpg" alt="" />
        <div class="play-btn">
          <a href="https://www.youtube.com/watch?v=6gnDAcjtUII" target="_blank">
            <i class="fa-brands fa-youtube"></i>
          </a>
        </div>
      </div>
      <div class="team-item">
        <img class="img-fluid w-100" src="img/thumbnail-3.jpg" alt="" />
        <div class="play-btn">
          <a href="https://www.youtube.com/watch?v=55c0Ic-Dtw0" target="_blank">
            <i class="fa-brands fa-youtube"></i>
          </a>
        </div>
      </div>
      <div class="team-item">
        <img class="img-fluid w-100" src="img/thumbnail-4.jpg" alt="" />
        <div class="play-btn">
          <a href="https://www.youtube.com/watch?v=D1R2AW4E1Ak" target="_blank">
            <i class="fa-brands fa-youtube"></i>
          </a>
        </div>
      </div>
      <div class="team-item">
        <img class="img-fluid w-100" src="img/thumbnail-5.jpg" alt="" />
        <div class="play-btn">
          <a href="https://www.youtube.com/watch?v=2i-J_Oke2zA" target="_blank">
            <i class="fa-brands fa-youtube"></i>
          </a>
        </div>
      </div>
      <div class="team-item">
        <img class="img-fluid w-100" src="img/thumbnail-6.jpg" alt="" />
        <div class="play-btn">
          <a href="https://www.youtube.com/watch?v=u-fY-mAR2L8" target="_blank">
            <i class="fa-brands fa-youtube"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Team End -->

<!-- Testimonial Start -->

<section class="bg-image space-sec">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 mb-5 mb-lg-0">
        <div class="section-title position-relative mb-4">
          <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-1 wow fadeInLeft" data-wow-delay="0.2s">WHAT OUR STUDENTS LOVE ABOUT FXCAREERS</h6>
          <h2 class="display-6 wow fadeInLeft" data-wow-delay="0.3s">Students Feedback</h2>
        </div>
        <p class="m-0 wow fadeInLeft" data-wow-delay="0.4s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, quidem magnam officia sunt unde, quibusdam totam cum quae, maxime magni a ut repudiandae veniam! Fugit accusantium id fuga aliquid eius.</p>
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
                <img class="img-fluid rounded-circle" src="img/nittiin.png" alt="" />
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
                <img class="img-fluid rounded-circle" src="img/rejeshh.png" alt="" />
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

<!-- Latest News Start -->

<section class="space-sec">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-8-offset-lg-2 text-center">
        <div class="section-title position-relative mb-4">
          <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2 wow fadeInUp">updates from fxcareers</h6>
          <h2 class="display-6 wow fadeInUp">Latest News</h2>
          <p class="wow fadeInUp">Take part in our financial education webinars and events and get a chance to connect with other learners.</p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <h3 class="text-warning mb-4 wow fadeInUp">Blogs</h3>
        <div class="marque">
          <?php for ($i = 0; $i < 9; $i++) { ?>
            <div class="row align-items-center mb-4">
              <div class="col-4">
                <div class="date-box">
                  <span class="d-block">2</span>
                  <span class="">Jan</span>
                </div>
              </div>
              <div class="col-8">
                <a href="" class="d-block title-list">
                  <h6 class="mb-2">FXCareers New Batch Starting 2nd Jan</h6>
                </a>
                <p class="mb-2 location">
                  <i class="fa fa-location mr-1"></i>
                  <span>Delhi</span>
                </p>

              </div>
            </div>
          <?php } ?>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <h3 class="text-warning mb-4 wow fadeInUp">Notifications</h3>
        <div class="marque">
          <?php for ($i = 0; $i < 9; $i++) { ?>
            <div class="row align-items-center mb-4">
              <div class="col-4">
                <div class="date-box">
                  <span class="d-block">2</span>
                  <span class="">Jan</span>
                </div>
              </div>
              <div class="col-8">
                <a href="" class="d-block  title-list">
                  <h6 class="mb-2">FXCareers New Batch Starting 2nd Jan</h6>
                </a>
                <p class="mb-2 location">
                  <i class="fa fa-location mr-1"></i>
                  <span>Delhi</span>
                </p>

              </div>
            </div>
          <?php } ?>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <h3 class="text-warning mb-4 wow fadeInUp">News Analysis</h3>
        <div class="marque">
          <?php for ($i = 0; $i < 9; $i++) { ?>
            <div class="row align-items-center mb-4">
              <div class="col-4">
                <div class="date-box">
                  <span class="d-block">2</span>
                  <span class="">Jan</span>
                </div>
              </div>
              <div class="col-8">
                <a href="" class="d-block title-list">
                  <h6 class="mb-2">FXCareers New Batch Starting 2nd Jan</h6>
                </a>
                <p class="mb-2 location">
                  <i class="fa fa-location mr-1"></i>
                  <span>Delhi</span>
                </p>

              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Latest News End -->

<?php include_once './include/footer.php' ?>