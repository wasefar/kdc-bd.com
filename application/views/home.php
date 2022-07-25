<?php $settings = contact_info();?>  
        <!-- CONTENT START -->
        <div class="page-content">
        
            <!-- SLIDER START -->
            <div class="main-slider style-two default-banner">
           		<div class="tp-banner-container">
                    <div class="tp-banner" >
                        <!-- START REVOLUTION SLIDER 5.4.1 -->
                        <div id="rev_slider_1077_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="scroll-effect136" data-source="gallery">
                        <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                            <div id="rev_slider_1077_1" class="rev_slider fullscreenbanner" data-version="5.4.1">
                                <ul>	
                                    <!-- SLIDE  -->
                                    <?php foreach($sliders as $sld){?>
                                    <li data-index="rs-<?php echo $sld['slider_id'];?>00" data-transition="slideoverhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000"  data-thumb="<?php echo base_url($sld['image']);?>"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="<?php echo $sld['caption1'];?>" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="<?php echo base_url($sld['image']);?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->
                                        
                                        <!-- LAYER NR. 1 -->
                                		<div class="tp-caption tp-shape tp-shapewrapper  " 
                                            id="slide-100-layer-1" 
                                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                            data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" 
                                            data-width="full"
                                            data-height="['400','400','400','550']"
                                            data-whitespace="nowrap"
                                            data-type="shape" 
                                            data-basealign="slide" 
                                            data-responsive_offset="off" 
                                            data-responsive="off"
                                            data-frames='[{"from":"opacity:0;","speed":100,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":0,"to":"opacity:0;","ease":"nothing"}]'
                                            data-textAlign="['left','left','left','left']"
                                            data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[0,0,0,0]"
                                            data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[0,0,0,0]"
                                            style="z-index: 5;text-transform:left;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                            border-width:0px;background:linear-gradient(to top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.4) 100%);cursor:default;"> 
                                        </div>
                                        
                                        <!-- LAYER NR. 2 -->
                                        <div class="tp-caption tp-shape tp-shapewrapper  " 
                                            id="slide-100-layer-2" 
                                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" 
                                            data-width="full"
                                            data-height="['400','400','400','550']"
                                            data-whitespace="nowrap"
                                            data-type="shape" 
                                            data-basealign="slide" 
                                            data-responsive_offset="off" 
                                            data-responsive="off"
                                            data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                            data-textAlign="['left','left','left','left']"
                                            data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[0,0,0,0]"
                                            data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[0,0,0,0]"
                                            style="z-index: 5;text-transform:left;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                            border-width:0px;background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,1) 100%);cursor:default;"> 
                                        </div>
                                
                                        <!-- LAYER NR. 3 -->
                                        <div class="tp-caption BigBold-Title   tp-resizeme" 
                                            id="slide-100-layer-3" 
                                            data-x="['left','left','left','left']" 
                                            data-hoffset="['50','50','30','17']" 
                                            data-y="['bottom','bottom','bottom','bottom']" 
                                            data-voffset="['110','110','180','180']" 
                                            data-fontsize="['40','40','30','20']"
                                            data-lineheight="['50','50','40','40']"
                                            data-fontweight="['800','800','800','800']"
                                            data-width="['none','none','none','400']"
                                            data-height="none"
                                            data-whitespace="['nowrap','nowrap','nowrap','normal']"
                                 
                                            data-type="text" 
                                            data-basealign="slide" 
                                            data-responsive_offset="off" 
                                
                                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},
                                            {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                                            data-textAlign="['left','left','left','left']"
                                            data-paddingtop="[10,10,10,10]"
                                            data-paddingright="[0,0,0,0]"
                                            data-paddingbottom="[10,10,10,10]"
                                            data-paddingleft="[0,0,0,0]"
                                
                                            style="z-index: 6; 
                                            text-transform:uppercase;
                                            color:#fff;
                                            font
                                            "><span class="text-primary"><?php echo $sld['caption1'];?></span></div>
                                
                                        <!-- LAYER NR. 4 -->
                                        <div class="tp-caption BigBold-SubTitle  " 
                                            id="slide-100-layer-4" 
                                            data-x="['left','left','left','left']" data-hoffset="['55','55','33','20']" 
                                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['40','1','74','78']" 
                                            data-fontsize="['15','15','15','13']"
                                            data-lineheight="['24','24','24','20']"
                                            data-width="['410','410','410','280']"
                                            data-height="['60','100','100','100']"
                                            data-whitespace="normal"
                                 
                                            data-type="text" 
                                            data-basealign="slide" 
                                            data-responsive_offset="off" 
                                            data-responsive="off"
                                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                            data-textAlign="['left','left','left','left']"
                                            data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[0,0,0,0]"
                                            data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[0,0,0,0]"
                                
                                            style="z-index: 7; 
                                            color:#fff;
                                            "><?php echo $sld['caption2'];?> 
                                            </div>
                                
                                    
                                
                                        
                                    </li>
                                    
                                    
                                    
                                    <!-- SLIDE  -->
                                    <?php }?>
                                    
                                    
                                    
                                </ul>
                                <div class="tp-bannertimer tp-bottom"></div>	
                            </div>
                        </div>
                        <!-- END REVOLUTION SLIDER -->
                    </div>
            	</div>
            </div>
            <!-- SLIDER END -->
            
            <?php if(!empty($notice)){?>
            <div class="section-full bg-primary">
                <div class="container our-value">
                     <div class="row"> 
                        <div class="col-md-8 col-sm-8 p-t15 p-b30 our-value-left">
                             <div class="clearfix white_text">
                               
                                
                                <?php foreach($notice as $noti){?>
                                <div class="col-md-12 p-tb10">
                                    <div class="wt-icon-box-wraper left ">
                                        <div class="icon-content text-secondry">
                                            <h5 class="wt-tilte text-uppercase m-b5"><?php echo $noti['title'];?></h5>
                                            <p><?php echo $noti['details'];?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
                               
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 p-t50 p-b50 col-md-offset-1 our-value-right">
                            <div class="">
                                <a href="<?php echo base_url('notice');?>" class="site-button-secondry  m-r15 text-uppercase font-weight-600">All Notices</a>
                            </div>
                        </div>
                     </div>
                </div>
             </div>
             <?php }?>
            
            <!-- ABOUT COMPANY SECTION START -->
            <div class="section-full p-tb100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-6 col-xs-100pc">
                            <div class="about-com-pic">
                                <img src="<?php echo base_url($settings->about_us_img);?>" alt="" class="img-responsive"/>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-6 col-xs-100pc">
                            <div class="section-head text-left">
                                <h2 class="text-uppercase"><?php echo get_custom_block('home_about','title');?> </h2>
                                <div class="wt-separator-outer">
                                    <div class="wt-separator style-square">
                                        <span class="separator-left bg-primary"></span>
                                        <span class="separator-right bg-primary"></span>
                                    </div>
                                </div>
                                <?php echo get_custom_block('home_about','content');?>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>   
            <!-- ABOUT COMPANY SECTION END -->   
                     
            <!-- LATEST PROJECT SECTION START -->
            <div class="section-full p-tb80 bg-no-repeat bg-black" style="background-image:url(<?php echo base_url();?>assets/images/background/bg5.jpg);">
            	<div class="overlay-main"></div>
                
                <!-- IMAGE CAROUSEL START -->
                
                <!-- TITLE START -->
                <div class="container">
                    <div class="section-head">
                        <div class="container">
                            <h2 class="text-uppercase text-white">LATEST PROJECT </h2>
                            <div class="wt-separator-outer">
                                <div class="wt-separator style-square has-bg">
                                    <span class="separator-left bg-primary"></span>
                                    <span class="separator-right bg-primary"></span>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TITLE END -->
                <div class="section-content">
                    <!-- CAROUSEL -->
                    <div class="section-content ">
                        <div class="owl-carousel home-carousel-1 mfp-gallery gallery owl-btn-vertical-center">
                            
                            <?php foreach($recent_projects as $rp){?>
                            <!-- COLUMNS 1 -->
                            <div class="item">
                                <div class="flip-container">
                                    <div class="wt-box">
                                        <div class="wt-thum-bx">
                                            <img src="<?php echo base_url($rp['thumb']);?>" alt="">	
                                        </div>
                                        <div class="wt-info bg-white text-center bdr-5 bdr-primary">
                                            <div class="wt-info-media-zoom">
                                                <a href="<?php echo base_url('projects/'.$rp['url']);?>"  class="mfp-link-">
                                                    <i class="fa fa-eye font-24 p-a10"></i>
                                                </a>
                                            </div>
                                        	<div class="wt-info-text p-a30">
<!--                                            	<span class="hiden"><i  class="flaticon-golden-gate-bridge text-primary"></i></span>-->
                                                <a href="<?php echo base_url('projects/'.$rp['url']);?>"  class="mfp-link-"><h3 class="text-uppercase"><?php echo $rp['title'];?></h3></a>
                                                <p><?php echo substr(strip_tags($rp['details']),0,200);?></p>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                            
    
                        </div>
                    </div>
                </div>
         	</div>
            <!-- LATEST PROJECT SECTION END -->
          
            <!-- WHY CHOOSE US SECTION START  -->
            <div class="section-full  p-t80 p-b80 bg-gray">
            	<div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                        <h2 class="text-uppercase">Why Choose us</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                    </div>
                    <!-- TITLE END-->
                    <div class="section-content no-col-gap">
                        <div class="row">
                        
                            <?php foreach($promo_text as $pt){?>
                            <!-- COLUMNS 1 -->
                            <div class="col-md-4 col-sm-6 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-sm text-primary m-b20">
                                        <a href="#" class="icon-cell"><img src="<?php echo base_url($pt['thumb']);?>" alt=""></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase"><?php echo $pt['title'];?></h5>
                                        <p><?php echo $pt['details'];?></p>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                            
                            
                        </div>
                    </div>
                
                </div>
            </div>
            <!-- WHY CHOOSE US SECTION END -->              
           
            <!-- COMPANY DETAIL SECTION START -->
            <div class="section-full p-t50 p-b50 overlay-wraper "  data-stellar-background-ratio="0.5" style="background-image:url(<?php echo base_url($settings->awesome_facts_bg);?>);">
                <div class="overlay-main bg-black opacity-07"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                        	<div class="text-right text-white">
                                <h1 class="font-60"><?php echo get_custom_block('awsome_facts','title');?></h1>
                                <?php echo get_custom_block('awsome_facts','content');?>
                            </div>
                         </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-2 col-sm-4">
                            <div class="status-marks  text-white m-tb10">
                                <div class="status-value text-right">
                                	<span class="counter"><?php echo $settings->completed_project;?></span>
                                    <i class="fa fa-building font-26 m-l15"></i>
                                </div>
                                <h6 class="text-uppercase text-white text-right">PROJECT COMPLETED</h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="status-marks  text-white m-tb10">
                                <div class="status-value text-right">
                                	<span class="counter"><?php echo $settings->happy_customer;?></span>
                                    <i class="fa fa-users font-26 m-l15"></i>
                                </div>
                                <h6 class="text-uppercase text-white text-right">HAPPY CLIENTS</h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-">
                            <div class="status-marks  text-white m-tb10">
                                <div class="status-value text-right">
                                	<span class="counter"><?php echo $settings->workers_employeed;?></span>
                                    <i class="fa fa-user-plus font-26 m-l15"></i>
                                </div>
                                <h6 class="text-uppercase text-white text-right">WORKERS EMPLOYED</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COMPANY DETAIL SECTION End --> 
            
            <!-- OUR TEAM MEMBER SECTION START -->
            <div class="section-full wt-our-team bg-white p-t80 p-b50">
                <div class="container">
                
                	<!-- TITTLE START -->
                    <div class="section-head text-center">
                        <h2 class="text-uppercase">Our team</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                    </div>
                    <!-- TITLE END -->
                    
                    <?php echo $team_mod;?>
                
                </div>
            </div>
            <!-- OUR TEAM MEMBER SECTION End -->
            
                     
            <!-- LATEST BLOG SECTION START -->
            <div class="section-full latest-blog bg-gray p-t80 p-b50">
                <div class="container">
                	<!-- TITLE -->
                    <div class="section-head text-center">
                        <h2 class="text-uppercase">Latest blog post</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                    </div>
                    <!-- TITLE -->
                    
                    <div class="section-content ">
                        <div class="row equal-wraper">
                           
                           <?php foreach($recent_blog as $rb){?>
                            <!-- COLUMNS 1 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="blog-post latest-blog-1 date-style-2">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="<?php echo base_url('blog/'.$rb['id'].'/'.$rb['url']);?>"><img src="<?php echo base_url($rb['thumb']);?>" alt=""></a>
                                    </div>
                                    <div class="wt-post-info p-a30 p-b20 bg-white">
                                        <div class="wt-post-title ">
                                            <h3 class="post-title"><a href="<?php echo base_url('blog/'.$rb['id'].'/'.$rb['url']);?>"><?php echo $rb['title'];?></a></h3>
                                        </div>
                                        <div class="wt-post-meta ">
                                           
                                           <?php 
                                                    
                                                $dt = new DateTime($rb['date_time']);
                                                $dt->format('Y-m-d H:i:s'); 

                                            ?>
                                           
                                           
                                            <ul>
                                                <li class="post-date"><i class="fa fa-calendar"></i><strong><?php echo $dt->format('d M')?></strong> <span> <?php echo $dt->format('Y')?></span></li>
                                                <li class="post-author"><i class="fa fa-user"></i>By <a href="<?php echo base_url('blog/'.$rb['id'].'/'.$rb['url']);?>">kdc-bd</a> </li>
                                            </ul>
                                        </div>
                                        <div class="wt-post-text">
                                            <p><?php echo substr(strip_tags($rb['details']),0,150);?>...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- LATEST BLOG SECTION END -->         
            
            <!-- TESTIMONIAL SECTION START -->
            <div class="section-full p-t80 p-b50 overlay-wraper " data-stellar-background-ratio="0.5" style="background-image:url(<?php echo base_url($settings->testimonial_bg);?>);">
                <div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="section-head text-white text-center">
                        <h2 class="text-uppercase">What Our Client Say</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square has-bg">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                    </div>
                    <div class="section-content">
                        <div class="owl-carousel testimonial-three">
                           
                           <?php foreach($testimonial as $test){?>
                            <div class="item">
                                <div class="testimonial-3 testimonial-bg">
                                    <div class="quote-left"></div>
                                    <div class="testimonial-text">
                                        <p><?php echo $test['details'];?></p>
                                    </div>
                                    <div class="testimonial-detail">
                                        <strong class="testimonial-name"><?php echo $test['name'];?></strong>
                                        <span class="testimonial-position"><?php echo $test['designation'];?></span>
                                    </div>
                                    <div class="testimonial-pic radius shadow"><img src="<?php echo base_url($test['thumb']);?>" width="100" height="100" alt=""></div>
                                </div>
                            </div>
                            <?php }?>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- TESTIMONIAL  SECTION END -->
            
            <!-- OUR CLIENT SLIDER START -->
            <div class="section-full p-t80 p-b50">
                <div class="container">
                
                	<!-- TITLE START -->
                    <div class="section-head text-center">
                        <h2 class="text-uppercase">Our Client</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                    </div>
                    <!-- TITLE END -->
                    
                    <!-- IMAGE CAROUSEL START -->
                    <div class="section-content">
                        <div class="owl-carousel client-logo-carousel">
                        
                            <?php foreach($our_clients as $oc){?> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="<?php echo base_url($oc['thumb']);?>" alt="<?php echo $oc['title'];?>"></a>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                            
                                                   
                        
                        </div>
                    </div>
                    <!-- IMAGE CAROUSEL START -->
                </div>
            
            </div>
            <!-- OUR CLIENT SLIDER END -->             
              
        </div>
        <!-- CONTENT END -->
        
