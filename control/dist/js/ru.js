$(document).ready(function () {



    var base_url = $('#base_url').attr('href');








    $(function () {
        $('.category_delete').click(function () {

            var del_url = $(this).attr('href');

            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            },
                    function () {
                        swal("Deleted!", "Your imaginary file has been deleted.", "success");
                        window.location = del_url;
                    });

            return false;
        });
    });
    
    
    $(function(){
        $('.approve_blog').click(function(){

            $.post($(this).attr('href'), $(this).serialize(), function(json){
                if(json.st == 1){

                    swal({
                        title: "Success...",
                        text: 'Approved',
                        type: "success",
                        confirmButtonText: "Ok"
                    });
                    
                    $('#blog_'+json.blog_id).slideUp();

                }else if(json.st == 3){
                    
                    
                }

             },'json');


            return false;

        });

    });
    
    
    $(function(){
        $('.delete_blog').click(function(){
            
            var delBlogUrl = $(this).attr('href');
            
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            },
                    function () {
                        
                    $.post(delBlogUrl, $(this).serialize(), function(json){
                        if(json.st == 1){

                            swal({
                                title: "Deleted...",
                                text: 'Your imaginary file has been deleted.',
                                type: "success",
                                confirmButtonText: "Ok"
                            });

                            $('#blog_'+json.blog_id).fadeOut();

                        }else if(json.st == 3){


                        }

                     },'json');
                
                
                });

            
            
            

            


            return false;

        });

    });
    
    $(function(){
        $('.delete_option').click(function(){
            
            var delUrl = $(this).attr('href');
            
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            },
                    function () {
                        
                    $.post(delUrl, $(this).serialize(), function(json){
                        if(json.st == 1){

                            swal({
                                title: "Deleted...",
                                text: 'Your imaginary file has been deleted.',
                                type: "success",
                                confirmButtonText: "Ok"
                            });

                            $('#item_'+json.id).fadeOut();

                        }else if(json.st == 3){


                        }

                     },'json');
                
                });

            return false;

        });

    });
    
    
    
    
    
    $(document).on('change','.image_serrings_inp',function(e){
        e.preventDefault();

        $form = $(this).parents('form.image_settings_frm');

        $form.find('.progress').show();
        $form.find('.uploaded_data').html('');

        uploadImage($form);

    });
    
    
    function uploadImage($form){
        $form.find('.progress-bar')
        .removeClass('progress-bar-success')
        .removeClass('progress-bar-danger');

        var formdata = new FormData($form[0]); //formelement
        var request = new XMLHttpRequest();

        //progress event...
        request.upload.addEventListener('progress',function(e){
            var percent = Math.round(e.loaded/e.total * 100);
            $form.find('.progress-bar').width(percent+'%').html(percent+'%');
        });

        //progress completed load event
        request.addEventListener('load',function(e){

            $form.find('.progress-bar').addClass('progress-bar-success').html('upload completed....');
        });

        request.open('post', base_url+'dashboard/settings/up_banner');
        request.send(formdata);

        request.onreadystatechange = function() {
            if(request.readyState == 4 && request.status == 200) {
                var return_data = request.responseText;
                $form.find('.progress').hide();
                $form.find('.uploaded_data').html(return_data);
                
            }
        }


        $form.on('click','.cancel',function(){
            request.abort();

            $form.find('.progress-bar')
                .addClass('progress-bar-danger')
                .removeClass('progress-bar-success')
                .html('upload aborted...');
        });

    }
    
    
    


    $('#page_banner_inp').change(function(e) {    
        if($('#page_banner_inp').val()) {
            e.preventDefault();
            $('#loader-icon').show();
            $('#progress-div').show();


            $('#page_banner_frm').ajaxSubmit({ 
                target:   '#targetLayer', 
                url: base_url+'dashboard/contact_settings/upload_banner/',
                beforeSubmit: function() {
                  $("#progress-bar").width('0%');
                },
                uploadProgress: function (event, position, total, percentComplete){ 
                    $("#progress-bar").width(percentComplete + '%');
                    $("#progress-bar").html('<div id="progress-status">' + percentComplete +' %</div>')
                },
                success:function (){
                    $('#loader-icon').hide();
                    $('#progress-div').hide();
                }
                //resetForm: true 
            }); 
            return false; 
        }
    });






    $(function () {

        if($('#data_table').length) {
          $('#data_table').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true
          });
        };

        $("#checkAll").change(function () {
            $(".industry_id").prop('checked', $(this).prop("checked"));
        });

    });

    if($('.multiple_datepicker').length) {
        $('.multiple_datepicker').each(function () { 
              var dateFieldID = $(this).attr('id');
              $("#"+dateFieldID).datepicker({dateFormat: "dd M yy"});


        });
    };





    var table = $('#table').val();

      

        $(function(){ 
            SetNumber();
        });

        $("#sortable").sortable({ 
          update : function () {        

                $('#sortable tr').each(function(){ 
                      var order = $("#sortable tr").index(this);
                      var mainID = $(this).attr('id');
                      $(document).load(base_url+'dashboard/dash/change_order/'+mainID+'/'+order+'/'+table); 
                      console.log('Index is '+order + ' & ID is '+mainID);
                      SetNumber();

                }); 
            }
        });

        var SetNumber = function() {
          var I = 1;
            $('#sortable tr td.set_number').each(function(){ 
                    
                  $(this).html(I);
                I++;
            });
        };





    


    $(function () {
        
        
        
        
        
        if($('.ckeditor').length) {

              $('.ckeditor').each(function(){
                  var editorID = $(this).attr('id');
                  
                  
                  CKEDITOR.replace( editorID, {
                      allowedContent: true,
                      contentsCss : base_url+'assets/stylesheets/style.css?var=1.1',
                      filebrowserBrowseUrl: base_url+'asset/plugins/ckfinder/ckfinder.html?type=Images',
                      filebrowserUploadUrl: '/ckeditor/uploader/upload.php',
                      filebrowserWindowWidth: '640',
                      filebrowserWindowHeight: '480',
                      toolbar: [

                          { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo', 'spellchecker' ] },

                          { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline' ] },

                          { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl' ] },

                          { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },

                          { name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak' ] },

                          { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },

                          { name: 'colors', items: [ 'TextColor', 'BGColor' ] },

                          { name: 'tools', items: [ 'Maximize', 'ShowBlocks', 'Source' ] }
                      ]




                      });
                  
                  
                  
                  
              });
        };
        
        
        
        
        

        if($('#editor1').length) {
              CKEDITOR.replace( 'editor1', {
              allowedContent: true,
              contentsCss : base_url+'assets/stylesheets/style.css?var=1.1',
              filebrowserBrowseUrl: base_url+'asset/plugins/ckfinder/ckfinder.html?type=Images',
              filebrowserUploadUrl: '/ckeditor/uploader/upload.php',
              filebrowserWindowWidth: '640',
              filebrowserWindowHeight: '480',
              toolbar: [

                  { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo', 'spellchecker' ] },

                  { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline' ] },

                  { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl' ] },

                  { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },

                  { name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak' ] },

                  { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },

                  { name: 'colors', items: [ 'TextColor', 'BGColor' ] },

                  { name: 'tools', items: [ 'Maximize', 'ShowBlocks', 'Source' ] }
              ]
              



              });
          }

          if($('#editor2').length) {
              CKEDITOR.replace( 'editor2', {
              allowedContent: true,
              contentsCss : base_url+'assets/stylesheets/style.css?var=1.1',
              filebrowserBrowseUrl: base_url+'asset/plugins/ckfinder/ckfinder.html?type=Images',
              filebrowserUploadUrl: '/ckeditor/uploader/upload.php',
              filebrowserWindowWidth: '640',
              filebrowserWindowHeight: '480',

              toolbar: [

                  { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo', 'spellchecker' ] },

                  { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline' ] },

                  { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl' ] },

                  { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },

                  { name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak' ] },

                  { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
                  
                  { name: 'colors', items: [ 'TextColor', 'BGColor' ] },

                  { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] }
              ]


              
              });
          }

    });


    $(function(){

            $('#user_message').submit(function(){
              $("#send_button").hide();
              $("#send_button_loadeing").show();
                $.post($(this).attr('action'), $(this).serialize(), function(json){
                    if ( json.st == 1 ){
                        //$('html, body').animate({ scrollTop: 0 }, 'slow');

                        $("#mgs_container").prepend(json.msg);
                        $('#user_message')[0].reset();

                          $("#send_button_loadeing").hide();
                          $("#send_button").show();
                          
                        //$("#send_button").show();
                    }
                },'json');
                return false;
            });
        });






    $(function() {
          $(".draggable li" ).draggable({
            appendTo: "body",
            helper: "clone"
          });
          $( ".droppable" ).droppable({
            activeClass: "ui-state-default",
            hoverClass: "ui-state-hover",
            accept: ".draggable li",
            drop: function( event, ui ) {
              $( this ).find( ".placeholder" ).remove();
              var index = ui.draggable.attr('data-index');
              $(this).append('<li class="list-group-item numeric-list" data-index="'+index+
                '"><div class="pull-left">'+ui.draggable.text()+
                '</div><input type="hidden" name="designations[]" value="'+index+'" >'+
                '<div class="pull-right"><div class="btn-group"><a href="#" onclick="removeDesig(this);" '+
                'class="btn btn-danger btn-xs" ><i class="glyphicon glyphicon-remove"></i></a></div></div>'+
                '<div  class="clearfix"></div></li>');

                var ind_id = $('#ind_id').val();
                var indDesig = base_url+"dashboard/categories/desig_add/" + index + '/' +ind_id;

                $.post(indDesig, $(this).serialize(), function(json){
                    if(json.st == 1){               

                    }
                },'json');

              ui.draggable.hide();
            }
          }).sortable({
            items: "li:not(.placeholder)",
            sort: function() {
              $( this ).removeClass( "ui-state-default" );
            }
          });

          hideExisting();
        });
        var removed=[];
        function removeDesig (obj,id) {
          var li = $(obj).closest('li');
          var index = li.attr('data-index');
          $('li.desig-'+index).show();
          li.remove();


          var ind_id = $('#ind_id').val();
          var indDesigRev = base_url+"dashboard/categories/desig_remove/" + index + '/' +ind_id;

          $.post(indDesigRev, $(this).serialize(), function(json){
              if(json.st == 1){               

              }
          },'json');


        }
        function hideExisting () {
          $('.droppable li').each(function (obj) {
            $('.desig-'+$(this).attr('data-index')).hide();
          });
        }






});