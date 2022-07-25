<div class="section-content">
    <div class="row">

        <?php foreach($team as $t){?>
        <!-- COLUMNS 1 --> 
        <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-t30">
            <div class="wt-team-four">
                <div class="wt-team-media">
                    <a href="<?php echo base_url('team/details/'.$t['id']);?>"><img src="<?php echo base_url($t['thumb']);?>" alt="" ></a>
                </div>
                <div class="wt-team-info">
                    <div class="wt-team-skew-block">
                        <div class="social-icons-outer p-a20">
                            <ul class="social-icons social-square social-dark white-border m-b0">
                              <li><a target="_blank" href="<?php echo $t['facebook'];?>" class="fa fa-facebook"></a></li>
                              <li><a target="_blank" href="<?php echo $t['twitter'];?>" class="fa fa-twitter"></a></li>
                              <li><a target="_blank" href="<?php echo $t['linkedin'];?>" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div>
                     </div>
                     <div class="p-a20">
                        <h4 class="wt-team-title text-uppercase"><a href="<?php echo base_url('team/details/'.$t['id']);?>"><?php echo $t['name'];?></a></h4>
                        <p><?php echo $t['designation'];?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>


    </div>
</div>