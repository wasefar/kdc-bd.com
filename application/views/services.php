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
                    
                    <?php foreach($services as $serv){?>
                    <!-- COLUMNS 1 --> 
                    <div class="col-md-4 col-sm-4 p-tb15">
                        <div class="wt-box bg-white">
                            <div class="wt-media">
                                <a href="<?php echo base_url('services/'.$serv['url']);?>"><img src="<?php echo base_url($serv['thumb']);?>" alt=""></a>
                            </div>
                            <div class="wt-info p-tb30">
                                <h4 class="wt-title m-t0"><a href="<?php echo base_url('services/'.$serv['url']);?>"><?php echo $serv['title'];?></a></h4>
                                
                                <div class="service_shot_info">    
                                    <p><?php echo substr(strip_tags($serv['details']),0,110);?>...</p>
                                </div>
                                
                                <a href="<?php echo base_url('services/'.$serv['url']);?>" class="site-button outline   black"><strong class="text-center">Read More</strong></a>
                            </div>
                        </div>
                    </div>
                    
                    <?php }?>
                    


                </div>
            </div>
            
            
            
        </div>
    </div>
    

</div>