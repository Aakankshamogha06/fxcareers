<style>
    .ebook-card {
        border: 1px solid #f5f5f5;
        transition: all .3s ease-in-out;
    }

    .ebook-card:hover {
        border-color: #0000;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }

    .ebook-card img {
        transition: all .3s ease-in-out;
    }

    .ebook-card:hover img {
        transform: scale(1.1);
    }
</style>

<!-- Header Start -->
<section>
<div class="breadcrumb-sec ebook-bg main-section position-relative overlay-bottom">
    <div class="container position-relative text-center text-lg-left">
        <div class="breadscrumb-title">
            <h1 class="text-white display-3 mb-4 wow fadeInUp">E Books Collection</h1>
            <div class="d-inline-flex text-white mb-4 wow fadeInUp" data-wow-delay="100ms">
                <p class="m-0 text-uppercase"><a class="text-secondary" href="<?=base_url()?>">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">E Books</p>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Header End -->


<!-- Contact Start -->
<section class="overflow-hidden space-sec">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-xl-8 offset-lg-2 text-center">
                <h2 class="display-5 wow fadeInUp"><span class="text-secondary">Curated</span> E-Books Collection</h2>
                <p class="mb-5 wow fadeInUp">Explore our collection of valuable E-Books on Basic to Advance trading concepts and improve your understanding of the market.</p>
            </div>
<?php foreach($ebook_view as $row):?>
            <div class="col-xl-6">
                <div class="card overflow-hidden ebook-card wow slideInLeft">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="<?=base_url('uploads/ebook_image/').$row->ebook_image;?>" class="card-img rounded-0 h-100 object-fit-cover" alt="What is Investment" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-secondary"><?=$row->ebook_name?></h5>
                                <p class="card-text line-clamp"><?=$row->ebook_desc?></p>
                                <a href="<?=base_url('uploads/ebook_pdf/').$row->ebook_pdf;?>" class="btn btn-primary" target="_blank">View Book</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
<!-- Contact End -->

