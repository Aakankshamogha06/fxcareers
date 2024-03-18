
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
                        <a class="text-secondary" href="<?=base_url()?>">Home</a>
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
            <?php foreach($gallery_view as $row){
                $id=$row->id; ?>
            <div class="col-md-4 wow fadeInLeftBig">
                
                <div class="gallery-hover p-3 overflow-hidden position-relative text-center shadow rounded">
                    <figure>
                        <img src="<?=base_url('uploads/gallery/').$row->image;?>" alt="Classes" class="img-fluid rounded" />
                    </figure>
                    <h4 class="mb-0"><?=$row->image_name?></h4>

                    <?php
                    $sub_gallery_view = $this->sub_gallery_model->sub_gallery_get($id); ?>
                    
                    <div class="gallery-btn">
                        
                        <a href="<?=base_url('uploads/gallery/').$row->image;?>" class="text-secondary" data-fancybox="gallery<?=$id?>">
                            <i class="fa-solid fa-2x fa-magnifying-glass-plus"></i>
                        </a>
                        <div class="d-none">
                     <?php   foreach($sub_gallery_view as $row): ?>
                            <a href="<?=base_url('uploads/sub_gallery/').$row->image;?>" data-fancybox="gallery<?=$id?>"></a>
                            <?php endforeach; ?>
                        </div>
                        
                    </div>
                   
                </div>
                
            </div>
            <?php }?>
           
        </div>
    </div>

</section>
<!-- Gallery Start -->

