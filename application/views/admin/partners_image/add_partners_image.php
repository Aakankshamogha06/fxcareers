   <!-- [ Main Content ] end -->
   <div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">PARTNERS IMAGE</h5>
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="<?= base_url('partners_image/partners_image_submit_data'); ?>"enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                           
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                <label for="partners_id" class="form-label"> Partner Name <span class="text-danger">*</span></label>
                                    <select id="partners_id" class="form-control" name="partners_id">
                                        <option value="">Select Partner Name</option>
                                        <?php
                                        $role_fetch_data = $this->partners_image_model->role_fetch();
                                        foreach ($role_fetch_data as $data) { ?>
                                            <option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label"> Partners Image  <span class="text-danger">*</span> </label>
                                    <input type="file" name="partners_image" parsley-trigger="change" class="form-control" id="partners_image" placeholder="Paertners Image  " required>
                                </div>
                    </div>
                    <div class="widget-footer text-left">

                        <button type="submit" name="submit" value="Add partners_image" class="btn btn-primary " style="margin: 10px;">Add</button>
                        <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- [ sample-page ] end -->
    </div>
    <!-- [ Main Content ] end -->
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

 

<script>

           CKEDITOR.replace('long_desc', {

               format_tags: 'p;h1;h2;h3;h4;h5;h6'

           });
           CKEDITOR.replace('blog_desc', {

format_tags: 'p;h1;h2;h3;h4;h5;h6'

});

</script>