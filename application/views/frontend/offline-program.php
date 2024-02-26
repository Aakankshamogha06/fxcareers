<?php include_once './include/header.php' ?>
<style>
    .courses-list-item img {
        height: 400px;
        object-fit: cover;
        object-position: center;
    }
</style>

<!-- Header Start -->
<section>
<div class="breadcrumb-sec offline-bg main-section position-relative overlay-bottom">
    <div class="container position-relative text-center text-lg-left">
        <div class="breadscrumb-title">
            <h1 class="text-white display-3 mb-4 wow fadeInUp">Offline Program</h1>
            <div class="d-inline-flex text-white mb-4 wow fadeInUp" data-wow-delay="100ms">
                <p class="m-0 text-uppercase"><a class="text-secondary" href="./">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Offline Program</p>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Header End -->


<!-- Courses Start -->
<section class="space-sec">
    <div class="container">
        <div class="row mx-0 justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center position-relative mb-5">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2 wow fadeInDown">Our Programs</h6>
                    <h2 class="display-6 wow fadeInUp">Offline Training Programs</h2>
                </div>
            </div>
        </div>
        <div class="row gy-4 justify-content-center">
            <?php for ($i = 0; $i < 5; $i++) { ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.php">
                        <img class="img-fluid" src="./img/program1.jpg" alt="">
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
                </div>
            <?php } ?>

            <!-- commented pagination -->
            <div class="col-12 d-none">
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-lg justify-content-center mb-0">
                        <li class="page-item disabled">
                            <a class="page-link rounded-0" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link rounded-0" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Courses End -->

<?php include_once './include/footer.php' ?>