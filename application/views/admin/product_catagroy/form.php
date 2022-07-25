<div class="box box-info">
      <div class="box-header with-border">
        <!-- <h3 class="box-title"><?php echo $product_catagroy[0]['title'];?></h3> -->
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form id="page_banner_frm" action="<?php echo base_url('dashboard/product_catagroy/operation');?>" enctype="multipart/form-data" accept-charset="utf-8" method="post" class="form-horizontal">
        <div class="box-body">


          <!-- <div class="form-group">
            <label class="col-sm-2 control-label" for="inputEmail3">Image 700X500 </label>

            <div class="col-sm-10">

            <input class="float_l" type="file" name="photo" id="fileInput">

            </div>
          </div> -->

          <div class="flex-content">
            <div class="form-group row">
            <div class="image-upload">

              <div class="col-sm-2 control-label col-form-label">Image</div>
              <label for="imgload2">
                <div class="col-sm-10">
                  <div class="show_profile slider">
                    <img id="imgshow2" src="<?php echo base_url($product_catagroy ? $product_catagroy->image : 'assets/img/fake.png') ;?>" alt="fake">
                 </div>
                </div>
                  
                </label>
                 <!-- <input type="file" class="form-control add_pic form-control-file" id="file-input" name="image">  -->
                 <input type="file" class="form-control form-control-file" id="imgload2" name="image">
                 <input type="hidden" name="image_input" value="<?= ($product_catagroy) ? $product_catagroy->image : '';?>">
           
                </div>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-2 control-label" for="title">Title</label>
            <div class="col-sm-10">
                <input value="<?= ($product_catagroy) ? $product_catagroy->title : '';?>" required id="title" name="title" type="text" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
                <textarea id="editor1" required class="form-control" name="sort_details"><?= ($product_catagroy) ? $product_catagroy->sort_details : '';?></textarea>
            </div>
          </div>

        </div>
        <!-- /.box-body -->

        
        <input id="id" type="hidden" name="id" value="<?= ($product_catagroy) ? $product_catagroy->id : '';?> " />

        <div class="box-footer">
          <a class="btn btn-default" href="<?php echo base_url('dashboard/product_catagroy');?>">Cancel</a>
          <button class="btn btn-info pull-right" type="submit">Save Changes</button>
        </div>
        <!-- /.box-footer -->
      </form>
</div> 






















