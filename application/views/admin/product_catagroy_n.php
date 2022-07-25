<div class="row">
	<div class="col-md-12">
      <div class="box box-default collapsed-box">
        <div class="box-header with-border">
          <button data-widget="collapse" class="btn btn-info" type="button"> Add New Catagroy 
            <i class="fa fa-plus"></i>
            </button>

          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="display: none;">
          

        	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Catagroy</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_url('dashboard/product_catagroy');?>" enctype="multipart/form-data" accept-charset="utf-8" method="post" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="inputEmail3">Image </label>

                  <div class="col-sm-10">
                        <input class="float_l" type="file" required="required" name="photo" id="fileInput">

                      <input type="hidden" name="image_upload" value="0">
                  </div>
                </div>



                <div class="form-group">
                  <label class="col-sm-2 control-label" for="caption">Title</label>
                  <div class="col-sm-10">
                      <input  id="title" name="title" type="text" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="caption">Details</label>
                  <div class="col-sm-10">
                      <input  id="sort_details" name="sort_details" type="text" class="form-control">
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
              <h3 class="box-title">product catagroy</h3>
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
                <?php foreach($product_catagroy as $row):?>
                <tr id="<?php echo $row['id'];?>">
                  <td class="set_number"><?php //echo $row['id'];?></td>
                  <td><img style="width:100px;" src="<?php echo base_url($row['thumb']);?>"></td>
                  <td><?php echo $row['title'];?></td>
                  <td>
                      <a data-toggle="modal" href="#myModalproduct_catagroy_<?php echo $row['id'];?>" class="btn btn-primary btn-sm" type="button"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                  </td>
                  <td><a class="btn btn-danger category_delete" href="<?php echo base_url('dashboard/product_catagroy/delete/'.$row['id']);?>">Delete</a></td>
                </tr>
            	<?php endforeach;?>

                
              </tbody></table>
            </div>

          </div>
	</div>
</div>



<?php foreach ($product_catagroy as $sldr):?>  
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModalproduct_catagroy_<?php echo $sldr['id'];?>" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form enctype="multipart/form-data" accept-charset="utf-8" method="post" role="form" class="form-horizontal" action="<?php echo base_url('dashboard/product_catagroy/edit')?>">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title text-center">Edit product_catagroy</h4>
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
                      <label class="col-sm-2 control-label" for="title<?php echo $sldr['id'];?>">Title</label>
                      <div class="col-sm-10">
                          <input value="<?php echo $sldr['title'];?>" id="title<?php echo $sldr['id'];?>" name="title" type="text" class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="sort_details<?php echo $sldr['id'];?>">Title</label>
                      <div class="col-sm-10">
                          <input value="<?php echo $sldr['sort_details'];?>" id="sort_details<?php echo $sldr['id'];?>" name="sort_details" type="text" class="form-control">
                      </div>
                    </div>



                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Edit product catagroy</button>
            </div>
            </form>                                        
        </div>
    </div>
</div>
<?php endforeach;?>
<input type="hidden" id="table" value="product_catagroy">