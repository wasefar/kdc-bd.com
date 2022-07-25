<div class="page-content">
        
    <?php $this->load->view('inc/page_title');?>

    <!-- BREADCRUMB ROW -->                            
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i> Home</a></li>
                <li><?php echo $page_title;?></li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->         

    <!-- SECTION CONTENT -->
    <div class="section-full p-t80 p-b50">
        <div class="container">
           
           
            <!-- TITTLE START -->
            <div class="section-head text-center">
                <h2 class="text-uppercase">Our team</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator style-square">
                        <span class="separator-left bg-primary"></span>
                        <span class="separator-right bg-primary"></span>
                    </div>
                </div>
            </div>
            <!-- TITLE END -->

            <?php echo $team_mod;?>
            
            
        </div>
    </div>
    <!-- SECTION CONTENT END -->

</div>