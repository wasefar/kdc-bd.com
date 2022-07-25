<div class="row">
	<div class="col-md-12">
		<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Custom Blocks</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th style="width: 150px">Title</th>
                  <th>Details</th>
                  <th>Edit</th>
                </tr>

                <?php foreach($custom_blocks as $row):?>
                <tr>
                  <td><?php echo $row['id'];?></td>
                  <td><?php echo $row['title'];?></td>
                  <td><?php echo strip_tags($row['content']);?></td>
                  <td><a class="btn btn-info" href="<?php echo base_url('dashboard/custom_blocks/edit/'.$row['id']);?>">Edit</a></td>
                </tr>
            	<?php endforeach;?>

                
              </tbody></table>
            </div>

          </div>
	</div>
</div>