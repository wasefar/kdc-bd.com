<div class="row">
	<div class="col-md-12">
		<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Custom Blocks</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Title</th>
                  <th>Details</th>
                  <th>Edit</th>
                </tr>
                
                <tbody>
                <?php foreach($pages as $row):?>
                <tr id="<?php echo $row['id'];?>">
                  <td class="set_number"><?php //echo $row['id'];?></td>
                  <td><?php echo $row['title'];?></td>
                  <td>
                      <?php echo substr(strip_tags($row['details']),0,400);?>
                  </td>
                  <td>
                      <a href="<?php echo base_url('dashboard/pages/edit/'.$row['id']);?>" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                  </td>
                </tr>
              <?php endforeach;?>

                
              </tbody>
              </table>
            </div>

          </div>
	</div>
</div>