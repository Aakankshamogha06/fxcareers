   <!-- [ Main Content ] end -->
   <div class="container-fluid">
       <div class="container-fluid">
           <div class="card">
               <div class="card-body">
                   <h5 class="card-title fw-semibold mb-4">SUB MENU</h5>
                   <form class="form-horizontal" method="post" action="<?= base_url('pricing_features/pricing_features_submit_data'); ?>" enctype="multipart/form-data">
                       <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">


                       <div class="form-row">
                           <div class="form-group col-md-12">
                               <label for="pricing_id" class="form-label"> PRICING NAME <span class="text-danger">*</span></label>
                               <select id="pricing_id" class="form-control" name="pricing_id">
                                   <option value="">SELECT PRICING NAME</option>
                                   <?php
                                    $role_fetch_data = $this->pricing_features_model->role_fetch();
                                    foreach ($role_fetch_data as $data) { ?>
                                       <option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
                                   <?php } ?>

                               </select>
                           </div>
                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">FEATURES<span class="text-danger">*</span> </label>
                               <input type="text" name="features" parsley-trigger="change" class="form-control" id="features" placeholder="Features " required>
                           </div>


                       </div>
                       <div class="widget-footer text-left">

                           <button type="submit" name="submit" value="Add pricing_features" class="btn btn-primary " style="margin: 10px;">Add SUB MENU category</button>
                           <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                       </div>
                   </form>
               </div>
               <!-- [ sample-page ] end -->
           </div>
       </div>
   </div>

   <!-- [ Main Content ] end -->
   <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>



   <script>
       CKEDITOR.replace('long_desc', {

           format_tags: 'p;h1;h2;h3;h4;h5;h6'

       });
       CKEDITOR.replace('SUB MENU_desc', {

           format_tags: 'p;h1;h2;h3;h4;h5;h6'

       });
   </script>