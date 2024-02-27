<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">MENU</h5>
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="<?= base_url('menu/menu_submit_data'); ?>">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="form-row">
                                <div class="form-group col-md-6">

                                    <label for="inputEmail4" class="form-label">menu Name<span class="text-danger">*</span> </label>
                                    <input type="text" name="menu_name" parsley-trigger="change" class="form-control" id="menu_name" placeholder="Name" required>

                                </div>


                            </div>



                            <button type="submit" name="submit" value="Add menu" class="btn btn-primary " style="margin: 10px;">Add menu</button>
                            <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>