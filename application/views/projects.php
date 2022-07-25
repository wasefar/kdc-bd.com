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
                    
                    <?php foreach($projects as $pro){?>
                    
                    
                    <div class=" cat-1 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xs-100pc">
                        <div class="wt-box p-a20">
                            <div class="wt-thum-bx wt-img-effect zoom">
                                <a href="<?php echo base_url('projects/'.$pro['url']);?>"><img src="<?php echo base_url($pro['thumb']);;?>" alt=""></a>
                            </div>
                            <div class="wt-info">
                                <h4 class="wt-title m-t20"><a href="<?php echo base_url('projects/'.$pro['url']);?>"><?php echo $pro['title'];?></a></h4>
                                
                                <div class="service_shot_info">    
                                    <p><?php echo substr(strip_tags($pro['details']),0,110);?>...</p>
                                </div>
                                
                                
                                <a href="<?php echo base_url('projects/'.$pro['url']);?>" class="site-button ">More  <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <?php }?>
                    


                </div>
            </div>
            
            
            
        </div>
    </div>
    

</div>