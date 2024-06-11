<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FXCAREERS</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?=base_url()?>public/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?=base_url()?>public/admin/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>public/admin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?=base_url()?>public/admin/assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?=base_url()?>public/admin/assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>public/admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?=base_url()?>public/admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?=base_url()?>public/admin/assets/images/favicon.png" />
  </head>

<body class="">

    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>




    <?php include('include/navbar.php'); ?>

    <?php include('include/sidebar.php'); ?>

    <?php $this->load->view($view); ?>
    <script src="<?=base_url()?>public/admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?=base_url()?>public/admin/assets/vendors/chart.js/chart.umd.js"></script>
    <script src="<?=base_url()?>public/admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?=base_url()?>public/admin/assets/js/off-canvas.js"></script>
    <script src="<?=base_url()?>public/admin/assets/js/misc.js"></script>
    <script src="<?=base_url()?>public/admin/assets/js/settings.js"></script>
    <script src="<?=base_url()?>public/admin/assets/js/todolist.js"></script>
    <script src="<?=base_url()?>public/admin/assets/js/jquery.cookie.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?=base_url()?>public/admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>
