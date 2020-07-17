<div class="right_col" role="main" style="min-height: 3806px;">
<div class="col-md-1 "></div>
<div class="col-md-10 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add New Course<small>(Please make sure your slug is unique)</small></h2>
                   
                  <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <?php if(isset($validationError)): ?>
                        <div class="required-error">
                            <?=$validationError?>
                         </div>
                    <?php endif; ?>
                    <br />
                    <form class="form-horizontal form-label-left"  enctype="multipart/form-data" method="post">
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Course Title</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control" name="title" placeholder="Course Title">
                        </div>
                      </div>
                      <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Course Slug</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control" name="slug" placeholder="Course Slug">
                        </div>
                      </div>
                      <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Course Subject</label>
                        <div class="col-md-9 col-sm-9 ">
                          <select name="subject" class="form-control">
                            <option value="">Select Subject</option>
                            <?php foreach( $subjects as $key=>$subject): ?>
                            <option value="<?=$subject->id?>"><?=$subject->subject_name?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Short Description</label>
                        <div class="col-md-9 col-sm-9 ">
                          <textarea row="3" class="form-control" name="shortdescription" placeholder="Short Description "></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Detail Description</label>
                        <div class="col-md-9 col-sm-9 ">
                          <textarea  rows="7" cols="40" id="ddescription" class="form-control" name="detaildescription" placeholder="Detail Description"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Price<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" name="price" class="form-control" rows="3" placeholder="Price">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Sale Price<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" name="saleprice" class="form-control" rows="3" placeholder="Sale Price">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Number of Article<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" name="article" class="form-control" rows="3" placeholder="Number of Article">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Video hours<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" name="vhours" class="form-control" rows="3" placeholder="Video hours">
                        </div>
                      </div>
                       <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Featured Image</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="file" class="form-control" name="fimage" placeholder="Featured Image">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Featured Video</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="file" class="form-control" name="fvideo" placeholder="Featured Video">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Type</label>
                        <div class="col-md-9 col-sm-9 ">
                              <select id="content_type" name="type" class="form-control">
                                <option value="video">Video</option>
                                <option value="html">HTML</option>
                              </select>
                        </div>
                      </div>
                      <div class="form-group row video_area" style="height: auto; overflow:hidden">
                        <label class="control-label col-md-3 col-sm-3 ">Video Upload</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="file" id="video_upload" class="form-control" name="video_upload" placeholder="Please upload video" required>
                        </div>
                      </div>
                      <div class="form-group row html_area" style="display: none; height: auto; overflow:hidden">
                        <label class="control-label col-md-3 col-sm-3 ">HTML Upload</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="file" id="html_upload" class="form-control" name="html_upload" placeholder="Please upload zip">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9  offset-md-3">
                          <input type="hidden"  name="modifiedby" value="<?=$this->session->get_userdata()['id'];?>" >
                          <input type="hidden"  name="createdby"  value="<?=$this->session->get_userdata()['id'];?>" >
                          <button type="button" class="btn btn-primary">Cancel</button>
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="submit" id="save" name="save" value="save"  class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
              </div>
               <div class="col-md-3">
                </div>
          </div>
<script>

tinymce.init({
  selector: '#ddescription.form-control',
  menubar: false,
  toolbar_mode: 'floating',
  toolbar_buttons: "bold,italic,underline,strikethrough,separator,bullist,numlist",
  toolbar: 'undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | ' +
    'bullist numlist',
  block_formats: 'Paragraph=p; Header 1=h1; Header 2=h2; Header 3=h3; Header 4=h4; Header 5=h5; Header 6=h6;',
});
$(document).ready(function(){
 $('#content_type').change(function(){
    var _val = $(this).val();
    if(_val=='video')
    {
      $('.video_area').css('display','block');
      $('.video_area').find('inpuy[type="file"]').attr('required','true');
      
      $('.html_area').css('display','none');
      $('.html_area').find('inpuy[type="file"]').removeAttr('required');
    }
    if(_val=='html')
    {
      $('.video_area').css('display','none');
      $('.video_area').find('inpuy[type="file"]').removeAttr('required');
      
      $('.html_area').find('inpuy[type="file"]').attr('required','true');
      $('.html_area').css('display','block');
    }
 });
});
</script>
            