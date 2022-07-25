<?php $settings = contact_info();?>
        <div class="page-content  bg-white">
        
            <?php $this->load->view('inc/page_title');?>
            
            <!-- BREADCRUMB ROW -->                            
            <div class="bg-gray-light p-tb20">
            	<div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="<?php echo base_url('projects');?>">Projects</a></li>
                        <li><?php echo $title;?></li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END --> 
                              
            <!-- SECTION CONTENT -->         
            <div class="section-full  p-t80 p-b50  ">
                <div class="container  bg-white ">
                        <div class="row">
                        <!-- LEFT PART -->
                        <div class="col-md-3 col-sm-3 p-tb15">
                            
                            <!-- WHAT WE DO -->
                            <div class="wt-nav-block m-b30">
                                <h2 class="wt-nav-title">Our Projects</h2>
                                <ul class="wt-nav wt-nav-pills">
                                  
                                  <?php foreach($projects as $pro){?>
                                    <li class="menu-item <?= ($current_project == $pro['url'])?'active':''; ?>"><a href="<?php echo base_url('services/'.$pro['url']);?>"><strong><?php echo $pro['title'];?></strong></a></li>
                                    <?php }?>
                                    
                                </ul>
                            </div>   
                                                         
                            <!-- CONTACT US -->
                            <div class="widget bg-white  widget_getintuch">
                                <h4 class="widget-title">Contact us</h4>
                                <ul>
                                  <li><i class="fa fa-map-marker"></i><strong>Dhaka Office</strong> <?php echo nl2br($settings->address) ;?>  </li>
                                  <li><i class="fa fa-map-marker"></i><strong>Rangpur Office</strong> <?php echo nl2br($settings->address_rangpur) ;?>  </li>
                                  <li><i class="fa fa-phone"></i><strong>phone</strong><?php echo $settings->phone ;?></li>
                                  <li><i class="fa fa-envelope"></i><strong>email</strong><?php echo $settings->email ;?></li>
                                </ul>
                            </div>
                        </div>
                        <!-- LEFT PART --> 
                        
                        <!-- RIGHT PART -->
                        <div class="col-md-9 col-sm-9 p-tb10">
                            
                            <div class="">
                                
                                <div class="owl-carousel about-us-carousel owl-btn-vertical-center owl-dots-bottom-center">
                            
                                    <div class="item">
                                        <div class="aon-thum-bx">
                                            <img src="<?php echo base_url($project->image);?>" alt="">
                                        </div>
                                    </div>
                                    

                                </div>
                                
                            </div>
                            
                            
                            
                            <div class="">
                                
                                <div class="text-justify">
                                    <h2 class="text-uppercase"><?php echo $project->title;?></h2>
                                    <?php echo $project->details;?>
                                </div>
                                
                                
                                <div class="">
                                   <br>
                                    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5ad3550722309d0013d4ec4d&product=inline-share-buttons' async='async'></script>
                                    <div class="sharethis-inline-share-buttons"></div>
                                    <br>
                                </div>
                                
                            </div>
                            
                            
                            <div class="">
                                
                                <div class="product-block p-a30 text-white bg-black-light">
                                  <div class="row">
                                      <div class="col-md-3 col-sm-6">
                                        <h5>Date</h5>
                                        <p><?php echo $project->date;?></p>
                                    </div>
                                      <div class="col-md-3 col-sm-6">
                                        <h5>Client</h5>
                                        <p><?php echo $project->client;?></p>
                                    </div>
                                      <div class="col-md-3 col-sm-6">
                                        <h5>Project Status</h5>
                                        <p>
                                            <?php 
                                                if($project->status == 1){
                                                    echo "Ongoing";
                                                }elseif($project->status == 2){
                                                    echo "Completed";
                                                }
                                            ?>
                                        </p>
                                    </div>
                                      <div class="col-md-3 col-sm-6">
                                        <h5>Location</h5>
                                        <p><?php echo $project->location;?></p>
                                    </div>
                                  </div>
                                </div>  
                                
                            </div>
                            
                            
                            
                            <div class="section-full bg-white p-b50">
                                <div class="container_">

                                       <!-- IMAGE CAROUSEL START -->

                                        <!-- TITLE START -->
                                        <div class="section-head">
                                            <br><br>
                                            <h2 class="text-uppercase">Related Projects </h2>
                                            <div class="wt-separator-outer">
                                                <div class="wt-separator style-square">
                                                <span class="separator-left bg-primary"></span>
                                                <span class="separator-right bg-primary"></span>
                                            </div>
                                            </div>
                                        </div>
                                        <!-- TITLE END -->

                                        <!-- CAROUSEL -->
                                        <div class="section-content">
                                            <div class="owl-carousel portfolio-carousel-nogap mfp-gallery gallery owl-btn-vertical-center">

                                               
                                               <?php foreach($projects as $pro){?>
                                               
                                               <?php if($pro['id'] != $project->id){?>
                                                <!-- COLUMNS 1 -->
                                                <div class="item">
                                                    <div class="ow-portfolio">
                                                        <div class="ow-portfolio-img wt-img-overlay1 wt-img-effect zoom-slow">
                                                            <img src="<?php echo base_url($pro['thumb']);?>" alt="">
                                                            <div class="overlay-bx">
                                                                <div class="overlay-icon">
                                                                <a href="<?php echo base_url($pro['image']);?>"  class="mfp-link">
                                                                    <i class="fa fa-search-plus wt-icon-box-xs"></i>
                                                                </a>
                                                                <a href="<?php echo base_url('projects/'.$pro['url']);?>">
                                                                    <i class="fa fa-external-link wt-icon-box-xs"></i>
                                                                </a>
                                                          </div>
                                                            </div>
                                                      </div>
                                                    </div>
                                                </div>
                                                <?php }?>
                                                <?php }?>
                                                
                                                

                                            </div>
                                        </div>

                                </div>
                            </div>
                            
                            
                            
                            
                            
                         </div>
                        <!-- RIGHT PART -->
                    </div>
                </div>
             </div>
            <!-- SECTION CONTENT END -->  
            
        <!-- CONTENT END -->
        </div>
        <!-- CONTENT END -->