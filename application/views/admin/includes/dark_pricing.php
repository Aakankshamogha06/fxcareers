  <section class="pricing_sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text">
            <div class="pricing-plans-parent">
              <p class="pricing-plans">Pricing plans</p>
              <p class="check-our-white">Forex Broker Service Plans</p>
            </div>
            <div class="experience-in-forex-container">
              <p class="experience-in-forex">Explore our best-in-industry forex broker services plans<br>Specially tailored to fuel your forex trading business</p>
              <!-- <p class="experience-in-forex">Specially tailored to fuel your forex trading business</p> -->
            </div>
          </div>
        </div>
      </div>

      <div class="row pricing_row_two">
      <?php foreach ($header_data['pricings'] as $pricing) : ?>

        <div class="col-md-4">
          <div class="pricing">
            <div class="plans">
              <div class="plan">
                <div class="frame-group">
                  <div class="mt4-limited-parent">
                    <div class="mt4-limited" href="#pricing<?= $pricing->id ?>"><?=$pricing->name?></div>
                    <div class="pricing_para"><?=$pricing->description?>
                    </div>
                  </div>
                  <div class="frame-container">
                    <div class="parent">
                      <div class="get-started-price">$<?=$pricing->price?></div>
                      <div class="month">Minimum Deposit</div>
                    </div>

                    <a href="request-demo.php" class="get-started">
                      <div class="button btton">
                        Get started
                        <img class="arrow-icon" alt="" src="<?=base_url()?>public/web/images/arrow.svg">
                      </div>
                    </a>
                  </div>
                </div>
                <div class="frame-parent1"id="pricing<?= $pricing->id ?>">
                <?php foreach ($header_data['pricing_featuress'] as $pricing_features) : ?>
                            <?php if ($pricing_features->pricing_id == $pricing->id) : ?> 
                                
                            
                  <div class="tick-parent">
                  <?php if ($pricing_features->features_available == 'Yes'):?>

                     <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">
                     
                    
                    <?php else : ?>
  
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick-red.svg">
                     
                    <?php endif ;?>
                    <div class="one-time-setup-container">
                    <span><?= $pricing_features->features_available ?> <?= $pricing_features->features ?></span>
                      
                    </div>
                    
                  </div>
                  
                  <?php endif; ?> <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach;?>

        <!-- <div class="col-md-4">
          <div class="pricing">
            <div class="plans">
              <div class="plan1">
                <div class="frame-parent2">
                  <div class="mt4-limited-parent">
                    <div class="mt4-limited">Prime VVIP</div>
                    <div class="pricing_para">For experienced brokers seeking excellence.
                    </div>
                  </div>
                  <div class="frame-container">
                    <div class="parent">
                      <div class="get-started-price">$1,00,000</div>
                      <div class="month">Minimum Deposit</div>
                    </div>
                    <a href="request-demo.php" class="get-started">
                      <div class="button1 btton">
                        Get started
                        <img class="arrow-icon" alt="" src="<?=base_url()?>public/web/images/arrow-black.svg">
                      </div>
                    </a>
                  </div>
                </div>
                <div class="frame-parent4">
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">

                    <div class="one-time-setup-container">
                      <span>One time setup fee: </span>
                      <span class="span">$6000</span>
                    </div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">

                    <div class="one-time-setup-container">
                      <span>Groups + Manager + Symbols: </span>
                      <span class="span">4+2+600</span>
                    </div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">

                    <div class="one-time-setup-container">
                      <span>Trader software: </span>
                      <span class="span">MT4 branded</span>
                    </div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">

                    <div class="one-time-setup-container">
                      <span>Mobile & web terminal: </span>
                      <b>Optional</b>
                    </div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">

                    <div class="one-time-setup-container">Web API</div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">

                    <div class="one-time-setup-container">Forex CRM</div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick-red.svg">

                    <div class="one-time-setup-container">Wordpress website</div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick-red.svg">

                    <div class="one-time-setup-container">MAM plugin</div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">

                    <div class="one-time-setup-container">Bonus plugin</div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">

                    <div class="one-time-setup-container">Extended dealer</div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">

                    <div class="one-time-setup-container">Multi-level IB</div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick-red.svg">

                    <div class="one-time-setup-container">Mobile manager</div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">

                    <div class="one-time-setup-container">Liquidity manager</div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick-red.svg">

                    <div class="one-time-setup-container">Fix API manager</div>
                  </div>
                </div>
                <div class="div3">
                  <div class="recommended">Recommended</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="pricing">
            <div class="plans">
              <div class="plan">
                <div class="frame-group">
                  <div class="mt4-limited-parent">
                    <div class="mt4-limited">Prime Special</div>
                    <div class="pricing_para">Ideal for brokers looking to start strong	
                    </div>
                  </div>
                  <div class="frame-container">
                    <div class="parent">
                      <div class="get-started-price">$1,00,000</div>
                      <div class="month">Minimum Deposit</div>
                    </div>
                    <a href="request-demo.php" class="get-started">
                      <div class="button2 btton">
                        Get started
                        <img class="arrow-icon" alt="" src="<?=base_url()?>public/web/images/arrow.svg">
                      </div>
                    </a>
                  </div>
                </div>
                <div class="frame-parent1">
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">

                    <div class="one-time-setup-container">
                      <span>One time setup fee: </span>
                      <span class="span">$6000</span>
                    </div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">
                    <div class="one-time-setup-container">
                      <span>Groups + Manager + Symbols: </span>
                      <span class="span">4+2+600</span>
                    </div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">

                    <div class="one-time-setup-container">
                      <span>Trader software: </span>
                      <span class="span">MT4 branded</span>
                    </div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">

                    <div class="one-time-setup-container">
                      <span>Mobile & web terminal: </span>
                      <b>Optional</b>
                    </div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">

                    <div class="one-time-setup-container">Web API</div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">

                    <div class="one-time-setup-container">Forex CRM</div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">

                    <div class="one-time-setup-container">Wordpress website</div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">

                    <div class="one-time-setup-container">MAM plugin</div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">

                    <div class="one-time-setup-container">Bonus plugin</div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">

                    <div class="one-time-setup-container">Extended dealer</div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">

                    <div class="one-time-setup-container">Multi-level IB</div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">

                    <div class="one-time-setup-container">Mobile manager</div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">

                    <div class="one-time-setup-container">Liquidity manager</div>
                  </div>
                  <div class="tick-parent">
                    <img class="tick-icon" alt="" src="<?=base_url()?>public/web/images/tick.svg">

                    <div class="one-time-setup-container">Fix API manager</div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>