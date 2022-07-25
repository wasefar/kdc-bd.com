<!-- CONTENT START -->
<div class="page-content">

	
    <?php $this->load->view('inc/page_title');?>
	
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="<?php echo base_url();;?>"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="<?php echo base_url('blog');?>">Blog</a></li>
                <li><?php echo $title;?></li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->                   

    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">
            <div class="row">

                <!-- SIDE BAR START -->
                <div class="col-md-3">

                    <?php include"inc/sidebar.php";?>

                </div>
                <!-- SIDE BAR END -->   

                <!-- LEFT PART START -->
                <div class="col-md-9">
                    
                    
                    <div class="blog-post date-style-3 blog-post-single">

                        <div class="wt-post-media">
                            <!--Fade slider-->
                            <div class="owl-carousel owl-fade-slider-one owl-btn-vertical-center owl-dots-bottom-right">

                                <div class="item">
                                    <div class="aon-thum-bx">
                                        <img src="<?php echo base_url($blog->image);?>" alt="">
                                    </div>
                                </div>
                                

                            </div>
                            <!--fade slider END-->
                        </div>

                        <div class="post-description-area p-t30">

                            <div class="wt-post-title ">
                                <h3 class="post-title"><?php echo $blog->title;?></h3>
                            </div>
                            <div class="wt-post-meta ">
                             
                             <?php 
                                                    
                                    $dt = new DateTime($blog->date_time);
                                    $dt->format('Y-m-d H:i:s'); 

                                ?>
                             
                              <ul>
                                <li class="post-date"> <i class="fa fa-calendar"></i><strong><?php echo $dt->format('d M')?></strong> <span> <?php echo $dt->format('Y')?></span> </li>
                                <li class="post-author"><i class="fa fa-user"></i><a href="javascript:void(0);">By <span>kdc-bd</span></a> </li>
                              </ul>
                            </div>

                            <div class="wt-post-text">
                                <?php echo $blog->details;?>
                            </div>
                            
                            <div class="">
                               <br>
                                <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5ad3550722309d0013d4ec4d&product=inline-share-buttons' async='async'></script>
                                <div class="sharethis-inline-share-buttons"></div>
                                <br>
                            </div>
                            



                        </div>

                    </div>
                    
                    
                    
                    

                </div>
                <!-- LEFT PART END -->

            </div>
        </div>
    </div>
    <!-- SECTION CONTENT END -->

</div>
<!-- CONTENT END -->