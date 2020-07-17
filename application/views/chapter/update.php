<div class="right_col" role="main" style="min-height: 3806px;">
<div class="col-md-1 "></div>
<div class="col-md-10 ">
      <div class="x_panel">
        <div class="x_title">
              <h2>Update Chapter <small>(you can not edit slug from here</small></h2>
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
                    <div class="form-group row">
                     <label class="control-label col-md-3 col-sm-3">Short Description </label>
                    <div class="col-md-9 col-sm-9 ">
                      <textarea row="3" cols="25" class="form-control"  name="shortdescription" placeholder="Short Description"><?=$row->short_description?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                     <label class="control-label col-md-3 col-sm-3">Detail Description </label>
                    <div class="col-md-9 col-sm-9 ">
                      <textarea row="5" cols="40" class="form-control"  name="detaildescription" placeholder="Detail Description"><?=$row->detail_description?></textarea>
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
                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-9 col-sm-9  offset-md-3">
                      <input type="hidden" name="chapterid"  value="<?=$row->id?>">
                      <input type="hidden" name="course_id"  value="<?=$row->course_id?>">
                      <a href="<?='/admin/course/chapter/'.$row->course_id?>" class="btn btn-primary">Cancel</a>
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