<div class="row">
	<div class="col-md-12">
      <div class="box box-default collapsed-box">
        <div class="box-header with-border">
          <button data-widget="collapse" class="btn btn-info" type="button"> Add New Gallery 
            <i class="fa fa-plus"></i>
            </button>

          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="display: none;">
          

        	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Gallery</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_url('dashboard/gallery');?>" enctype="multipart/form-data" accept-charset="utf-8" method="post" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="inputEmail3">Image </label>

                  <div class="col-sm-10">
                        <input class="float_l" type="file" required="required" name="photo" id="fileInput">

                      <input type="hidden" name="image_upload" value="0">
                  </div>
                </div>



                <div class="form-group">
                  <label class="col-sm-2 control-label" for="caption">Caption</label>
                  <div class="col-sm-10">
                      <input  id="caption" name="caption" type="text" class="form-control">
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
              <h3 class="box-title">Gallerys</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Image</th>
                  <th>Caption </th>
                  <th style="width:100px;">Edit</th>
                  <th style="width:100px;">Delete</th>
                </tr>
                
                <tbody id="sortable">
                <?php foreach($gallery as $row):?>
                <tr id="<?php echo $row['id'];?>">
                  <td class="set_number"><?php //echo $row['id'];?></td>
                  <td><img style="width:100px;" src="<?php echo base_url($row['thumb']);?>"></td>
                  <td><?php echo $row['caption'];?></td>
                  <td>
                      <a data-toggle="modal" href="#myModalGallery_<?php echo $row['id'];?>" class="btn btn-primary btn-sm" type="button"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                  </td>
                  <td><a class="btn btn-danger category_delete" href="<?php echo base_url('dashboard/gallery/delete/'.$row['id']);?>">Delete</a></td>
                </tr>
            	<?php endforeach;?>

                
              </tbody></table>
            </div>

          </div>
	</div>
</div>



<?php foreach ($gallery as $sldr):?>  
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModalGallery_<?php echo $sldr['id'];?>" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form enctype="multipart/form-data" accept-charset="utf-8" method="post" role="form" class="form-horizontal" action="<?php echo base_url('dashboard/gallery/edit')?>">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title text-center">Edit Gallery</h4>
            </div>
            <div class="modal-body">

                <div class="position-center">
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="photo">Image</label>
                      <div class="col-sm-6">
                          <input class="float_l" type="file" name="photo" id="photo">
                          <input type="hidden" name="id" value="<?php echo $sldr['id'];?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="caption<?php echo $sldr['id'];?>">Caption</label>
                      <div class="col-sm-10">
                          <input value="<?php echo $sldr['caption'];?>" id="caption<?php echo $sldr['id'];?>" name="caption" type="text" class="form-control">
                      </div>
                    </div>



                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Edit Gallery</button>
            </div>
            </form>                                        
        </div>
    </div>
</div>
<?php endforeach;?>
<input type="hidden" id="table" value="gallery">