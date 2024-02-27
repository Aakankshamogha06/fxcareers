<section class="talk_to_us_sec">
      <div class="container ContactFormContainer ">
  
        <div class="row Talk">
          <div class="col-md-7">
            <div class="TalkUsText">
              <h2>Talk to us!</h2>
              <br>
              <span>Get your exclusive invite to speak with our team of Forex experts!</span>
            </div>
            <form method="POST" action="<?= base_url('admin/talk_to_us/submit_form'); ?>" enctype="multipart/form-data"class="row g-2 needs-validation form-style" novalidate>
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
              <div class="col-md-6 input-style">
                <label for="validationCustom01" class="form-label">First name</label>
                <input type="text" placeholder="First Name" name= "name" class="form-control" id="validationCustom01">
              </div>
              <div class="col-md-6 input-style">
                <label for="validationCustom02" class="form-label">E-mail</label>
                <input type="email" placeholder="E-mail" name="email" class="form-control" id="validationCustom02" required>
              </div>
              <div class="col-md-6 input-style">
                <label for="validationCustom03" class="form-label">Phone No.</label>
                <input type="text" name="phone_number" class="form-control" placeholder="Phone No." id="validationCustom03" required>
                <div class="invalid-feedback">
                  Please provide a valid Phone no.
                </div>
              </div>
              <div class="col-md-6 input-style">
                <label for="validationCustom03" class="form-label">Location</label>
                <input type="text" name="location" class="form-control" placeholder="Location" id="validationCustom03" required>
                <div class="invalid-feedback">
                  Please provide a valid Location.
                </div>
              </div>
              <div class="col-md-12 input-style ">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea placeholder="Message" name="message" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
              </div>
  
              <div class="col-12">
                <button class="btn btn-primary submit-btn" name="submit" type="submit">Submit form</button>
              </div>
            </form>
          </div>
          <div class="col-md-4">
            <img   class="talk_img" src="<?=base_url()?>public/web/images/Image.webp" />
          </div>
        </div>
  
      </div>
    </section>