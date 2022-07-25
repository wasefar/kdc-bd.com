<div class="Product_catagroy">
     <div class="container">


         <div class="row">
          <?php foreach($product_catagroy as $t){?>
           <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
              <div class="product-wrap product-border-1 mb-30 singl-pro-thumb_">

                 <div class="product-img">
                    <a href="<?php echo base_url('Product_catagroy/details/'.$t['id']);?>"><img src="<?php echo base_url($t['thumb']);?>" alt="product"></a>
                 </div>
                 <div class="product-content product-content-padding text-center">
                    <h2><a href="<?php echo base_url('Product_catagroy/details/'.$t['id']);?>"><?php echo $t['title'] ;?></a></h2>
                 </div>

              </div>
           </div>
            <?php }?> 
         </div>


      <div class="details_section"> 

      </div>
         
    </div>
 </div>

