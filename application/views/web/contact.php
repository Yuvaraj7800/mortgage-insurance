<?php $this->load->view('header'); ?>

<div class="bg-light container-xxl py-5 my-3 text-white">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-5 ">If You Have Any Query, Please Contact Us</h1>
                    <div class="card p-3 " style="background-color:#333a44; max-width:500px; >
                    <?php
                    if($this->session->flashdata('success')){
                        echo "<div class='text-bold alert alert-success'>".$this->session->flashdata('success')."<br/></div>";
                    }elseif($this->session->flashdata('failure')){
                        echo "<div class='alert alert-danger'>".$this->session->flashdata('failure')."<br/></div>";
                    }
                ?>
                
                    <form class="pt-2" action="<?= base_url('Web/contactus'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                <label for="name">First Name</label>
                                    <input type="text" class="form-control" name="fname" id="name" placeholder="First Name" style="height:45px;">
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                <label for="name">Last Name</label>
                                    <input type="text" class="form-control" name ="lname" id="name" placeholder="Last Name" style="height:45px;">
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                <label for="email">Your Email</label>
                                    <input type="email" class="form-control" name ="email" id="email" placeholder="Your Email" style="height:45px;">
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                <label for="subject">Company Name</label>
                                    <input type="text" class="form-control" name="company" id="subject" placeholder="Company Name" style="height:45px;">
                                   
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                <label for="message">Message</label>
                                    <textarea class="form-control" placeholder="Leave a message here" name="message" id="message" style="height: 100px"></textarea>
                                    
                                </div>
                            </div>
                            <div class="col-12 my-3 text-center">
                                <button style="text-center" class="shop_bt" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <iframe class="position-relative w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $this->load->view('footer'); ?>