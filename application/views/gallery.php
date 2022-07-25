<link href="<?php echo base_url('assets/css/lightbox.css');?>" rel="stylesheet">
<div class="page-content">
    
    
    <?php $this->load->view('inc/page_title');?>
    
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i> Home</a></li>
                <li><?php echo $page_title;?></li>
            </ul>
        </div>
    </div>
    
    <div class="section-full p-t80 p-b50">
        <div class="container">
            
            
            
            <div class="section-head text-center">
                <h2 class="text-uppercase"><?php echo $title;?></h2>
                <div class="wt-separator-outer">
                   <div class="wt-separator style-square">
                       <span class="separator-left bg-primary"></span>
                       <span class="separator-right bg-primary"></span>
                   </div>
               </div>
            </div>
            
            
            <div class="section-content">
                <div class="row">
                    
                    
                    <div class="portfolio-wrap mfp-gallery no-col-gap">
                        
                    		
                            <?php foreach($gallery as $gal){?>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="wt-gallery-bx p-a15">
                                    <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                        <a href="javascript:void(0);">
                                            <img src="<?php echo base_url($gal['thumb']);?>" alt="">
                                        </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                
                                                <a  data-title="<?php echo $gal['caption'];?>" data-lightbox="roadtrip" href="<?php echo base_url($gal['image']);?>" class="mfp-link">
                                                    <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                            
                            
                        
                        
                        </div>
                    


                </div>
            </div>
            
            
            
        </div>
    </div>
    

</div>
<script src="<?php echo base_url();?>assets/js/lightbox.js"></script>