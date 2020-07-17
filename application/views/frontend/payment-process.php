<!-- =============== section-1 start here =============== -->
<section class="payment-section1 payment-process-section">
   <div class="container-fluid">
      <div class="mid-container">
         <div class="row">
            <div class="col-md-12">
             <h6 class="h6-tittle">Payment Process</h6>
            </div>
         </div>
         <div class="row">
            <!-- left wrapper start -->
            <div class="col-lg-8 col-md-8">
               <div class="pts1-left-wrapper">

                  <!--Accordion wrapper 1 -->
                  <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                     <!-- Accordion card 1-->
                     <div class="card">
                     <!-- Card header -->
                        <div class="card-header" role="tab" id="heading1">
                           <a data-toggle="collapse" data-parent="#accordionEx" href="#collapse1" aria-expanded="true"
                              aria-controls="collapse1">
                              <label class="custom_radio">Enter Voucher Code (if they have)
                                 <input type="checkbox" checked="checked">
                                 <span class="checkmark"></span>
                                 <i class="fas fa-angle-down rotate-icon"></i>
                              </label> 
                           </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading1"
                           data-parent="#accordionEx">
                           <div class="card-body">
                              <form action="#" id="coupon_code" method="post">
                                 <div class="form-group">
                                    <input type="text" class="form-control2" placeholder="Coupon Code">
                                    <button type="submit" class="apply-btn">Apply</button>
                                 </div>
                              </form>
                              <?php
                               $cart = $this->cart->contents(); 
                                  if(count($cart)>0):
                                 foreach($cart as $key=>$row):
                                 $p = strpos($row['id'],'OU_',0); 
                                 if($p==1)
                                 { ?>
                                  <h6 class="h6-tittle remove_cou" data-id="<?=$key?>"><i class="fas fa-times"></i> <?=$row['name']?> <span>is applied</span></h6>
                                 <?php }
                                 endforeach;
                                 endif;
                                 ?>
                           </div>
                        </div>
                     </div>
                     <!-- Accordion card 1 end-->

                     <!-- Accordion card 2 -->
                     <div class="card">
                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading2">
                           <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse2"
                              aria-expanded="false" aria-controls="collapse2">
                              <label class="custom_radio">Paypal <img src="<?=ASSETS?>images/paypal2.png" alt="">
                                 <input type="checkbox" checked="checked">
                                 <span class="checkmark"></span>
                                 <i class="fas fa-angle-down rotate-icon"></i>
                              </label> 
                           </a>
                        </div>

                        <!-- Card body -->
                      </div>
                     <!-- Accordion card 2 end -->

                     </div>
                     <!-- Accordion wrapper 1 end -->
                  

                  <div class="order-detail-box">
                     <h6 class="h6-tittle">Order Detail</h6>
                     <?php
                  
                       
                        $subtotal = 0;
                        $actualPrice = 0;
                        $count = 0;
                        if(count($cart)>0):
                        foreach($cart as $row):
                         $p = strpos($row['id'],'OU_',0); 
                         if($p==1)
                         {
                            continue;
                         }
                         $row = (object)$row;
                        $subtotal = $row->subtotal + $subtotal;  
                        $actualPrice = ($actualPrice)+($row->options['price']*$row->qty);
                     ?>
                     
                     <div class="row" style="margin-bottom: 10px">
                        <div class="col-md-3">
                           <img src="<?=UPLOADS.$row->options['featured_image']?>" alt="">
                        </div>
                        <div class="col-md-6 col-xs-7 mt-3">
                           <h6 class="h6-tittle"><?=$row->name?></h6>
                        </div>
                        <div class="col-md-3 col-xs-5  mt-3 d-flex">
                           <h6 class="h6-tittle">$<?=$row->price?> x <?=$row->qty?>= $<?=$row->subtotal?> </h6>
                           <i class="fas fa-times"></i>
                        </div>
                     </div>
                     <?php 
                        endforeach;
                        endif;
                     ?>
                  </div>

               </div>
            </div>
            <?php /*Handle Discount Price */?>
            <?php 
            $discount = 0;
           
            if(count($cart)>0):
               foreach($cart as $row):
                  $p = strpos($row['id'],'OU_',0); 
                  if($p==1)
                  {
                     if($row['options']['discount_type']==2)
                     {
                        $discount = $discount + $subtotal * $row['price']/100;
                     }
                     else if($row['options']['discount_type']==1)
                     {
                        $discount = $discount + $row['price'];
                     }
                  }
               endforeach;
            endif;   
            
            
            ?>
            <!-- left wrapper end -->
            <!-- right wrapper start -->
            <div class="col-lg-4 col-md-4">
               <div class="pts1-right-wrapper">
                  <h6 class="h6-tittle">Summary</h6>
                  <div class="row">
                     <div class="col-md-7 col-xs-6">
                        <p class="para-desc">Original Price:</p>
                        <p class="para-desc">Coupon Discounts:</p>
                     </div>
                     <div class="col-md-5 col-xs-6 text-right">
                        <p class="para-desc">$<?=round($subtotal,2)?></p>
                        <p class="para-desc">-$<?=round($discount,2)?></p>
                        <hr/>
                        <p class="para-desc">$<?=$actualPrice?></p>
                        <p class="para-desc"><?=100-round(($subtotal*100)/$actualPrice)?>% off</p>
                   
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-md-7 col-xs-6">
                        <p class="para-desc" style="opacity:1">Total:</p>
                     </div>
                     <div class="col-md-5 col-xs-6 text-right">
                        <p class="para-desc" style="opacity:1">$<?=round(($subtotal-$discount),2)?></p>
                     </div>
                    </div>
                      <?php if(!isset($user_data['is_logged_in'])): ?>
                            <a class="nav-link read-more-btn" href="#" data-toggle="modal" data-target="#elegantModalForm">checkout</a>
                        <?php else: ?>
                  <button onclick="payNow()" class="read-more-btn">Pay Now</button>
                  <?php endif; ?>
                  
               </div>
            </div>
            <!-- right wrapper end -->
         </div>
      </div>
   </div>
</section>
<script>
function payNow(){
   window.location.href = '/pay-now';
}
$(document).ready(function(){
   $('#coupon_code').submit(function(e){
      e.preventDefault();
      var _that = $(this);
      var _code = _that.find('input[type="text"]');
      if(_code.val()=='')
      {
         _code.css('border','1px solid red');
      }
      else
      {
         $.ajax({method:'post',url:'/api',data:{code:_code.val(),action:'applyCode'}}).done(function(response){
            var response = JSON.parse(response);
            if(response.status==0)
            {
                 $.notify({
                     icon: "glyphicon glyphicon-warning-sign",
                     message: response.message
                  },{
                     type: 'danger'
                  });
            }
            else
            {
               window.location.reload();
            }
         });
      }
   });
   $('.remove_cou').click(function(e){
      e.preventDefault();
      var _that = $(this);
      var cc = _that.attr('data-id');
      $.ajax({method:'post',url:'/api',data:{code:cc,action:'removeCode'}}).done(function(response){
         if(response.status==0)
         {
               $.notify({
                  icon: "glyphicon glyphicon-warning-sign",
                  message: response.message
               },{
                  type: 'danger'
               });
         }
         else
         {
            window.location.reload();
         }
      });
   })
});
</script>
<!-- =============== section-1 end here ================= -->
