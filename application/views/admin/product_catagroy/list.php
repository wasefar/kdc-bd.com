<div class="main_list_table">
	<main class="page-content">
		<div class="container_fluid">
		<div class="row">
			<div class="col-md-12">
				<h2 class="content-header"><small><?php echo $page;?></small></h2>
				<!-- <ol class="header breadcrumb">
		          <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		          <li class="active">Dash</li>
		        </ol> -->
				<div class="box box-default collapsed-box">
				 <div class="box-header with-border">
	                <a href="<?php echo base_url('dashboard/product_catagroy/add')?>" class="btn btn-info"> Add New product catagroy <i class="fa fa-plus"></i> </a> 
                 </div>
                 </div>
			</div>
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title"><?php echo $page;?></h3>
					</div>
					<div class="box-body">
						<table class="table table-bordered table-striped">
							<thead>
							 <tr>
		                        <th style="width: 10px">#</th>
		                        <th style="width: 200px;">Title</th>
		                        <th style="width: 500px;">Details</th>
		                        <th style="width: 200px;">Image</th>
		                        <th style="width: 102px;">Action</th>
			                  </tr>
							</thead>
							<tbody>
								<?php foreach ($product_catagroys as $row) {?>
								<tr>
									<td><?php echo $row['id'] ;?></td>
									<td><?php echo substr(strip_tags($row['title']),0,20);?>...</td>
									<td><?php echo substr(strip_tags($row['sort_details']),0,100);?>...</td>
									
									<td><img class="" src="<?php echo $row['image']; ?>" width="120px" alt=""></td>
									<td>
				                        <a href="<?php echo base_url('dashboard/product_catagroy/edit/'.$row['id']);?>" class="edit"><i class="far fa-edit"></i></a>

				                        <a class="delete" href="<?php echo base_url('dashboard/product_catagroy/delete/'.$row['id']);?>"><i class="fas fa-trash-alt"></i></a>
				                   </td>
								</tr>
								<?php } ?>
							</tbody>		
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	</main>
	
</div>
<input type="hidden" id="table" value="product_catagroy">