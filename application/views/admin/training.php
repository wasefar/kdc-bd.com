<div class="row">
   <div class="col-md-12">
      <div class="box box-default collapsed-box">
         <div class="box-header with-border">
            <a href="<?php echo base_url('dashboard/training/add');?>" class="btn btn-info"> Add New <?php echo $page;?> 
            <i class="fa fa-plus"></i>
            </a>
         </div>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-md-12">
      <div class="box">
         <div class="box-header with-border">
            <h3 class="box-title"><?php echo $page;?></h3>
         </div>
         <div class="box-body">
            <table class="table table-bordered">
               <tr>
                  <th style="width: 10px">#</th>
                  <th>Title</th>
                  <th>Price</th>
                  <th>Date</th>
                  <th>Details</th>
                  <th>Edit</th>
                  <th>Delete</th>
               </tr>
               <tbody id="sortable_">
                  <?php foreach($training as $row):?>
                  <tr id="<?php echo $row['id'];?>">
                     <td class="set_number"><?php echo $row['id'];?></td>
                     <td><?php echo $row['title'];?></td>
                     <td><?php echo $row['price'];?></td>
                     <td><?php echo $row['date_time'];?></td>
                     <td><?php echo substr(strip_tags($row['contents_of_training']),0,400);?></td>
                     <td>
                        <a  href="<?php echo base_url('dashboard/training/edit/'.$row['id']);?>" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                     </td>
                     <td><a class="btn btn-danger btn-sm category_delete" href="<?php echo base_url('dashboard/training/delete/'.$row['id']);?>">Delete</a></td>
                  </tr>
                  <?php endforeach;?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>