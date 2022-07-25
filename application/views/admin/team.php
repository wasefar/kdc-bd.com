<div class="row">
	<div class="col-md-12">
      <div class="box box-default collapsed-box">
        <div class="box-header with-border">
          <a href="<?php echo base_url('dashboard/team/add');?>" class="btn btn-info"> Add New <?php echo $page;?> 
            <i class="fa fa-plus"></i>
          </a>

          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        
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
                  <th>Name</th>
                  <th>Designation</th>
                  <th>Details</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                
                <tbody id="sortable">
                <?php foreach($team as $row):?>
                <tr id="<?php echo $row['id'];?>">
                  <td class="set_number"><?php //echo $row['id'];?></td>
                  <td><img style="width: 100px;" src="<?php echo base_url($row['thumb']);?>"></td>
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['designation'];?></td>
                  <td><?php echo substr(strip_tags($row['details']),0,400);?></td>
                  <td>
                      <a  href="<?php echo base_url('dashboard/team/edit/'.$row['id']);?>" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                  </td>
                  <td><a class="btn btn-danger btn-sm category_delete" href="<?php echo base_url('dashboard/team/delete/'.$row['id']);?>">Delete</a></td>
                </tr>
            	<?php endforeach;?>

                
              </tbody></table>
            </div>

          </div>
	</div>
</div>

<input type="hidden" id="table" value="team">