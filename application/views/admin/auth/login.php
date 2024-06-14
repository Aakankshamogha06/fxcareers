<link rel="stylesheet" href="<?=base_url()?>public/admin/assets/css/style.css">
<div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo" style="text-align: center;">
                  <img src="<?=base_url()?>public/web/assets/img/logo/logo.png">
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
				<?php echo form_open(base_url('admin/auth/login')); ?>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="mt-3 d-grid gap-2">
				  <input  class="btn btn-block  mb-4" style="background-color:#ffc107;" type="submit" name="submit" id="submit">
                    <!-- <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN IN</a> -->
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <!-- <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div> -->
                    <a href="#" class="auth-link " style="color: #ffc107;">Forgot password?</a>
                  </div>
                  
                  <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="<?=base_url()?>register" class="text-primary"style="color: #ffc107;">Create</a>
                  </div>
				  <?php echo form_close(); ?>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>