<div class="box box-info">
      <div class="box-header with-border">
        <h3><?php echo lang('create_user_heading');?></h3>
        <p><?php echo lang('create_user_subheading');?></p>
      </div>
      <div id="infoMessage"><?php echo $message;?></div>
      <?php if($user):?>
        <form action="<?php echo base_url('auth/edit_user/'.$user->id);?>" enctype="multipart/form-data" accept-charset="utf-8" method="post" class="form-horizontal">
      <?php else:?>
        <form action="<?php echo base_url('auth/create_user');?>" enctype="multipart/form-data" accept-charset="utf-8" method="post" class="form-horizontal">
      <?php endif;?>
        <div class="box-body">            
          
          <div class="form-group">
            <label class="col-sm-2 control-label" for="first_name">First Name:</label>

            <div class="col-sm-10">
              <input value="<?php if(isset($user->first_name)){echo $user->first_name;};?>" class="form-control" type="text" name="first_name" id="first_name">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="last_name">Last Name:</label>

            <div class="col-sm-10">
              <input value="<?php if(isset($user->last_name)){echo $user->last_name;};?>" class="form-control" type="text" name="last_name" id="last_name">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="company">Company Name:</label>
            <div class="col-sm-10">
              <input value="<?php if(isset($user->company)){echo $user->company;};?>" class="form-control" type="text" name="company" id="company">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="email">Email:</label>
            <div class="col-sm-10">
              <input value="<?php if(isset($user->email)){echo $user->email;};?>" class="form-control" type="email" name="email" id="email">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="phone">Phone:</label>
            <div class="col-sm-10">
              <input value="<?php if(isset($user->phone)){echo $user->phone;};?>" class="form-control" type="text" name="phone" id="phone">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="password">Password:</label>
            <div class="col-sm-10">
              <input value="" class="form-control" type="password" name="password" id="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="password_confirm">Confirm Password:</label>
            <div class="col-sm-10">
              <input value="" class="form-control" type="password" name="password_confirm" id="password_confirm">
            </div>
          </div>

          

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <?php if($user):?>
          <input type="hidden" name="id" value="<?php echo $user->id;?>" />
          <?php echo form_hidden('id', $user->id);?>
          <?php echo form_hidden($csrf); ?>
          <?php endif;?>
          <a class="btn btn-default" href="<?php echo base_url('auth/users');?>">Cancel</a>
          <button class="btn btn-info pull-right" type="submit">Save Changes</button>
        </div>
        <!-- /.box-footer -->
      </form>

</div>