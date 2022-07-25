<div class="row">
	<div class="col-md-12">
      <div class="box box-default collapsed-box">
        <div class="box-header with-border">
          <button data-widget="collapse" class="btn btn-info" type="button"> Add New <?php echo $page;?> of <?php echo $service->title;?>
            <i class="fa fa-plus"></i>
            </button>

          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="display: none;">
          

        	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add New <?php echo $page;?> of <?php echo $service->title;?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_url('dashboard/services/gallery_operation');?>" enctype="multipart/form-data" accept-charset="utf-8" method="post" class="form-horizontal">
              <div class="box-body">



                
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="inputEmail3">Image </label>

                  <div class="col-sm-10">

                  <input class="float_l" type="file" required="required" name="photo" id="fileInput">

                  <input type="hidden" name="service_id" value="<?php echo $service->id;?>">
                  </div>
                </div>

                


              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button class="btn btn-info pull-right" type="submit">Add This</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>



        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
</div>



<div class="row">
	<div class="col-md-12">
		<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $page;?> of <?php echo $service->title;?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <?php foreach($gallery as $row):?>
                
                    <div class="col-sm-2 text-center" style="margin-bottom: 30px;">
                        <img style="width: 100%;" class="img-responsive" style="width: 100px;" src="<?php echo base_url($row['thumb']);?>">
                     
                        <a class="btn btn-danger category_delete" href="<?php echo base_url('dashboard/services/delete_gallery/'.$row['id'].'/'.$service->id);?>">Delete</a>
                    </div>
              <?php endforeach;?>


              

            </div>

          </div>
	</div>
</div>

