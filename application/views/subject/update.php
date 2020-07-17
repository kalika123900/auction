<div class="right_col" role="main" style="min-height: 3806px;">
<div class="col-md-1 "></div>
<div class="col-md-10 ">
      <div class="x_panel">
        <div class="x_title">
              <h2>Update Subject<small>(you can not edit slug from here)</small></h2>
             <div class="clearfix"></div>
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
                    <label class="control-label col-md-3 col-sm-3 ">Subject Name</label>
                    <div class="col-md-9 col-sm-9 ">
                      <input type="text" class="form-control" value="<?=$row->subject_name?>" name="subname" placeholder="Subject Name">
                    </div>
                  </div>
                  <div class="form-group row">
                  
                    <label class="control-label col-md-3 col-sm-3 ">Subject Slug </label>
                    <div class="col-md-9 col-sm-9 ">
                      <input type="text" class="form-control" value="<?=$row->subject_slug?>" name="subslug" placeholder="Subject Slug ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3 ">Subject Description</label>
                    <div class="col-md-9 col-sm-9 ">
                      <textarea  rows="3" class="form-control" name="subdescription" placeholder="Subject Description"><?=$row->subject_description?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3 ">Subject Photo<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 ">
                      <input type="file" name="subphoto" id="subphoto" class="form-control" rows="3" placeholder="Subject Photo" value="<?=$row->subject_photo?>">
                      <?php if($row->subject_photo!=''){ ?>
                         <img src="<?=UPLOADS.$row->subject_photo?>" style="width: 100px; margin-top: 20px;"> 
                      <?php } ?>
                    </div>
                  </div>
                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-9 col-sm-9  offset-md-3">
                      <input type="hidden" name="subid" value="<?=$row->id?>">
                       <a href="<?='/admin/subject'?>" class="btn btn-primary">Cancel</a>
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