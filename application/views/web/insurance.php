<?php $this->load->view('header'); ?>
  

    <section class="slider_section my-3 bg-light">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1 class="text-dark text-center">
                    Mortgage Leads !
                    </h1>
                    <div class="card p-3 " style="background-color:#333a44; >
                    <form action="POST">
                 <div class="row text-white">
                <div class="col-6">
                <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder=" Name" style="height:45px;" required>
                </div>   
                </div>
                <div class="col-6">
                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder=" Email" style="height:45px;" required>
                </div>
                </div>
            </div>

            <div class="row text-white">
                <div class="col-6">
                <div class="form-group">
                <label for="phone">Phone No.</label>
                <input type="text" name="phone" id="phone" class="form-control"  placeholder=" Phone No." style="height:45px;"required>
                </div>
                </div>
                <div class="col-6">
                <div class="form-group">
                <label for="year">Year</label>
                <input type="text" name="year" id="year"  placeholder=" Year" style="height:45px;"class="form-control" required>
                </div>
                </div>
            </div>
            
            <div class="row text-white">
                <div class="col-6">
                <div class="form-group">
                <label for="make">Make</label>
                <input type="text" name="make" id="make" class="form-control" placeholder=" Make" style="height:45px;"required>
                </div>
                </div>
                <div class="col-6">  
                <div class="form-group">
                <label for="model">Model</label>
                <input type="text" name="model" id="model" class="form-control" placeholder=" Model" style="height:45px;" required>
                </div>
                </div>
            </div>
            
            
            

            <div class="row text-white">
                <div class="col-6">
                <div class="form-group">
                <label for="primary_use">Primary Use</label>
                <input type="text" name="primary_use" id="primary_use" class="form-control" placeholder=" Primary User" style="height:45px;" required>
                </div>
                </div>
                <div class="col-6">
                <div class="form-group">
                <label for="annual_mileage">Annual Mileage</label>
                <input type="text" name="annual_mileage" id="annual_mileage"  placeholder=" Annual Mileage" style="height:45px;"class="form-control" required>
                </div>
                </div>
             </div>

            
            
             <div class="col-12 text-center">
                                <button style="text-center" class="shop_bt" type="submit">Submit</button>
                            </div>
              </form>
                    <!-- <div class="btn-box text-center ml-5 mb-3">
                      
                      <a href="<?= base_url('Web/insurance'); ?>" class="btn-2">
                        Get Started 
                      </a>
                    </div> -->

                    </div>
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    
                    <div class=" col-lg-10 mx-auto">
                        <p class="text-justify" style="font-family:roboto;">Mortgage leads are potential customers who have expressed interest in obtaining a mortgage loan to purchase or refinance a home. These leads can be generated through various means, including online inquiries, real estate listings, or referrals. Mortgage professionals, such as lenders and brokers, often use these leads to identify potential clients and offer their services. Effective lead generation and management are crucial in the mortgage industry for connecting with individuals seeking financing solutions.</p>
                       
                      <div class="img-box text-center">
                        <img src="<?= base_url(); ?>assets\images\images1.jpg" style="maxt-height:600px;" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section>
    

<?php $this->load->view('footer'); ?>