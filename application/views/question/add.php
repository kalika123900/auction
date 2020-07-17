<div class="right_col" role="main" style="min-height: 3806px;">
<div class="col-md-1 "></div>
<div class="col-md-10 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add New Question<small>(Please make sure your slug is unique)</small></h2>
                   
                  <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <?php if(isset($validationError)): ?>
                        <div class="required-error">
                            <?=$validationError?>
                         </div>
                    <?php endif; ?>
                    <br />
                    <form class="form-horizontal form-label-left" method="post">
                    <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Course Name</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control" name="courseid" value="<?=$course_details->title?>" >
                        </div>
                        </div>
                      <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Question</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control" name="question" placeholder="Question">
                        </div>
                      </div>
                      <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Option a</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control" name="a" placeholder="option a">
                        </div>
                      </div>
                      <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Option b</label>
                        <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" name="b" placeholder="option b">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Option c</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control" name="c" placeholder="option c ">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Option d</label>
                        <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" name="d" placeholder="option d">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Answer<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                        <select name="answer" class="form-control">
                            <option value="answer">Select Answer</option>
                            <option value="a">option a</option>
                            <option value="b">option b</option>
                            <option value="c">option c</option>
                            <option value="d">option d</option>
                            </select>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9  offset-md-3">
                          <input type="hidden" name="course_id" value="<?=$cid?>">
                           <a href="<?='/admin/course/questions/'.$cid?>" class="btn btn-primary">Cancel</a>
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