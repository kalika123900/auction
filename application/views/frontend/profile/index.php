<!-- =============== section-1 start here =============== -->
<section class="profile-section">
   <div class="container-fluid">
      <div class="mid-container">
         <!-- row-1 -->
         <div class="row">
            <div class="col-md-12">
               <div class="profile-head">
                  <h3 class="h3-tittle">Personal Profile</h3>
               </div>
            </div>
         </div>
         <!-- row-2 -->
         <div class="row">
            <div class="col-md-12">
               <div class="profile-body">
                  <div class="row">
                     <!-- left wrapper -->
                     <div class="col-lg-3 col-md-4">
                        <div class="p-left-wrapper">
                           <div class="head-box">
                            <?php if($userData->profile_picture==''): ?>
                              <div class="img-box">
                                 <img src="<?=ASSETS?>images/user-profile-pl.png" alt="">
                              </div>
                            <?php else:  ?>
                                <div class="img-box">
                                     <img src="<?=UPLOADS?><?=$userData->profile_picture?>" alt="">
                                </div>
                            <?php endif; ?>        
                              <h6 class="h6-tittle"><?=($userData->role=='company') ? ucfirst($userData->last_name):ucfirst($userData->first_name)." ".ucfirst($userData->last_name)?></h6>
                              <p class="para-desc">Member Since <?=date('M, d Y' ,strtotime($userData->created_on));?> </p>
                           </div>
                           <div class="body-box">
                              <div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                                 <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true">Profile</a>

                                 <a class="nav-link" id="v-pills-profile-photo-tab" data-toggle="pill" href="#v-pills-photo" role="tab" aria-controls="v-pills-photo" aria-selected="false">Profile Picture</a>

                                 <a class="nav-link" id="v-pills-password_methods-tab" data-toggle="pill" href="#v-pills-password_method" role="tab" aria-controls="v-pills-passwword_method" aria-selected="false">Change Password</a>

                                 <a class="nav-link" id="v-pills-p_method-tab" data-toggle="pill" href="#v-pills-p_method" role="tab" aria-controls="v-pills-p_method" aria-selected="false">Purchased Course</a>

                                 <a class="nav-link" id="v-pills-p_method-p-tab" data-toggle="pill" href="#v-pills-p_method" role="tab" aria-controls="v-pills-p_method" aria-selected="false">Certifications</a>

                                 <a class="nav-link" id="v-pills-notification-tab" data-toggle="pill" href="#v-pills-notification" role="tab" aria-controls="v-pills-notification" aria-selected="false">Notifications</a>

                                 <a class="nav-link" id="v-pills-c_account-tab" data-toggle="pill" href="#v-pills-c_account" role="tab" aria-controls="v-pills-c_account" style="color: red" aria-selected="false">Close Account</a>

                                 <a class="nav-link" href="<?=site_url('logout')?>">Logout</a>

                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- left wrapper end -->
                     <!-- right wrapper -->
                     <div class="col-lg-9 col-md-8">
                        <div class="p-right-wrapper">
                           <div class="tab-content" id="v-pills-tabContent">
                              <!-- tab pane-1 -->
                              <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                 <form action="" method="post">
                                    <!-- row-1 -->
                                    <div class="row">
                                       <div class="col-md-6 col-xs-6">
                                          <h6 class="h6-tittle">Pesonal Information</h6>
                                       </div>
                                       <div class="col-md-6 col-xs-6 text-right">
                                       </div>
                                    </div>
                                    <!-- row-2 -->
                                    <div class="row">

                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="p_name"><?=$userData->role=='student'?'First Name':'Contact Person'?>:</label>
                                             <input type="text" class="form-control" name="first_name" placeholder="Name" value="<?=$userData->first_name?>" id="p_name">
                                          </div>
                                       </div>

                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="p_name"><?=$userData->role=='student'?'Last Name':'Company name'?>:</label>
                                             <input type="text" class="form-control" name="last_name" placeholder="Name" value="<?=$userData->last_name?>" id="p_name">
                                          </div>
                                       </div> 
                                       <?php if($userData->role=='student'): ?>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="mb-3" for="p_name">Gender: <span>(optional)</span></label><br>
                                             <input type="radio" name="gender" value="male"   <?=(property_exists($userData,'gender') && $userData->gender=='male')?'checked':''?>>   <span class="form-control2">Male </span>
                                             <input type="radio" name="gender" value="female" <?=(property_exists($userData,'gender') && $userData->gender=='female')?'checked':''?>> <span class="form-control2">Female </span>
                                          </div>
                                       </div>
                                       <?php endif; ?>      
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="p_contact">Contact:</label>
                                             <input type="text" name="phone_number" class="form-control" placeholder="+91 9876543210" value="<?php if(property_exists($userData,'phone_number')){ echo $userData->phone_number; } ?>" id="p_contact">
                                          </div>
                                       </div>

                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="p_url">Wesite URL:</label>
                                             <input type="text" name="website" class="form-control" placeholder="Wesite URL" id="p_contact" value="<?php if(property_exists($userData,'website')){ echo $userData->website; } ?>">
                                          </div>
                                       </div>

                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="p_email">Email:</label>
                                             <input type="email" name="email" class="form-control" placeholder="XYZ@gmail.com" id="p_email" value="<?php if(property_exists($userData,'email')){ echo $userData->email; } ?>">
                                          </div>
                                       </div>


                                    </div>
                                    <!-- row-3 -->
                                     <div class="row mt-4">
                                       <div class="col-md-6 col-xs-6">
                                          <h6 class="h6-tittle">Social Media Links</h6>
                                       </div>
                                       <div class="col-md-6 col-xs-6 text-right">
                                          
                                       </div>
                                    </div>
                                    <!-- row-4 -->
                                    <div class="row">

                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="p_facebook">Facebook:</label>
                                             <input type="text" name="fb_link" class="form-control" placeholder="Facebook Profile URL" value="<?php if(property_exists($userData,'fb_link')){ echo $userData->fb_link; } ?>" id="p_facebook">
                                          </div>
                                       </div>

                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="p_twitter">Twitter:</label>
                                             <input type="text" name="tw_link" class="form-control" placeholder="Twitter Profile URL" value="<?php if(property_exists($userData,'tw_link')){ echo $userData->tw_link; } ?>" id="p_twitter">
                                          </div>
                                       </div>

                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="p_linkedin">Linkedin:</label>
                                             <input type="text" name="lk_link" class="form-control" placeholder="Linkedin Profile URL" value="<?php if(property_exists($userData,'lk_link')){ echo $userData->lk_link; } ?>" id="p_linkedin">
                                          </div>
                                       </div>

                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="p_youtube">Youtube:</label>
                                             <input type="text" name="yt_link" class="form-control" placeholder="Youtube Profile URL" value="<?php if(property_exists($userData,'yt_link')){ echo $userData->yt_link; } ?>" id="p_youtube">
                                          </div>
                                       </div>

                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <button name="save" type="submit" value="save" class="app-now-btn">Save Changes</button>
                                          </div>
                                       </div>

                                    </div>
                                    <!-- row-4 end -->
                                 </form>
                              </div>
                              <!-- tab pane-1 end -->
                              <!-- tab pane-2 -->
                              <div class="tab-pane fade" id="v-pills-photo" role="tabpanel" aria-labelledby="v-pills-photo-tab">
                                 <div class="photo-p-head">
                                    <h6 class="h6-tittle">Photo</h6>
                                    <p class="para-desc">Add a nice photo of yourself for your profile.</p>
                                 </div>
                                 <div class="photo-p-body">
                                    <form action="" method="post" enctype="multipart/form-data">

                                       <div class="img-box">
                                          <img src="<?=ASSETS?>images/user-profile.png" alt="">
                                       </div>
                                       <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="customFile" name="profile_picture">
                                          <label class="custom-file-label" for="customFile">No File Selected</label>
                                       </div>
                                       <input type="hidden" name="save_image" value="save_image">
                                       <button class="app-now-btn">Save</button>
                                    </form>
                                 </div>
                              </div>
                              <!-- tab pane-2 end -->
                              <!-- tab pane-3 -->
                              <div class="tab-pane fade" id="v-pills-password_method" role="tabpanel" aria-labelledby="v-pills-password_method-tab">
                                 <div class="photo-p-head">
                                    <h6 class="h6-tittle">Password</h6>
                                 </div>
                                 <div class="photo-p-body">
                                    <form action="" id="change_password" method="post">

                                       <div class="row">

                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <input type="password" name="current_password" class="form-control" placeholder="Enter Current Password" id="p_cpwd" required>
                                             </div>
                                          </div>

                                          <div class="col-md-12">
                                             <div class="form-group">
                                             <input type="password" name="new_password" class="form-control" placeholder="Enter New Password" id="p_npwd" required>
                                             </div>
                                          </div>

                                          <div class="col-md-12">
                                             <div class="form-group">
                                             <input type="password" name="confirm_password" class="form-control" placeholder="Re-Enter New Password" id="p_rnpwd" required>
                                             </div>
                                          </div>

                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <input type="hidden" name="user_id" value="<?=$userData->id?>">
                                                <button type="submit" style="width: 100%" name="change_password" value="password" class="app-now-btn">Change Password</button>
                                             </div>
                                          </div>

                                       </div>
                                    </form>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="v-pills-password" role="tabpanel" aria-labelledby="v-pills-password-tab">
                                
                              </div>
                              <!-- tab pane-3 end -->
                              <!-- tab pane-4 -->
                              <div class="tab-pane fade" id="v-pills-p_method" role="tabpanel" aria-labelledby="v-pills-p_method-tab">
                                  <div class="photo-p-head22">
                                    <h6 class="h6-tittle" style="color:#003D7E"><?= $userData->role=='student'?'Purchased Courses':'Available Purchased Courses'?> </h6>
                                 </div>
                                 <div class="photo-p-body2">
                                    <?php 
                                      $pi = $this->session->flashdata('payment_success');
                                      if($pi):           
                                    ?>
                                    <h4 class="h4-tittle payment-notification" id="payment-notification" style="background: #ffd30e; padding: 10px; color: #000; font-weight: normal;">Payment received successfully, Keep Learning!!</h6>
                                    <?php endif; ?>   
                                    <div class="row">
                                    <?php if(count($purchased_course)>0): ?>
                                       <?php foreach($purchased_course as $pc): ?>
                                       <div class="col-md-5">
                                          <a href="#">
                                             <div class="card-box11">
                                                <div class="img-box2">
                                                   <img src="<?=UPLOADS.$pc->featured_image?>" alt="">
                                                </div>
                                                <div class="content-box">
                                                   <h6 class="h6-tittle"><?=$pc->title?></h6>
                                                   <p class="para-desc"><?=strip_tags($pc->short_description)?></p>
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <?php if($pc->status==1): ?>
                                                         <div class="completed-box">
                                                            <p class="para-desc"><?=$userData->role=='company'?'Assigned':'Completed'?></p>
                                                         </div>
                                                         <?php endif; ?>
                                                         <?php if($pc->status==0): ?>
                                                         <div class="completed-box">
                                                            <?php if($userData->role=='company'): ?>
                                                             <a class="para-desc">Assign Now</a>
                                                            <?php else: ?>
                                                             <a href="<?=site_url('studying/'.$pc->id)?>" class="para-desc">Start Learning</a>
                                                            <?php endif; ?>   
                                                         </div>
                                                         <?php endif; ?>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </a>
                                       </div>
                                       <?php endforeach; ?>
                                    <?php endif; ?>      
                                     </div>
                                 </div>
                              </div>
                              <!-- tab pane-4 end -->
                              <!-- tab pane-5 -->
                              <div class="tab-pane fade" id="v-pills-notification" role="tabpanel" aria-labelledby="v-pills-notification-tab">
                                 <div class="photo-p-head">
                                    <h6 class="h6-tittle">Notifications</h6>
                                    <p class="para-desc">Turn promotional email notifications form Upskill Right on or off</p>
                                 </div>
                                 <div class="photo-p-body text-left">
                                    <h6 class="h6-tittle">Yes, I want to receive:</h6>
                                    <form action="#" method="get">

                                       <div class="row">

                                          <div class="col-md-12">
                                             <div class="form-group form-group2">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                                   <label class="custom-control-label" for="customCheck">Allow push notifications via email</label>
                                                </div>
                                             </div>
                                          </div>

                                          <div class="col-md-12">
                                             <div class="form-group" style="text-align:center">
                                                <button class="app-now-btn">Save</button>
                                             </div>
                                          </div>

                                       </div>
                                    </form>
                                 </div>
                              </div>
                              <!-- tab pane-5 end -->
                              <!-- tab pane-6 -->
                              <div class="tab-pane fade" id="v-pills-c_account" role="tabpanel" aria-labelledby="v-pills-c_account-tab">
                                 <div class="photo-p-head">
                                    <h6 class="h6-tittle">Close Account</h6>
                                    <p class="para-desc">Close your account permanently</p>
                                 </div>
                                 <div class="photo-p-body text-left">
                                    <h6 class="h6-tittle">Close Your Account</h6>
                                    <p class="para-desc"><span>Warning:</span> If you close your account, you will be unsubscribed from your 1 course, and will lose access forever.</p>
                                    <form action="#" method="get">

                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <button class="app-now-btn">Close Account</button>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                              <!-- tab pane-6 end -->
                           </div>
                          
                        </div>
                     </div>
                     <!-- right wrapper end -->
                  </div>
               </div>
            </div>
         </div>
         <!-- row-2 end -->
      </div>
   </div>
</section>
<!-- =============== section-1 end here ================= -->
<script>
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}
$(document).ready(function(){
   setTimeout(function(){
      document.getElementById('#payment-notification').remove();
   },15000);
   var p = getParameterByName('target');
   if(p=='course')
   {
      $('#v-pills-p_method-tab').trigger('click');
   }
   if(p=='password')
   {
       $('#v-pills-password_methods-tab').trigger('click');
   }
   

});

</script>