<?php $settings = contact_info();?> 
        <!-- FOOTER START -->
        <footer class="site-footer footer-dark">
            <!-- CONTACT INFO -->
            <div class="bg-primary">
                <div class="container">
                    <div class="row">
                       <div class="col-md-3 col-sm-6  p-tb20">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                <div class="icon-md text-secondry">
                                    <span class="iconmoon-travel"></span>
                                </div>
                                <div class="icon-content text-secondry">
                                    <h5 class="wt-tilte text-uppercase m-b0">Dhaka Office</h5>
                                    <p><?php echo nl2br($settings->address);?></p>
                                </div>
                           </div>
                        </div>
                       <div class="col-md-3 col-sm-6  p-tb20">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                <div class="icon-md text-secondry">
                                    <span class="iconmoon-travel"></span>
                                </div>
                                <div class="icon-content text-secondry">
                                    <h5 class="wt-tilte text-uppercase m-b0">Rangpur Office</h5>
                                    <p><?php echo nl2br($settings->address_rangpur);?></p>
                                </div>
                           </div>
                        </div>
<!--
                       <div class="col-md-3 col-sm-6  p-tb20 ">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix ">
                                <div class="icon-md text-secondry">
                                    <span class="iconmoon-smartphone-1"></span>
                                </div>
                                <div class="icon-content text-secondry">
                                    
                                </div>
                           </div>
                       </div>
-->
                        
                       <div class="col-md-3 col-sm-6 p-tb20">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                <div class="icon-md text-secondry">
                                    <span class="iconmoon-email"></span>
                                </div>
                                <div class="icon-content text-secondry">
                                    <h5 class="wt-tilte text-uppercase m-b0">Phone</h5>
                                    <p class="m-b0"><?php echo $settings->phone ;?></p>
                                    <br>
                                    <h5 class="wt-tilte text-uppercase m-b0">Email</h5>
                                    <p class="m-b0"><?php echo $settings->email ;?></p>
                                </div>
                            </div>
                        </div>
                        
                       <div class="col-md-3 col-sm-6 p-tb20 text-center">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                <div class="icon-content text-secondry">
                                    <h5 class="wt-tilte text-uppercase m-b0">Social Link</h5>
                                    <ul class="social-icons social-square social-darkest">
                                       
                                        <?php if(!empty($settings->facebook)){ ?>
                                            <li><a target="_blank" href="<?php echo $settings->facebook ;?>" class="fa fa-facebook"></a></li>
                                        <?php }?>
                                        
                                        
                                        <?php if(!empty($settings->twitter)){ ?>
                                            <li><a href="<?php echo $settings->twitter ;?>" class="fa fa-twitter"></a></li>
                                        <?php }?>
                                        
                                        <?php if(!empty($settings->linkedin)){ ?>
                                            <li><a href="<?php echo $settings->linkedin ;?>" class="fa fa-linkedin"></a></li>
                                        <?php }?>
                                        
                                        <?php if(!empty($settings->youtube)){ ?>
                                            <li><a href="<?php echo $settings->youtube ;?>" class="fa fa-youtube"></a></li>
                                        <?php }?>
                                        
                                        <?php if(!empty($settings->instagram)){ ?>
                                            <li><a href="<?php echo $settings->instagram ;?>" class="fa fa-instagram"></a></li>
                                        <?php }?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
            
            
            <div class="footer-bottom overlay-wraper">
                <div class="overlay-main"></div>
                <div class="constrot-strip"></div>
                <div class="container p-t30">
                    <div class="row">
                        <div class="wt-footer-bot-left">
                            <span class="copyrights-text">© 2018 Keystone Development & Consultancy. All Rights Reserved.</span>
                        </div>
                        <div class="wt-footer-bot-right">
                            <ul class="copyrights-nav pull-right"> 
                                <li><a target="_blank" href="http://rubyat.info/">Developed by Rubyat</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
        <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>
        
    </div>
 

<!-- JAVASCRIPT  FILES ========================================= --> 
<script type="text/javascript"  src="<?php echo base_url();?>assets/js/jquery-1.12.4.min.js"></script><!-- JQUERY.MIN JS -->
<script type="text/javascript"  src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->

<script type="text/javascript"  src="<?php echo base_url();?>assets/js/bootstrap-select.min.js"></script><!-- FORM JS -->
<script type="text/javascript"  src="<?php echo base_url();?>assets/js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->

<script type="text/javascript"  src="<?php echo base_url();?>assets/js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->

<script type="text/javascript"  src="<?php echo base_url();?>assets/js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script type="text/javascript"  src="<?php echo base_url();?>assets/js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script type="text/javascript"  src="<?php echo base_url();?>assets/js/waypoints-sticky.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/isotope.pkgd.min.js"></script>

<script type="text/javascript"  src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>

<script type="text/javascript"  src="<?php echo base_url();?>assets/js/stellar.min.js"></script>
<script type="text/javascript"  src="<?php echo base_url();?>assets/js/scrolla.min.js"></script>

<script type="text/javascript"  src="<?php echo base_url();?>assets/js/custom.js"></script>
<script type="text/javascript"  src="<?php echo base_url();?>assets/js/shortcode.js?var=1.1"></script>

<script type="text/javascript"  src="<?php echo base_url();?>assets/js/lightbox.js"></script>


<?php if(isset($page) && $page == 'Home'){?>
<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/rev-script-1.js"></script>
<?php }?>




<?php if(!empty($popup)){?>

<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/remodal.css?va=2" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/remodal.js"></script>
<script>
        jQuery(window).load(function(){
        
			var inst = jQuery('[data-remodal-id=kdc-bd]').remodal();
        	inst.open();         
        });
    </script>    
    <div style="padding:0;max-width:960px" class="remodal eid-modal" data-remodal-id="kdc-bd" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
      <div>
        <div id="modal1Desc">
            <img src="<?php echo base_url($popup->image);?>" alt="" />
        </div>
      </div>
    </div>   




<?php }?>




<?php if(!empty($settings->facebook_page_id)){ ?>
<div class="fb-customerchat"
 page_id="<?php echo $settings->facebook_page_id ;?>"
 minimized="true">
</div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '912333495590130',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.11'
    });
  };

//(function(d, s, id){
//     var js, fjs = d.getElementsByTagName(s)[0];
//     if (d.getElementById(id)) {return;}
//     js = d.createElement(s); js.id = id;
//     js.src = "https://connect.facebook.net/en_US/sdk.js";
//     fjs.parentNode.insertBefore(js, fjs);
//   }(document, 'script', 'facebook-jssdk'));
	
	
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<?php }?>

</body>

</html>