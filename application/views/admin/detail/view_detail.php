<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <style>
      table.table td {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h5 >View</h5>
                        <a href="<?= base_url('admin/detail/add_detail'); ?>">
                            <button type="button" class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add</button>
                        </a>
                    </div>
                    <div class="card-body">
                        <table id="table_id" class="table">
                            <thead>
                                <tr>
                                    <th>SR NO</th> 
                                    <th>COURSE NAME</th> 
                                    <th>COURSE IMAGE</th>
                                    <th>COURSE CATEGORY</th>
                                    <th>COURSE AUTHOR</th>
                                    <th>COURSE LANGUAGE</th>
                                    <th>COURSE MODE</th>
                                    <th>COURSE LESSON</th>
                                    <th>COURSE DURATION</th>
                                    <th>COURSE PRICE</th>
                                    <th>DESCRIPTION</th>
                                    <th>LONG DESCRIPTION </th>
                                    <th style="width: 150px;" class="text-right">OPTION</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center;">
                                <?php
                                $c = 1;
                                foreach ($detail_view as $row) : ?>
                                    <tr>
                                        <td><?= $c++; ?></td>
                                        <td><?= $row->course_name ?></td>
                                        <td>
                                            <?php if ($row->course_image) { ?>
                                                <img src="<?php echo base_url('uploads/course/') . $row->course_image; ?>" style="width:50px;height:80px">
                                            <?php } ?>
                                        </td>
                                        <td><?= $row->category ?></td>
                                        <td><?= $row->author ?></td>
                                        <td><?= $row->language ?></td>
                                        <td><?= $row->mode ?></td>
                                        <td><?= $row->lesson ?>Lessons</td>
                                        <td><?= $row->duration ?>Hours</td>
                                        <td>USD<?= $row->price ?></td>
                                        <td><?= substr($row->description,0,20).'...' ?></td>
                                        <td><?= substr($row->long_description,0,20). '...' ?></td>
                                        <td class="text-right">
                                            <a href="<?= base_url('admin/detail/detail_edit/' . $row->id); ?>" class="ti ti-edit" style="font-size:40px; color:blue;" style="font-size:15px; padding:0px;"></a>
                                            <a href="<?= base_url('admin/detail/detail_delete/' . $row->id); ?>" class="ti ti-trash" style="font-size:40px; color:red;" onclick="return confirm('Are you sure want to delete ?');" style="font-size:15px; padding:0px;"></a>
                                        </td>
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
