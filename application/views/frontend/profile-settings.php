<!-- =============== section-1 start here =============== -->
<section class="profile-section">
   <div class="container">
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
                           <?php if($user->profile_picture!=''): ?>
                            <div class="img-box">
                              <img src="<?=UPLOADS.$user->profile_picture?>" alt="">
                               </div>
                           <?php endif; ?>
                          
                           <h6 class="h6-tittle"><?=$user->first_name==''? $this->lang->line('prs_not_updated'):$user->first_name?></h6>
                           <p class="para-desc"><?=$this->lang->line('Prs_member_since');?> <?=date('M, d Y',strtotime($user->register_at));?> </p>
                        </div>
                        <div class="body-box">
                           <div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                              <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true"> <?=$this->lang->line('prs_profile_Left_Side');?></a>

                              <a class="nav-link" id="v-pills-photo-tab" data-toggle="pill" href="#v-pills-photo" role="tab" aria-controls="v-pills-profile-tab" aria-selected="false"><?=$this->lang->line('Prs_photo_left_side');?></a>

                              <a class="nav-link" id="v-pills-password_methods-tab" data-toggle="pill" href="#v-pills-password" role="tab" aria-controls="v-pills-password" aria-selected="false"><?=$this->lang->line('Prs_password_left_side');?></a>

                              <a class="nav-link" id="v-pills-p_method-tab" data-toggle="pill" href="#v-pills-p_method" role="tab" aria-controls="v-pills-p_method" aria-selected="false"><?=$this->lang->line('Prs_payment_left_side');?></a>

                              <a class="nav-link" id="v-pills-notification-tab" data-toggle="pill" href="#v-pills-notification" role="tab" aria-controls="v-pills-notification" aria-selected="false"><?=$this->lang->line('Prs_notification_lest_side');?></a>

                              <a class="nav-link" id="v-pills-c_account-tab" data-toggle="pill" href="#v-pills-c_account" role="tab" aria-controls="v-pills-c_account" aria-selected="false"><?=$this->lang->line('Prs_close_account_left_side');?></a>

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
                              <form action="<?php echo base_url();?>FrontendController/userUpTodate" method="post" enctype="multipart/form-data" name="customer" onsubmit="return Validate()" >
                                 <!-- row-1 -->
                                 <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                       <h6 class="h6-tittle"> <?=$this->lang->line('prs_pesonal_information');?></h6>
                                    </div>
                                    <div class="col-md-6 col-xs-6 text-right">
                                       <button class="edit-btn2"><?=$this->lang->line('prs_edit_information');?>
                                         <i class="fas fa-pencil-alt"></i>
                                       </button>
                                    </div>
                                 </div>
                                 <!-- row-2 -->
                                 <div class="row">

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="f_name" id="f_name"><?=$this->lang->line('Prs_first_name');?>:</label>
                                          <input type="text" class="form-control" value="<?=$user->first_name?>" name="fname" placeholder="<?=$this->lang->line('Prs_first_name');?>">
                                       </div>
                                    </div>

                                    <!-- <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="mb-3" for="p_name">Gender: <span>(optional)</span></label><br>
                                          <input type="radio" name="gender" value="male"> 
                                          <span class="form-control2">Male </span>
                                          <input type="radio" name="gender" value="female"> <span class="form-control2">Female </span>
                                       </div>
                                    </div> -->
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="l_name" id="l_name"><?=$this->lang->line('Prs_last_name');?>:</label>
                                          <input type="text" class="form-control" value="<?=$user->last_name?>" name="lname" placeholder="<?=$this->lang->line('Prs_last_name');?>">
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">

                                          <label for="p_email" id="p_email"><?=$this->lang->line('Prs_email');?>:</label>
                                          <input type="email" name="email" class="form-control" value="<?=$user->email?>" placeholder="<?=$this->lang->line('Prs_Email_details');?>" readonly>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="p_contact" id="p_contact"> <?=$this->lang->line('Prs_contact');?>:</label>
                                          <input type="text" name="phonenumber" class="form-control" value="<?=$user->phone_number?>" placeholder="<?=$this->lang->line('Prs_contact_no');?>" >
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="p_url"> <?=$this->lang->line('Prs_website_url');?>:</label>
                                          <input type="text" name="website" class="form-control" value="<?=$user->website?>" placeholder="<?=$this->lang->line('Prs_website_url');?>" id="p_website" >
                                       </div>
                                    </div>

                                 </div>
                                 <!-- row-3 -->
                                    <div class="row mt-4">
                                    <div class="col-md-6 col-xs-6">
                                       <h6 class="h6-tittle"> <?=$this->lang->line('Prs_social_media_links');?></h6>
                                    </div>
                                    <div class="col-md-6 col-xs-6 text-right">
                                       <button class="edit-btn2"><?=$this->lang->line('prs_edit_information');?>
                                          <img src="img/edit.png" alt="edit">
                                       </button>
                                    </div>
                                 </div>
                                 <!-- row-4 -->
                                 <div class="row">

                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="p_facebook"> <?=$this->lang->line('Prs_facebook_subtitle');?>:</label>
                                          <input type="text" name="fb_link" value="<?=$user->facebook?>" class="form-control" placeholder="<?=$this->lang->line('Prs_facebook_profile_url');?>" id="p_facebook">
                                       </div>
                                    </div>

                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="p_twitter"> <?=$this->lang->line('Prs_twitter_subtitle');?>:</label>
                                          <input type="text" name="tw_link" value="<?=$user->twitter?>" class="form-control" placeholder="<?=$this->lang->line('Prs_twitter_profile_url');?>" id="p_twitter">
                                       </div>
                                    </div>

                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="p_linkedin"> <?=$this->lang->line('Prs_linkedin_subtitle');?>:</label>
                                          <input type="text" name="lk_link" value="<?=$user->linkedin?>" class="form-control" placeholder="<?=$this->lang->line('Prs_linkedin_profile_url');?>" id="p_linkedin">
                                       </div>
                                    </div>

                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="p_youtube"> <?=$this->lang->line('Prs_youtube_subtitle');?>:</label>
                                          <input type="text" name="yt_link" value="<?=$user->youtube?>" class="form-control" placeholder="<?=$this->lang->line('Prs_youtube_profile_url');?>" id="p_youtube">
                                       </div>
                                    </div>

                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <button class="login-btn"> <?=$this->lang->line('Prs_save_Changes');?></button>
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
                                 <h6 class="h6-tittle"><?=$this->lang->line('Prs_photo_left_side');?></h6>
                                 <p class="para-desc"><?=$this->lang->line('Prs_add_nice_photo');?></p>
                              </div>
                              <div class="photo-p-body">
                                 <form action="" enctype="multipart/form-data" method="post">
                                    <?php if($user->profile_picture!=''): ?>
                                    <div class="img-box">
                                    <img src="<?php echo base_url('uploads/'. ($user->profile_picture)); ?>" class="resize-image col-sm-4" id="image1" required/><br/>
                                    </div>
                                    <?php endif; ?>
                                    <div class="custom-file" style="margin-top: 10px;">
                                       <input type="file" class="custom-file-input" id="customFile" name="profile_picture">
                                       <label class="custom-file-label" for="customFile"><?=$this->lang->line('Prs_no_file_selected');?></label>
                                    </div>
                                    <button class="login-btn" type="submit" name="save_image"><?=$this->lang->line('Prs_save_');?></button>
                                 </form
                              </div>
                           </div>
                           <!-- tab pane-2 end -->
                           <!-- tab pane-3 -->
                           <div class="tab-pane fade" id="v-pills-password" role="tabpanel" aria-labelledby="v-pills-password-tab">
                              <div class="photo-p-head">
                                 <h6 class="h6-tittle"><?=$this->lang->line('Prs_password_left_side');?></h6>
                                 <p class="para-desc"><?=$this->lang->line('Prs_edit_your_account');?></p>
                              </div>
                              <div class="photo-p-body">
                                 <h6 class="h6-tittle"><?=$this->lang->line('Prs_password_left_side');?></h6>
                                 <form action="" method="post">

                                    <div class="row">

                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <input type="password" class="form-control" name="current_password" placeholder="<?=$this->lang->line('Prs_enter_current_password');?>" id="p_cpwd">
                                          </div>
                                       </div>

                                       <div class="col-md-12">
                                          <div class="form-group">
                                          <input type="password" class="form-control" name="new_password" placeholder="<?=$this->lang->line('Prs_enter_new_password');?>" id="p_npwd">
                                          </div>
                                       </div>

                                       <div class="col-md-12">
                                          <div class="form-group">
                                          <input type="password" class="form-control" name="confirm_password" placeholder="<?=$this->lang->line('Prs_re_enter_new_password');?>" id="p_rnpwd">
                                          </div>
                                       </div>

                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <input type="hidden" class="form-control" name="user_id" value="<?=$user->id?>">
                                             <button class="login-btn" type="submit" value="change_password" name="change_password" style="width:180px"><?=$this->lang->line('Prs_change_password');?></button>
                                          </div>
                                       </div>

                                    </div>
                                 </form>
                              </div>
                           </div>
                           <!-- tab pane-3 end -->
                           <!-- tab pane-4 -->
                           <div class="tab-pane fade" id="v-pills-p_method" role="tabpanel" aria-labelledby="v-pills-p_method-tab">
                              <div class="photo-p-head">
                                 <h6 class="h6-tittle"><?=$this->lang->line('Prs_payment_method_primary');?></h6>
                                 <p class="para-desc"><?=$this->lang->line('Prs_update_your_credit_card');?></p>
                              </div>
                           </div>
                           <!-- tab pane-4 end -->
                           <!-- tab pane-5 -->
                           <div class="tab-pane fade" id="v-pills-notification" role="tabpanel" aria-labelledby="v-pills-notification-tab">
                              <div class="photo-p-head">
                                 <h6 class="h6-tittle"><?=$this->lang->line('Prs_notifications');?></h6>
                                 <p class="para-desc"><?=$this->lang->line('Prs_turn_promotional_email');?></p>
                              </div>
                              <div class="photo-p-body text-left">
                                 <h6 class="h6-tittle"><?=$this->lang->line('Prs_i_want_receive');?>:</h6>
                                 <form action="#" method="get">

                                    <div class="row">

                                       <div class="col-md-12">
                                          <div class="form-group form-group2">
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                                <label class="custom-control-label" for="customCheck"><?=$this->lang->line('Prs_allow_push_notification');?></label>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <button class="login-btn"><?=$this->lang->line('Prs_save_');?></button>
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
                                             <button class="d-account-btn">Close Account</button>
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
</section>
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
function Validate(){
var x=document.forms["customer"]["fname"].value;
var y=document.forms["customer"]["lname"].value;
var z=document.forms["customer"]["email"].value;
var c=document.forms["customer"]["phonenumber"].value;
var isValid = true;
//First Name validation
if(x==null || x==""){
    document.getElementById('f_name').style.visibility="visible";
    document.getElementById('f_name').innerHTML="<span style='color: red;'>"+ 
                        "First Name must not be blank</span>";
   setTimeout(function() {$('#f_name').fadeOut('fast');}, 3000);
    isValid =  false;
}
else{
    document.getElementById('f_name').style.visibility="hidden";

    }
//Last Name validation
if(y==null || y==""){
    document.getElementById('l_name').style.visibility="visible";
    //document.getElementById('l_name').innerHTML="Last Name must not be blank";
    document.getElementById('l_name').innerHTML="<span style='color: red;'>"+ 
                        "Last Name must not be blank</span>";
     setTimeout(function() {$('#l_name').fadeOut('fast');}, 3000);                   
    isValid =  false;
}
else{
    document.getElementById('l_name').style.visibility="hidden";
    }

//email validation
if(z==null || z==""){
    document.getElementById('p_email').style.visibility="visible";
    //document.getElementById('p_email').innerHTML="Email Field must not be blank";
    document.getElementById('p_email').innerHTML="<span style='color: red;'>"+ 
                        "Email Field must not be blank</span>";
    setTimeout(function() {$('#p_email').fadeOut('fast');}, 3000);                       
    isValid =  false;
}
else{
    document.getElementById('p_email').style.visibility="hidden";
    }
    //Contact validation
if(c==null || c==""){
    document.getElementById('p_contact').style.visibility="visible";
    //document.getElementById('p_email').innerHTML="Email Field must not be blank";
    document.getElementById('p_contact').innerHTML="<span style='color: red;'>"+ 
                        "Contact Field must not be blank</span>";
    setTimeout(function() {$('#p_contact').fadeOut('fast');}, 3000);                    
    isValid =  false;
}
else{
    document.getElementById('p_contact').style.visibility="hidden";
    }
  return isValid;
}

$(document).ready(function(){
   setTimeout(function(){
      document.getElementById('#payment-notification').remove();
   },15000);
   var p = getParameterByName('target');
   if(p=='password')
   {
       $('#v-pills-password_methods-tab').trigger('click');
   }
});
</script>
<!-- =============== section-1 end here ================= -->
