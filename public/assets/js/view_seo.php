<div class="container-fluid">
  <div class="container-fluid">

    <div class="card">
 <div class="card-body">
        <div class="card-header">
          <h5>View seo</h5>
          <a href="<?= base_url('admin/seo/add_seo'); ?>">
            <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add seo</button>
          </a>
        </div>

          <table id="table_id" class="table table-striped">
            <thead>
              <tr>
                <th>SR NO</th>
                <th>PAGE NAME</th>
                <th>URL</th>
                <th>KEYWORDS</th>
                <th>TITLE</th>
                <th>META DESCRIPTION</th>
                <th style="width: 150px;" class="text-right">OPTION</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $c = 1;
              foreach ($seo_view as $row) : ?>
                <tr>
                  <td><?= $c++; ?></td>
                  <td><?= $row->page_name ?></td>
                  <td><?=$row->url?></td>
                  <td><?=$row->keywords?></td>
                  <td><?=$row->title?></td>
                  <td><?=$row->meta_description?></td>


                  <td class="text-right"><a href="<?= base_url('admin/seo/seo_edit/' . $row->id); ?>"><i class="ti ti-edit" style="font-size:40px; color:blue;" style="font-size:15px; padding:0px; ">
                                             </i></a><a href="<?= base_url('admin/seo/seo_delete/' . $row->id); ?>" class="ti ti-trash" style="font-size:40px; color:red;" style="font-size:15px; padding:0px;" onclick="return confirm('Are you sure want to delete ?');"></a></td>
                </tr>
              <?php endforeach; ?>
            </tbody>

          </table>
        </div>
      </div>
  </div>
</div>
<script>
  jQuery(document).ready(function($) {
    $('#table_id').DataTable();
  });
</script>