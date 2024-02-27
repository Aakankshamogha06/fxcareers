<div class="container-fluid">
  <div class="container-fluid">

    <div class="card">
      <div class="card-body">
        <div class="card-header">
          <h5>View page</h5>
          <a href="<?= base_url('admin/page/add_page'); ?>">
            <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add page</button>
          </a>
        </div>
        <div class="card-body">
          <table id="table_id" class="table table-striped">
            <thead>
              <tr>
                <th>SR NO</th>
                <th>PAGE NAME</th>
                
                <th style="width: 150px;" class="text-right">OPTION</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $c = 1;
              foreach ($page_view as $row) : ?>
                <tr>
                  <td><?= $c++; ?></td>
                  <td><?= $row->page_name ?></td>
                 


                  <td class="text-right"><a href="<?= base_url('admin/page/page_edit/' . $row->id); ?>"><i class="btn btn-info btn-flat" style="font-size:15px; padding:0px; ">
                                            Edit </i></a><a href="<?= base_url('admin/page/page_delete/' . $row->id); ?>" class="btn btn-danger btn-flat" style="font-size:15px; padding:0px;" onclick="return confirm('Are you sure want to delete ?');">Delete</a></td>
                </tr>
              <?php endforeach; ?>
            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>
</div>
