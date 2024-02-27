   <!-- [ Main Content ] end -->
   <div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">SUB MENU</h5>
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="<?= base_url('sub_menu/sub_menu_submit_data'); ?>"enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                
                           
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                <label for="menu" class="form-label"> MENU NAME <span class="text-danger">*</span></label>
                                    <select id="menu" class="form-control" name="menu">
                                        <option value="">SELECT MENU NAME</option>
                                        <?php
                                        $role_fetch_data = $this->sub_menu_model->role_fetch();
                                        foreach ($role_fetch_data as $data) { ?>
                                            <option value="<?php echo $data['id']; ?>"><?php echo $data['menu_name']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">Sub Menu<span class="text-danger">*</span> </label>
                                    <textarea type="text" name="sub_menu" parsley-trigger="change" class="form-control" id="sub_menu" placeholder="SEO Description " required></textarea>
                                </div>
                            

                    </div>
                    <div class="widget-footer text-left">

                        <button type="submit" name="submit" value="Add sub_menu" class="btn btn-primary " style="margin: 10px;">Add SUB MENU category</button>
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
           CKEDITOR.replace('SUB MENU_desc', {

format_tags: 'p;h1;h2;h3;h4;h5;h6'

});

</script>