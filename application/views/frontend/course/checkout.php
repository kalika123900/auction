<!-- =============== section-1 start here =============== -->
<?php 

 $udt = $this->session->userdata();

?>
<section class="blog-section1">
   <div class="container-fluid">
      <div class="mid-container">
         <div class="row">
            <div class="col-md-12">
               <div class="bs1-wrapper">
                  <h2 class="h2-tittle">Shopping Cart</h2>
                  <p class="para-desc">Home / cart</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- =============== section-1 end here ================= -->
<!-- =============== section-2 start here =============== -->
<section class="checkout-section2">
   <div class="container-fluid">
      <div class="mid-container">

         <div class="row">
            <!-- left wrapper start -->
            <div class="col-lg-9 col-md-8">
               <div class="csk2-left-wrapper">
                  <table class="table product-cart-table">
                     <thead>
                        <tr>
                           <th>Product</th>
                           <th>Price</th>
                        </tr>
                     </thead>
                     <tbody>

                     <?php
                     
                     $cart = $this->cart->contents(); 
                     $subtotal = 0;
                     $actualPrice = 0;
                     $count = 0;
                     $couponDiscounts = 0;
                     if(count($cart)>0):
                     foreach($cart as $key => $row):
                      $row = (object)$row;
                      $p = strpos($row->id,'OU_',0);     
                      if($p==1){
                        continue;
                      }  
                      $subtotal = $row->subtotal + $subtotal;  
                      $actualPrice = ($actualPrice)+($row->options['price']*$row->qty);
                      ?>
                       <tr class="pcart-tr">
                           <td>
                              <div class="img-box">
                                 <img src="<?=UPLOADS.$row->options['featured_image']?>" alt="">
                              </div>
                              <div class="content-box">
                                 <h6 class="h6-tittle"><?=$row->name?></h6>
                              </div>
                           </td>
                           <td>
                              <div class="img-box">
                              <h6 class="h6-tittle">$<?=$row->price?> x <?=$row->qty?> = $<?=$row->subtotal?> </h6>
                              <?php if(isset($udt['role']) && $udt['role']=='company'): ?>
                              <span data-qty="<?=$row->qty?>" data-action="minus" data-id="<?=$key?>" class="update_qty qty-handler">-</span>
                              <span data-qty="<?=$row->qty?>" data-action="minus" data-id="<?=$key?>" class="qty-display"><?=$row->qty?></span>
                              <span data-qty="<?=$row->qty?>" data-action="plus" data-id="<?=$key?>" class="update_qty qty-handler">+</span>
                              <?php endif; ?>
                              </div>
                              <div class="content-box" style="text-align: right">
                                 <a href="<?=site_url().$row->rowid.'/checkout/remove'?>" class="cancel-btn pull-right"><i class="fas fa-trash"></i></a>
                              </div>
                           </td>
                        </tr>
                     <?php $count++; 
                     endforeach;
                  else:
                     ?>
                     <tr><td colspan="2">No item in cart!</td></tr>
                  <?php endif; ?>   
                     </tbody>
                  </table>
               </div>
            </div>
            <!-- left wrapper end -->
            <!-- right wrapper start -->
            <div class="col-lg-3 col-md-4">
               <div class="csk2-right-wrapper">
                  <h6 class="h6-tittle">Total</h6>
                  <h3 class="h3-tittle">$<?=$subtotal?></h3>
                  <?php if(count($cart)>0): ?>
                  <p class="para-desc"><del>$<?=$actualPrice?></del></p>
                  <p class="para-desc"><?=100-round(($subtotal*100)/$actualPrice)?>% off</p>
                  <?php endif; ?>
                 
                  <?php 
                
                  if(!isset($user_data['is_logged_in'])){ ?>
                     <a class="nav-link read-more-btn" href="#" data-toggle="modal" data-target="#elegantModalForm">Checkout</a>
                  <?php }
                  else if($user_data['validated']=='inactive'){ ?>
                     <a class="nav-link read-more-btn" href="/approval-wait">checkout</a>
                  <?php } 
                  else { ?>
                     <a class="nav-link read-more-btn" href="/payment-process">Checkout</a>
                  <?php } ?>
<!-- for login Modal -->
<!-- for login Modal end -->
<!-- for signup Modal -->
</section>
<script>

$(document).ready(function(){
   $('.update_qty').click(function(){
      var _id = $(this).attr('data-id');
      var _qty = $(this).attr('data-qty');
      var _act = $(this).attr('data-action');
      $.ajax({url:'/api',method:'post',data:{action:'updatecart',cart_id:_id,act:_act,qty:_qty,val:1}}).done(function(){
         window.location.reload();
      });

   });
});

</script>
<!-- =============== section-2 end here ================= -->
