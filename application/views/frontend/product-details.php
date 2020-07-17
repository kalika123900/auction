<!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
  
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

   



<!-- =============== section-1 start here ================= -->
<section class="publish-add-section1 product-details-section1">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="wizard">
               <div class="wizard-inner">
                  <ul class="nav nav-tabs" role="tablist">

                     <li role="presentation" class="active">
                           <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                              <div class="tab-content-box">
                                 <span class="round-tab">
                                    1
                                 </span>
                                 <span class="text-tab">
                                    Details
                                 </span>
                                 <div class="connecting-line"></div>
                             </div>
                           </a>
                     </li>
                     <li role="presentation" class="disabled">
                           <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                              <div class="tab-content-box">
                                 <span class="round-tab">
                                    2
                                 </span>
                                 <span class="text-tab">
                                    Offer type and price
                                 </span>
                                 <div class="connecting-line"></div>
                             </div>
                           </a>
                     </li>

                     <li role="presentation" class="disabled">
                           <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                              <div class="tab-content-box">
                                 <span class="round-tab">
                                    3
                                 </span>
                                 <span class="text-tab">
                                    Publish
                                 </span>
                              </div>
                           </a>
                     </li>
                  </ul>
               </div>

               
            </div>
         </div>
      </div>
   </div>
</section>
<!-- =============== section-1 end here ================= -->
<!-- =============== section-2 start here ================= -->
<section class="publish-add-section2 product-details-section2">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <form role="form" id="uploadForm" enctype="multipart/form-data" method="post">
               <div class="tab-content">
                  <!-- tab pane-1 -->
                  <div class="tab-pane active" role="tabpanel" id="step1">
                     <div class="row">

                        <div class="col-md-5 col-sm-6">
                           <div class="left-wrapper">
                              <h5 class="h5-tittle" style="color:#2A8AEA">Details</h5>
                              <div class="para-box">
                                 <p class="para-desc">We have kept all the entered values. <span>Reset all values</span></p>
                              </div>
                              <br>
                              <p class="para-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                              <label for="upload_imgs" class="button hollow">Select Your Images +</label>
                              <input class="show-for-sr" onchange="changeHandler1()"  type="file" id="upload_imgs" name="upload_imgs[]" multiple/>
                              </p>
                                 <div class="quote-imgs-thumbs quote-imgs-thumbs--hidden" id="img_preview" aria-live="polite"></div>
                               <p>
                              

                           </div>
                        </div>
                        <div class="col-md-7 col-sm-6">
                           <div class="left-wrapper">
                              <h5 class="h5-tittle">Sells your product for free</h5>
                              
                                 <div class="form-group">
                                    <input type="text"  onchange="changeHandler1()" name="name" id="title" class="form-control" placeholder='Titre' />
                                    <span class="rating_value"><p class="para-desc">0/40</p></span>
                                    <span class="idea-bulb">
                                       <img src="img/idea.png" alt="">
                                    </span>
                                 </div>
                                 <div class="form-group">
                                    <select id="categories" onchange="changeHandler1()" name="category" id="categories" class="form-control">
                                       <option value="">Select Category</option>
                                       <?php foreach($categories as $cat): ?>
                                       <option value="<?=$cat->id?>"><?=$cat->category_name?></option>
                                       <?php endforeach; ?>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                    <select id="sub_categories" name="subcategory" class="form-control">
                                       <option value="">Select Sub Category</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                    <h6 class="h6-tittle">State</h6>
                                    <div class="add-btn-group add-btn-group2">
                                       <button type="button" data-state="1" class="login-btn btn-condition">Used</button>
                                       <button type="button" data-state="2" class="add-wishlist-btn btn-condition">New</button>
                                       <button type="button" data-state="3" class="add-wishlist-btn btn-condition">New with warranty</button>
                                       <button type="button" data-state="4" class="add-wishlist-btn btn-condition">Defective</button>
                                    </div>
                                 </div>
                                 
                                 <div class="form-group state-message" style="display: none">
                                    <p class="para-desc">This item is already used, but it is functional.</p>
                                 </div>
                                 <div class="form-group state-message" style="display: none">
                                    <p class="para-desc">This item is new, but without warranty.</p>
                                 </div>
                                 <div class="form-group state-message" style="display: none">
                                    <p class="para-desc">This item is new with warranty.</p>
                                 </div>
                                 <div class="form-group state-message" style="display: none">
                                    <p class="para-desc">This item is defected</p>
                                 </div>

                                 <div class="form-group">
                                    <input type="text" name="subtitle" class="form-control" placeholder='Sub-Title (Optional)' />
                                    <span class="rating_value"><p class="para-desc">0/60</p></span>
                                    <span class="idea-bulb">
                                       <img src="img/idea.png" alt="">
                                    </span>
                                 </div>
                                 <div class="form-group">
                                    <textarea rows="6" class="form-control" name="description"  onchange="changeHandler1()" id="description" >Description</textarea>
                                    <span class="rating_value" style="top:unset; bottom:0px"><p class="para-desc">0/5000</p></span>
                                    <div class="edtitor-btn-group">
                                       <button class="editor-btn">B</button>
                                       <button class="editor-btn"><i>I</i></button>
                                       <button class="editor-btn"><img src="img/list.png" alt=""></button>
                                    </div>
                                    <span class="idea-bulb">
                                       <img src="img/idea.png" alt="">
                                    </span>
                                 </div>
                              </form>
                              
                           </div>
                        </div>

                        <div class="col-md-12 col-sm-12 text-right">
                            <input type="hidden" name="condition" id="state" value="1" >
                           <button type="button" id="step2btn" class="login-btn next-step" disabled>Next</button>
                        </div>

                     </div>
                  </div>
                  <!-- tab pane-2 -->
                  <div class="tab-pane" role="tabpanel" id="step2">
                     <div class="row">

                        <div class="col-md-6 col-sm-6">
                           <div class="left-wrapper">
                              <h5 class="h5-tittle" style="color:#2A8AEA">Type d'offre et prix</h5>
                              
                              <h6 class="h6-tittle">Choisis le type d'offre</h6>
                              
                              <!-- tab menu -->
                              <ul class="nav nav-tabs">
                                 <li class="active">
                                    <a data-toggle="tab" href="#home">
                                       <div class="enchere-box">
                                          <p class="para-desc">Direct purchase</p>
                                          <p class="para-desc">Plus de chances de <br> vendre</p>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a data-toggle="tab" href="#menu1">
                                       <div class="achat-box">
                                          <p class="para-desc">Normal Bid</p>
                                          <p class="para-desc">No surprises on <br> the price</p>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a data-toggle="tab" href="#menu2">
                                       <div class="achat-box">
                                          <p class="para-desc">Hidden Bids</p>
                                          <p class="para-desc">Surprises on <br> the price</p>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                              <!-- tab menu end -->
                              <!-- tab content -->
                              <div class="tab-content-wrapper">
                                 <div class="tab-content">
                                    <!-- tab pane 1 -->
                                    <div id="home" class="tab-pane fade in active">
                                       <p class="para-desc">Enter Price for Direct Purchase</p>
                                       <br>
                                       <div class="offre-box">
                                          <div class="inner-box">
                                             <p class="para-desc">Price</p>
                                            <!-- <h5 class="h5-tittle">CHF <span>1.00</span></h5>-->
                                            <div class="form-group">
                                               <input type="text" value="" placeholder="1.00" onchange="changeHandler2()" name="price" id="base_price" class="form-control box-input"/>
                                           </div>
                                             <span class="idea-bulb">
                                                <img src="img/idea.png" alt="">
                                             </span>
                                          </div>
                                       </div>

                                       <p class="para-desc" style="color:#ff6766; margin-left:16px">Price must be a valid number.</p>
                                       
                                       <h6 class="h6-tittle">Quantity</h6>
                                       <div class="input-group">
                                          <span class="input-group-btn">
                                             <button type="button" class="couter_btn btn-number" data-type="minus" data-field="quant[1]">
                                                --
                                             </button>
                                          </span>
                                          <input type="text" name="quant[1]" name="base_count" onchange="changeHandler2()" class="form-control input-number" value="1" min="1" max="600">
                                          <span class="input-group-btn">
                                             <button type="button" class="couter_btn btn-number" data-type="plus" data-field="quant[1]">
                                                +
                                             </button>
                                          </span>
                                       </div>
                                       <br>
                                    </div>
                                    <!-- tab pane 2 -->
                                    <div id="menu1" class="tab-pane fade">
                                       <div class="offre-box">
                                          <div class="inner-box">
                                             <p class="para-desc">Direct Auction</p>
                                             <!-- <h5 class="h5-tittle">CHF <span>1.00</span></h5>-->
                                            <div class="form-group">
                                               <input type="text" class="form-control box-input"/>
                                           </div>
                                             <span class="idea-bulb">
                                                <img src="img/idea.png" alt="">
                                             </span>
                                          </div>
                                       </div>
                                       <p class="para-desc" style="color:#ff6766; margin-left:16px">The starting offer must be a valid number.</p>

                                       <div class="toggle-switch-box">
                                          <label class="switch">
                                             <input type="checkbox" checked>
                                             <span class="slider round"></span>
                                          </label>
                                          <p class="para-desc">Reactivation automatique</p>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-7">
                                             <div class="form-group">
                                                <h6 class="h6-tittle">Number of reactivations</h6>
                                                <div class="add-btn-group add-btn-group2">
                                                   <button type="button" class="login-btn">1x</button>
                                                   <button type="button" class="add-wishlist-btn">2x</button>
                                                   <button type="button" class="add-wishlist-btn">3x</button>
                                                   <button type="button" class="add-wishlist-btn">4x</button>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-5">
                                             <div class="form-group">
                                                <h6 class="h6-tittle">Increment in dinars</h6>
                                                <div class="add-btn-group add-btn-group2">
                                                   <button type="button" class="login-btn">0.10</button>
                                                   <button type="button" class="add-wishlist-btn">1</button>
                                                   <button type="button" class="add-wishlist-btn">2</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="index-box">
                                          <div class="i-box">i</div>
                                          <p class="para-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                       </div>

                                    </div>
                                    <!-- tab pane 3 -->
                                    <div id="menu2" class="tab-pane fade">
                                       <p class="para-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                       <br>
                                       <div class="offre-box">
                                          <div class="inner-box">
                                             <p class="para-desc">Achat direct</p>
                                             <!-- <h5 class="h5-tittle">CHF <span>1.00</span></h5>-->
                                            <div class="form-group">
                                               <input type="text" class="form-control box-input"/>
                                           </div>
                                             <span class="idea-bulb">
                                                <img src="img/idea.png" alt="">
                                             </span>
                                          </div>
                                       </div>

                                       <p class="para-desc" style="color:#ff6766; margin-left:16px">L'offre de depart doit etre un nombre valide.</p>
                                       <div class="offre-box">
                                          <div class="inner-box">
                                             <p class="para-desc">Achat direct</p>
                                            <!-- <h5 class="h5-tittle">CHF <span>1.00</span></h5>-->
                                            <div class="form-group">
                                               <input type="text" class="form-control box-input"/>
                                           </div>
                                             <span class="idea-bulb">
                                                <img src="img/idea.png" alt="">
                                             </span>
                                          </div>
                                       </div>

                                       <p class="para-desc" style="color:#ff6766; margin-left:16px">L'offre de depart doit etre un nombre valide.</p>
                                       
                                       
                                       <div class="form-group">
                                          <h6 class="h6-tittle">Nuber of reactivations</h6>
                                          <div class="add-btn-group add-btn-group2">
                                             <button type="button" class="login-btn">1x</button>
                                             <button type="button" class="add-wishlist-btn">2x</button>
                                             <button type="button" class="add-wishlist-btn">3x</button>
                                             <button type="button" class="add-wishlist-btn">4x</button>
                                          </div>
                                       </div>
                                       <div class="index-box">
                                          <div class="i-box">i</div>
                                          <p class="para-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                       </div>
                                    </div>
                                    <!-- tab pane 3 end -->
                                 </div>
                              </div>
                              <!-- tab content end -->
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                           <br>
                           <br>
                           <div class="left-wrapper left-wrapper2" style="display:none">
                              <p class="para-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                              <h6 class="h6-tittle">Choose the starting Date and duration</h6>
                              <h6 class="h6-tittle">Duration in days</h6>
                              <div class="input-group">
                                 <span class="input-group-btn">
                                    <button type="button" class="couter_btn btn-number" data-type="minus" data-field="quant[1]">
                                       --
                                    </button>
                                 </span>
                                 <input type="text" name="quant[1]" class="form-control input-number" value="10" min="10" max="600">
                                 <span class="input-group-btn">
                                    <button type="button" class="couter_btn btn-number" data-type="plus" data-field="quant[1]">
                                       +
                                    </button>
                                 </span>
                              </div>
                              <br>
                              <h6 class="h6-tittle">Start of the offer</h6>
                              <label class="custom_radio">Immediate start
                                 <input type="radio" name="radio">
                                 <span class="checkmark"></span>
                              </label>
                              <label class="custom_radio">I choose the start date
                                 <input type="radio" checked="checked" name="radio">
                                 <span class="checkmark"></span>
                              </label>

                              <div class="date-time-wrapper">
                                 <div class="row">

                                    <div class="col-md-6">
                                    <div class="input-group date" data-provide="datepicker">
                                          <div class="input-group-addon">
                                             <span class="glyphicon glyphicon-th"></span>
                                          </div>
                                          <input type="text" class="form-control">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <input id="timepicker"/>
                                    </div>

                                 </div>
                                 <h6 class="h6-tittle">End of offer</h6>
                                 <div class="row">

                                    <div class="col-md-6">
                                       
                                       <div class="input-group date" data-provide="datepicker">
                                          <div class="input-group-addon">
                                             <span class="glyphicon glyphicon-th"></span>
                                          </div>
                                          <input type="text" class="form-control">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <input id="timepicker2"/>
                                    </div>
                                    
                                 </div>
                              </div>
                              <div class="bg-line"></div>
                              <p class="para-desc" style="color:#3ed6af">Offer ends Saturday 04 April at 16:34</p>

                           </div>
                        </div>
                        
                        <div class="col-md-12 col-sm-12 text-right">
                           <ul class="list-inline">
                              <li><button type="button" class="back-btn prev-step">Back</button></li>
                              <li><button type="button" id="step3btn" class="login-btn next-step" disabled>Next</button></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  
                  <!-- tab pane-3 -->
                  <div class="tab-pane" role="tabpanel" id="complete">
                     <div class="row">

                        <div class="col-md-6">
                           <div class="left-wrapper pr-5">
                              <h5 class="h5-tittle" style="color:#2A8AEA">Location</h5>
                              <div class="form-group">
                                 <select id="governate" name="governate" class="form-control">
                                   <?php foreach($location as $key=>$loc): ?>
                                    <option value="<?=$key?>"><?=$key?></option>
                                   <?php endforeach; ?> 
                                 </select>
                              </div>
                              <div class="form-group">
                                 <select id="deligates" name="delegation"  class="form-control">
                                  <?php foreach(current($location) as $key=>$loc): ?>
                                    <option value="<?=$loc?>"><?=$loc?></option>
                                   <?php endforeach; ?> 
                                 </select>
                              </div>
                              <div class="form-group">
                                 <select id="deliverable" name="deliverable" class="form-control">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                 <select id="payment_type" name="payment_type"  class="form-control" multiple>
                                    <option value="card">  Card</option>
                                    <option value="cash">  Cash</option> 
                                    <option value="check"> Check</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="left-wrapper left-wrapper2">
                              <div class="boost-wrapper">
                                 <h5 class="h5-tittle" style="color:#2A8AEA">Boost</h5>
                                 <div class="inner-wrapper">
                                    <div class="inner-box">
                                       <p class="para-desc">Free</p>
                                    </div>
                                    <div class="inner-box">
                                       <p class="para-desc">Top Search</p>
                                    </div>
                                    <div class="inner-box">
                                       <p class="para-desc">On homepage</p>
                                       <br>
                                       <p class="para-desc">0 available</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="detail-achat-box">
                                 <h5 class="h5-tittle" style="color:#2A8AEA">Resume</h5>
                                 
                                 <div class="inner-box">
                                 <br>
                                    <div class="row">
                                       <div class="col-md-5 col-xs-5">
                                          <p class="para-desc">Boost</p>
                                          <h6 class="h6-tittle">Gratuit</h6>
                                          <br>
                                          <p class="para-desc">Prix d'achat</p>
                                          <h6 class="h6-tittle">250 dt</h6>
                                          <br>
                                          <p class="para-desc">Nombre de reactivation</p>
                                          <h6 class="h6-tittle">1</h6>
                                       </div>
                                       <div class="col-md-7 col-xs-7">
                                          <p class="para-desc">Offre de depart</p>
                                          <h6 class="h6-tittle">100 dt</h6>
                                          <br>
                                          <p class="para-desc">Fin de l'enchere</p>
                                          <h6 class="h6-tittle">Mars 27,2020, 13:35</h6>
                                       </div>
                                       
                                    </div>
                                 </div>
                                 <br>
                                 <p class="para-desc" style="font-size:14px">By posting, you accept our <span style="color:#2A8AEA">Terms and Conditions.</span></p>
                              </div>
                           </div>
                        </div>

                        <div class="col-md-12 col-sm-12 text-right">
                           <ul class="list-inline">
                              <input type="hidden" name="action" value="product_add">
                              <input type="hidden" name="vendor_id" value="<?=current($userdata)->id?>">
                              <li><button type="button" class="back-btn prev-step">Back</button></li>
                              <li><button type="submit" class="login-btn next-step">Publish</button></li>
                           </ul>
                        </div>

                        </div>
                  </div>
                  <!-- tab pane-3 end -->
                  <div class="clearfix"></div>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
<!-- =============== section-2 end here ================= -->
<!-- Modal-1 -->
<div class="add-modal-wrapper">
   <div id="myModal1" class="modal fade" role="dialog">
      <div class="modal-dialog">

         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h5 class="h5-tittle">Ajuster l'enchere</h5>
            </div>
            <div class="modal-body">
               <div class="row">

                  <div class="col-md-5">
                     <div class="left-modal">

                        <h6 class="h6-tittle">Debut de l'offre</h6>
                        <div class="custom-radio-wrapper">
                           <label class="custom_radio">Debut immedit
                              <input type="radio" checked="checked" name="radio">
                              <span class="checkmark"></span>
                           </label>
                           <label class="custom_radio">Je chiosis la date de debut
                              <input type="radio" name="radio">
                              <span class="checkmark"></span>
                           </label>
                        </div>
                        <div class="date-time-wrapper">
                           <div class="row">

                              <div class="col-md-6 col-xs-6">
                                 <div id="datepicker" class="input-group date" data-date-format="mm/dd/yyyy">
                                    <span class="input-group-addon"><img src="img/calender.png" alt=""></span>
                                    <input class="form-control" type="text" />
                                 </div>
                                 <h6 class="h6-tittle">Debut de l'offre</h6>
                                 <div id="datepicker1" class="input-group date" data-date-format="mm/dd/yyyy">
                                    <span class="input-group-addon"><img src="img/calender.png" alt=""></span>
                                    <input class="form-control" type="text" />
                                 </div>
                              </div>
                              <div class="col-md-6 col-xs-6">
                                 <div class="form-group">
                                    <div class='input-group date' id='datetimepicker1'>
                                       <span class="input-group-addon">
                                          <img src="img/time.png" alt="">
                                       </span>
                                       <input type='text' class="form-control" />
                                    </div>
                                 </div>
                                 <br>
                                 <div class="form-group">
                                    <div class='input-group date' id='datetimepicker2'>
                                       <span class="input-group-addon">
                                          <img src="img/time.png" alt="">
                                       </span>
                                       <input type='text' class="form-control" />
                                    </div>
                                 </div>
                              </div>

                           </div>
                        </div>

                     </div>
                  </div>

                  <div class="col-md-7">
                     <div class="right-modal">

                        <h6 class="h6-tittle">Increment en CHF</h6>
                        <div class="increament-btn-group">
                           <button type="button" class="login-btn">0.10</button>
                           <button type="button" class="add-wishlist-btn">1</button>
                           <button type="button" class="add-wishlist-btn">2</button>
                        </div>
                        <div class="toggle-switch-box">
                           <label class="switch">
                              <input type="checkbox" checked>
                              <span class="slider round"></span>
                           </label>
                           <p class="para-desc">Reactivation automatique</p>
                        </div>
                        <h6 class="h6-tittle">Nombre de reactivations</h6>

                        <div class="increament-btn-group">
                           <button type="button" class="login-btn">1x</button>
                           <button type="button" class="add-wishlist-btn">2x</button>
                           <button type="button" class="add-wishlist-btn">3x</button>
                           <button type="button" class="add-wishlist-btn">4x</button>
                           <button type="button" class="add-wishlist-btn">5x</button>
                        </div>

                        <div class="desc-wrapper">
                           <span>i</span>
                           <p class="para-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text</p>
                        </div>

                     </div>
                  </div>
                  
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="login-btn">Modifier</button>
            </div>
         </div>

      </div>
   </div>
</div>

<!-- Modal-2 -->
<div class="add-modal-wrapper add-modal-wrapper2">
   <div id="myModal2" class="modal fade" role="dialog">
      <div class="modal-dialog">

         <!-- Modal content-->
         <div class="modal-content">
         <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h5 class="h5-tittle">Ajuster l'enchere</h5>
            </div>
            <div class="modal-body">
               <div class="row">

                  <div class="col-md-12">
                     <div class="left-modal">
                        
                        <h6 class="h6-tittle">Quantite</h6>
                        <div class="input-group">
    <!-- Bootstrap core CSS -->
                           <span class="input-group-btn">
                              <button type="button" class="couter_btn btn-number" data-type="minus" data-field="quant[1]">
                                 --
                              </button>
                           </span>
                           <input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
                           <span class="input-group-btn">
                              <button type="button" class="couter_btn btn-number" data-type="plus" data-field="quant[1]">
                                 +
                              </button>
                           </span>
                        </div>
                        <h6 class="h6-tittle">Debut de l'offre</h6>
                        <div class="custom-radio-wrapper">
                           <label class="custom_radio">Debut immedit
                              <input type="radio" checked="checked" name="radio">
                              <span class="checkmark"></span>
                           </label>
                           <label class="custom_radio">Je chiosis la date de debut
                              <input type="radio" name="radio">
                              <span class="checkmark"></span>
                           </label>
                        </div>
                        <h6 class="h6-tittle">Quantite</h6>
                        <div class="input-group">
                           <span class="input-group-btn">
                              <button type="button" class="couter_btn btn-number" data-type="minus" data-field="quant[1]">
                                 --
                              </button>
                           </span>
                           <input type="text" name="quant[1]" class="form-control input-number text-center" value="10" min="10" max="100">
                           <span class="input-group-btn">
                              <button type="button" class="couter_btn btn-number" data-type="plus" data-field="quant[1]">
                                 +
                              </button>
                           </span>
                        </div>
                        <br>
                        <p class="para-desc">L'offre se termine samedi 04 avril a 16:34</p>
                        <div class="toggle-switch-box">
                           <label class="switch">
                              <input type="checkbox" checked>
                              <span class="slider round"></span>
                           </label>
                           <p class="para-desc">Reactivation automatique</p>
                        </div>
                        <h6 class="h6-tittle">Nombre de reactivations</h6>

                        <div class="increament-btn-group">
                           <button type="button" class="add-wishlist-btn login-btn">1x</button>
                           <button type="button" class="add-wishlist-btn">2x</button>
                           <button type="button" class="add-wishlist-btn">3x</button>
                           <button type="button" class="add-wishlist-btn">4x</button>
                           <button type="button" class="add-wishlist-btn">5x</button>
                           <button type="button" class="add-wishlist-btn">Jusqua a epuisement</button>
                        </div>

                        <div class="desc-wrapper">
                           <span>i</span>
                           <p class="para-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text</p>
                        </div>

                     </div>
                  </div>
                  
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="login-btn">Enregistrer</button>
            </div>
         </div>

      </div>
   </div>
</div>

<!-- jQuery -->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>


 
    <!-- Your custom scripts -->
    <script type="text/javascript">
    $(document).ready(function () {

    
     var steps = {isStep1Ready : false, isStep2Ready : false, isStep3Ready : false};
      
      changeHandler1 = function(){
         var count = 0;
         if($('#title').val()!=''){
            count++;
         }
         if($('#categories').val()!=''){
            count++;
         }
         if($('#description').val()!=''){
            count++;
         }
         let p = $('#upload_imgs');
         if($('#upload_imgs').get(0).files.length>0)
         {
            count++
         }
         if(count==4)
         {
            steps.isStep1Ready = true;
         }
         else
         {
            steps.isStep1Ready = false;
         }
        enabler();
      };
      changeHandler2 = function(){
         var count = 0;
         if($('#base_price').val()!=''){
            count++;
         }
         if($('#base_count').val()!=''){
            count++;
         }
         if(count>=2)
         {
            steps.isStep2Ready = true;
         }
         else
         {
            steps.isStep2Ready = false;
         }
        enabler();
      };
     enabler= function(){
         if(steps.isStep1Ready==true)
         {
            $('#step2btn').removeAttr('disabled');
         }
         else
         {
            $('#step2btn').attr('disabled',true); 
         }
         if(steps.isStep2Ready==true)
         {
           $('#step3btn').removeAttr('disabled');
         }
         else
         {
           $('#step3btn').attr('disabled',true); 
         }
     }
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {
        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {
         var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });


   // $('.btn-number').click(function(e) {
   //      e.preventDefault();

   //      fieldName = $(this).attr('data-field');
   //      type = $(this).attr('data-type');
   //      var input = $("input[name='" + fieldName + "']");
   //      var currentVal = parseInt(input.val());
   //      if (!isNaN(currentVal)) {
   //          if (type == 'minus') {

   //              if (currentVal > input.attr('min')) {
   //                  input.val(currentVal - 1).change();
   //              }
   //              if (parseInt(input.val()) == input.attr('min')) {
   //                  $(this).attr('disabled', true);
   //              }

   //          } else if (type == 'plus') {

   //              if (currentVal < input.attr('max')) {
   //                  input.val(currentVal + 1).change();
   //              }
   //              if (parseInt(input.val()) == input.attr('max')) {
   //                  $(this).attr('disabled', true);
   //              }

   //          }
   //      } else {
   //          input.val(0);
   //      }
   //  });
    $('.input-number').focusin(function() {
        $(this).data('oldValue', $(this).val());
    });
    $('.couter_btn').click(function(){
      var _that = $(this);
      var _parent = _that.closest('.input-group');
      var _valueEle = _parent.find('input[type=text]')
      var p = parseInt(_valueEle.val());
      
      console.log(parseInt(_valueEle.val()));

      if(_that.attr('data-type')=='plus'){
         _valueEle.val(parseInt(_valueEle.val())+1);
      }
      else if(_that.attr('data-type')=='minus')
      {
         if(_valueEle.val()==1)
         {
            alert('Value must be greater then 1');            
         }
         else
         {
            _valueEle.val(parseInt(_valueEle.val())-1);
         }
      }
    
    });
    $(".input-number").keydown(function(e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
            (e.keyCode == 65 && e.ctrlKey === true) ||
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}



</script>


<script>
var map;
function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 8
  });
}  
$(document).ready(function(){

 $('#uploadForm').submit(function(e){
   e.preventDefault(); 
   $("#uploadForm").ajaxSubmit({url: base_url+'/api', type: 'post',success:function(response){

      response = JSON.parse(response);
      if(response.status=='success')
      {
         window.location.href = base_url+'/profile-dashboard';
      }
      else
      {
         alert('NHP');
      }
   },error:function(){

   }});
 });
 $('#governate').change(function(){
   var _that = $(this);
   if(_that.val()!='')
   {
      $.ajax({method:'POST',url:base_url+'/api',data:{action:'get_deligates',key:_that.val()}}).done(function(response){
         response = JSON.parse(response);
         if(response.status=='success')
         {
            var data = response.data;
            var html = '';
            $.each(data,function(index,value){
               html += '<option value="'+value+'">'+value+'</option>';
            });
           $('#deligates').html(html);
         }
      });
   }
 });
 setupStateMessage = function(){
   var p = $('#state').val();
   p = parseInt(p)-1;
   $('.state-message').css('display','none');
   $('.state-message').eq(p).css('display','block');
 }
 setupStateMessage();
 $('.btn-condition').click(function(){
   var _that = $(this);
   var _v = _that.attr('data-state');
   $('.btn-condition').removeClass('login-btn').addClass('add-wishlist-btn');
   _that.addClass('login-btn').removeClass('add-wishlist-btn');   
   $('#state').val(_v);
   setupStateMessage();
 });
 $('#categories').change(function(e){
    var _that = $(this);
    var  p = _that.val();
    $.ajax({
       url:base_url+'/api',
       method:'POST',
       data:{
         action:'get_subcategory',
         category_id:p
       }
    }).done(function(response){
      response = JSON.parse(response);
      if(response.status=='success')
      {
         let data = response.data;
         $option = '<option>Select Sub-category</option>';
         for(var $i=0;$i<data.length;$i++)
         {  let subcat = data[$i];
            $option += '<option value="'+subcat.id+'">'+subcat.category_name+'</option>';
         }
         $('#sub_categories').html($option);
       }
      else
      {
         alert('Something went wrong, Please refresh and try again!');
      }
    });
 })

});
 </script>

<script>
   var imgUpload = document.getElementById('upload_imgs')
  , imgPreview = document.getElementById('img_preview')
  , imgUploadForm = document.getElementById('img-upload-form')
  , totalFiles
  , previewTitle
  , previewTitleText
  , img;

imgUpload.addEventListener('change', previewImgs, false);
// imgUploadForm.addEventListener('submit', function (e) {
//   e.preventDefault();
//   alert('Images Uploaded! (not really, but it would if this was on your website)');
// }, false);

function previewImgs(event) {
  totalFiles = imgUpload.files.length;
  
  if(!!totalFiles) {
    imgPreview.classList.remove('quote-imgs-thumbs--hidden');
    previewTitle = document.createElement('p');
    previewTitle.style.fontWeight = 'bold';
    previewTitleText = document.createTextNode(totalFiles + ' Total Images Selected');
    previewTitle.appendChild(previewTitleText);
    imgPreview.appendChild(previewTitle);
  }
  
  for(var i = 0; i < totalFiles; i++) {
    img = document.createElement('img');
    img.src = URL.createObjectURL(event.target.files[i]);
    img.classList.add('img-preview-thumb');
    imgPreview.appendChild(img);
  }
}
</script>
<script>
$(document).ready(function() {
    $('#datePicker')
        .datepicker({
            format: 'mm/dd/yyyy'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#eventForm').formValidation('revalidateField', 'date');
        });

    $('#eventForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'The name is required'
                    }
                }
            },
            date: {
                validators: {
                    notEmpty: {
                        message: 'The date is required'
                    },
                    date: {
                        format: 'MM/DD/YYYY',
                        message: 'The date is not a valid'
                    }
                }
            }
        }
    });
});
</script>