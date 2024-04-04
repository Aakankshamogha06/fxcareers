
<!-- Header Start -->
<section>
<div class="breadcrumb-sec analysis-bg main-section position-relative overlay-bottom" >
    <div class="container position-relative text-center text-lg-left">
        <div class="breadscrumb-title">
            <h1 class="text-white display-3 mb-4 wow fadeInUp">Analysis</h1>
            <div class="d-inline-flex text-white mb-4 wow fadeInUp" data-wow-delay="100ms">
                <p class="m-0 text-uppercase"><a class="text-secondary" href="./">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Analysis</p>
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
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2 wow fadeInUp">LATEST analysis</h6>
                    <h2 class="display-5 mb-3 wow fadeInUp" data-wow-delay="100ms">Stay Up-to-Date with our Latest Financial&nbsp;analysis</h2>
                </div>
            </div>
            <?php 
            foreach($analysis_detail_view as $row):?>

                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="card border-primary rounded overflow-hidden h-100 analysis-card">
                    <a href="<?=base_url()?>analysis/<?=str_replace(' ','-',strtolower($row->analysis_name));?>">
                        
                            <img src="<?=base_url('uploads/analysis/').$row->analysis_image;?>" class="card-img-top" alt="USDINR Analysis" />
                        
                        <div class="card-body">
                            <p class="card-text d-flex justify-content-between">
                                <small class="text-muted"><i class="fa-solid fa-clock mr-2"></i><?= date('d-m-Y', strtotime($row->analysis_date))?></small>
                                <small class="text-muted"><i class="fa-solid fa-user-tie mr-2"></i><?=$row->analysis_author?></small>
                            </p>
                            <h5 class="card-title">
                                <a class="text-secondary" href="<?=base_url()?>analysis-detail"><?=$row->analysis_name?></a>
                            </h5>
                            <p class="card-text"><?=substr($row->analysis_desc,0,30),'...'; ?></p>
                            <a href="<?= base_url('analysis/')?><?=str_replace(' ','-',strtolower($row->analysis_name));?>"class="btn btn-primary">Read More</a>
                            </a> 
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
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

