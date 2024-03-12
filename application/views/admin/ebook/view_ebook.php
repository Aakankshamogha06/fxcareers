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
            <a href="<?= base_url('admin/ebook/add_ebook'); ?>">
              <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add</button>
            </a>
          </div>
          <div class="card-body">
            <table id="table_id" class="table">
              <thead>
                <tr>
                  <th>SR NO</th>
                  <th>E-BOOK NAME</th>
                  <th>E-BOOK IMAGE</th>
                  <th>E-BOOK PDF</th>
                  <th>E-BOOK PAGES</th>
                  <th>E-BOOK TYPE</th>
                  <th style="width: 150px;" class="text-right">OPTION</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $c = 1;
                foreach ($ebook_view as $row) : ?>
                  <tr>
                    <td><?= $c++; ?></td>
                    <td><?= $row->ebook_name ?></td>
                    <td> 
                      <?php if ($row->ebook_image) { ?>
                        <img src="<?php echo base_url('uploads/ebook_image/') . $row->ebook_image; ?>" style="width:50px;height:80px">
                      <?php } ?>
                    </td>
                    <td>
                    <?php if ($row->ebook_pdf) { ?>                        
        <a href="<?= base_url('uploads/ebook_pdf/') . $row->ebook_pdf; ?>" target="_blank">
            <i class="fas fa-file-pdf" style="height:20px; width:20px;"></i> <br>View E-Book
        </a>                      
    <?php } ?>
                    </td>
                    <td><?= $row->ebook_pages ?></td>
                    <td><?= $row->ebook_type ?></td>

                    <td class="text-right"><a href="<?= base_url('admin/ebook/ebook_edit/' . $row->id); ?>" class="ti ti-edit" style="font-size:40px; color:blue;"style="font-size:15px; padding:0px;"></a><a href="<?= base_url('admin/ebook/ebook_delete/' . $row->id); ?>" class="ti ti-trash" style="font-size:40px; color:red;" onclick="return confirm('Are you sure want to delete ?');"style="font-size:15px; padding:0px;"></a></td>
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

