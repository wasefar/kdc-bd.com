<div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title"><?= (isset($team[0])) ? $team[0]['name'] : ''; ?></h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form id="page_banner_frm" action="<?php echo base_url('dashboard/team/operation');?>" enctype="multipart/form-data" accept-charset="utf-8" method="post" class="form-horizontal">
        <div class="box-body">


          <div class="form-group">
            <label class="col-sm-2 control-label" for="inputEmail3">Image 500X500 </label>

            <div class="col-sm-10">

            <input class="float_l" type="file" name="photo" id="fileInput">

            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-2 control-label" for="name">Name</label>
            <div class="col-sm-10">
                <input value="<?= (isset($team[0])) ? $team[0]['name'] : ''; ?>" required id="name" name="name" type="text" class="form-control">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-2 control-label" for="designation">Designation</label>
            <div class="col-sm-10">
                <input value="<?= (isset($team[0])) ? $team[0]['designation'] : ''; ?>" required id="designation" name="designation" type="text" class="form-control">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-2 control-label" for="facebook">Facebook</label>
            <div class="col-sm-10">
                <input value="<?= (isset($team[0])) ? $team[0]['facebook'] : ''; ?>" id="facebook" name="facebook" type="text" class="form-control">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-2 control-label" for="twitter">Twitter</label>
            <div class="col-sm-10">
                <input value="<?= (isset($team[0])) ? $team[0]['twitter'] : ''; ?>" id="twitter" name="twitter" type="text" class="form-control">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-2 control-label" for="linkedin">Linkedin</label>
            <div class="col-sm-10">
                <input value="<?= (isset($team[0])) ? $team[0]['linkedin'] : ''; ?>" id="linkedin" name="linkedin" type="text" class="form-control">
            </div>
          </div>
           
           

          <div class="form-group">
            <div class="col-sm-12">
                <textarea id="editor1" required class="form-control" name="details"><?= (isset($team[0])) ? $team[0]['details'] : ''; ?> </textarea>
            </div>
          </div>
            

        </div>
        <!-- /.box-body -->

        
        <input id="id" type="hidden" name="id" value="<?= (isset($team[0])) ? $team[0]['id'] : ''; ?>" />

        <div class="box-footer">
          <a class="btn btn-default" href="<?php echo base_url('dashboard/team');?>">Cancel</a>
          <button class="btn btn-info pull-right" type="submit">Save Changes</button>
        </div>
        <!-- /.box-footer -->
      </form>
</div>