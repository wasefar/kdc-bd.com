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
    
    <div class="section-full p-t80 p-b50">
        <div class="container">
            <div class="row">
                
                <div class="col-md-3">

                    <?php include"inc/sidebar.php";?>

                </div>
                
                <div class="col-md-9">
                    
                    
                    
                    <div class="text-center">
                        <h2 class="text-uppercase"><?php echo $training->title;?></h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                    </div>
                    
                    <?php if(!empty($training->date_time)){?>
                    <div class="section-head_ training_desc">
                        <h4 class="">Date : <span><?php echo $training->date_time;?></span></h4>
                    </div>
                    <?php }?>
                    
                    <?php if(!empty($training->duration)){?>
                    <div class="section-head_ training_desc">
                        <h4 class="">Duration : <span><?php echo $training->duration;?></span></h4>
                    </div>
                    <?php }?>
                    
                    <?php if(!empty($training->no_class)){?>
                    <div class="section-head_ training_desc">
                        <h4 class="">No. of Classes/ Sessions : <span><?php echo $training->no_class;?></span></h4>
                    </div>
                    <?php }?>
                    
                    <?php if(!empty($training->class_schedule)){?>
                    <div class="section-head_ training_desc">
                        <h4 class="">Class Schedule : <span><?php echo $training->class_schedule;?></span></h4>
                    </div>
                    <?php }?>
                    
                    <?php if(!empty($training->total_hour)){?>
                    <div class="section-head_ training_desc">
                        <h4 class="">Total Hours : <span><?php echo $training->total_hour;?></span></h4>
                    </div>
                    <?php }?>
                    
                    <?php if(!empty($training->last_date)){?>
                    <div class="section-head_ training_desc">
                        <h4 class="">Last Date of Registration : <span><?php echo $training->last_date;?></span></h4>
                    </div>
                    <?php }?>
                    
                    <?php if(!empty($training->venue)){?>
                    <div class="section-head_ training_desc">
                        <h4 class="">Venue : <span><?php echo $training->venue;?></span></h4>
                    </div>
                    <?php }?>
                    
                    <?php if(!empty($training->introduction)){?>
                    <div class="training_desc">
                       <div class="section-head_">
                            <h4 class="">Introduction</h4>
                        </div>
                        <div class="list-checked black">
                            <?php echo $training->introduction;?>
                        </div>
                    </div>
                    <?php }?>
                    
                    <?php if(!empty($training->methodology)){?>
                    <div class="training_desc">
                       <div class="section-head_">
                            <h4 class="">Methodology</h4>
                        </div>
                        <div class="list-checked black">
                            <?php echo $training->methodology;?>
                        </div>
                    </div>
                    <?php }?>
                    
                    
                    <?php if(!empty($training->contents_of_training)){?>
                    <div class="training_desc">
                       <div class="section-head_">
                            <h4 class="">Contents of Training</h4>
                        </div>
                        <div class="list-checked black">
                            <?php echo $training->contents_of_training;?>
                        </div>
                    </div>
                    <?php }?>
                    
                    
                    <?php if(!empty($training->price)){?>
                    <div class="section-head_ training_desc">
                        <h4 class="">Price : <span><?php echo $training->price;?></span></h4>
                    </div>
                    <?php }?>
                    
                    <?php if(!empty($training->contact)){?>
                    <div class="section-head_ training_desc">
                        <h4 class="">Contact : <span><?php echo $training->contact;?></span></h4>
                    </div>
                    <?php }?>
                    
                    
                    
                    

                </div>

            </div>
        </div>
    </div>

</div>