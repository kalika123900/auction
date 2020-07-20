<section class="product-section2 profile-section">
   <div class="container">
      <div class="row">
         <!-- left wrapper -->
         <div class="col-lg-8 col-md-8">
            <div class="ps2-left-wrapper">
               <!-- row-1 -->
               <div class="ps2-wrapper2">
                  <div class="row">

                     <div class="col-lg-3 col-md-4">
                    
                        <?php if($user->profile_picture!=''): ?>
                        <div class="img-box">
                           <img src="<?=UPLOADS.$user->profile_picture?>" alt="">
                           <i class="fas fa-check-circle"></i>
                        </div>
                        <?php endif; ?>
                        <div class="img-box2">
                           <a href="<?=$user->facebook==''?'javascript:void(0)':$user->facebook?>" target="_blank"><img src="<?=ASSETS?>img/c-facbook.png" alt=""></a>
                           <a href="<?=$user->twitter==''?'javascript:void(0)':$user->twitter?>"  target="_blank"><img src="<?=ASSETS?>img/c-instagram.png" alt=""></a>
                        </div>
                     </div>

                     <div class="col-lg-9 col-md-8">
                        <div class="content-box">
                           <div class="row">
                              <div class="col-md-7 col-xs-8">
                                 <h5 class="h5-tittle"><?=$this->lang->line('Prds_alexa_walker');?> <span class="rating"><?=$this->lang->line('Prds_pro');?></span></h5>
                              </div>
                              <div class="col-md-5 col-xs-4 text-right">
                                 <button class="edit-profile-btn"> <?=$this->lang->line('prds_edit_profile ');?>
                                 <i class="fas fa-pencil-alt"></i></button>
                              </div>
                           </div>
                           <p class="para-desc"><?=$this->lang->line('Prs_member_since');?>: <span><?= date('d-M-Y',strtotime($user->register_at))?></span></p>
                           <p class="para-desc"><span style="margin-left:0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>

                           <p class="para-desc"><span style="margin-left:0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>

                        </div>
                     </div>

                  </div>
               </div>
               <!-- row-1 end -->
            
               
            </div>
         </div>
         <!-- left wrapper -->
         <!-- right wrapper start -->
         <div class="col-lg-4 col-md-4">
            <div class="ps2-right-wrapper">

               <div class="ps2-wrapper2">
                  <div class="row">
                     <div class="col-md-6 col-xs-6">
                        <h6 class="h6-tittle"><?=$this->lang->line('Prds_details');?></h6>
                     </div>
                     <div class="col-md-6 col-xs-6 text-right">
                        <button class="edit-profile-btn"><i class="fas fa-pencil-alt"></i></button>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                        <div><img src="<?php echo base_url('uploads/'. ($user->profile_picture)); ?>" class="resize-image col-sm-4" id="image1" height="40" width="40" /></div>
                           <div class="col-md-12 col-xs-12">
                           <p class="para-desc"><?= $user->email?></p>
                       </div>
                       <div class="col-md-12 col-xs-12">
                          <p class="para-desc"><?= $userdata['display_name']?></p>
                       </div>
                       <hr/>
                     <div class="col-md-6 col-xs-6">
                      
                        <p class="para-desc"><?=$this->lang->line('Prds_Item_sold_');?></p>
                        <p class="para-desc"><?=$this->lang->line('Prs_member_since');?></p>
                        <p class="para-desc"><?=$this->lang->line('Prds_rating');?> <i class="fas fa-info"></i></p>
                     </div>
                     <div class="col-md-6 col-xs-6 text-right">
                        <p class="para-desc" style="color:#2A8AEA">121 <?=$this->lang->line('Prds_product');?></p>
                        <p class="para-desc" style="color:#2A8AEA"></p>
                        <div class="rating">98%</div>
                     </div>
                  </div>
               </div>

               <div class="ps2-wrapper2">
                  <h6 class="h6-tittle"><?=$this->lang->line('Prds_evalutions');?></h6>
                  <hr>
                  <div class="row">
                     <div class="col-md-4 col-xs-4 pl-0">
                        <div class="eva-box1">
                           <p class="para-desc"><?=$this->lang->line('Prds_positive');?></p>
                           <h6 class="h6-tittle">416</h6>
                           <p class="para-desc">1224 <?=$this->lang->line('Prds_depuis_');?>  <br> <?=$this->lang->line('Prds_le_debut');?></p>
                        </div>
                     </div>
                     <div class="col-md-4 col-xs-4 pl-0">
                        <div class="eva-box2">
                           <p class="para-desc"><?=$this->lang->line('Prds_neutral');?></p>
                           <h6 class="h6-tittle">4</h6>
                           <p class="para-desc">6 <?=$this->lang->line('Prds_depuis_');?> <br> <?=$this->lang->line('Prds_le_debut');?></p>
                        </div>
                     </div>
                     <div class="col-md-4 col-xs-4 pl-0">
                        <div class="eva-box3">
                           <p class="para-desc"><?=$this->lang->line('Prds_negative');?></p>
                           <h6 class="h6-tittle">0</h6>
                           <p class="para-desc">0 <?=$this->lang->line('Prds_depuis_');?> <br> <?=$this->lang->line('Prds_le_debut');?></p>
                        </div>
                     </div>
                  </div>
                  
               </div>

            
            </div>
         </div>
<br/>
         <!-- right wrapper end -->
<?php if(count($products)>0): ?>
<div class="col-lg-12 col-md-12 home-section4" style="margin-top: 40px;">
               <!-- row-3 -->
      <div class="hs4-wrapper-head">
            <div class="row">
               <div class="col-md-9 col-xs-8">
                  <h4 class="h4-tittle">Product that can Interest You</h4>
               </div>
               <div class="col-md-3 col-xs-4 text-right">
                  <a href="#">See All <img src="<?=ASSETS?>img/arrow-right.png" alt=""></a>
               </div>
            </div>
      </div>
      <!-- row-4 -->
      <div class="row">
            <div class="col-md-12">
               <div class="home-slider1">
                  <div class="slider autoplay">
                        <!-- slide-1 -->
                        <?php foreach($products as $product): ?>
                        <a href="<?=base_url('/product/'.$product->product_slug) ?>">
                           <div class="card_box">
                                 <div class="img-box">
                                    <img src="<?=UPLOADS.'/'.$product->image_name?>" alt="">
                                 </div>
                                 <div class="content-box">
                                    <h6 class="h6-tittle"><?=$product->product_name?></h6>
                                    <p class="para-desc" style="color:#2a8aea"><?=($product->product_subtitle=='')?'Hurry up!':$product->product_subtitle?></p>
                                    <p class="para-desc"><?= date('M,d Y h:i',strtotime($product->created_date))?></p>
                                 </div>
                                 <hr>
                                 <div class="content-box pb-0">
                                    <div class="row">
                                       <div class="col-md-6 col-xs-6">
                                             <p class="para-desc">Available</p>
                                             <p class="para-desc">Buy It Now</p>
                                       </div>
                                       <div class="col-md-6 col-xs-6 text-right">
                                             <h6 class="h6-tittle">$<?=$product->product_price?></h6>
                                             <!-- <h6 class="h6-tittle">$181.00</h6> -->
                                       </div>
                                    </div>
                                 </div>
                           </div>
                        </a>
                        <?php endforeach; ?>
                       
                  </div>
               </div>
            </div>
      </div>
      <!-- row-4 end -->
</div>
<?php endif; ?>
         <div class="col-lg-8 col-md-8">
                <!-- row-2 -->
             <div class="ps2-left-wrapper">
               <div class="ps2-wrapper2 pl-0 pt-0">
                  <div class="tab-navbar1-box">
                     <!-- tab nav -->
                     <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" id="seller-tab" data-toggle="tab" href="#seller" role="tab" aria-controls="seller" aria-selected="true"><?=$this->lang->line('prds_seller ');?></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="buyer-tab" data-toggle="tab" href="#buyer" role="tab" aria-controls="buyer" aria-selected="false"><?=$this->lang->line('prds_buyer ');?></a>
                        </li>
                     </ul>
                     <!-- tab nav end -->
                     <!-- tab pane -->
                     <div class="tab-content" id="myTabContent">
                        <!-- tab pane-1 -->
                        <div class="tab-pane fade show active" id="seller" role="tabpanel" aria-labelledby="seller-tab">
                           <h6 class="h6-tittle"><?=$this->lang->line('prds_heading_name ');?></h6>
                           <p class="para-desc"><span style="margin-left:0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>
                           
                           <div class="row mt-4">
                              <div class="col-lg-4 col-md-5 col-xs-6">
                                 <h6 class="h6-tittle"><?=$this->lang->line('prds_product_conformity ');?></h6>
                                 <h6 class="h6-tittle"><?=$this->lang->line('prds_communication ');?></h6>
                                 <h6 class="h6-tittle"><?=$this->lang->line('prds_delivery ');?></h6>
                              </div>
                              <div class="col-lg-8 col-md-7 col-xs-6">
                                 <h6 class="h6-tittle"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></h6>

                                 <h6 class="h6-tittle"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></h6>

                                 <h6 class="h6-tittle"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></h6>
                              </div>
                           </div>
                           <hr>
                           <h6 class="h6-tittle"><?=$this->lang->line('prds_comments ');?></h6>
                           <p class="para-desc"><span style="margin-left:0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>

                           <div class="tab-navbar2-box">
                               <!-- inner tab nav -->
                              <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                 <li class="nav-item">
                                    <a class="nav-link active" id="positive-tab" data-toggle="tab" href="#positive" role="tab" aria-controls="positive" aria-selected="true"><?=$this->lang->line('Prds_positive');?></a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="negative-tab" data-toggle="tab" href="#negative" role="tab" aria-controls="negative" aria-selected="false"><?=$this->lang->line('Prds_negative');?></a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="neutral-tab" data-toggle="tab" href="#neutral" role="tab" aria-controls="neutral" aria-selected="false"><?=$this->lang->line('Prds_neutral');?></a>
                                 </li>
                              </ul>
                              <!-- inner tab nav end -->
                              <!-- inner tab panes -->
                              <div class="tab-content" id="myTabContent2">
                                 <!-- inner tab pane-1 -->
                                 <div class="tab-pane fade show active" id="positive" role="tabpanel" aria-labelledby="positive-tab">

                                    <div class="row">
                                       <div class="col-md-4 col-xs-4 text-right">
                                          <h6 class="h6-tittle" style="color:#2A8AEA"><?=$this->lang->line('prds_buyer_ ');?></h6>
                                          <p class="para-desc"><span><?=$this->lang->line('prds_vendeur ');?></span></p>
                                          <p class="para-desc"><span><?=$this->lang->line('prds_n_d_article ');?></span></p>
                                       </div>
                                       <div class="col-md-8 col-xs-8">
                                          <h6 class="h6-tittle"><?=$this->lang->line('prds_alles_bestens ');?></h6>
                                          <p class="para-desc"><span></span></p>
                                          <p class="para-desc"><span>8 Dec 2019</span></p>
                                       </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                       <div class="col-md-4 col-xs-4 text-right">
                                          <h6 class="h6-tittle" style="color:#2A8AEA"><?=$this->lang->line('prds_buyer_ ');?></h6>
                                          <p class="para-desc"><span><?=$this->lang->line('prds_vendeur ');?></span></p>
                                          <p class="para-desc"><span><?=$this->lang->line('prds_n_d_article ');?></span></p>
                                       </div>
                                       <div class="col-md-8 col-xs-8">
                                          <h6 class="h6-tittle"><?=$this->lang->line('prds_alles_bestens ');?></h6>
                                          <p class="para-desc"><span></span></p>
                                          <p class="para-desc"><span>8 Dec 2019</span></p>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- inner tab pane-2 -->
                                 <div class="tab-pane fade" id="negative" role="tabpanel" aria-labelledby="negative-tab">
                                    <div class="row">
                                       <div class="col-md-4 col-xs-4 text-right">
                                          <h6 class="h6-tittle" style="color:#2A8AEA"><?=$this->lang->line('prds_buyer_ ');?></h6>
                                          <p class="para-desc"><span><?=$this->lang->line('prds_vendeur ');?></span></p>
                                          <p class="para-desc"><span><?=$this->lang->line('prds_n_d_article ');?></span></p>
                                       </div>
                                       <div class="col-md-8 col-xs-8">
                                          <h6 class="h6-tittle"><?=$this->lang->line('prds_alles_bestens ');?></h6>
                                          <p class="para-desc"><span></span></p>
                                          <p class="para-desc"><span>8 Dec 2019</span></p>
                                       </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                       <div class="col-md-4 col-xs-4 text-right">
                                          <h6 class="h6-tittle" style="color:#2A8AEA">Buyer 1</h6>
                                          <p class="para-desc"><span>Vendeur</span></p>
                                          <p class="para-desc"><span>N d article 1091329664</span></p>
                                       </div>
                                       <div class="col-md-8 col-xs-8">
                                          <h6 class="h6-tittle">Alles Bestens Gerne Wieder</h6>
                                          <p class="para-desc"><span></span></p>
                                          <p class="para-desc"><span>8 Dec 2019</span></p>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- inner tab pane-3 -->
                                 <div class="tab-pane fade" id="neutral" role="tabpanel" aria-labelledby="neutral-tab">
                                    <div class="row">
                                       <div class="col-md-4 col-xs-4 text-right">
                                          <h6 class="h6-tittle" style="color:#2A8AEA">Buyer 1</h6>
                                          <p class="para-desc"><span>Vendeur</span></p>
                                          <p class="para-desc"><span>N d article 1091329664</span></p>
                                       </div>
                                       <div class="col-md-8 col-xs-8">
                                          <h6 class="h6-tittle">Alles Bestens Gerne Wieder</h6>
                                          <p class="para-desc"><span></span></p>
                                          <p class="para-desc"><span>8 Dec 2019</span></p>
                                       </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                       <div class="col-md-4 col-xs-4 text-right">
                                          <h6 class="h6-tittle" style="color:#2A8AEA">Buyer 1</h6>
                                          <p class="para-desc"><span>Vendeur</span></p>
                                          <p class="para-desc"><span>N d article 1091329664</span></p>
                                       </div>
                                       <div class="col-md-8 col-xs-8">
                                          <h6 class="h6-tittle">Alles Bestens Gerne Wieder</h6>
                                          <p class="para-desc"><span></span></p>
                                          <p class="para-desc"><span>8 Dec 2019</span></p>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- inner tab pane-3 end -->
                              </div>
                              <!-- inner tab panes end -->
                           </div>

                        </div>
                        <!-- tab-pane-2 -->
                        <div class="tab-pane fade" id="buyer" role="tabpanel" aria-labelledby="buyer-tab">
                           <h6 class="h6-tittle">Heading Name</h6>
                           <p class="para-desc"><span style="margin-left:0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>
                           
                           <div class="row mt-4">
                              <div class="col-lg-4 col-md-5 col-xs-6">
                                 <h6 class="h6-tittle">Product Conformity</h6>
                                 <h6 class="h6-tittle">Communication</h6>
                                 <h6 class="h6-tittle">Delivery</h6>
                              </div>
                              <div class="col-lg-8 col-md-7 col-xs-6">
                                 <h6 class="h6-tittle"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></h6>

                                 <h6 class="h6-tittle"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></h6>

                                 <h6 class="h6-tittle"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></h6>
                              </div>
                           </div>
                           <hr>
                           <h6 class="h6-tittle">Comments</h6>
                           <p class="para-desc"><span style="margin-left:0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>

                           <div class="tab-navbar2-box">
                               <!-- inner tab nav -->
                              <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                 <li class="nav-item">
                                    <a class="nav-link active" id="positive-tab" data-toggle="tab" href="#positive" role="tab" aria-controls="positive" aria-selected="true">Positive</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="negative-tab" data-toggle="tab" href="#negative" role="tab" aria-controls="negative" aria-selected="false">Negative</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="neutral-tab" data-toggle="tab" href="#neutral" role="tab" aria-controls="neutral" aria-selected="false">Neutral</a>
                                 </li>
                              </ul>
                              <!-- inner tab nav end -->
                              <!-- inner tab panes -->
                              <div class="tab-content" id="myTabContent2">
                                 <!-- inner tab pane-1 -->
                                 <div class="tab-pane fade show active" id="positive" role="tabpanel" aria-labelledby="positive-tab">

                                    <div class="row">
                                       <div class="col-md-4 col-xs-4 text-right">
                                          <h6 class="h6-tittle" style="color:#2A8AEA">Buyer 1</h6>
                                          <p class="para-desc"><span>Vendeur</span></p>
                                          <p class="para-desc"><span>N d article 1091329664</span></p>
                                       </div>
                                       <div class="col-md-8 col-xs-8">
                                          <h6 class="h6-tittle">Alles Bestens Gerne Wieder</h6>
                                          <p class="para-desc"><span></span></p>
                                          <p class="para-desc"><span>8 Dec 2019</span></p>
                                       </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                       <div class="col-md-4 col-xs-4 text-right">
                                          <h6 class="h6-tittle" style="color:#2A8AEA">Buyer 1</h6>
                                          <p class="para-desc"><span>Vendeur</span></p>
                                          <p class="para-desc"><span>N d article 1091329664</span></p>
                                       </div>
                                       <div class="col-md-8 col-xs-8">
                                          <h6 class="h6-tittle">Alles Bestens Gerne Wieder</h6>
                                          <p class="para-desc"><span></span></p>
                                          <p class="para-desc"><span>8 Dec 2019</span></p>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- inner tab pane-2 -->
                                 <div class="tab-pane fade" id="negative" role="tabpanel" aria-labelledby="negative-tab">
                                    <div class="row">
                                       <div class="col-md-4 col-xs-4 text-right">
                                          <h6 class="h6-tittle" style="color:#2A8AEA">Buyer 1</h6>
                                          <p class="para-desc"><span>Vendeur</span></p>
                                          <p class="para-desc"><span>N d article 1091329664</span></p>
                                       </div>
                                       <div class="col-md-8 col-xs-8">
                                          <h6 class="h6-tittle">Alles Bestens Gerne Wieder</h6>
                                          <p class="para-desc"><span></span></p>
                                          <p class="para-desc"><span>8 Dec 2019</span></p>
                                       </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                       <div class="col-md-4 col-xs-4 text-right">
                                          <h6 class="h6-tittle" style="color:#2A8AEA">Buyer 1</h6>
                                          <p class="para-desc"><span>Vendeur</span></p>
                                          <p class="para-desc"><span>N d article 1091329664</span></p>
                                       </div>
                                       <div class="col-md-8 col-xs-8">
                                          <h6 class="h6-tittle">Alles Bestens Gerne Wieder</h6>
                                          <p class="para-desc"><span></span></p>
                                          <p class="para-desc"><span>8 Dec 2019</span></p>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- inner tab pane-3 -->
                                 <div class="tab-pane fade" id="neutral" role="tabpanel" aria-labelledby="neutral-tab">
                                    <div class="row">
                                       <div class="col-md-4 col-xs-4 text-right">
                                          <h6 class="h6-tittle" style="color:#2A8AEA">Buyer 1</h6>
                                          <p class="para-desc"><span>Vendeur</span></p>
                                          <p class="para-desc"><span>N d article 1091329664</span></p>
                                       </div>
                                       <div class="col-md-8 col-xs-8">
                                          <h6 class="h6-tittle">Alles Bestens Gerne Wieder</h6>
                                          <p class="para-desc"><span></span></p>
                                          <p class="para-desc"><span>8 Dec 2019</span></p>
                                       </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                       <div class="col-md-4 col-xs-4 text-right">
                                          <h6 class="h6-tittle" style="color:#2A8AEA">Buyer 1</h6>
                                          <p class="para-desc"><span>Vendeur</span></p>
                                          <p class="para-desc"><span>N d article 1091329664</span></p>
                                       </div>
                                       <div class="col-md-8 col-xs-8">
                                          <h6 class="h6-tittle">Alles Bestens Gerne Wieder</h6>
                                          <p class="para-desc"><span></span></p>
                                          <p class="para-desc"><span>8 Dec 2019</span></p>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- inner tab pane-3 end -->
                              </div>
                              <!-- inner tab panes end -->
                           </div>
                        </div>
                        <!-- tab-pane-2 end -->
                     </div>
                     <!-- tab pane end -->
                  </div>
               </div>
            </div>   
               <!-- row-2 end -->              
         </div>
         <div class="col-lg-4 col-md-4">
            <div class="ps2-wrapper2">
                  <div class="row">
                     <div class="col-md-9 col-xs-9">
                        <h6 class="h6-tittle"><?=$this->lang->line('Prds_user_verification');?></h6>
                     </div>
                     <div class="col-md-3 col-xs-3 text-right">
                        <button class="edit-profile-btn"><i class="fas fa-pencil-alt"></i></button>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-md-8 col-xs-8">
                        <p class="para-desc"><?=$this->lang->line('Prds_user_id_number');?></p>
                        <p class="para-desc"><?=$this->lang->line('Prds_user_phone_number');?></p>
                        <p class="para-desc"><?=$this->lang->line('Prds_user_address');?></p>
                     </div>
                     <div class="col-md-4 col-xs-4 text-right">
                        <p class="para-desc" style="color:#2A8AEA"><?=$this->lang->line('Prds_verified');?></p>
                        <p class="para-desc" style="color:#2A8AEA"><?=$this->lang->line('Prds_verified');?></p>
                        <p class="para-desc" style="color:#2A8AEA"><?=$this->lang->line('Prds_verified');?></p>
                     </div>
                  </div>
               </div>

               <div class="ps2-wrapper2">
                  <h6 class="h6-tittle"><?=$this->lang->line('Prds_user_address');?></h6>
                  <hr>
                  <p class="para-desc"><?=$this->lang->line('Prds_films_waldhaus');?></p>
               </div>
         </div>
      </div>
   </div>
</section>