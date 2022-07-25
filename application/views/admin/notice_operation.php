<div class="box box-info">
   <div class="box-header with-border">
      <h3 class="box-title"><?= (isset($team[0])) ? $team[0]['title'] : ''; ?></h3>
   </div>
   <!-- /.box-header -->
   <!-- form start -->
   <form id="page_banner_frm" action="<?php echo base_url('dashboard/notice/operation');?>" enctype="multipart/form-data" accept-charset="utf-8" method="post" class="form-horizontal">
      <div class="box-body">
<!--
         <div class="form-group">
            <label class="col-sm-2 control-label" for="inputEmail3">Image 700X500 </label>
            <div class="col-sm-10">
               <input class="float_l" type="file" name="photo" id="fileInput">
            </div>
         </div>
-->
         <div class="form-group">
            <label class="col-sm-2 control-label" for="title">Title</label>
            <div class="col-sm-10">
               <input value="<?= (isset($notice[0])) ? $notice[0]['title'] : ''; ?>" required id="title" name="title" type="text" class="form-control">
            </div>
         </div>
         <div class="form-group">
           <label class="col-sm-2 control-label" for="title">Details</label>
            <div class="col-sm-10">
               <textarea id="editor1__" required class="form-control" name="details"> <?= (isset($notice[0])) ? $notice[0]['details'] : ''; ?> </textarea>
            </div>
         </div>
      </div>
      <!-- /.box-body -->
      <input id="id" type="hidden" name="id" value="<?= (isset($notice[0])) ? $notice[0]['id'] : ''; ?> " />
      <div class="box-footer">
         <a class="btn btn-default" href="<?php echo base_url('dashboard/notice');?>">Cancel</a>
         <button class="btn btn-info pull-right" type="submit">Save Changes</button>
      </div>
      <!-- /.box-footer -->
   </form>
</div>