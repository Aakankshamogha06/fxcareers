<style>
    .blog-card {
        transition: all .3s ease-in-out;
    }

    .blog-card:hover {
        transform: translateY(-10px);
        filter: drop-shadow(0 13px 10px #0f0f0050);
    }

    .blog-card>a>img {
        height: 200px;
        object-fit: contain;
    }

    .blog-card .card-body {
        background-color: #fffaea;
    }
</style>

<!-- Header Start -->
<section>
<div class="breadcrumb-sec blog-bg main-section position-relative overlay-bottom" >
    <div class="container position-relative text-center text-lg-left">
        <div class="breadscrumb-title">
            <h1 class="text-white display-3 mb-4 wow fadeInUp">Blog</h1>
            <div class="d-inline-flex text-white mb-4 wow fadeInUp" data-wow-delay="100ms">
                <p class="m-0 text-uppercase"><a class="text-secondary" href="./">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Blog</p>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Header End -->


<!-- Contact Start -->
<section class="space-sec">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-title position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2 wow fadeInUp">LATEST BLOGS</h6>
                    <h2 class="display-5 mb-3 wow fadeInUp" data-wow-delay="100ms">Stay Up-to-Date with our Latest Financial&nbsp;Blogs</h2>
                </div>
            </div>
            <?php for ($i = 0; $i < 6; $i++) { ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="card border-primary rounded overflow-hidden h-100 blog-card">
                        <a href="./blog-detail.php">
                            <img src="./img/blog/blog-1.jpg" class="card-img-top" alt="USDINR Analysis" />
                        </a>
                        <div class="card-body">
                            <p class="card-text d-flex justify-content-between">
                                <small class="text-muted"><i class="fa-solid fa-clock mr-2"></i><?= date('d M Y') ?></small>
                                <small class="text-muted"><i class="fa-solid fa-user-tie mr-2"></i>Ruchit Thakur</small>
                            </p>
                            <h5 class="card-title">
                                <a class="text-secondary" href="./blog-detail.php">USDINR Analysis</a>
                            </h5>
                            <p class="card-text">USDINR : In-depth analysis and Path Ahead</p>
                            <a href="./blog-detail.php" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="col-12">
                <nav aria-label="pagination-navigation">
                    <ul class="pagination justify-content-center mt-3 wow fadeInUp">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Prev</a>
                        </li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Contact End -->


