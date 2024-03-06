   <!-- [ Main Content ] end -->
   <div class="container-fluid">
       <div class="container-fluid">
           <div class="card">
               <div class="card-body">
                   <h5 class="card-title fw-semibold mb-4">TOPIC</h5>

                   <form class="form-horizontal" method="post" action="<?= base_url('topic/topic_submit_data'); ?>" enctype="multipart/form-data">
                       <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                       

                       <div class="form-row">
                           
                           <div class="form-group col-md-12">
                               <label for="course_id" class="form-label">Course Type <span class="text-danger">*</span></label>
                               <select id="course_id" class="form-control" name="course_id">
                                   <option value="">Select course type</option>
                                   <?php
                                    $course_fetch_data = $this->topic_model->course_fetch();
                                    foreach ($course_fetch_data as $data) { ?>
                                       <option value="<?php echo $data['id']; ?>"><?php echo $data['course_type']; ?></option>
                                   <?php } ?>

                               </select>
                           </div>

                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">Topic name<span class="text-danger">*</span> </label>
                               <input type="text" name="topic" parsley-trigger="change" class="form-control" id="topic" placeholder="Topic name " required>
                                    </div>
                       </div>

                       <div class="widget-footer text-left">

                           <button type="submit" name="submit" value="Add topic" class="btn btn-primary " style="margin: 10px;">Add</button>
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