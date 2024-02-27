<div class="container-fluid">
    <div class="container-fluid">


        <div class="card">
            <div class="card-body">
                <?php foreach ($view_slider as $row) :

                ?>
                    <div class="card-header">
                        <h5>Edit slider</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <form class="form-horizontal" method="post" action="<?= base_url('slider/slider_update_data'); ?>">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <input type="hidden" name="id" value="<?= $row->id ?>">
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4" class="form-label">Slider Image <span class="text-danger">*</span> </label>
                                <input type="file" name="slider_image" parsley-trigger="change" class="form-control" id="slider_image" placeholde="Blog Image  " required>
                            </div>



                            <div class="widget-footer text-left">

                                <button type="submit" name="submit" value="update slider" class="btn btn-primary " style="margin: 10px;">update slider</button>
                                <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                            </div>
                    </form>
            </div>
        </div>
    </div>
    <!-- [ sample-page ] end -->
</div>
<!-- [ Main Content ] end -->
<?php endforeach; ?>

</div>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>



<script>
    CKEDITOR.replace('long_desc', {

        format_tags: 'p;h1;h2;h3;h4;h5;h6'

    });
</script>