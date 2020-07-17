<div class="right_col" role="main" style="min-height: 3806px;">
<div class="col-md-1 "></div>
<div class="col-md-10 ">
      <div class="x_panel">
        <div class="x_title">
              <h2>Update Course <small>(you can not edit slug from here)</small></h2>
              <div class = "clearfix"></div>
            </div> 
            <div class="x_content">
              <?php if(isset($validationError)): ?>
                  <div class="required-error">
                      <?=$validationError?>
                    </div>
              <?php endif; ?>
              <br />
              <form class="form-horizontal form-label-left" enctype="multipart/form-data" method="post">
                  <div class="form-group row ">
                    <label class="control-label col-md-3 col-sm-3 ">Title</label>
                    <div class="col-md-9 col-sm-9 ">
                      <input type="text" class="form-control" value="<?=$row->title?>" name="title" placeholder="Title">
                    </div>                                
                  </div>
                  <div class="form-group row ">
                    <label class="control-label col-md-3 col-sm-3 ">Slug</label>
                    <div class="col-md-9 col-sm-9 ">
                      <input type="text" class="form-control" value="<?=$row->slug?>" name="slug" placeholder="Title">
                    </div>                                
                  </div>
                  <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Subject</label>
                        <div class="col-md-9 col-sm-9 ">
                          <select name="subject" class="form-control">
                            <option value="">Select Subject</option>
                            <?php foreach( $subjects as $key=>$subject): ?>
                            <option value="<?=$subject->id?>" <?=($subject->id==$row->subject_id)?'selected':''?>><?=$subject->subject_name?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                      </div>
                  <div class="form-group row">
                  
                    <label class="control-label col-md-3 col-sm-3">Short Description </label>
                    <div class="col-md-9 col-sm-9 ">
                      <textarea row="3" class="form-control" value="" name="shortdescription" placeholder="Short Description"><?=$row->short_description?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3 ">Detail Description</label>
                    <div class="col-md-9 col-sm-9 ">
                      <textarea  rows="7" cols="40" id="ddescription" class="form-control" name="detaildescription" placeholder="Detail Description"><?=$row->detail_description?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3 ">Price<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 ">
                      <input type="text" name="price"  class="form-control"  placeholder="price" value="<?=$row->price?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3 ">Sale Price<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 ">
                      <input type="text" name="saleprice"  class="form-control"  placeholder="Sale Price" value="<?=$row->sale_price?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3 ">Number of Article<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 ">
                      <input type="text" name="article"  class="form-control"  placeholder="Number o Article" value="<?=$row->numberof_article?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3 ">Video Hours<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 ">
                      <input type="text" name="vhours"  class="form-control"  placeholder="Video Hours" value="<?=$row->video_hours?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3 ">Featured Image<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 ">
                      <input type="file" name="fimage"  class="form-control"  placeholder="Featured Video" value="<?=$row->featured_image?>">
                      <?php if($row->featured_image!=''){ ?>
                         <img src="<?=UPLOADS.$row->featured_image?>" style="width: 150px; margin-top: 20px;"> 
                      <?php } ?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3 ">Featured Video<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 ">            
                      <input type="file" name="fvideo"  class="form-control"  placeholder="Featured Video" value="<?=$row->featured_video?>">
                      <?php if($row->featured_video!=''){ ?>
                         <video controls src="<?=UPLOADS.$row->featured_video?>" style="width: 150px; margin-top: 20px;"> 
                      <?php } ?>
                    </div>
                  </div>
                  <div class="form-group row">
                      <label class="control-label col-md-3 col-sm-3 ">Type</label>
                      <div class="col-md-9 col-sm-9 ">
                          <select id="content_type" name="type" class="form-control">
                            <option <?=$row->type=='video'?'selected':''?> value="video">Video</option>
                            <option <?=$row->type=='html'?'selected':''?> value="html">HTML</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row video_area" style="display:<?=$row->type=='video'?'block':'none'?>">
                      <label class="control-label col-md-3 col-sm-3 ">Course Upload</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="file" id="course_content" class="form-control" name="course_content" placeholder="Please upload Course Material">
                      </div>
                    </div>
                  <div class="form-group row html_area" style="display:<?=$row->type=='html'?'block':'none'?>">
                    <label class="control-label col-md-3 col-sm-3 ">HTML Upload</label>
                    <div class="col-md-9 col-sm-9 ">
                      <input type="file" id="course_content" class="form-control" name="course_content" placeholder="Please upload zip">
                    </div>
                  </div>
                  <br/>
                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-9 col-sm-9  offset-md-3">
                      <input type="hidden" name="courseid"  value="<?=$row->id?>">
                      <a href="<?='/admin/course'?>" class="btn btn-primary">Cancel</a>
                      <button type="reset" onclick="window.location.reload()" class="btn btn-primary">Reset</button>
                      <button type="submit" name="update" value="update"  class="btn btn-success">Update</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          </div>
          
<div class="col-md-1"></div>
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

</script>
