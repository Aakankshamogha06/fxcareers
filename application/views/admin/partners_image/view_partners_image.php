<div class="container-fluid">
  <div class="container-fluid">

    <div class="card">
      <div class="card-body">
        <div class="card-header">
        <h5>View partners_image</h5>
            <a href="<?= base_url('admin/partners_image/add_partners_image'); ?>">
              <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add</button>
            </a>
          </div>
          <div class="card-body">
            <table id="table_id" class="table table-striped">
              <thead>
                <tr>
                  <th>SR NO</th>
                  <th>PARTNER NAME</th>
                  <th>PARTNER IMAGE</th>
                  <th style="width: 150px;" class="text-right">OPTION</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $c = 1;
                foreach ($partners_image_view as $row) : ?>
                  <tr>
                    <td><?= $c++; ?></td>
                    
                    <td><?= $row->partners_id ?></td>
                    <td>
                      <?php if ($row->partners_image) { ?>
                        <img src="<?php echo base_url('uploads/') . $row->partners_image; ?>" style="width:50px;height:80px">
                      <?php } ?>
                      </td>
                    <td class="text-right"><a href="<?= base_url('admin/partners_image/partners_image_edit/' . $row->id); ?>" class="btn btn-info btn-flat"style="font-size:15px; padding:0px;">Edit</a><a href="<?= base_url('admin/partners_image/partners_image_delete/' . $row->id); ?>" class="btn btn-danger btn-flat" onclick="return confirm('Are you sure want to delete ?');"style="font-size:15px; padding:0px;">Delete</a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>

            </table>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  jQuery(document).ready(function($) {
    $('#table_id').DataTable();
  });
</script>
<style>
  .container-fluid{
    width:auto;
    position: relative;
    clear: both;
    overflow: scroll;
  }
</style>