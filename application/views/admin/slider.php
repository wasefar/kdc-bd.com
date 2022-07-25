<div class="row">
	<div class="col-md-12">
      <div class="box box-default collapsed-box">
        <div class="box-header with-border">
          <button data-widget="collapse" class="btn btn-info" type="button"> Add New Slider 
            <i class="fa fa-plus"></i>
            </button>

          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="display: none;">
          

        	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Slider</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_url('dashboard/slider');?>" enctype="multipart/form-data" accept-charset="utf-8" method="post" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="inputEmail3">Image 1920X650 </label>

                  <div class="col-sm-10">

						      <input class="float_l" type="file" required="required" name="photo" id="fileInput">

                  <input type="hidden" name="image_upload" value="0">
                  </div>
                </div>



                <div class="form-group">
                  <label class="col-sm-2 control-label" for="caption1">Caption 1</label>
                  <div class="col-sm-10">
                      <input  id="caption1" name="caption1" type="text" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="caption2">Caption 2</label>
                  <div class="col-sm-10">
                      <input  id="caption2" name="caption2" type="text" class="form-control">
                  </div>
                </div>

                <div class="form-group hidden">
                  <label class="col-sm-2 control-label" for="caption3">Caption 3</label>
                  <div class="col-sm-10">
                      <input id="caption3" name="caption3" type="text" class="form-control">
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
	<div class="col-md-10">
		<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Sliders</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Image</th>
                  <th>Caption </th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                
                <tbody id="sortable">
                <?php foreach($slider as $row):?>
                <tr id="<?php echo $row['slider_id'];?>">
                  <td class="set_number"><?php //echo $row['id'];?></td>
                  <td><img src="<?php echo base_url($row['thumb']);?>"></td>
                  <td><?php echo $row['caption1'];?></td>
                  <td>
                      <a data-toggle="modal" href="#myModalSlider_<?php echo $row['slider_id'];?>" class="btn btn-primary btn-sm" type="button"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                  </td>
                  <td><a class="btn btn-danger category_delete" href="<?php echo base_url('dashboard/slider/delete/'.$row['slider_id']);?>">Delete</a></td>
                </tr>
            	<?php endforeach;?>

                
              </tbody></table>
            </div>

          </div>
	</div>
</div>



<?php foreach ($slider as $sldr):?>  
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModalSlider_<?php echo $sldr['slider_id'];?>" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form enctype="multipart/form-data" accept-charset="utf-8" method="post" role="form" class="form-horizontal" action="<?php echo base_url('dashboard/slider/edit')?>">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title text-center">Edit Slider</h4>
            </div>
            <div class="modal-body">

                <div class="position-center">
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="photo">Image 1920X650</label>
                      <div class="col-sm-6">
                          <input class="float_l" type="file" name="photo" id="photo">
                          <input type="hidden" name="slider_id" value="<?php echo $sldr['slider_id'];?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="caption1<?php echo $sldr['slider_id'];?>">Caption</label>
                      <div class="col-sm-10">
                          <input value="<?php echo $sldr['caption1'];?>" id="caption1<?php echo $sldr['slider_id'];?>" name="caption1" type="text" class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="caption2<?php echo $sldr['slider_id'];?>">Caption 2</label>
                      <div class="col-sm-10">
                          <input value="<?php echo $sldr['caption2'];?>" id="caption2<?php echo $sldr['slider_id'];?>" name="caption2" type="text" class="form-control">
                      </div>
                    </div>

                    <div class="form-group hidden">
                      <label class="col-sm-2 control-label" for="caption3<?php echo $sldr['slider_id'];?>">Caption</label>
                      <div class="col-sm-10">
                          <input value="<?php echo $sldr['caption3'];?>" id="caption3<?php echo $sldr['slider_id'];?>" name="caption3" type="text" class="form-control">
                      </div>
                    </div>



                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Edit Slider</button>
            </div>
            </form>                                        
        </div>
    </div>
</div>
<?php endforeach;?>
<input type="hidden" id="table" value="home_page_slider">