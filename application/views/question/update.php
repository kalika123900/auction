<div class="right_col" role="main" style="min-height: 3806px;">
<div class="col-md-1 "></div>
<div class="col-md-10 ">
      <div class="x_panel">
        <div class="x_title">
              <h2>Update Question </h2>
              <div class = "clearfix"></div>
            </div> 
            <div class="x_content">
              <?php if(isset($validationError)): ?>
                  <div class="required-error">
                      <?=$validationError?>
                    </div>
              <?php endif; ?>
              <br />
              <form class="form-horizontal form-label-left"  method="post">
               <div class="form-group row ">
                    <label class="control-label col-md-3 col-sm-3 ">Question</label>
                    <div class="col-md-9 col-sm-9 ">
                      <input type="text" class="form-control" value="<?=$row->question?>" name="question" placeholder="Question">
                    </div>                                
                  </div>
                  <div class="form-group row ">
                    <label class="control-label col-md-3 col-sm-3 ">Option a</label>
                    <div class="col-md-9 col-sm-9 ">
                      <input type="text" class="form-control" value="<?=$row->option_a?>" name="a" placeholder="Option a">
                    </div>                                
                  </div>
                  <div class="form-group row ">
                    <label class="control-label col-md-3 col-sm-3 ">Option b</label>
                    <div class="col-md-9 col-sm-9 ">
                      <input type="text" class="form-control" value="<?=$row->option_b?>" name="b" placeholder="Option b">
                    </div>                                
                  </div>
                  <div class="form-group row ">
                    <label class="control-label col-md-3 col-sm-3 ">Option c</label>
                    <div class="col-md-9 col-sm-9 ">
                      <input type="text" class="form-control" value="<?=$row->option_c?>" name="c" placeholder="Option c">
                    </div>                                
                  </div>
                 
                  <div class="form-group row">
                  
                    <label class="control-label col-md-3 col-sm-3">Option d </label>
                    <div class="col-md-9 col-sm-9 ">
                      <input type="text" class="form-control" value="<?=$row->option_d?>" name="d" placeholder="Option d">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3 ">Answer</label>
                    <div class="col-md-9 col-sm-9 ">
                      <select name="answer" class="form-control">
                        <option value="a" <?=$row->answer=='a'?'selected':''?>>option a</option>
                        <option value="b" <?=$row->answer=='b'?'selected':''?>>option b</option>
                        <option value="c" <?=$row->answer=='c'?'selected':''?>>option c</option>
                        <option value="d" <?=$row->answer=='d'?'selected':''?>>option d</option> 
                      </select>
                  </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3 ">Status<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 ">
                       <select class="form-control" name="status">
                        <option value="active" <?=$row->status=='active'?'selected':''?>>Active</option>
                        <option value="inactive" <?=$row->status=='inactive'?'selected':''?>>Inactive</option>
                      </select>  
                    </div>
                  </div>
                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-9 col-sm-9  offset-md-3">
                      <input type="hidden" name="questionid"  value="<?=$row->id?>">
                      <input type="hidden" name="course_id"  value="<?=$row->course_id?>">
                       <a href="<?='/admin/course/questions/'.$row->course_id?>" class="btn btn-primary">Cancel</a>
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