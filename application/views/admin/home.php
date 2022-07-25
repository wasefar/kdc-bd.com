<?php foreach($dash as $row):?>
<div class="row">
        
        
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>1</h3>

              <p>Home Popup</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a class="small-box-footer" href="<?php echo base_url('dashboard/popup');?>">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $row['total_projects'];?></h3>

              <p>Projects</p>
            </div>
            <div class="icon">
              <i class="fa fa-sticky-note-o"></i>
            </div>
            <a class="small-box-footer" href="<?php echo base_url('dashboard/projects');?>">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $row['total_slider'];?></h3>

              <p>Slider</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a class="small-box-footer" href="<?php echo base_url('dashboard/slider');?>">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo $row['total_gallery'];?></h3>

              <p>Gallery</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a class="small-box-footer" href="<?php echo base_url('dashboard/gallery');?>">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?php echo $row['total_services'];?></h3>

              <p>Services</p>
            </div>
            <div class="icon">
              <i class="fa  fa-users"></i>
            </div>
            <a class="small-box-footer" href="<?php echo base_url('dashboard/services');?>">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $row['total_blog'];?></h3>

              <p>Blog</p>
            </div>
            <div class="icon">
              <i class="fa  fa-users"></i>
            </div>
            <a class="small-box-footer" href="<?php echo base_url('dashboard/blog');?>">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $row['total_notice'];?></h3>

              <p>Notice</p>
            </div>
            <div class="icon">
              <i class="fa  fa-users"></i>
            </div>
            <a class="small-box-footer" href="<?php echo base_url('dashboard/notice');?>">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?php echo $row['total_promo_text'];?></h3>

              <p>Why Choose us</p>
            </div>
            <div class="icon">
              <i class="fa  fa-users"></i>
            </div>
            <a class="small-box-footer" href="<?php echo base_url('dashboard/promo_text');?>">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3><?php echo $row['total_team'];?></h3>

              <p>Our Team</p>
            </div>
            <div class="icon">
              <i class="fa  fa-users"></i>
            </div>
            <a class="small-box-footer" href="<?php echo base_url('dashboard/team');?>">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $row['total_testimonial'];?></h3>

              <p>Testimonial</p>
            </div>
            <div class="icon">
              <i class="fa  fa-users"></i>
            </div>
            <a class="small-box-footer" href="<?php echo base_url('dashboard/testimonial');?>">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        



        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $row['total_custom_blocks'];?></h3>

              <p>Custom Blocks</p>
            </div>
            <div class="icon">
              <i class="fa fa-sticky-note-o"></i>
            </div>
            <a class="small-box-footer" href="<?php echo base_url('dashboard/custom_blocks');?>">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $row['total_pages'];?></h3>

              <p>Pages</p>
            </div>
            <div class="icon">
              <i class="fa fa-sticky-note-o"></i>
            </div>
            <a class="small-box-footer" href="<?php echo base_url('dashboard/pages');?>">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $row['total_our_clients'];?></h3>

              <p>Our Clients</p>
            </div>
            <div class="icon">
              <i class="fa fa-sticky-note-o"></i>
            </div>
            <a class="small-box-footer" href="<?php echo base_url('dashboard/our_clients');?>">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        



        
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $row['total_career'];?></h3>

              <p>Career</p>
            </div>
            <div class="icon">
              <i class="fa fa-file-image-o"></i>
            </div>
            <a class="small-box-footer" href="<?php echo base_url('dashboard/career');?>">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $row['total_training'];?></h3>

              <p>Training</p>
            </div>
            <div class="icon">
              <i class="fa fa-file-image-o"></i>
            </div>
            <a class="small-box-footer" href="<?php echo base_url('dashboard/training');?>">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $row['total_settings'];?></h3>

              <p>Settings</p>
            </div>
            <div class="icon">
              <i class="fa fa-file-image-o"></i>
            </div>
            <a class="small-box-footer" href="<?php echo base_url('dashboard/settings');?>">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>




      </div>

<?php endforeach;?>