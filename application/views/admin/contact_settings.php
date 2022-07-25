<style type="text/css">
  #uploadForm {border-top:#F0F0F0 2px solid;background:#FAF8F8;padding:10px;}
  #uploadForm label {margin:2px; font-size:1em; font-weight:bold;}
  .demoInputBox{padding:5px; border:#F0F0F0 1px solid; border-radius:4px; background-color:#FFF;}
  #progress-bar {background-color: #12CC1A;height:20px;color: #FFFFFF;width:0%;-webkit-transition: width .3s;-moz-transition: width .3s;transition: width .3s;}
  .btnSubmit{background-color:#09f;border:0;padding:10px 40px;color:#FFF;border:#F0F0F0 1px solid; border-radius:4px;}
  #progress-div {border:#0FA015 1px solid;padding: 5px 0px;margin:30px 0px;border-radius:4px;text-align:center;display: none;}
  #targetLayer{width:100%;text-align:center;}
</style>
<?php foreach($contact as $row):?>
<div class="box box-info">

      <?php echo $mgs;?>

      <div class="box-header with-border">
        <h3 class="box-title">Settings</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form id="page_banner_frm" action="<?php echo base_url('dashboard/contact_settings');?>" enctype="multipart/form-data" accept-charset="utf-8" method="post" class="form-horizontal">
        <div class="box-body">



          <div class="form-group">
              <div class="col-sm-12">
                  <div id="targetLayer">
                      <img src="<?php echo base_url($row['thumb']);?>">
                  </div>
              </div>
          </div>

          <div class="form-group">
              <label class="col-sm-4 control-label" for="page_banner_inp">Logo 150px X 85px</label>
              <div class="col-sm-8">
                  <input id="page_banner_inp" type="file" name="photo" id="fileInput">
                  <div id="progress-div"><div id="progress-bar"></div></div>
              </div>
          </div>
          

          <div class="form-group">
            <label class="col-sm-4 control-label" for="lat_lang1">MAP lat lang</label>
            <div class="col-sm-8">
              <input id="lat_lang1" value="<?php echo $row['lat_lang1'];?>" name="lat_lang1" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group hidden">
            <label class="col-sm-4 control-label" for="lang">MAP lang</label>
            <div class="col-sm-8">
              <input id="lang" value="<?php echo $row['lang'];?>" name="lang" type="text" class="form-control">
            </div>
          </div>

          

        


          <div class="form-group">
            <label class="col-sm-4 control-label" for="contact_mail">Contact mail</label>
            <div class="col-sm-8">
              <input id="contact_mail" value="<?php echo $row['contact_mail'];?>" name="contact_mail" type="text" class="form-control">
            </div>
          </div>

          
          <div class="form-group">
            <label class="col-sm-4 control-label" for="success_message">Success Message</label>
            <div class="col-sm-8">
              <input id="success_message" value="<?php echo $row['success_message'];?>" name="success_message" type="text" class="form-control">
            </div>
          </div>



            
          
          <div class="form-group text-center">
            <h2>Address</h2>
            <hr/>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label" for="address">Address</label>
            <div class="col-sm-8">
              <input id="address" value="<?php echo $row['address'];?>" name="address" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label" for="contact_message">Contact Time</label>
            <div class="col-sm-8">
              <input id="contact_message" value="<?php echo $row['contact_message'];?>" name="contact_message" type="text" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label" for="email">Email</label>
            <div class="col-sm-8">
              <input id="email" value="<?php echo $row['email'];?>" name="email" type="text" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label" for="phone">Phone</label>
            <div class="col-sm-8">
              <input id="phone" value="<?php echo $row['phone'];?>" name="phone" type="text" class="form-control">
            </div>
          </div>

          <div class="form-group hidden">
            <label class="col-sm-4 control-label" for="opening_time">Ma-Vr</label>
            <div class="col-sm-8">
              <input id="opening_time" value="<?php echo $row['opening_time'];?>" name="opening_time" type="text" class="form-control">
            </div>
          </div>


            
          
          <div class="form-group text-center">
            <h2>Social Media Links</h2>
            <hr/>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label" for="s_fb">Facebook</label>
            <div class="col-sm-8">
              <input value="<?php echo $row['s_fb'];?>" name="s_fb" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label" for="s_twitter">Twitter</label>
            <div class="col-sm-8">
              <input id="s_twitter" value="<?php echo $row['s_twitter'];?>" name="s_twitter" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label" for="s_g_plus">Google Plus</label>
            <div class="col-sm-8">
              <input id="s_g_plus" value="<?php echo $row['s_g_plus'];?>" name="s_g_plus" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group hidden">
            <label class="col-sm-4 control-label" for="s_instagram">Instagram</label>
            <div class="col-sm-8">
              <input id="s_instagram" value="<?php echo $row['s_instagram'];?>" name="s_instagram" type="text" class="form-control">
            </div>
          </div>


          <div class="form-group text-center hidden">
            <h2>For SEO</h2>
            <hr/>
          </div>

          <div class="form-group hidden">
            <label class="col-sm-4 control-label" for="meta_title">Site Title</label>
            <div class="col-sm-8">
              <input value="<?php echo $row['meta_title'];?>" name="meta_title" type="text" class="form-control">
            </div>
          </div>

          <div class="form-group hidden">
            <label class="col-sm-4 control-label" for="meta_tag_description">Meta Tag Description</label>
            <div class="col-sm-8">
              <textarea id="meta_tag_description" name="meta_tag_description" type="text" class="form-control"><?php echo $row['meta_tag_description'];?></textarea>
            </div>
          </div>

          <div class="form-group hidden">
            <label class="col-sm-4 control-label" for="meta_tag_keywords">Meta Key Words</label>
            <div class="col-sm-8">
              <textarea id="meta_tag_keywords" name="meta_tag_keywords" type="text" class="form-control"><?php echo $row['meta_tag_keywords'];?></textarea>
            </div>
          </div>




        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a class="btn btn-default" href="<?php echo base_url('dashboard/dash');?>">Cancel</a>
          <button class="btn btn-info pull-right" type="submit">Save Changes</button>
        </div>
        <!-- /.box-footer -->
      </form>
</div>
<?php endforeach;?>