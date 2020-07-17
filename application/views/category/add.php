<div class="right_col" role="main" style="min-height: 3806px;">
<div class="col-md-1 "></div>
<div class="col-md-10 ">
                 <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Category<small>(Please enter slug carefully!)</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php if(isset($validationError)): ?>
                        <div class="required-error">
                            <?=$validationError?>
                         </div>
                    <?php endif; ?>
                  
                    <br />
                    <form class="form-horizontal form-label-left" action="" enctype="multipart/form-data" method="post">

                      <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Category Name</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control" name="category_name" placeholder="Category Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Category Slug </label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control" name="category_slug" placeholder="Category Slug ">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Category Description</label>
                        <div class="col-md-9 col-sm-9 ">
                          <textarea  rows="7" cols="40" id="category_description" class="form-control" name="category_description" placeholder="Category Description"></textarea>
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
                            <option value="<?=$category->id?>"><?=$category->category_name?></option>
                            <?php endforeach; ?>                  
                            <?php endif; ?>
                          </select>
                        </div>
                      </div>
                   <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9  offset-md-3">
                         <a href="<?='/admin/Category'?>" class="btn btn-primary">Cancel</a>
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
              <script>

tinymce.init({
  selector: '#subdescription.form-control',
  menubar: false,
  toolbar_mode: 'floating',
  toolbar_buttons: "bold,italic,underline,strikethrough,separator,bullist,numlist",
  toolbar: 'undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | ' +
    'bullist numlist',
  block_formats: 'Paragraph=p; Header 1=h1; Header 2=h2; Header 3=h3; Header 4=h4; Header 5=h5; Header 6=h6;',
});

</script>