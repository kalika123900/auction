<div class="right_col" role="main" style="min-height: 3806px;">
<div class="col-md-1 "></div>
<div class="col-md-10 ">
      <div class="x_panel">
        <div class="x_title">
              <h2>Update Category<small>(you can not edit slug from here)</small></h2>
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
                    <label class="control-label col-md-3 col-sm-3 ">Category Name</label>
                    <div class="col-md-9 col-sm-9 ">
                      <input type="text" class="form-control" value="<?=$row->category_name?>" name="catname" placeholder="Category Name">
                    </div>
                  </div>
                  <div class="form-group row">
                  
                    <label class="control-label col-md-3 col-sm-3 ">Category Slug </label>
                    <div class="col-md-9 col-sm-9 ">
                      <input type="text" class="form-control" value="<?=$row->category_slug?>" name="catslug" placeholder="Category Slug ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3 ">Category Description</label>
                    <div class="col-md-9 col-sm-9 ">
                      <textarea  rows="3" class="form-control" name="catdescription" placeholder="Category Description"><?=$row->category_description?></textarea>
                    </div>
                  </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Parent Category<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                          <select name="parent_id" class="form-control">
                            <option value="">Select Category</option>
                            <?php if(count($categories)>0): ?>
                            <?php foreach($categories as $category): ?>
                            <option <?=($row->parent_id==$category->id?'selected':'')?> value="<?=$category->id?>"><?=$category->category_name?></option>
                            <?php endforeach; ?>                  
                            <?php endif; ?>
                          </select>
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