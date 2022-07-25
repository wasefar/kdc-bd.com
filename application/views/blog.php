
<div class="page-content">

    <?php $this->load->view('inc/page_title');?>
	
   
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

                <!-- SIDE BAR START -->
                <div class="col-md-3">

                    <?php include"inc/sidebar.php";?>

                </div>
                <!-- SIDE BAR END -->   

                <!-- LEFT PART START -->
                <div class="col-md-9">
                    
                    
                    <?php foreach($blogs as $blg){?>
                    <div class="blog-post blog-md date-style-3 clearfix">

                        <div class="wt-post-media">
                            <!--Fade slider-->
                            <div class="owl-carousel owl-fade-slider-one owl-btn-vertical-center owl-dots-bottom-right">

                                <div class="item">
                                    <div class="aon-thum-bx">
                                        <img src="<?php echo base_url($blg['thumb']);?>" alt="">
                                    </div>
                                </div>
                                

                            </div>
                            <!--fade slider END-->
                        </div>

                        <div class="wt-post-info">

                            <div class="wt-post-title ">
                                <h3 class="post-title"><a href="<?php echo base_url('blog/'.$blg['id'].'/'.$blg['url']);?>"><?php echo $blg['title'];?></a></h3>
                            </div>
                            <div class="wt-post-meta ">
                              <?php 
                                                    
                                    $dt = new DateTime($blg['date_time']);
                                    $dt->format('Y-m-d H:i:s'); 

                                ?>


                                <ul>
                                    <li class="post-date"><i class="fa fa-calendar"></i><strong><?php echo $dt->format('d M')?></strong> <span> <?php echo $dt->format('Y')?></span></li>
                                    <li class="post-author"><i class="fa fa-user"></i>By <a href="<?php echo base_url('blog/'.$blg['id'].'/'.$blg['url']);?>">kdc-bd</a> </li>
                                </ul>
                            </div>

                            <div class="wt-post-text">
                                <p><?php echo substr(strip_tags($blg['details']),0,300);?>...</p>
                            </div>

                            <div class="clearfix">
                                <div class="wt-post-readmore pull-left">
                                     <a href="<?php echo base_url('blog/'.$blg['id'].'/'.$blg['url']);?>" title="READ MORE" rel="bookmark" class="site-button-link">Read More</a>
                                </div>
                            </div>



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

                </div>
                <!-- LEFT PART END -->

            </div>
        </div>
    </div>
    <!-- SECTION CONTENT END -->

</div>
<!-- CONTENT END -->