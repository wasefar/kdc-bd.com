<div class="row">
	<div class="col-md-12">
      <div class="box box-default collapsed-box">
        <div class="box-header with-border">
          <button data-widget="collapse" class="btn btn-info" type="button"> Add New Admin
            <i class="fa fa-plus"></i>
            </button>

          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="display: none;">
          

        	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_url('dashboard/admin_user');?>" enctype="multipart/form-data" accept-charset="utf-8" method="post" class="form-horizontal">
              <div class="box-body">



                <div class="form-group">
                  <label class="col-sm-2 control-label" for="admin_name">Name</label>

                  <div class="col-sm-10">
                      <input required id="admin_name" name="admin_name" type="text" class="form-control">
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label" for="admin_username">User Name</label>

                  <div class="col-sm-10">
                      <input required id="admin_username" name="admin_username" type="text" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="admin_password">Password</label>

                  <div class="col-sm-10">
                      <input required id="admin_password" name="admin_password" type="password" class="form-control">
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
	<div class="col-md-6">
		<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Admin Users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th>Naam</th>
                  <th>User Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                
                <tbody>
                <?php foreach($admins as $row):?>
                <tr>
                  <td><?php echo $row['admin_name'];?></td>
                  <td><?php echo $row['admin_username'];?></td>
                  <td>
                      <a data-toggle="modal" href="#myModalSlider_<?php echo $row['admin_id'];?>" class="btn btn-primary btn-sm" type="button"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                  </td>
                  <td>
                    <?php if($row['admin_id'] != 1):?>
                    <a class="btn btn-danger category_delete" href="<?php echo base_url('dashboard/admin_user/delete/'.$row['admin_id']);?>">Delete</a>
                    <?php endif;?>
                  </td>
                </tr>
            	<?php endforeach;?>

                
              </tbody></table>
            </div>

          </div>
	</div>
</div>



<?php foreach ($admins as $admin):?>  
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModalSlider_<?php echo $admin['admin_id'];?>" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form enctype="multipart/form-data" accept-charset="utf-8" method="post" role="form" class="form-horizontal" action="<?php echo base_url('dashboard/admin_user/edit')?>">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title text-center">Edit Referentie</h4>
            </div>
            <div class="modal-body">

                <div class="position-center">



                    
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="admin_name_<?php echo $admin['admin_id'];?>">Name</label>

                      <div class="col-sm-10">
                          <input value="<?php echo $admin['admin_name'];?>" required id="admin_name_<?php echo $admin['admin_id'];?>" name="admin_name" type="text" class="form-control">
                          <input type="hidden" name="id" value="<?php echo $admin['admin_id'];?>">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="admin_username_<?php echo $admin['admin_id'];?>">User Name</label>

                      <div class="col-sm-10">
                          <input value="<?php echo $admin['admin_username'];?>" required id="admin_username_<?php echo $admin['admin_id'];?>" name="admin_username" type="text" class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="admin_password_<?php echo $admin['admin_id'];?>">Password</label>

                      <div class="col-sm-10">
                          <input id="admin_password_<?php echo $admin['admin_id'];?>" name="admin_password" type="password" class="form-control">
                      </div>
                    </div>




                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Edit Admin</button>
            </div>
            </form>                                        
        </div>
    </div>
</div>
<?php endforeach;?>