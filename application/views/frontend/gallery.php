<?php include_once './include/header.php' ?>

<style>
    .gallery-hover figure>img {
        height: 180px;
        width: 100%;
        object-fit: cover;
    }

    .gallery-btn {
        position: absolute;
        display: grid;
        place-items: center;
        top: 50%;
        left: 50%;
        width: 100%;
        height: 100%;
        background-color: #0009;
        transform: scale(0) translate(-50%, -50%);
        transition: all .3s ease-in;
    }

    .gallery-hover:hover .gallery-btn {
        transform: scale(1) translate(-50%, -50%);
    }
</style>

<!-- Header Start -->
<section>
    <div class="breadcrumb-sec gallery-bg main-section position-relative overlay-bottom">
        <div class="container position-relative text-center text-lg-left">
            <div class="breadscrumb-title">
                <h1 class="text-white display-3  mb-4 wow fadeInUp">Gallery</h1>
                <div class="d-inline-flex text-white mb-4 wow fadeInUp" data-wow-delay="100ms">
                    <p class="m-0 text-uppercase">
                        <a class="text-secondary" href="./">Home</a>
                    </p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Gallery</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <div class="gallery-bg main-section position-relative overlay-bottom" style="margin-bottom: 40px;">
    <div class="container position-relative text-center text-lg-left py-5">
        <div class="py-5">
            <h1 class="text-white display-3 mb-5 wow fadeInUp">Gallery</h1>
            <div class="d-inline-flex text-white mb-5 wow fadeInUp" data-wow-delay="100ms">
                <p class="m-0 text-uppercase"><a class="text-secondary" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Gallery</p>
            </div>
        </div>
    </div>
</div> -->
<!-- Header End -->


<!-- Gallery Start -->
<section class="space-sec overflow-hidden">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center">
                <h2 class="display-5 mb-4 wow slideInDown">Gallery</h2>
            </div>
            <div class="col-md-4 wow fadeInLeftBig">
                <div class="gallery-hover p-3 overflow-hidden position-relative text-center shadow rounded">
                    <figure>
                        <img src="./img/class-gallery-1.png" alt="Classes" class="img-fluid rounded" />
                    </figure>
                    <h4 class="mb-0">Classes</h4>
                    <div class="gallery-btn">
                        <a href="./img/class-gallery-1.png" class="text-secondary" data-fancybox="gallery1">
                            <i class="fa-solid fa-2x fa-magnifying-glass-plus"></i>
                        </a>
                        <div class="d-none">
                            <a href="./img/class-gallery-2.jpg" data-fancybox="gallery1"></a>
                            <a href="./img/class-gallery-1.png" data-fancybox="gallery1"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUpBig">
                <div class="gallery-hover p-3 overflow-hidden position-relative text-center shadow rounded">
                    <figure>
                        <img src="./img/exhibition-gallery.jpg" alt="Exhibition" class="img-fluid rounded" />
                    </figure>
                    <h4 class="mb-0">Exhibition</h4>
                    <div class="gallery-btn">
                        <a href="./img/exhibition-gallery.jpg" class="text-secondary" data-fancybox="gallery2">
                            <i class="fa-solid fa-2x fa-magnifying-glass-plus"></i>
                        </a>
                        <div class="d-none">
                            <a href="./img/exhibition-gallery-1.jpeg" data-fancybox="gallery2"></a>
                            <a href="./img/exhibition-gallery-2.jpeg" data-fancybox="gallery2"></a>
                            <a href="./img/exhibition-gallery-3.jpeg" data-fancybox="gallery2"></a>
                            <a href="./img/exhibition-gallery-4.jpeg" data-fancybox="gallery2"></a>
                            <a href="./img/exhibition-gallery-5.jpeg" data-fancybox="gallery2"></a>
                            <a href="./img/exhibition-gallery-6.jpeg" data-fancybox="gallery2"></a>
                            <a href="./img/exhibition-gallery-7.jpeg" data-fancybox="gallery2"></a>
                            <a href="./img/exhibition-gallery-8.jpeg" data-fancybox="gallery2"></a>
                            <a href="./img/exhibition-gallery-9.jpeg" data-fancybox="gallery2"></a>
                            <a href="./img/exhibition-gallery-10.jpeg" data-fancybox="gallery2"></a>
                            <a href="./img/exhibition-gallery-11.jpeg" data-fancybox="gallery2"></a>
                            <a href="./img/exhibition-gallery-12.jpeg" data-fancybox="gallery2"></a>
                            <a href="./img/exhibition-gallery-13.jpeg" data-fancybox="gallery2"></a>
                            <a href="./img/exhibition-gallery-14.jpeg" data-fancybox="gallery2"></a>
                            <a href="./img/exhibition-gallery-15.jpeg" data-fancybox="gallery2"></a>
                            <a href="./img/exhibition-gallery-16.jpeg" data-fancybox="gallery2"></a>
                            <a href="./img/exhibition-gallery-17.jpeg" data-fancybox="gallery2"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInRightBig">
                <div class="gallery-hover p-3 overflow-hidden position-relative text-center shadow rounded">
                    <figure>
                        <img src="./img/sponsers-gallery.png" alt="Sponsers" class="img-fluid rounded" />
                    </figure>
                    <h4 class="mb-0">Sponsers</h4>
                    <div class="gallery-btn">
                        <a href="./img/sponsers-gallery.png" class="text-secondary" data-fancybox="gallery3">
                            <i class="fa-solid fa-2x fa-magnifying-glass-plus"></i>
                        </a>
                        <div class="d-none">
                            <a href="./img/sponsers-gallery-1.jpg" data-fancybox="gallery3"></a>
                            <a href="./img/sponsers-gallery-2.jpg" data-fancybox="gallery3"></a>
                            <a href="./img/sponsers-gallery-3.jpg" data-fancybox="gallery3"></a>
                            <a href="./img/sponsers-gallery-4.jpg" data-fancybox="gallery3"></a>
                            <a href="./img/sponsers-gallery-5.jpg" data-fancybox="gallery3"></a>
                            <a href="./img/sponsers-gallery-6.jpg" data-fancybox="gallery3"></a>
                            <a href="./img/sponsers-gallery-7.jpg" data-fancybox="gallery3"></a>
                            <a href="./img/sponsers-gallery-8.jpg" data-fancybox="gallery3"></a>
                            <a href="./img/sponsers-gallery.png" data-fancybox="gallery3"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Gallery Start -->

<?php include_once './include/footer.php' ?>