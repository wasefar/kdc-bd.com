<div class="box box-info">
   <div class="box-header with-border">
      <h3 class="box-title"><?= (isset($career[0])) ? $career[0]['title'] : ''; ?></h3>
   </div>
   <!-- /.box-header -->
   <!-- form start -->
   <form id="page_banner_frm" action="<?php echo base_url('dashboard/career/operation');?>" enctype="multipart/form-data" accept-charset="utf-8" method="post" class="form-horizontal">
      <div class="box-body">
        
        
         <div class="form-group">
            <label class="col-sm-2 control-label" for="title">Title</label>
            <div class="col-sm-10">
               <input value="<?= (isset($career[0])) ? $career[0]['title'] : ''; ?>" required id="title" name="title" type="text" class="form-control">
            </div>
         </div>
         
         <div class="form-group">
            <label class="col-sm-2 control-label" for="vacancy">Vacancy</label>
            <div class="col-sm-10">
               <input value="<?= (isset($career[0])) ? $career[0]['vacancy'] : ''; ?>" id="vacancy" name="vacancy" type="text" class="form-control">
            </div>
         </div>
         
         
          
         <div class="form-group">
           <label class="col-sm-2 control-label" for="job_context">Job Context</label>
            <div class="col-sm-10">
               <textarea id="job_context" class="form-control ckeditor" name="job_context"><?= (isset($career[0])) ? $career[0]['job_context'] : ''; ?> </textarea>
            </div>
         </div>
         
         <div class="form-group">
           <label class="col-sm-2 control-label" for="job_responsibilities">Job Responsibilities</label>
            <div class="col-sm-10">
               <textarea id="job_responsibilities" class="form-control ckeditor" name="job_responsibilities"><?= (isset($career[0])) ? $career[0]['job_responsibilities'] : ''; ?> </textarea>
            </div>
         </div>
         
         <div class="form-group">
           <label class="col-sm-2 control-label" for="educational_requirements">Educational Requirements</label>
            <div class="col-sm-10">
               <textarea id="educational_requirements" class="form-control ckeditor" name="educational_requirements"><?= (isset($career[0])) ? $career[0]['educational_requirements'] : ''; ?></textarea>
            </div>
         </div>
         
         <div class="form-group">
           <label class="col-sm-2 control-label" for="experience_requirements">Experience Requirements</label>
            <div class="col-sm-10">
               <textarea id="experience_requirements" class="form-control ckeditor" name="experience_requirements"><?= (isset($career[0])) ? $career[0]['experience_requirements'] : ''; ?> </textarea>
            </div>
         </div>
         
         <div class="form-group">
           <label class="col-sm-2 control-label" for="additional_requirements">Additional Requirements</label>
            <div class="col-sm-10">
               <textarea id="additional_requirements" class="form-control ckeditor" name="additional_requirements"><?= (isset($career[0])) ? $career[0]['additional_requirements'] : ''; ?></textarea>
            </div>
         </div>
         
         
         
         
         <div class="form-group">
            <label class="col-sm-2 control-label" for="employment_status">Employment Status</label>
            <div class="col-sm-10">
               <input value="<?= (isset($career[0])) ? $career[0]['employment_status'] : ''; ?>" id="employment_status" name="employment_status" type="text" class="form-control">
            </div>
         </div>
         
         <div class="form-group">
            <label class="col-sm-2 control-label" for="salary">Salary</label>
            <div class="col-sm-10">
               <input value="<?= (isset($career[0])) ? $career[0]['salary'] : ''; ?>" id="salary" name="salary" type="text" class="form-control">
            </div>
         </div>
         
         <div class="form-group">
            <label class="col-sm-2 control-label" for="job_location">Job Location</label>
            <div class="col-sm-10">
               <input value="<?= (isset($career[0])) ? $career[0]['job_location'] : ''; ?> " id="job_location" name="job_location" type="text" class="form-control">
            </div>
         </div>
         
         
         
         <div class="form-group">
           <label class="col-sm-2 control-label" for="compensation">Compensation & Other Benefits</label>
            <div class="col-sm-10">
               <textarea id="compensation" class="form-control ckeditor" name="compensation"><?= (isset($career[0])) ? $career[0]['compensation'] : ''; ?> </textarea>
            </div>
         </div>
         
         
         <div class="form-group">
            <label class="col-sm-2 control-label" for="deadline">Deadline </label>
            <div class="col-sm-10">
               <input value="<?= (isset($career[0])) ? $career[0]['deadline'] : ''; ?>" id="deadline" name="deadline" type="text" class="form-control multiple_datepicker">
            </div>
         </div>
          
         <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
               <div class="checkbox">
                  <label>
                  <input <?= (!isset($career)?'checked':'')?> <?php if($career && $career['0']['status'] == 1){echo "checked";}?> name="status" value="1" type="radio"> Active
                  </label>
                  <label>
                  <input <?php if($career && $career['0']['status'] == 2){echo "checked";}?> name="status" value="2" type="radio"> Inactive
                  </label>
               </div>
            </div>
         </div>
      </div>
      <!-- /.box-body -->
      <input id="id" type="hidden" name="id" value="<?= (isset($career[0])) ? $career[0]['id'] : ''; ?>" />
      <div class="box-footer">
         <a class="btn btn-default" href="<?php echo base_url('dashboard/career');?>">Cancel</a>
         <button class="btn btn-info pull-right" type="submit">Save Changes</button>
      </div>
      <!-- /.box-footer -->
   </form>

</div>