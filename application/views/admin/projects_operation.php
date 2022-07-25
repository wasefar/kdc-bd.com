<div class="box box-info">

      <div class="box-header with-border">

        <h3 class="box-title"><?= (isset($project[0])) ? $project[0]['title'] : ''; ?></h3>

      </div>

      <!-- /.box-header -->

      <!-- form start -->

      <form id="page_banner_frm" action="<?php echo base_url('dashboard/projects/operation');?>" enctype="multipart/form-data" accept-charset="utf-8" method="post" class="form-horizontal">

        <div class="box-body">





          <div class="form-group">

            <label class="col-sm-2 control-label" for="inputEmail3">Image 700X500 </label>



            <div class="col-sm-10">



            <input class="float_l" type="file" name="photo" id="fileInput">



            </div>

          </div>

          

          <div class="form-group">

            <label class="col-sm-2 control-label" for="title">Title</label>

            <div class="col-sm-10">

                <input value="<?= (isset($project[0])) ? $project[0]['title'] : ''; ?>" required id="title" name="title" type="text" class="form-control">

            </div>

          </div>

          

          <div class="form-group">

            <label class="col-sm-2 control-label" for="date">Project Date</label>

            <div class="col-sm-10">

                <input value="<?= (isset($project[0])) ? $project[0]['date'] : ''; ?>" id="date" name="date" type="text" class="form-control">

            </div>

          </div>

          

          <div class="form-group">

            <label class="col-sm-2 control-label" for="value">Project value</label>

            <div class="col-sm-10">

                <input value="<?= (isset($project[0])) ? $project[0]['value'] : ''; ?>" id="value" name="value" type="text" class="form-control">

            </div>

          </div>

          

          <div class="form-group">

            <label class="col-sm-2 control-label" for="client">Project client</label>

            <div class="col-sm-10">

                <input value="<?= (isset($project[0])) ? $project[0]['client'] : ''; ?>" id="client" name="client" type="text" class="form-control">

            </div>

          </div>

          

          <div class="form-group">

            <label class="col-sm-2 control-label" for="location">Project location</label>

            <div class="col-sm-10">

                <input value="<?= (isset($project[0])) ? $project[0]['location'] : ''; ?>" id="location" name="location" type="text" class="form-control">

            </div>

          </div>



          <div class="form-group">

            <div class="col-sm-offset-2 col-sm-10">

              <div class="checkbox">

                <label>

                  <input <?php if($project && $project['0']['status'] == 1){echo "checked";}?> name="status" value="1" type="radio"> Ongoing

                </label>

                <label>

                  <input <?php if($project && $project['0']['status'] == 2){echo "checked";}?> name="status" value="2" type="radio"> Completed

                </label>

              </div>

            </div>

          </div>



          <div class="form-group">

            <div class="col-sm-offset-2 col-sm-10">

              <div class="checkbox">

                <label>

                  <input <?php if($project && $project['0']['featured'] == 1){echo "checked";}?> name="featured" value="1" type="checkbox"> Featured Project

                </label>

              </div>

            </div>

          </div>



          <div class="form-group">

            <div class="col-sm-12">

            		<textarea id="editor1" required class="form-control" name="details"> <?= (isset($project[0])) ? $project[0]['details'] : ''; ?> </textarea>

            </div>

          </div>



        </div>

        <!-- /.box-body -->



        

        <input id="id" type="hidden" name="id" value="<?= (isset($project[0])) ? $project[0]['id'] : ''; ?>" />



        <div class="box-footer">

          <a class="btn btn-default" href="<?php echo base_url('dashboard/projects');?>">Cancel</a>

          <button class="btn btn-info pull-right" type="submit">Save Changes</button>

        </div>

        <!-- /.box-footer -->

      </form>


      <?php if($project){?>
      <input type="hidden" id="page_id_fr_img" value="<?= (isset($project[0])) ? $project[0]['id'] : ''; ?>">
      <div id="content">
        <div id="my-dropzone" class="dropzone">
          <div class="dz-message">
            <h3>Drop files here</h3> or <strong>click</strong> to upload
          </div>
        </div> 
      </div>

      <input type="hidden" id="img_url" value="pages">
      <?php }?>

</div>