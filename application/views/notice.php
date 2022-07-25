<!-- CONTENT START -->
<div class="page-content">

    <?php $this->load->view('inc/page_title');?>

    <!-- BREADCRUMB ROW -->                            
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="<?php echo base_url();;?>"><i class="fa fa-home"></i> Home</a></li>
                <li><?php echo $title;?></li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->                   

    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">
            <div class="row">
  

                <!-- LEFT PART START -->
                
                    
                    
                    <?php foreach($notices as $blg){?>
                    
                    <?php 
                                                    
                        $dt = new DateTime($blg['date_time']);
                        $dt->format('Y-m-d H:i:s'); 

                    ?>
                    <div class="col-md-6">
                    <div class="drop-shadow lifted single_notice">
                       
                        <div class="notice_pin">
                            <img src="<?php echo base_url('assets/images/pin.png');?>" alt="">
                        </div>
                        <div class="notice_title">
                            <h2>
                                <?php echo $blg['title'];?>
                                <br>
                                <span><?php echo $dt->format('d M Y')?></span>
                            </h2>
                        </div>
                        <p><?php echo $blg['details'];?></p>
                    </div>
                    
                    </div>
                    
                    
                    
                    
                    <?php }?>
                    
                    
                    <!-- PAGINATION START -->
                    <div class="pagination-bx clearfix hidden">
                        <ul class = "custom-pagination pagination">
                           <li><a href = "#">&laquo;</a></li>
                           <li class = "active"><a href = "#">1</a></li>
                           <li><a href = "#">2</a></li>
                           <li><a href = "#">3</a></li>
                           <li><a href = "#">4</a></li>
                           <li><a href = "#">5</a></li>
                           <li><a href = "#">&raquo;</a></li>
                        </ul>
                    </div>
                    <!-- PAGINATION END -->

                
                <!-- LEFT PART END -->

            </div>
        </div>
    </div>
    <!-- SECTION CONTENT END -->

</div>
<!-- CONTENT END -->