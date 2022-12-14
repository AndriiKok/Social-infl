               <script>_ID_MENU_LEFT = '<?php echo(isset($D->id_menu) ? $D->id_menu : '')?>';</script>

               <?php if(isset($D->js_script_min)) echo $D->js_script_min;?>
               
                <div id="dashboard-main-center">

                    <div class="box-white">
                        <div class="box-white-header">
                            <div class="title"><?php echo $this->lang('dashboard_albums_addphotos_title_page'); ?></div>
                            
                            <div class="some-right"><div><span class="blue">&laquo;</span> <span class="link link-blue"><a href="<?php echo $K->SITE_URL?>albums" rel="phantom" target="dashboard-main-area-right"><?php echo $this->lang('dashboard_albums_edit_back')?></a></span></div></div>

                            <div class="clear"></div>
                        </div>

                        <div class="box-white-body">
                        
                            <div class="spacetitle" style="text-align:center; margin-bottom:10px;"><?php echo $D->title; ?></div>
                        

                            <div id="form01" class="mrg30B">
                                <form id="form1" name="form1" method="post" action="">
                                
                                <div class="form-block" id="space-add-photos-album">
                                    <label for="imageupload"><?php echo $this->lang('dashboard_albums_create_txt_photos')?>:</label>
                                    <div id="imageupload" class="space_upload">
                                        <div id="imagepreview"><div class="msgupload"><?php echo $this->lang('dashboard_albums_create_txt_upload_photos')?></div></div>

                                    </div>
                                    
                                    <input type="file" accept="image/x-png, image/gif, image/jpeg" class="hide" id="filesphotos" name="filesphotos[]" multiple="multiple">
                                    <input id="numphotos" name="numphotos" type="hidden" value="0">

                                    <div id="msg-photos" style="background-image:url(<?php echo getImageTheme('ico-attach.png')?>);">
                                        <span id="delele_msg_photos">x</span>
                                        <span id="nquantity"></span> <span id="msg_quantity"></span>
                                    </div>
                                    
                                    
                                    <script>
                                    
                                    $('#imageupload')[0].ondragover = function(e) {
                                        e.stopPropagation();
                                        e.preventDefault();
                                        $('#imageupload').addClass('hover');
                                    };
                                    
                                    $('#imageupload')[0].ondragleave = function(e) {
                                        e.stopPropagation();
                                        e.preventDefault();
                                        $('#imageupload').removeClass('hover');
                                        return false;
                                    };
                                    
                                    $('#imageupload')[0].ondrop = function(e) {
                                        e.stopPropagation();
                                        e.preventDefault();
                                        $('#imageupload').removeClass('hover');
                                        return false;
                                    };
                                    
                                    $('#imageupload').click(function(e){
                                        $("#filesphotos").click();
                                    });
                                    
                                    var msg_one = stripslashes('<?php echo strJS($this->lang('dashboard_albums_txt_photo_attached'))?>');
                                    var msg_more = stripslashes('<?php echo strJS($this->lang('dashboard_albums_txt_photos_attached'))?>');
                                    $("#filesphotos").change(function(e) {
                                        if (this.files.length == 1) {
                                            $('#nquantity').text(1);
                                            $('#msg_quantity').text(msg_one);
                                            $('#msg-photos').show();
                                        } else {
                                            $('#nquantity').text(this.files.length);
                                            $('#msg_quantity').text(msg_more);
                                            $('#msg-photos').show();
                                        }
                                        $('#imageupload').hide();
                                        $('#numphotos').val(this.files.length);
                                    });
                                    
                                    $('#delele_msg_photos').click(function(){
                                        $('#msg-photos').hide();
                                        $('#imageupload').show();
                                        $('#numphotos').val(0);
                                        var $fileInput = $('#filesphotos');
                                        $fileInput.val('');        
                                        var inputClone = $fileInput.clone(true);
                                        $fileInput.after(inputClone);
                                        $fileInput.remove();
                                        $fileInput = inputClone;
                                    });
                                    
                                    </script>
                                </div>


                                <div class="mrg20T">
                                    <div id="msgerror" class="alert alert-red hide"></div>
                                    <span><input type="submit" name="bsave" id="bsave" value="<?php echo $this->lang('dashboard_albums_addphotos_baddphotos')?>" class="my-btn my-btn-blue"/></span> <span id="preload-publish" class="hide"><img src="<?php echo getImageTheme('preload.gif'); ?>" alt=""></span>
                                </div>

                              </form>

                                <script>
                                
                                var txt_error_photo = stripslashes('<?php echo strJS($this->lang('dashboard_albums_create_error_photo'))?>');
                                var txt_error_formatphoto = stripslashes('<?php echo strJS($this->lang('dashboard_albums_create_error_formatimage'))?>');

                                var code_album = '<?php echo $D->codealbum;?>';
                                $('#bsave').click(function(e){
                                    e.preventDefault();
                                    addPhotosAlbum('#msgerror', '#bsave');
                                });

                                </script>

                            </div>

                            <div class="mrg30B"></div>

                        </div>

                    </div>

                </div>

                <div id="dashboard-main-right">

                    <?php $this->load_template('_dashboard-right.php'); ?>

                </div>

                <div class="clear"></div>

                <?php if (isset($D->titlePhantom) && !empty($D->titlePhantom)) { ?>
                <div id="newtitlesite" style="display:none;"><?php echo $D->titlePhantom?></div>
                <?php } ?>

                <script>
                
                var _menu_resp_dashboard = stripslashes('<?php echo strJS(cutLineJump($D->mini_card_user))?>') + stripslashes('<?php echo strJS(cutLineJump($D->dashboard_menu_responsive))?>') + '<div class="mrg10B"></div>';

                markMenuLeft('dashboard');
                makeMenuResp('dashboard');

                </script>

                <!--DASHBOARD-->