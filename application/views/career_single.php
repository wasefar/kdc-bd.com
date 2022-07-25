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

                <!-- SIDE BAR START -->
                <div class="col-md-3">

                    <?php include"inc/sidebar.php";?>

                </div>
                <!-- SIDE BAR END -->   

                <!-- LEFT PART START -->
                <div class="col-md-9">
                    
                    
                    
                    <div class="text-center">
                        <h2 class="text-uppercase"><?php echo $career->title;?></h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                    </div>
                    
                    <?php if(!empty($career->vacancy)){?>
                    <div class="section-head_ career_desc">
                        <h4 class="">Vacancy : <span><?php echo $career->vacancy;?></span></h4>
                    </div>
                    <?php }?>
                    
                    <?php if(!empty($career->job_context)){?>
                    <div class="career_desc">
                       <div class="section-head_">
                            <h4 class="">Job Context</h4>
                        </div>
                        <div class="list-checked black">
                            <?php echo $career->job_context;?>
                        </div>
                    </div>
                    <?php }?>
                    
                    <?php if(!empty($career->job_responsibilities)){?>
                    <div class="career_desc">
                       <div class="section-head_">
                            <h4 class="">Job Responsibilities</h4>
                        </div>
                        <div class="list-checked black">
                            <?php echo $career->job_responsibilities;?>
                        </div>
                    </div>
                    <?php }?>
                    
                    <?php if(!empty($career->employment_status)){?>
                    <div class="section-head_ career_desc">
                        <h4 class="">Employment Status : <span><?php echo $career->employment_status;?></span></h4>
                    </div>
                    <?php }?>
                    
                    <?php if(!empty($career->educational_requirements)){?>
                    <div class="career_desc">
                       <div class="section-head_">
                            <h4 class="">Educational Requirements</h4>
                        </div>
                        <div class="list-checked black">
                            <?php echo $career->educational_requirements;?>
                        </div>
                    </div>
                    <?php }?>
                    
                    <?php if(!empty($career->experience_requirements)){?>
                    <div class="career_desc">
                       <div class="section-head_">
                            <h4 class="">Experience Requirements</h4>
                        </div>
                        <div class="list-checked black">
                            <?php echo $career->experience_requirements;?>
                        </div>
                    </div>
                    <?php }?>
                    
                    <?php if(!empty($career->additional_requirements)){?>
                    <div class="career_desc">
                       <div class="section-head_">
                            <h4 class="">Additional Requirements</h4>
                        </div>
                        <div class="list-checked black">
                            <?php echo $career->additional_requirements;?>
                        </div>
                    </div>
                    <?php }?>
                    
                    <?php if(!empty($career->job_location)){?>
                    <div class="section-head_ career_desc">
                        <h4 class="">Job Location : <span><?php echo $career->job_location;?></span></h4>
                    </div>
                    <?php }?>
                    
                    <?php if(!empty($career->salary)){?>
                    <div class="section-head_ career_desc">
                        <h4 class="">Salary : <span><?php echo $career->salary;?></span></h4>
                    </div>
                    <?php }?>
                    
                    <?php if(!empty($career->compensation)){?>
                    <div class="career_desc">
                       <div class="section-head_">
                            <h4 class="">Compensation & Other Benefits</h4>
                        </div>
                        <div class="list-checked black">
                            <?php echo $career->compensation;?>
                        </div>
                    </div>
                    <?php }?>
                    
                    
                    
                    <div class="apply_job">
                        <h4>Read Before Apply</h4>
                        <p><span>*Photograph</span> must be enclosed with the resume.</p>
                        
                        <h4>Apply Procedure</h4>
                        <p>Send your CV to keystonebd8@gmail.com .</p>
                        <p><span>Application Deadline :</span> <?php echo $career->deadline;?></p>

                    </div>
                    
                    

                </div>
                <!-- LEFT PART END -->

            </div>
        </div>
    </div>
    <!-- SECTION CONTENT END -->

</div>
<!-- CONTENT END -->