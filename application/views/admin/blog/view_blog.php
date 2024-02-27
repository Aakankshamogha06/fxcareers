<div class="container-fluid">
  <div class="container-fluid">

    <div class="card">
      <div class="card-body">
        <div class="card-header">
          <h5>View blog</h5>
          <a href="<?= base_url('admin/blog/add_blog'); ?>">
            <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add blog</button>
          </a>
        </div>
        <div class="card-body">
          <table id="table_id" class="table table-striped">
            <thead>
              <tr>
                <th>SR NO</th>
                <th>BLOG NAME</th>
                <th style="width: 150px;" class="text-right">OPTION</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $c = 1;
              foreach ($blog_view as $row) : ?>
                <tr>
                  <td><?= $c++; ?></td>
                  <td><?= $row->blog_name ?></td>

                  <td class="text-right"><a href="<?= base_url('admin/blog/blog_edit/' . $row->id); ?>"><i class="btn btn-info btn-flat" style="font-size:15px; padding:0px; ">
                                            Edit </i></a><a href="<?= base_url('admin/blog/blog_delete/' . $row->id); ?>" class="btn btn-danger btn-flat" style="font-size:15px; padding:0px;" onclick="return confirm('Are you sure want to delete ?');">Delete</a></td>
                </tr>
              <?php endforeach; ?>
            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>
</div>
