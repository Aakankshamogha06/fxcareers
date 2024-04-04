
<!-- Header Start -->
<section>
<div class=" breadcrumb-sec analysis-bg main-section position-relative overlay-bottom">
    <div class="container position-relative text-center text-lg-left py-5">
        <div class="breadscrumb-title">
            <h1 class="text-white display-3 mb-4 wow fadeInUp">analysis Detail</h1>
            <div class="d-inline-flex text-white mb-4 wow fadeInUp" data-wow-delay="100ms">
                <p class="m-0 text-uppercase"><a class="text-secondary" href="<?=base_url()?>">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase"><a class="text-secondary" href="<?=base_url()?>analysis">analysis</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">analysis Detail</p>
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
            <div class="col-lg-10 col-xl-8 mx-auto">
            <?php 
                    foreach($analysis_detail as $row): ?>
                <div class="mb-5 wow fadeInUp">
                
                    <img src="<?=base_url('uploads/analysis/').$row->analysis_image?>" alt="image" class="img-fluid mb-5" />
                    <h2 class="mb-3"><?=$row->analysis_name?></h2>
                    <p class="d-flex gap-3">
                        <small class="text-muted"><i class="fa-solid fa-clock text-secondary mr-2"></i><?= date('d-m-Y', strtotime($row->analysis_date))?></small>&nbsp;&nbsp;&nbsp;
                        <span></span>
                        <small class="text-muted"><i class="fa-solid fa-user-tie text-secondary mr-2"></i><?= $row->analysis_author?></small>
                    </p>
                    <?=$row-> analysis_desc?>

                    <?=$row->long_desc?>
                </div>


                <?php endforeach;?>
            </div>
        </div>
    </div>

</section>

<!-- Contact End -->

