<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
</head>

<body>
  <div class="container-fluid">
    <div class="container-fluid">

      <div class="card">
        <div class="card-body">
          <div class="card-header">
            <h5>View</h5>
          </div>
          <div class="card-body">
            <table id="table_id" class="table table-striped">
              <thead>
                <tr>
                  <th>SR NO</th>
                  <th>NAME</th>
                  <th>EMAIL</th>
                  <th>PHONE NUMBER</th>
                  <th>COUNTRY</th>
                  <th>ARE YOU A?</th>
                  <th>PRODUCTS</th>
                  <th>QOUTE</th>
                  <th>MESSAGE</th>

                  <th style="width: 150px;" class="text-right">OPTION</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $c = 1;
                foreach ($request_demo_view as $row) : ?>
                  <tr>
                    <td><?= $c++; ?></td>
                    <td><?= $row->name ?></td>
                    <td><?= $row->email ?></td>
                    <td><?= $row->contact_number ?></td>
                    <td><?= $row->country ?></td>
                    <td><?= $row->areyoua ?></td>
                    <td><?= $row->products ?></td>
                    <td><?= $row->qoute ?></td>
                    <td><?= $row->message ?></td>

                    <td class="text-right"><a href="<?= base_url('admin/request_demo/request_demo_edit/' . $row->id); ?>"><i class="ti ti-edit" style="font-size:40px; color:blue;"></i></a><a href="<?= base_url('admin/request_demo/request_demo_delete/' . $row->id); ?>" class="ti ti-trash" style="font-size:40px; color:red;" onclick="return confirm('Are you sure want to delete ?');"></a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script>
    jQuery(document).ready(function($) {
      $('#table_id').DataTable();
    });
  </script>

</body>

</html>