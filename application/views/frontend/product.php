
<!-- =============== section-1 start here =============== -->
<section class="product-section1">
   <div class="container">
      <!-- row-1 -->
      <div class="row">
         <div class="col-md-12">
            <ul class="breadcrumb">
            <?php if($breadcrumb[0]->parent_name!='') { ?>
                  <li><a href="/<?=$breadcrumb[0]->parent_slug?>"><?=$breadcrumb[0]->parent_name?></a></li>
            <?php } ?>
            <?php if($breadcrumb[0]->category_name!=''){ ?>
                  <li><a href="/<?=$breadcrumb[0]->category_slug?>"><?=$breadcrumb[0]->category_name?></a></li>
            <?php } ?>
               <li><?=$product->product_name?></li>
            </ul>
         </div>
      </div>
      <!-- row-1 end -->
   </div>
</section>
<!-- =============== section-1 end here ================= -->
<!-- =============== section-2 start here ================= -->
<section class="product-section2">
   <div class="container">
      <div class="row">
         <!-- left wrapper -->
         <div class="col-lg-7 col-md-7">
            <div class="ps2-left-wrapper">
               <!-- row-1 -->
               <div class="ps2-slider">
                  <div class="slider slider-for">
                     <!-- slide-1 -->
                  <?php $product_images_h   = explode(',',$product->product_images); ?>
                  <?php $product_featured_h = explode(',',$product->featured_state); ?>
                  <?php $product_index_h   = array_search('1',$product_featured_h); ?>
                  <?php 
                        if($product_index_h!=-1)
                        {
                          ?>
                          <div>
                            <div class="slide">
                              <img src="<?=UPLOADS.$product_images_h[$product_index_h]?>" alt="<?=$product->product_name?>">
                            </div>
                          </div>
                       <?php
                           unset($product_images_h[$product_index_h]);
                         }
                       ?>
                     <?php foreach($product_images_h as $image): ?>         
                     <div>
                        <div class="slide">
                           <a href="#">
                              <img src="<?=UPLOADS.trim($image)?>" alt="">
                           </a>
                        </div>
                     </div>
                     <?php endforeach; ?> 
                  </div>
                  <div class="slider slider-nav">
                  <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style=""><img src="<?=IMAGE_PATH?>img/left-arrow.png" alt=""></button>
                  <?php $product_images_h   = explode(',',$product->product_images); ?>
                  <?php $product_featured_h = explode(',',$product->featured_state); ?>
                  <?php $product_index_h   = array_search('1',$product_featured_h); ?>
                  <?php 
                        if($product_index_h!=-1)
                        {
                          ?>
                          <div>
                            <div class="slide_nav">
                              <img src="<?=UPLOADS.$product_images_h[$product_index_h]?>" alt="<?=$product->product_name?>">
                            </div>
                          </div>
                       <?php
                           unset($product_images_h[$product_index_h]);
                         }
                       ?>
                     <!-- slide-nav-1 -->
                     <!-- slide-nav-2 -->
                     <?php foreach($product_images_h as $image): ?>         
                     <div>
                        <div class="slide_nav">
                           <img src="<?=UPLOADS.trim($image)?>" alt="">
                        </div>
                     </div>
                     <?php endforeach; ?>
                     <!-- slide-nav-3 -->
                     <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style=""><img src="<?=IMAGE_PATH?>img/right-arrow.png" alt=""></button>
                  </div>
               </div>
               <!-- row-1 end -->
               <!-- row-2 -->
               <div class="ps2-wrapper2">
                  <div class="row">
                     <div class="col-md-4 col-xs-4">
                        <p class="para-desc">State: <span><?=ucfirst($product->product_condition)?></span></p>
                     </div>
                     <div class="col-md-4 col-xs-4">
                        <p class="para-desc">Delivery: <span><?=ucfirst($product->product_deliverable==1?'Yes':'No')?></span></p>
                     </div>
                     <div class="col-md-4 col-xs-4">
                        <p class="para-desc">Payment: <span><?php $product->product_payment_type; ?></span></p>
                     </div>
                  </div>
               </div>
               <!-- row-2 end -->
               <!-- row-3 -->
               <!-- <div class="ps2-wrapper2">
                  <h6 class="h6-tittle">Main features of product</h6>
                  <hr>
                  <div class="row">
                     <div class="col-md-4 col-xs-4">
                        <p class="para-desc">Feature1: <span>Dummy name</span></p>
                        <p class="para-desc">Feature1: <span>Dummy name</span></p>
                        <p class="para-desc">Feature1: <span>Dummy name</span></p>
                        <p class="para-desc">Feature1: <span>Dummy name</span></p>
                     </div>
                     <div class="col-md-4 col-xs-4">
                        <p class="para-desc">Feature1: <span>Dummy name</span></p>
                        <p class="para-desc">Feature1: <span>Dummy name</span></p>
                        <p class="para-desc">Feature1: <span>Dummy name</span></p>
                        <p class="para-desc">Feature1: <span>Dummy name</span></p>
                     </div>
                     <div class="col-md-4 col-xs-4">
                        <p class="para-desc">Feature1: <span>Dummy name</span></p>
                        <p class="para-desc">Feature1: <span>Dummy name</span></p>
                        <p class="para-desc">Feature1: <span>Dummy name</span></p>
                        <p class="para-desc">Feature1: <span>Dummy name</span></p>
                     </div>
                  </div>
               </div> -->
               <!-- row-3 end -->
               <!-- row-4 -->
               <div class="ps2-wrapper2">
                  <h6 class="h6-tittle">Description</h6>
                  <hr>
                  <?=$product->product_description?>
                  <button class="show-more-btn">Show Full Description</button>
               </div>
               <!-- row-4 end -->
            </div>
         </div>
         <!-- left wrapper -->
         <!-- right wrapper start -->
         <div class="col-lg-5 col-md-5">
            <div class="ps2-right-wrapper">
               <h1 class="h1-tittle"><?=$product->product_name?></h1>
               <p class="para-desc"><span><img src="img/clock.png" alt=""> <?=date('M, d Y h:i',strtotime($product->created_date))?></span></p>
               <!-- Auction Handler -->
               <?php if(count($auctionItem)>0): ?>
               <div class="row">
                  <div class="col-md-7 col-xs-7">
                     <p class="para-desc">Minimal offer or actual offer</p>
                  </div>
                  <div class="col-md-5 col-xs-5 text-right">
                     <h6 class="h6-tittle">$ 4, 201.00</h6>
                  </div>
               </div>
               <p class="para-desc">Your next offer <i class="fas fa-info"></i></p>

               <div class="input-group">
                  <span class="input-group-btn">
                     <button type="button" class="couter_btn btn-number" data-type="minus" data-field="quant[1]">
                        --
                     </button>
                  </span>
                  <input type="text" name="quant[1]" class="form-control input-number" value="4201" min="4201" max="25600">
                  <span class="input-group-btn">
                     <button type="button" class="couter_btn btn-number" data-type="plus" data-field="quant[1]">
                        +
                     </button>
                  </span>
               </div>

               <button class="login-btn">Make an Offer</button>
               <hr>
               <div class="row">
                  <div class="col-md-7 col-xs-7">
                     <p class="para-desc">Price:</p>
                  </div>
                  <div class="col-md-5 col-xs-5 text-right">
                     <h6 class="h6-tittle">$<?=$product->product_price?></h6>
                  </div>
               </div>
               <?php endif; ?>
               <!-- Auction Handler Ends Here -->
               <?php if(isset($userdata['id']) && $userdata['id']!=$product->product_vendor_id){ ?>
                  <button class="buy-now-btn buy-now" data-pro-id="<?=$product->id?>">Buy Now</button>
                  <button class="add-wishlist-btn"><i class="far fa-heart"></i> Add to Wishlist</button>
               <?php } 
                else if(isset($userdata['id'])){ ?>
                  <!-- nothing to print-->
               <?php } 
                else
                  { ?>
                  <button class="buy-now-btn" data-toggle="modal" data-target="#myModal_2">Buy Now</button>
                  <button class="add-wishlist-btn" data-toggle="modal" data-target="#myModal_2"><i class="far fa-heart"></i> Add to Wishlist</button>
               <?php } ?>   
               <div class="ps2-wrapper2">
                  <div class="row">
                     <div class="col-md-6 col-xs-6">
                        <p class="para-desc">Vendor</p>
                        <p class="para-desc">Rating <i class="fas fa-info"></i></p>
                        <p class="para-desc">User Type</p>
                        <p class="para-desc">Item Sold</p>
                        <p class="para-desc">Member Since</p>
                        <p class="para-desc">Address</p>
                        <br>
                        <p class="para-desc">User ID Number</p>
                        <p class="para-desc">Number</p>
                        <p class="para-desc">Address Verified</p>
                     </div>
                     <div class="col-md-6 col-xs-6 text-right">
                        <p class="para-desc"><span><?=$vendor->first_name." ".$vendor->last_name?></span></p>
                        <div class="rating">98%</div>
                     <p class="para-desc"><span>Unverified</span></p>
                        <p class="para-desc"><span><?=$productCount->productCount?> Product</span></p>
                        <p class="para-desc"><span><?= date('Y',strtotime($vendor->register_at))?></span></p>
                        <p class="para-desc"><span>Flims Waldhaus, 7018 Flims Indore, India</span></p>
                        <p class="para-desc"><span><i class="fas fa-check-circle"></i>Verified</span></p>
                        <p class="para-desc"><span><i class="fas fa-check-circle"></i>Verified</span></p>
                        <p class="para-desc"><span><i class="fas fa-check-circle"></i>Verified</span></p>
                     </div>
                  </div>
               </div>
               <?php if(count($auctionItem)>0): ?>   
               <div class="ps2-wrapper2">
                  <h6 class="h6-tittle">Bid (10)</h6>
                  <hr>
                  <div class="row">
                     <div class="col-md-4 col-xs-4">
                        <p class="para-desc">Michuto <i class="fas fa-check-circle"></i></p>
                     </div>
                     <div class="col-md-4 col-xs-4">
                        <p class="para-desc">160.00</p>
                     </div>
                     <div class="col-md-4 col-xs-4">
                        <p class="para-desc"><span>II y a 7 heures</span></p>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-md-4 col-xs-4">
                        <p class="para-desc">Starcustomer</p>
                     </div>
                     <div class="col-md-4 col-xs-4">
                        <p class="para-desc">150.00</p>
                     </div>
                     <div class="col-md-4 col-xs-4">
                        <p class="para-desc"><span>II y a 8 heures</span></p>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-md-12">
                        <p class="para-desc"><span class="bef-aft">+</span> Afficher les encheres automatiques</p>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-md-4 col-xs-4">
                        <p class="para-desc">Starcustomer</p>
                     </div>
                     <div class="col-md-4 col-xs-4">
                        <p class="para-desc">150.00</p>
                     </div>
                     <div class="col-md-4 col-xs-4">
                        <p class="para-desc"><span>II y a 487 heures</span></p>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-md-4 col-xs-4">
                        <p class="para-desc">Michuto</p>
                     </div>
                     <div class="col-md-4 col-xs-4">
                        <p class="para-desc">160.00</p>
                     </div>
                     <div class="col-md-4 col-xs-4">
                        <p class="para-desc"><span>II y a 7 heures</span></p>
                     </div>
                  </div>

               </div>
               <?php endif; ?>   
               <div class="text-center mt-2">
                  <a href="#">Report This Ad</a>
               </div>

            </div>
         </div>
         <!-- right wrapper end -->
      </div>
   </div>
</section>
<!-- =============== section-2 end here ================= -->
<script>
$(document).ready(function(){
   $('.buy-now').click(function(){
      if(confirm('Are you sure you want to proceed?'))
      {
         var _pro_id = $(this).attr('data-pro-id');
         $.ajax({url:base_url+'/api',method:'POST',data:{action:'buy_product',pro_id:_pro_id}}).done(function(response){
            response = JSON.parse(response);
            if(response.status=='success')
            {
               var data = response.data;
               var p_id = data.purchase_id;
               window.location.href = base_url+'messenger/'+p_id;
            }
            else
            {
                $.notify({
                  icon: "glyphicon glyphicon-warning-sign",
                  message: response.message,
                  
                  },{
                     type: 'danger',
                     z_index: 9999
                  });   
            }
         });
      }
      else
      {

      }
   })
});
</script>