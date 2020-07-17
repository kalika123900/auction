<div class="right_col" role="main" style="min-height: 3806px;">
<div class="col-md-1 "></div>
<div class="col-md-10 ">
      <div class="x_panel">
        <div class="x_title">
              <h2>Update User</h2>
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
                    <label class="control-label col-md-3 col-sm-3 ">First Name</label>
                    <div class="col-md-9 col-sm-9 ">
                      <input type="text" class="form-control" value="<?=$row->first_name?>" name="fname" placeholder="First Name">
                    </div>
                  </div>
                  <div class="form-group row ">
                    <label class="control-label col-md-3 col-sm-3 ">Last Name</label>
                    <div class="col-md-9 col-sm-9 ">
                      <input type="text" class="form-control" value="<?=$row->last_name?>" name="lname" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-group row">
                  <label class="control-label col-md-3 col-sm-3 ">Email </label>
                    <div class="col-md-9 col-sm-9 ">
                      <input type="email" class="form-control" value="<?=$row->email?>" name="email" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                  <label class="control-label col-md-3 col-sm-3 ">Password </label>
                    <div class="col-md-9 col-sm-9 ">
                      <input type="password" class="form-control" value="<?=$row->password?>" name="password" placeholder="Password">
                    </div>
                  </div>
                   <div class="form-group row">
                  <label class="control-label col-md-3 col-sm-3 ">Confirm Password </label>
                    <div class="col-md-9 col-sm-9 ">
                      <input type="password" class="form-control" value="<?=$row->password?>" name="cpassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3 ">Phone Number</label>
                    <div class="col-md-9 col-sm-9 ">
                      <input   class="form-control" name="phonenumber" placeholder="Phone Number" value="<?=$row->phone_number?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3 ">Profile Picture<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 ">
                      <input type="file" name="profilepicture" id="profilepicture" class="form-control" rows="3" placeholder="Profile Picture" value="<?=$row->profile_picture?>">
                      <?php if($row->profile_picture!=''){ ?>
                         <img src="<?=UPLOADS.$row->profile_picture?>" style="width: 100px; margin-top: 20px;"> 
                      <?php } ?>
                    </div>
                  </div>
                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-9 col-sm-9  offset-md-3">
                      <input type="hidden" name="userid" value="<?=$row->id?>">
                      <a href="/admin/user" class="btn btn-primary">Cancel</a>
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