<?php foreach($custom_blocks as $row):?>
<div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo $row['title'];?> (Custom Block)</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form id="page_banner_frm" action="<?php echo base_url('dashboard/custom_blocks');?>" enctype="multipart/form-data" accept-charset="utf-8" method="post" class="form-horizontal">
        <div class="box-body">

          
          <div class="form-group">
            <label class="col-sm-2 control-label" for="title">Title</label>
            <div class="col-sm-10">
                <input value="<?php echo $row['title'];?>" required id="title" name="title" type="text" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
            		<textarea id="editor1" required class="form-control" name="content"><?php echo $row['content'];?></textarea>
                <input id="id" type="hidden" name="id" value="<?php echo $row['id'];?>" />
            </div>
          </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a class="btn btn-default" href="<?php echo base_url('dashboard/custom_blocks');?>">Cancel</a>
          <button class="btn btn-info pull-right" type="submit">Save Changes</button>
        </div>
        <!-- /.box-footer -->
      </form>
</div>
<?php endforeach;?>