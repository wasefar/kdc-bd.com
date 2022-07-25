<div class="page-content">
        
    <?php $this->load->view('inc/page_title');?>

    <!-- BREADCRUMB ROW -->                            
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="<?php echo base_url('team');?>">Our Team</a></li>
                <li><?php echo $page_title;?></li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->         

    <!-- SECTION CONTENT -->
    <div class="section-full p-t80 p-b50">
        <div class="container">
           
           
            
            <div class="row">
                <div class="col-md-4 col-sm-4  ">
                    <div class="wt-team-full-media">
                        <div class="wt-team-one bg-white p-a10">
                            <div class="wt-team-media">
                                <a href="javascript:void(0);"><img src="<?php echo base_url($team->image);?>" alt="" width="100%"></a>
                            </div>
                            <div class="wt-team-info text-center p-a10 p-t30">
                                <ul class="social-icons social-square social-dark social-md">
                                    <li><a target="_blank" href="<?php echo $team->facebook;?>" class="fa fa-facebook"></a></li>
                                    <li><a target="_blank" href="<?php echo $team->twitter;?>" class="fa fa-twitter"></a></li>
                                    <li><a target="_blank" href="<?php echo $team->linkedin;?>" class="fa fa-linkedin"></a></li>
                                </ul>
                            </div>
                        </div>   
                    </div>

                </div>
                <div class="col-md-7 col-sm-7">
                    <div class="wt-info wt-team-full-info">
                        <h3 class="wt-title m-t0"><a href="javascript:void(0);"><?php echo $team->name;?></a></h3>
                        <div class="wt-member-position m-tb10"><strong><?php echo $team->designation;?></strong></div>
                        
                        <div class="team-details">
                            <?php echo $team->details;?>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
    <!-- SECTION CONTENT END -->

</div>