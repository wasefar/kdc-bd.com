<?php $settings = contact_info();?> 
      <div class="page-content">
       
           <?php $this->load->view('inc/page_title');?>
       
        
            <!-- BREADCRUMB ROW -->                            
            <div class="bg-gray-light p-tb20">
            	<div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i> Home</a></li>
                        <li><?php echo $title;?></li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END -->
             
            <!-- SECTION CONTENTG START -->
            <div class="section-full p-t80 p-b50">
                <div class="container">
                
                	<!-- CONTACT DETAIL BLOCK -->
                    <div class="section-content m-b30">
 
                        <div class="row">
                        
                        
                        	
                            <div class="col-md-4 col-sm-12 m-b30">
                                <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                                    <div class="icon-sm text-white m-b10"><i class="iconmoon-travel"></i></div>
                                    <div class="icon-content">
                                        <h5 class="text-white">Dhaka Office</h5>
                                        <p class="text-gray-dark"><?php echo nl2br($settings->address) ;?></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-12 m-b30">
                                <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                                    <div class="icon-sm text-white m-b10"><i class="iconmoon-travel"></i></div>
                                    <div class="icon-content">
                                        <h5 class="text-white">Rangpur Office</h5>
                                        <p class="text-gray-dark"><?php echo nl2br($settings->address_rangpur) ;?></p>
                                    </div>
                                </div>
                            </div>
                        
                            
                            <div class="col-md-4 col-sm-12 m-b30">
                                <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                                    <div class="icon-sm text-white m-b10"><i class="iconmoon-email"></i></div>
                                    <div class="icon-content">
                                       <h5 class="text-white">Phone number</h5>
                                        <p class="text-gray-dark"><?php echo $settings->phone ;?></p>
                                        <br>
                                        <h5 class="text-white">Email address</h5>
                                        <p class="text-gray-dark"><?php echo $settings->email ;?></p>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
          
                    </div>
                    
                    <!-- GOOGLE MAP & CONTACT FORM -->
                    <div class="section-content m-b50">
                        <div class="row">
                        
                        	<!-- LOCATION BLOCK-->
                            <div class="wt-box col-md-6">
                            
                                 <h4 class="text-uppercase">Location</h4>
                                <div class="wt-separator-outer m-b30">
                                   <div class="wt-separator style-square">
                                       <span class="separator-left bg-primary"></span>
                                       <span class="separator-right bg-primary"></span>
                                   </div>
                               </div>      
                                                        

                                <div class="gmap-outline m-b30">
                                    <?php echo $map['js']; ?>
                                    <?php echo $map['html']; ?>
                                </div>
                                    
                            </div>

                            <!-- CONTACT FORM-->
                            <div class="wt-box col-md-6">
                            
                                <h4 class="text-uppercase">Contact Form </h4>
                                <div class="wt-separator-outer m-b30">
                                    <div class="wt-separator style-square">
                                       <span class="separator-left bg-primary"></span>
                                       <span class="separator-right bg-primary"></span>
                                    </div>
                                    
                                </div>
                            
                            	<div class="p-a30 bg-gray">
                            
                                    <form id="contact_form" class="cons-contact-form" method="post" action="<?php echo base_url('contact/m');?>">
                            
                                        <div class="row">
                                        
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                        <input name="name" required="" class="form-control" placeholder="Name" type="text">
                                                    </div>
                                                </div>
                                            </div>
            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                        <input name="email" class="form-control" required="" placeholder="Email" type="email">
                                                    </div>
                                                </div>
            
                                            </div>
            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon v-align-t"><i class="fa fa-pencil"></i></span>
                                                        <textarea name="message" rows="8" class="form-control " required="" placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                            </div>
            
                                            <div class="col-md-12">
                                                <button name="submit" type="submit" value="Submit" class="site-button  m-r15">Submit  <i class="fa fa-angle-double-right"></i></button>
<!--                                                <button name="Resat" type="reset" value="Reset" class="site-button ">Reset  <i class="fa fa-angle-double-right"></i></button>-->
                                            </div>
            
                                        </div>
    
                                    </form>
                                
                                </div>
                        
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
           </div>
            <!-- SECTION CONTENT END -->
            
        </div>