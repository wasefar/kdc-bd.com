
<div class="page-content">

    <?php include'inc/page_title.php';?>
                             
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="<?php echo base_url();;?>"><i class="fa fa-home"></i> Home</a></li>
                <li><?php echo $title;?></li>
            </ul>
        </div>
    </div>
    
    <div class="section-full p-t80 p-b50">
        <div class="container">
            <div class="row">

                <div class="col-md-3">

                    <?php include"inc/sidebar.php";?>

                </div>
                
                <div class="col-md-9">
                    
                    
                    <?php foreach($trainings as $row){?>
                    
                    
                    
                    
                    <div class="blog-post blog-lg date-style-1">
                        <div class="wt-post-info p-b30 p-m30 bg-white">

                            <div class="wt-post-title ">
                                <h3 class="post-title"><a href="<?php echo base_url('training/d/'.$row['id']);?>"><?php echo $row['title'];?></a></h3>
                            </div>
                            <div class="wt-post-meta ">
                                <ul>
                                <li class="post-date"> <i class="fa fa-calendar"></i><strong>Date: <?php echo $row['date_time'];?></strong> </li>
                                <li class="post-author"><i class="fa fa-user"></i><strong>Duration: <?php echo $row['duration'];?> </strong></li>
                                <li class="post-comment"><i class="fa fa-map-marker"></i> <strong>No. of Classes: <?php echo $row['no_class'];?></strong>
                                </li>
                                <li class="post-comment"><i class="fa fa-map-marker"></i> <strong>Class Schedule: <?php echo $row['class_schedule'];?></strong>
                                </li>
                              </ul>
                            </div>
                            <div class="wt-post-text">
                                <p><?php echo substr(strip_tags($row['introduction']),0,300);?>...</p> 
                            </div>
                            
                            <div class="clearfix">
                            <div class="wt-post-readmore pull-left">
                                 <a href="<?php echo base_url('training/d/'.$row['id']);?>" title="READ MORE" rel="bookmark" class="site-button-link">Read More</a>
                            </div>
                            
                        </div>


                        </div>
                    </div>
                    
                    
                    
                    
                    
                    <?php }?>
                    
                    
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

                </div>

            </div>
        </div>
    </div>

</div>