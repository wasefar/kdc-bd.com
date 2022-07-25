<div class="row">
	<div class="col-md-12">
      <div class="box box-default collapsed-box">
        <div class="box-header with-border">
          <a href="<?php echo base_url('dashboard/services/add');?>" class="btn btn-info"> Add New <?php echo $page;?> 
            <i class="fa fa-plus"></i>
          </a>

          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="display: none;">
          

        	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add New <?php echo $page;?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_url('dashboard/services/edit');?>" enctype="multipart/form-data" accept-charset="utf-8" method="post" class="form-horizontal">
              <div class="box-body">



                
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="inputEmail3">Image 700X500 </label>

                  <div class="col-sm-10">

                  <input class="float_l" type="file" required="required" name="photo" id="fileInput">

                  <input type="hidden" name="image_upload" value="0">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="title">Title</label>

                  <div class="col-sm-10">
                      <input required id="title" name="title" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="details">Details</label>

                  <div class="col-sm-10">
                      <textarea id="details" required class="form-control" name="details"></textarea>
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
              <h3 class="box-title"><?php echo $page;?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th></th>
                  <th>Title</th>
                  <th>Details</th>
                  <th>Gallery</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                
                <tbody id="sortable">
                <?php foreach($services as $row):?>
                <tr id="<?php echo $row['id'];?>">
                  <td class="set_number"><?php //echo $row['id'];?></td>
                  <td><img style="width: 100px;" src="<?php echo base_url($row['thumb']);?>"></td>
                  <td><?php echo $row['title'];?></td>
                  <td><?php echo substr(strip_tags($row['details']),0,400);?></td>
                  <td><a class="btn btn-success btn-sm" href="<?php echo base_url('dashboard/services/gallery/'.$row['id']);?>">Gallery</a></td>
                  <td>
                      <a  href="<?php echo base_url('dashboard/services/edit/'.$row['id']);?>" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                  </td>
                  <td><a class="btn btn-danger btn-sm category_delete" href="<?php echo base_url('dashboard/services/delete/'.$row['id']);?>">Delete</a></td>
                </tr>
            	<?php endforeach;?>

                
              </tbody></table>
            </div>

          </div>
	</div>
</div>



<?php foreach ($services as $srv):?>  
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModalSlider_<?php echo $srv['id'];?>" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form enctype="multipart/form-data" accept-charset="utf-8" method="post" role="form" class="form-horizontal" action="<?php echo base_url('dashboard/services/edit')?>">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title text-center">Edit Services</h4>
            </div>
            <div class="modal-body">

                <div class="position-center">

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="inputEmail3">Image 700X500 </label>

                      <div class="col-sm-10">

                      <input class="float_l" type="file" name="photo" id="fileInput">

                      <input type="hidden" name="image_upload" value="0">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="title">Title</label>
                      <div class="col-sm-10">
                          <input required id="title" name="title"  value="<?php echo $srv['title'];?>" type="text" class="form-control">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="details">Details</label>

                      <div class="col-sm-10">
                          <textarea id="details" required class="form-control" name="details"><?php echo $srv['details'];?></textarea>
                      </div>
                    </div>


                </div>

            </div>
            <div class="modal-footer">
                <input name="id" value="<?php echo $srv['id'];?>" type="hidden">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Edit Services</button>
            </div>
            </form>                                        
        </div>
    </div>
</div>
<?php endforeach;?>
<input type="hidden" id="table" value="services">