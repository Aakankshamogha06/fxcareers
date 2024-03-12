   <!-- [ Main Content ] end -->
   <div class="container-fluid">
       <div class="container-fluid">
           <div class="card">
               <div class="card-body">
                   <h5 class="card-title fw-semibold mb-4">course_mode</h5>

                   <form class="form-horizontal" method="post" action="<?= base_url('course_mode/course_mode_submit_data'); ?>" enctype="multipart/form-data">
                       <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                       <div class="form-row">
                           <div class="form-group col-md-6">
                               <label for="inputEmail4" class="form-label">mode Name <span class="text-danger">*</span> </label>
                               <input type="text" name="mode_name" parsley-trigger="change" class="form-control" id="mode_name" placeholder="mode Name" required>
                           </div>
                       </div>
                       <div class="widget-footer text-left">
                           <button type="submit" name="submit" value="Add course_mode" class="btn btn-primary " style="margin: 10px;">Add</button>
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
       CKEDITOR.replace('blog_desc', {

           format_tags: 'p;h1;h2;h3;h4;h5;h6'

       });
   </script>