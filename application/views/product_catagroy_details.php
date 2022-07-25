<div class="page-content">
        
    <?php $this->load->view('inc/page_title');?>

    <!-- BREADCRUMB ROW -->                            
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="<?php echo base_url('product_catagroy');?>">Product Catagroy</a></li>
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
                <h2 class="text-uppercase">KDC PRODUCT</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator style-square">
                        <span class="separator-left bg-primary"></span>
                        <span class="separator-right bg-primary"></span>
                    </div>
                </div>
            </div>
            <!-- TITLE END -->

            <div class="product Product_catagroy">
             <div class="container">


                 <div class="row">
                  <?php foreach($products as $t){?>
                   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                      <div class="product-wrap product-border-1 mb-30 singl-pro-thumb_">

                         <div class="product-img">
                            <a data-lightbox="img1" href="<?php echo base_url($t['thumb']);?>">
                                <img src="<?php echo base_url($t['thumb']);?>" alt="product">
                                <h2><?php echo $t['title'] ;?></h2>
                            </a>
                         </div>
                         <div class="product-content product-content-padding text-center">
                            <h2><a data-lightbox="img2" href="<?php echo base_url($t['thumb']);?>">
                                <?php echo $t['title'] ;?></a>
                            </h2>
                         </div>

                      </div>
                   </div>
                    <?php }?> 
                 </div>


              <div class="details_section"> 

              </div> 
                 
            </div>
         </div>
      
        </div>
    </div>
    <!-- SECTION CONTENT END -->

</div>