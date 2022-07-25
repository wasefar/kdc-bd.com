<div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title"><?= (isset($products[0])) ? $products[0]['title'] : ''; ?></h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form id="page_banner_frm" action="<?php echo base_url('dashboard/products/operation');?>" enctype="multipart/form-data" accept-charset="utf-8" method="post" class="form-horizontal">
        <div class="box-body">


          <div class="form-group">
            <label class="col-sm-2 control-label" for="inputEmail3">Image 500X500 </label>

            <div class="col-sm-10">

            <input class="float_l" type="file" name="photo" id="fileInput">

            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-2 control-label" for="name">Title</label>
            <div class="col-sm-10">
                <input value="<?= (isset($products[0])) ? $products[0]['title'] : ''; ?>" required id="title" name="title" type="text" class="form-control">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-2 control-label" for="sort_details">Sort Details</label>
            <div class="col-sm-10">
                <input value="<?= (isset($products[0])) ? $products[0]['sort_details'] : ''; ?>" required id="sort_details" name="sort_details" type="text" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="sort_details">Catagroy</label>
            <div class="col-sm-10">
             <select name="catagroy_id" id="" class="form-control select">

              <?php foreach($product_catagroy as $t){?>

               <option <?= ($products && $products['0']['catagroy_id'] == $t['id'])?'selected':'';?> value="<?php echo $t['id'] ;?>"> <?php echo $t['title'] ;?></option>

               <?php }?> 

           </select>
            </div>

          </div>
          
        </div>
        <!-- /.box-body -->

        
        <input id="id" type="hidden" name="id" value="<?= (isset($products[0])) ? $products[0]['id'] : ''; ?>" />

        <div class="box-footer">
          <a class="btn btn-default" href="<?php echo base_url('dashboard/products');?>">Cancel</a>
          <button class="btn btn-info pull-right" type="submit">Save Changes</button>
        </div>
        <!-- /.box-footer -->
      </form>
</div>