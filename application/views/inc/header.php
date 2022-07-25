<!DOCTYPE html>
<html lang="en">
<head>
	<?php $settings = contact_info();?> 

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <link rel="icon" href="<?php echo base_url($settings->favicon);?>" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url($settings->favicon);?>" />
    
    <title>KDC-BD :: <?php if(isset($page_title)){echo ":: ".$page_title;};?></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- [if lt IE 9]>
        <script src="<?php echo base_url();?>assets/js/html5shiv.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/respond.min.js"></script>
	<![endif] -->
    
    <?php $var = 2.12;?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css?var=<?php echo $var;?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/fontawesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css?var=<?php echo $var;?>"> 

    
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Crete+Round:400,400i&amp;subset=latin-ext" rel="stylesheet">
    
</head>
<?php echo $settings->google_analytics;?>  
<body id="bg">
	
	
<!--
	<div class="loading-area">
		<div class="loading-box"></div>
		<div class="loading-pic">
			<div class="loader">
				<span class="block-1"></span>
				<span class="block-2"></span>
				<span class="block-3"></span>
				<span class="block-4"></span>
				<span class="block-5"></span>
				<span class="block-6"></span>
				<span class="block-7"></span>
				<span class="block-8"></span>
				<span class="block-9"></span>
				<span class="block-10"></span>
				<span class="block-11"></span>
				<span class="block-12"></span>
				<span class="block-13"></span>
				<span class="block-14"></span>
				<span class="block-15"></span>
				<span class="block-16"></span>
			</div>
		</div>
	</div>
-->

	<div class="page-wraper"> 
          
        <?php 
        
            if(isset($page) && $page == 'Home'){
                $header_style = 'header-style-3';
                $header_bg = 'bg-primary';
            }else{
                $header_style = 'header-style-1';
                $header_bg = 'bg-white';
            }
        
        ?>
        
       	
        <!-- HEADER START -->
        <header class="site-header <?php echo $header_style;?> ">
        	<!-- MAIN BAR START -->
            <div class="sticky-header main-bar-wraper">
                <div class="main-bar <?php echo $header_bg; ?>">
                    <div class="container">
                    	<!-- SITE LOGO -->
                        <div class="logo-header mostion">
                            <a href="<?php echo base_url();?>">
                                <img src="<?php echo base_url($settings->logo);?>" width="170" height="50" alt="KDC-BD" />
                            </a>
                        </div>
                        <!-- NAV TOGGLE BUTTON -->
                        <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- EXTRA NAV -->
                        
                        
                        <!-- MAIN NAV -->
                        <div class="header-nav navbar-collapse collapse ">
                            <ul class=" nav navbar-nav">
                                <li class="<?= (isset($page) && $page == 'Home')? 'active':'' ?>">
                                    <a href="<?php echo base_url();?>">Home</a>
                                </li>
                                <li class="<?= (isset($page) && $page == 'About Us')? 'active':'' ?>">
                                    <a href="<?php echo base_url('about_us');?>">About Us <i class="fa fa-chevron-down"></i></a>
                                    
                                    
                                    <ul class="sub-menu">
                                        
                                        <li class="menu-item">
                                            <a href="<?php echo base_url('about_us');?>"><strong>About KDC-BD</strong></a>
                                        </li>
           
                                        <li class="<?= (isset($page) && $page == 'Blog')? 'active':'' ?>">
                                            <a href="<?php echo base_url('blog');?>"><strong>Our Blog</strong></a>
                                        </li>
                                        
										<li class="<?= (isset($page) && $page == 'Notice')? 'active':'' ?>">
											<a href="<?php echo base_url('notice');?>">Notice</a>
										</li>
                                        
                                        
                                    </ul>
                                </li>
                            
                                <li class="<?= (isset($page) && $page == 'Services')? 'active':'' ?>">
                                    <a href="<?php echo base_url('services');?>">Services<i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        
                                        <?php $services = services();?>
                                        <?php foreach($services as $serv){?>
                                        <li class="menu-item"><a href="<?php echo base_url('services/'.$serv['url']);?>"><strong><?php echo $serv['title'];?></strong></a></li>
                                        <?php }?>
                                        
                                        
                                        
                                    </ul>
                                </li>
                            
                                <li class="<?= (isset($page) && $page == 'Projects')? 'active':'' ?>">
                                    <a href="<?php echo base_url('projects');?>">Projects<i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <?php $projects = projects();?>
                                        <?php foreach($projects as $pro){?>
                                        <li class="menu-item"><a href="<?php echo base_url('projects/'.$pro['url']);?>"><strong><?php echo $pro['title'];?></strong></a></li>
                                        <?php }?>
                                    </ul>
                                </li>

                                <!-- <li class="">
                                    <a href="<?php echo base_url('product_catagroy');?>">Product</a>
                                </li> -->
                                
                                <li class="<?= (isset($page) && $page == 'Team')? 'active':'' ?>">
                                    <a href="<?php echo base_url('team');?>">Our Team</a>
                                </li>
                                
                                <?php $career = career();?>
                                <?php if(!empty($career)){?>
                                <li class="<?= (isset($page) && $page == 'Career')? 'active':'' ?>">
                                    <a href="<?php echo base_url('career');?>">Career</a>
                                </li>
                                <?php }?>
                                
                                <?php $training = training();?>
                                <?php if(!empty($training)){?>
                                <li class="<?= (isset($page) && $page == 'Training')? 'active':'' ?>">
                                    <a href="<?php echo base_url('training');?>">Training</a>
                                </li>
                                 <?php }?>
                                 
                                 <li class="<?= (isset($page) && $page == 'Gallery')? 'active':'' ?>">
									<a href="<?php echo base_url('gallery');?>"><strong>Our Gallery</strong></a>
								</li>
                                
                                
                                
                                
                                <li class="<?= (isset($page) && $page == 'Contact')? 'active':'' ?>">
                                    <a href="<?php echo base_url('contact');?>">Contact</a>
                                </li>
                                
                                
                                
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER END -->