<div class="box box-info">

      <div class="box-header with-border">

        <h3 class="box-title">Home Page Popup</h3>

      </div>

      <!-- /.box-header -->

      <!-- form start -->

      <form id="page_banner_frm" action="<?php echo base_url('dashboard/popup/operation');?>" enctype="multipart/form-data" accept-charset="utf-8" method="post" class="form-horizontal">

        <div class="box-body">





          <div class="form-group">

            <label class="col-sm-2 control-label" for="inputEmail3">Image 700X500 </label>



            <div class="col-sm-10">
				
            	<input class="float_l" type="file" name="photo" id="fileInput">
				<br>
				<img class="img-thumbnail" src="<?php echo base_url($popup->thumb);?>" alt="">

            </div>

          </div>

          



          

   


          <div class="form-group">

            <div class="col-sm-offset-2 col-sm-10">

              <div class="checkbox">

                <label>

                  <input <?php if($popup->status == 1){echo "checked";}?> name="status" value="1" type="radio"> Active

                </label>

                <label>

                  <input <?php if($popup->status == 0){echo "checked";}?> name="status" value="0" type="radio"> InActive

                </label>

              </div>

            </div>

          </div>



          



        </div>

        <!-- /.box-body -->



        




        <div class="box-footer">

          <a class="btn btn-default" href="<?php echo base_url('dashboard/popups');?>">Cancel</a>

          <button class="btn btn-info pull-right" type="submit">Save Changes</button>

        </div>

        <!-- /.box-footer -->

      </form>


      

</div>