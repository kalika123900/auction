
  <link rel="stylesheet" href="<?=ASSETS?>css/bootstrap.min.css.map">
  <link rel="stylesheet" href="<?=ASSETS?>css/bootstrap.css.map">
  <link rel="stylesheet" href="<?=ASSETS?>css/bootstrap.min.css">

  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="<?=ASSETS?>css/mdb.min.css">

  <!-- slick slider styles -->
  <link rel="stylesheet" href="<?=ASSETS?>css/slick-theme.css">
  <link rel="stylesheet" href="<?=ASSETS?>css/slick.css">

  <!-- Your custom styles -->
  <link rel="stylesheet" href="<?=ASSETS?>css/style.css">
  <link rel="stylesheet" href="<?=ASSETS?>css/responsive.css">
<!-- =============== section start here =============== -->
<section class="course-view-section">
   <div class="container-fluid">
      <div class="mid-container">

         <div class="row mb-3">
            <div class="col-lg-6 col-md-6 col-xs-7">
               <h4 class="h4-tittle">Courses to get you started</h4>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-5 text-right">
            
               <div class="list-grid-box">
                  <div class="filter-box">
                     <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal_1">
                        <img src="img/filter.png" alt="">
                     </a>
                  </div>
                  <div class="pull-right">
                     <div class="btn-group">
                        <button class="grid-btn" id="grid">
                           <i class="fas fa-th"></i>
                        </button>
                        <button class="list-btn" id="list">
                           <i class="fas fa-list"></i>
                        </button>
                     </div>
                  </div>
                  <div class="filter-select-box">
                     <select id="course_filters">
                        <option value="0">Newest</option>
                        <option value="1">Popular</option>
                        <option value="2">Free</option>
                        <option value="3">Premium</option>
                     </select>
                  </div>
               </div>
            </div>
         </div> 

         <div id="products" class="row view-group">
         <?php foreach($course as $item):?>
            <div class="item col-lg-3 col-md-4">
               <div class="thumbnail card">
                  <div class="img-event">
                        <img class="group list-group-image img-fluid" src="<?=ASSETS.'/images/'.$item->featured_image?>" alt="" />
                  </div>
                  <div class="caption card-body">
                     <h4 class="group card-title inner list-group-item-heading h4-tittle">
                        <?=$item->title?></h4>
                     <div class="bs-box">Bestseller</div>
                     <p class="para-desc para-desc1">Language</p>
                     <h6 class="list-star"><i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                      <i class="fas fa-star"></i><i class="fas fa-star"></i> <i class="fas fa-star"></i>
                     </h6>
                     <p class="para-desc para-desc2"><span>8.5 total hours</span> <span>.</span> 
                     <span>91 lectures </span> <span>.</span> <span>Intermediate Leve</span></p>
                     <p class="para-desc"><?=$item->short_description?>.</p>
                     <div class="price-box">$19.99</div>
                  </div>
                  <div class="card-footer">
                     <h3 class="h3-tittle">$720</h3>
                     <p class="para-desc"><del>$120,048</del></p>
                     <h6><i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                        <i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                        <i class="fas fa-star"></i></h6>
                  </div>
               </div>
            </div>
            <?php endforeach;?>

         </div>
         <!-- pagination -->
         <div class="pagination-wrapper">
            <nav aria-label="Page navigation example">
               <ul class="pagination pagination-circle pg-blue justify-content-center">
                  <li class="page-item disabled">
                     <a class="page-link waves-effect waves-effect" aria-label="Previous">
                     <img src="img/blue-back.png" alt="">
                     <span class="sr-only">Previous</span>
                     </a>
                  </li>
                  <li class="page-item active"><a class="page-link waves-effect waves-effect">1</a></li>
                  <li class="page-item"><a class="page-link waves-effect waves-effect">2</a></li>
                  <li class="page-item"><a class="page-link waves-effect waves-effect">3</a></li>
                  <li class="page-item"><a class="page-link waves-effect waves-effect">4</a></li>
                  <li class="page-item"><a class="page-link waves-effect waves-effect">5</a></li>
                  <li class="page-item">
                     <a class="page-link waves-effect waves-effect" aria-label="Next">
                     <img src="img/blue-next.png" alt="">
                     <span class="sr-only">Next</span>
                     </a>
                  </li>
               </ul>
            </nav>
         </div>
         <!-- pagination end -->
      </div> 
   </div>

   <!-- filter for list item -->
   <div class="l_filter_box">
       <h6 class="h6-tittle">Filetr By</h6>
       <!--Accordion wrapper 3 -->
       <div class="accordion md-accordion" id="accordionEx4" role="tablist" aria-multiselectable="true">

         <!-- Accordion card 1-->
         <div class="card">
         <!-- Card header -->
            <div class="card-header" role="tab" id="heading41">
               <a data-toggle="collapse" data-parent="#accordionEx4" href="#collapse41" aria-expanded="true" aria-controls="collapse41">
                  <h5 class="h5-tittle mb-0"> <i class="fas fa-angle-down rotate-icon"></i> Skill Level </h5>
               </a>
            </div>

            <!-- Card body -->
            <div id="collapse41" class="collapse show" role="tabpanel" aria-labelledby="heading41"
               data-parent="#accordionEx4">
               <div class="card-body">
                  <form>
                     <input type="radio" id="beginer" name="skill" value="beginer">
                     <label for="beginer">Beginer (25)</label><br>
                     <input type="radio" id="intermediate" name="skill" value="intermediate">
                     <label for="intermediate">Intermediate (32)</label><br>
                     <input type="radio" id="expert" name="skill" value="expert">
                     <label for="expert">Expert (12)</label>
                  </form> 
               </div>
            </div>
         </div>
         <!-- Accordion card 1 end-->

         <!-- Accordion card 2 -->
         <div class="card">
            <!-- Card header -->
            <div class="card-header" role="tab" id="heading42">
               <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx4" href="#collaps42"
                  aria-expanded="false" aria-controls="collapse42">
                  <h5 class="h5-tittle mb-0"> <i class="fas fa-angle-down rotate-icon"></i> Course Type </h5>
               </a>
            </div>

            <!-- Card body -->
            <div id="collapse42" class="collapse" role="tabpanel" aria-labelledby="heading42"
               data-parent="#accordionEx4">
               <div class="card-body">
                  <form>
                     <input type="radio" id="free" name="course" value="">
                     <label for="free">Free (42)</label><br>
                     <input type="radio" id="paid" name="course" value="">
                     <label for="paid">Paid</label><br>
                  </form> 
               </div>
            </div>
         </div>
         <!-- Accordion card 2 end -->

         <!-- Accordion card 3 -->
         <div class="card">
            <!-- Card header -->
            <div class="card-header" role="tab" id="heading43">
               <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx4" href="#collapse43"
                  aria-expanded="false" aria-controls="collapse43">
                  <h5 class="h5-tittle mb-0"> <i class="fas fa-angle-down rotate-icon"></i> Duration Time</h5>
               </a>
            </div>

            <!-- Card body -->
            <div id="collapse43" class="collapse" role="tabpanel" aria-labelledby="heading43"
               data-parent="#accordionEx4">
               <div class="card-body">
                  <form>
                     <input type="radio" id="hourse1" name="time" value="">
                     <label for="hourse1">+5 Hourse (23)</label><br>
                     <input type="radio" id="hourse2" name="time" value="">
                     <label for="hourse2">+10 Hourse (12)</label><br>
                     <input type="radio" id="hourse3" name="time" value="">
                     <label for="hourse3">+20 Hourse (5)</label><br>
                     <input type="radio" id="hourse3" name="time" value="">
                     <label for="hourse3">+30 Hourse (2)</label>
                  </form> 
               </div>
            </div>
         </div>
         <!-- Accordion card 3 end -->
      </div>
      <!-- Accordion wrapper 3 end -->

   </div>
</section>
<!-- =============== section end here ================= -->

<div class="filter-modal">
   <!-- Modal -->
   <div class="modal right fade" id="myModal_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
               <div class="modal-header">
                  <h4 class="h4-tittle">Filter By</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               </div>

               <div class="modal-body">
                  <!--Accordion wrapper 3 -->
                  <div class="accordion md-accordion" id="accordionEx3" role="tablist" aria-multiselectable="true">

                     <!-- Accordion card 1-->
                     <div class="card">
                     <!-- Card header -->
                        <div class="card-header" role="tab" id="heading9">
                           <a data-toggle="collapse" data-parent="#accordionEx3" href="#collapse9" aria-expanded="true" aria-controls="collapse9">
                              <h5 class="h5-tittle mb-0"> <i class="fas fa-angle-down rotate-icon"></i> Skill Level </h5>
                           </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse9" class="collapse show" role="tabpanel" aria-labelledby="heading9"
                           data-parent="#accordionEx3">
                           <div class="card-body">
                              <form>
                                 <input type="radio" id="beginer" name="skill" value="beginer">
                                 <label for="beginer">Beginer (25)</label><br>
                                 <input type="radio" id="intermediate" name="skill" value="intermediate">
                                 <label for="intermediate">Intermediate (32)</label><br>
                                 <input type="radio" id="expert" name="skill" value="expert">
                                 <label for="expert">Expert (12)</label>
                              </form> 
                           </div>
                        </div>
                     </div>
                     <!-- Accordion card 1 end-->

                     <!-- Accordion card 2 -->
                     <div class="card">
                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading10">
                           <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx3" href="#collapse10"
                              aria-expanded="false" aria-controls="collapse10">
                              <h5 class="h5-tittle mb-0"> <i class="fas fa-angle-down rotate-icon"></i> Course Type </h5>
                           </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse10" class="collapse" role="tabpanel" aria-labelledby="heading10"
                           data-parent="#accordionEx3">
                           <div class="card-body">
                              <form>
                                 <input type="radio" id="free" name="course" value="">
                                 <label for="free">Free (42)</label><br>
                                 <input type="radio" id="paid" name="course" value="">
                                 <label for="paid">Paid</label><br>
                              </form> 
                           </div>
                        </div>
                     </div>
                     <!-- Accordion card 2 end -->

                     <!-- Accordion card 3 -->
                     <div class="card">
                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading11">
                           <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx3" href="#collapse11"
                              aria-expanded="false" aria-controls="collapse11">
                              <h5 class="h5-tittle mb-0"> <i class="fas fa-angle-down rotate-icon"></i> Duration Time</h5>
                           </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse11" class="collapse" role="tabpanel" aria-labelledby="heading11"
                           data-parent="#accordionEx3">
                           <div class="card-body">
                              <form>
                                 <input type="radio" id="hourse1" name="time" value="">
                                 <label for="hourse1">+5 Hourse (23)</label><br>
                                 <input type="radio" id="hourse2" name="time" value="">
                                 <label for="hourse2">+10 Hourse (12)</label><br>
                                 <input type="radio" id="hourse3" name="time" value="">
                                 <label for="hourse3">+20 Hourse (5)</label><br>
                                 <input type="radio" id="hourse3" name="time" value="">
                                 <label for="hourse3">+30 Hourse (2)</label>
                              </form> 
                           </div>
                        </div>
                     </div>
                     <!-- Accordion card 3 end -->
                  </div>
                  <!-- Accordion wrapper 3 end -->
               </div>

         </div>
         <!-- modal-content -->
      </div>
      <!-- modal-dialog -->
   </div>
   <!-- modal -->
</div>



