
        <!-- Details Hero  -->
        <?php 
        foreach($blog_detail_view as $row): ?>
        <section class="Details-hero-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 blog-hero-content" style="color:black;">
                                          
                        <h1><?=$row->blog_name?></h1>
                        <p><?=$row->blog_desc?></p>
                        
                    </div>
                    <div class="col-md-6  col-sm-12 ">
                        <img src="<?=base_url('uploads/').$row->blog_image;?>" width="100%" />

                    </div>
                </div>
            </div>
        </section>
        <!-- End of Details Hero  -->
        <!--Blogs Description  -->
        <section class="blog-description">
            <div class="container">
                <div class="row">
                    <div class="col-md-8" style="color:black;">
                      <?=$row->long_desc?>
                    </div>
                    <div class="col-md-4 ">
          <div class="row row-cols-1 row-cols-md-1 g-1 blogs-des-cards " id="sidebar">
          <?php foreach ($blogs as $blog): ?>
            <div class="col ">
              <a href="blog/<?= str_replace(' ', '-', strtolower($blog->seo_title)); ?>">
                <div class="card blog-card ">
                  <img src="<?= base_url('uploads/') . $blog->blog_image; ?>" class="card-img-top" alt="...">
                  <div class="card-body blog-content">
                    <h3 class="card-title"><b><?= $blog->blog_name ?></h3></b>
                    <br>
                   <?= date('d-m-Y', strtotime($blog->blog_date)) ?>
                  </div>
                </div>
              </a>

            </div>
            <?php endforeach;?>
          </div>
        </div>

                </div>
            </div>
        </section>
        <?php endforeach?>
         <!-- End Of Blogs Description  -->
          <!-- FOOTER -->

  <!-- FOOTER -->
</body>
</html>
