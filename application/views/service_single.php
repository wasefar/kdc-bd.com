<?php $settings = contact_info();?>
       <!-- CONTENT START -->
        <div class="page-content  bg-white">
        
            <?php $this->load->view('inc/page_title');?>
            
            <!-- BREADCRUMB ROW -->                            
            <div class="bg-gray-light p-tb20">
            	<div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="<?php echo base_url('services');?>">Services</a></li>
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
                                <h2 class="wt-nav-title">Our Services</h2>
                                <ul class="wt-nav wt-nav-pills">
                                  
                                  <?php foreach($services as $serv){?>
                                    <li class="menu-item <?= ($current_service == $serv['url'])?'active':''; ?>"><a href="<?php echo base_url('services/'.$serv['url']);?>"><strong><?php echo $serv['title'];?></strong></a></li>
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
                            <!-- BLOG POST CAROUSEL -->
                             <div class="section-content ">
                                <div class="owl-carousel service-detail-carousel owl-btn-vertical-center owl-dots-bottom-center">
                                
                                    <div class="item">
                                        <div class="aon-thum-bx">
                                            <img src="<?php echo base_url($service->image)?>" alt="">
                                        </div>
                                    </div>
                                    
                                    <?php if(!empty($gallery)){?>
                                    <?php foreach($gallery as $gal){?>
                                    <div class="item">
                                        <div class="aon-thum-bx">
                                            <img src="<?php echo base_url($gal['image'])?>" alt="">
                                        </div>
                                    </div>
                                    <?php }?>                                    
                                    <?php }?>                                    
                                
                                </div>
                                <div class="wt-box service_details">
                                	<h2><?php echo $service->title;?></h2>
                                    <?php echo $service->details;?>
                                    
                                    
                                    <div class="">
                                       <br>
                                        <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5ad3550722309d0013d4ec4d&product=inline-share-buttons' async='async'></script>
                                        <div class="sharethis-inline-share-buttons"></div>
                                        <br>
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