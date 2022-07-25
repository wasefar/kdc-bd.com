<div class="box box-info">

      <?php echo $mgs;?>

      <div class="box-header with-border">
        <h3 class="box-title">Settings</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      
        <div class="box-body">



            <?php foreach($settings as $item){?>
                <?php if($item['type']=='file'){?>
                <form action="<?php echo base_url('dashboard/settings/save');?>" enctype="multipart/form-data" accept-charset="utf-8" method="post" class="form-horizontal image_settings_frm">
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="lat_lang1"><?=$item['label']?> <?=$item['width']?>X<?=$item['height']?></label>
                    <div class="col-sm-8">
                        <div class="progress progress-striped active" style="display: none;">
                            <div class="progress-bar" style="width:0%"></div>
                        </div>
                        <div class="uploaded_data">
                            <img class="img-thumbnail" style="width:150px;" src="<?php echo base_url($item['content']);?>" alt="">
                        </div>
                        <input class="image_serrings_inp" type="file" name="photo" id="">
                        <input type="hidden" name="width" value="<?=$item['width']?>">
                        <input type="hidden" name="height" value="<?=$item['height']?>">
                        <input type="hidden" name="settings_id" value="<?=$item['id']?>">
                    </div>
                    
                </div>
            </form>
          
                <?php }?>
            <?php }?>
            
            
            <form id="page_banner_frm" action="<?php echo base_url('dashboard/settings/save');?>" enctype="multipart/form-data" accept-charset="utf-8" method="post" class="form-horizontal">

          <?php foreach($settings as $item):?>
          
          <?php if($item['type']!='file'){?>

          <div class="form-group">
            <label class="col-sm-4 control-label" for="lat_lang1"><?=$item['label']?></label>
            <div class="col-sm-8">


              <?php if($item['type']=='textarea'){?>
              <textarea id="text_<?=$item['id']?>" name="content[<?=$item['id']?>]"  class='form-control <?=$item['class']?>'><?=$item['content']?></textarea><br />
              <?php }elseif($item['type']=='input'){?>
              <input type="text" name="content[<?=$item['id']?>]" value="<?=html_escape($item['content']);?>"  class='form-control'/><br />
              <?php };?>
              
              <?php if(!empty($item['info'])){?>
              <span class="help-block"><?=$item['info']?></span>
              <?php };?>



            </div>
          </div>
           <?php };?>

        <?php endforeach;?>
        
        <div class="box-footer">
          <a class="btn btn-default" href="<?php echo base_url('dashboard/dash');?>">Cancle</a>
          <button class="btn btn-info pull-right" type="submit">Save</button>
        </div>
      </form>


        </div>
        
</div>
