<?php 

?>
<div class="right_col" role="main" style="min-height: 3806px;">
<div class="col-md-1 "></div>
<div class="col-md-10 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add New Chapter<small>(Please make sure your slug is unique)</small></h2>
                   
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
                        <label class="control-label col-md-3 col-sm-3 ">Course Name</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control" name="coursename" value="<?=$course_details->title?>" placeholder="Course Id" readonly>
                        </div>
                      </div>
                      <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Chapter Title</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control" name="title" placeholder="Chapter Title">
                        </div>
                      </div>
                      <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Chapter Slug</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control" name="slug" placeholder="Chapter Slug">
                        </div>
                      </div>
                       <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Short Description</label>
                        <div class="col-md-9 col-sm-9 ">
                          <textarea  class="form-control" rows="3" cols="25" name="shortdescription" placeholder="Short Description "></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Detail Description</label>
                        <div class="col-md-9 col-sm-9 ">
                          <textarea  class="form-control" rows="5" cols="33" name="detaildescription" placeholder="Detail Description "></textarea>
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

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9  offset-md-3">
                          <input type="hidden" name="created_by" value="<?=$this->session->get_userdata()['id'];?>">
                          <input type="hidden" name="course_id" value="<?=$cid?>">
                          <a href="<?='/admin/course/chapter/'.$cid?>" class="btn btn-primary">Cancel</a>
                          <button type="reset" onclick="window.location.reload()" class="btn btn-primary">Reset</button>
                          <button type="submit" name="save" value="save"  class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
              </div>
              
              <div class="col-md-3"></div>