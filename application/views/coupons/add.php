<?php 

?>
<div class="right_col" role="main" style="min-height: 3806px;">
<div class="col-md-1 "></div>
<div class="col-md-10 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add New Coupon<small>(Please make sure your coupon-code is unique)</small></h2>
                   
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
                        <label class="control-label col-md-3 col-sm-3 ">Coupon Code</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control" name="coupon_code" placeholder="Course Code" >
                        </div>
                      </div>
                      <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Coupon Type</label>
                        <div class="col-md-9 col-sm-9 ">
                            <select class="form-control" name="coupon_type">
                              <option value="all">For All Users</option>
                              <option value="specific">For Specific User</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group row specify_user" style="display: none">
                        <label class="control-label col-md-3 col-sm-3 ">Specify user emails seperate with comma</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control" name="specific_user" value="">
                        </div>
                      </div>

                      <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Allow Redemption Per User <small>(*For Infinite uses enter -1)</small></label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control" name="redumption_per_user" placeholder="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Validity Date</label>
                        <div class="col-md-9 col-sm-9 ">
                           <input type="text" class="form-control" name="validity_date" placeholder="">
                         </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Discount Type</label>
                        <div class="col-md-9 col-sm-9 ">
                            <select name="discount_type" class="form-control">
                              <option value="1">Fixed</option>
                              <option value="2">Percentage</option>
                            </select>
                         </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Amount</label>
                        <div class="col-md-9 col-sm-9 ">
                           <input type="text" class="form-control" name="discount_amount" placeholder="">
                         </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9  offset-md-3">
                          <a href="/admin/user" class="btn btn-primary">Cancel</a>
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
            $(document).ready(function(){
              $('select[name="coupon_type"]').change(function(e){
                  var _that = $(this);
                  if(_that.val()=='specific')
                  {
                    $('.specify_user').css('display','flex');
                  }
                  else
                  {
                    $('.specify_user').css('display','none');
                  }
              });
            })
          
          </script>