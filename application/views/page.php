<div class="page-content">
    <?php $title = $page_title;?>
    <?php include'inc/page_title.php';?>
                           
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i> Home</a></li>
                <li><?php echo $page_title;?></li>
            </ul>
        </div>
    </div>       

    <!-- SECTION CONTENT -->
    <div class="section-full p-t80 p-b50">
        <div class="container">
           
           <div class="col-md-3">
               <?php include"inc/sidebar.php";?>
           </div>
            
            <div class="col-md-9">
                <div class="section-head">
                   <div class="text-center">
                    <h2 class="text-uppercase"><?php echo $page_title;?></h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-square">
                            <span class="separator-left bg-primary"></span>
                            <span class="separator-right bg-primary"></span>
                        </div>
                    </div>
                    </div>

                    <?php echo $page_details;?>

                </div>
            </div>
            
            
        </div>
    </div>
    <!-- SECTION CONTENT END -->

</div>