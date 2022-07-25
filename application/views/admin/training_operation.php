<div class="box box-info">
   <div class="box-header with-border">
      <h3 class="box-title"><?= (isset($training[0])) ? $training[0]['title'] : ''; ?> </h3>
   </div>
   <!-- /.box-header -->
   <!-- form start -->
   <form id="page_banner_frm" action="<?php echo base_url('dashboard/training/operation');?>" enctype="multipart/form-data" accept-charset="utf-8" method="post" class="form-horizontal">
      <div class="box-body">
        
        
         <div class="form-group">
            <label class="col-sm-2 control-label" for="title">Title</label>
            <div class="col-sm-10">
               <input value="<?= (isset($training[0])) ? $training[0]['title'] : ''; ?>" required id="title" name="title" type="text" class="form-control">
            </div>
         </div>
         
         <div class="form-group">
            <label class="col-sm-2 control-label" for="date_time">Date</label>
            <div class="col-sm-10">
               <input value="<?= (isset($training[0])) ? $training[0]['date_time'] : ''; ?>" id="date_time" name="date_time" type="text" class="form-control">
            </div>
         </div>
         
         <div class="form-group">
            <label class="col-sm-2 control-label" for="duration">Duration</label>
            <div class="col-sm-10">
               <input value="<?= (isset($training[0])) ? $training[0]['duration'] : ''; ?>" id="duration" name="duration" type="text" class="form-control">
            </div>
         </div>
         
         <div class="form-group">
            <label class="col-sm-2 control-label" for="no_class">No. of Classes/ Sessions</label>
            <div class="col-sm-10">
               <input value="<?= (isset($training[0])) ? $training[0]['no_class'] : ''; ?>" id="no_class" name="no_class" type="text" class="form-control">
            </div>
         </div>
         
         <div class="form-group">
            <label class="col-sm-2 control-label" for="class_schedule">Class Schedule</label>
            <div class="col-sm-10">
               <input value="<?= (isset($training[0])) ? $training[0]['class_schedule'] : ''; ?>" id="class_schedule" name="class_schedule" type="text" class="form-control">
            </div>
         </div>
         
         <div class="form-group">
            <label class="col-sm-2 control-label" for="total_hour">Total Hours</label>
            <div class="col-sm-10">
               <input value="<?= (isset($training[0])) ? $training[0]['total_hour'] : ''; ?>" id="total_hour" name="total_hour" type="text" class="form-control">
            </div>
         </div>
         
         <div class="form-group">
            <label class="col-sm-2 control-label" for="last_date">Last Date of Registration</label>
            <div class="col-sm-10">
               <input value="<?= (isset($training[0])) ? $training[0]['last_date'] : ''; ?>" id="last_date" name="last_date" type="text" class="form-control">
            </div>
         </div>
         
         <div class="form-group">
            <label class="col-sm-2 control-label" for="venue">Venue</label>
            <div class="col-sm-10">
               <input value="<?= (isset($training[0])) ? $training[0]['venue'] : ''; ?>" id="venue" name="venue" type="text" class="form-control">
            </div>
         </div>
         
         <div class="form-group">
            <label class="col-sm-2 control-label" for="price">Price</label>
            <div class="col-sm-10">
               <input value="<?= (isset($training[0])) ? $training[0]['price'] : ''; ?>" id="price" name="price" type="text" class="form-control">
            </div>
         </div>
         
         <div class="form-group">
            <label class="col-sm-2 control-label" for="contact">Contact</label>
            <div class="col-sm-10">
               <input value="<?= (isset($training[0])) ? $training[0]['contact'] : ''; ?>" id="contact" name="contact" type="text" class="form-control">
            </div>
         </div>
         
         
          
         <div class="form-group">
           <label class="col-sm-2 control-label" for="introduction">Introduction</label>
            <div class="col-sm-10">
               <textarea id="introduction" class="form-control ckeditor" name="introduction"><?= (isset($training[0])) ? $training[0]['introduction'] : ''; ?></textarea>
            </div>
         </div>
          
         <div class="form-group">
           <label class="col-sm-2 control-label" for="methodology">Methodology</label>
            <div class="col-sm-10">
               <textarea id="methodology" class="form-control ckeditor" name="methodology"><?= (isset($training[0])) ? $training[0]['methodology'] : ''; ?></textarea>
            </div>
         </div>
          
         <div class="form-group">
           <label class="col-sm-2 control-label" for="contents_of_training">Contents of Training</label>
            <div class="col-sm-10">
               <textarea id="contents_of_training" class="form-control ckeditor" name="contents_of_training"><?= (isset($training[0])) ? $training[0]['contents_of_training'] : ''; ?></textarea>
            </div>
         </div>
         
         
          
      </div>
      <!-- /.box-body -->
      <input id="id" type="hidden" name="id" value="<?= (isset($training[0])) ? $training[0]['id'] : ''; ?>" />
      <div class="box-footer">
         <a class="btn btn-default" href="<?php echo base_url('dashboard/training');?>">Cancel</a>
         <button class="btn btn-info pull-right" type="submit">Save Changes</button>
      </div>
      <!-- /.box-footer -->
   </form>

</div>