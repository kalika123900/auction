<!-- =============== section-1 start here =============== -->
<section class="courses-section1">
   <div class="container-fluid">
      <div class="mid-container">
         <div class="row">
            <div class="col-xl-7 col-lg-8 col-md-8">
               <!-- for mobile veiw -->
               <div class="mb-video-box">
                  <div class="embed-responsive embed-responsive-16by9">
                     <iframe class="embed-responsive-item" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
               </div>
               <!-- for mobile veiw -->
               <h2 class="h2-tittle"><?=$course->title?></h2>
               <p class="para-desc"><?=$course->short_description?></p>
               <div class="rate-wrapper">
                  <div class="rating-box">4.9</div>
                  <div class="stars"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                  </div>
                  <p style="display: none" class="para-desc"><img src="img/user.png" alt=""><span>0 Enerolled</span></p>
               </div>
               <div class="span-box"><span>Created by</span> <span class="text-white"><?=$course->created_by?></span> 
               <span>Created at <?=date('Y, M d',strtotime($course->created_at))?></span></div>
                <!-- Nav tabs -->
               <div class="tab-menu-wrapper">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#overview">Overview</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#curriculum">Curriculum</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#announcement">Announcement</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#review">Reviews</a>
                     </li>
                  </ul>
               </div>
                <!-- Nav tabs end -->
            </div>
            <!-- right side content -->
            <div class="col-xl-5 col-lg-4 col-md-4">
               <div class="css1-wt-wrapper">
                  <div class="css1-wt-wrapper-head">
                     <a href="#" class="btn ws-btn"><i class="far fa-heart"></i> <span>Wishlist</span></a>
                     <a href="#" class="btn ws-btn"><i class="fas fa-share-alt"></i> <span>Share</span></a>
                  </div>
               </div>
            </div>
            <!-- right side content end -->
         </div>
      </div>
   </div>
</section>
<!-- =============== section-1 end here ================= -->
<!-- =============== section-2 start here =============== -->
<section class="courses-section2">
   <div class="container-fluid">

      <div class="mid-container">
         <div class="row">
            <div class="col-md-7">
               <!-- Tab panes -->
               <div class="tab-content">
                  <!-- tab pane 1 -->
                  <div id="overview" class="tab-pane active"><br>
                     <h4 class="h4-tittle">Description</h4>
                     <?=$course->detail_description?>
                  </div>
                  <!-- tab pane 1 end -->
                  <!-- tab pane 2 -->
                  <div id="curriculum" class="tab-pane fade"><br>
                     <!--Accordion wrapper 1 -->
                     <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                        <!-- Accordion card 1-->
                        <div class="card">
                        <!-- Card header -->
                           <div class="card-header" role="tab" id="heading1">
                              <a data-toggle="collapse" data-parent="#accordionEx" href="#collapse1" aria-expanded="true"
                                 aria-controls="collapse1">
                                 <h5 class="h5-tittle mb-0">HTML Introduction <i class="fas fa-angle-down rotate-icon"></i></h5>
                              </a>
                           </div>

                           <!-- Card body -->
                           <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading1"
                              data-parent="#accordionEx">
                              <div class="card-body">
                                 <div class="row">
                                    <div class="col-md-8 col-xs-8">
                                       <a href="#"><p class="para-desc"><i class="fab fa-youtube"></i>What is HTML</p></a>
                                       <a href="#"><p class="para-desc"><i class="fab fa-youtube"></i>What is a Web page?</p></a>
                                       <a href="#"><p class="para-desc"><i class="fab fa-youtube"></i>Your First Web Page 
                                          <span>preview</span></p></a>
                                       <a href="#"><p class="para-desc"><i class="fab fa-youtube"></i>Brain Streak</p></a>
                                    </div>
                                    <div class="col-md-4 col-xs-4 text-right">
                                       <p class="para-desc">23 min</p>
                                       <p class="para-desc">23 min</p>
                                       <p class="para-desc">23 min</p>
                                       <p class="para-desc">23 min</p>
                                    </div>
                                 </div>
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
                                 <h5 class="h5-tittle mb-0">Your First Webpage <i class="fas fa-angle-down rotate-icon"></i></h5>
                              </a>
                           </div>

                           <!-- Card body -->
                           <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2"
                              data-parent="#accordionEx">
                              <div class="card-body">
                                 <div class="row">
                                    <div class="col-md-8 col-xs-8">
                                       <a href="#"><p class="para-desc"><i class="fab fa-youtube"></i>Headings</p></a>
                                       <a href="#"><p class="para-desc"><i class="fab fa-youtube"></i>Paragraphs</p></a>
                                       <a href="#"><p class="para-desc"><i class="fab fa-youtube"></i>Emphasis and Strong Tag
                                          <span>preview</span></p></a>
                                       <a href="#"><p class="para-desc"><i class="fab fa-youtube"></i>Brain Streak</p></a>
                                       <a href="#"><p class="para-desc"><i class="fab fa-youtube"></i>Live Preview Feature</p></a>
                                    </div>
                                    <div class="col-md-4 col-xs-4 text-right">
                                       <p class="para-desc">23 min</p>
                                       <p class="para-desc">23 min</p>
                                       <p class="para-desc">23 min</p>
                                       <p class="para-desc">23 min</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Accordion card 2 end -->

                        <!-- Accordion card 3 -->
                        <div class="card">
                           <!-- Card header -->
                           <div class="card-header" role="tab" id="heading3">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse3"
                                 aria-expanded="false" aria-controls="collapse3">
                                 <h5 class="h5-tittle mb-0">Some Special Tags<i class="fas fa-angle-down rotate-icon"></i> </h5>
                              </a>
                           </div>

                           <!-- Card body -->
                           <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3"
                              data-parent="#accordionEx">
                              <div class="card-body">
                                 <div class="row">
                                    <div class="col-md-8 col-xs-8">
                                       <a href="#"><p class="para-desc"><i class="fab fa-youtube"></i>The paragraph tag</p></a>
                                       <a href="#"><p class="para-desc"><i class="fab fa-youtube"></i>The break tag 
                                          <span>preview</span></p></a>
                                       <a href="#"><p class="para-desc"><i class="fab fa-youtube"></i>Headings in HTML</p></a>
                                       <a href="#"><p class="para-desc"><i class="fab fa-youtube"></i>Bold, Italics Underline</p></a>
                                    </div>
                                    <div class="col-md-4 col-xs-4 text-right">
                                       <p class="para-desc">23 min</p>
                                       <p class="para-desc">23 min</p>
                                       <p class="para-desc">23 min</p>
                                       <p class="para-desc">23 min</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Accordion card 3 end -->

                        <!-- Accordion card 4 -->
                        <div class="card">
                           <!-- Card header -->
                           <div class="card-header" role="tab" id="heading4">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse4"
                                 aria-expanded="false" aria-controls="collapse4">
                                 <h5 class="h5-tittle mb-0">HTML Advance Level<i class="fas fa-angle-down rotate-icon"></i> </h5>
                              </a>
                           </div>

                           <!-- Card body -->
                           <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4"
                              data-parent="#accordionEx">
                              <div class="card-body">
                                 <div class="row">
                                    <div class="col-md-8 col-xs-8">
                                       <a href="#"><p class="para-desc"><i class="fab fa-youtube"></i>Something to Ponder</p></a>
                                       <a href="#"><p class="para-desc"><i class="fab fa-youtube"></i>Tables</p></a>
                                       <a href="#"><p class="para-desc"><i class="fab fa-youtube"></i>HTML Entities
                                          <span>preview</span></p></a>
                                       <a href="#"><p class="para-desc"><i class="fab fa-youtube"></i>HTML Iframes</p></a>
                                       <a href="#"><p class="para-desc"><i class="fab fa-youtube"></i>Some important things</p></a>
                                    </div>
                                    <div class="col-md-4 col-xs-4 text-right">
                                       <p class="para-desc">23 min</p>
                                       <p class="para-desc">23 min</p>
                                       <p class="para-desc">23 min</p>
                                       <p class="para-desc">23 min</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Accordion card 4 end -->

                     </div>
                     <!-- Accordion wrapper 1 end -->

                  </div>
                  <!-- tab pane 2 end -->
                  <!-- tab pane 3 -->
                  <div id="faq" class="tab-pane fade"><br>
                     <!--Accordion wrapper 2 -->
                     <div class="accordion md-accordion" id="accordionEx2" role="tablist" aria-multiselectable="true">

                        <!-- Accordion card 1-->
                        <div class="card">
                        <!-- Card header -->
                           <div class="card-header" role="tab" id="heading5">
                              <a data-toggle="collapse" data-parent="#accordionEx2" href="#collapse5" aria-expanded="true"
                                 aria-controls="collapse5">
                                 <h5 class="h5-tittle mb-0">HTML Introduction <i class="fas fa-angle-down rotate-icon"></i></h5>
                              </a>
                           </div>

                           <!-- Card body -->
                           <div id="collapse5" class="collapse show" role="tabpanel" aria-labelledby="heading5"
                              data-parent="#accordionEx2">
                              <div class="card-body">
                                 <p class="para-desc">The primary goal of this quick start guide is to introduce you to Unreal 
                                    Engine 4`s (UE4) development environment. By the end of this guide, you`ll know how to set 
                                    up and develop C++ Projects in UE4. This guide shows you how to create a new Unreal Engine 
                                    project, add a new C++ class to it, compile the project, and add an instance of a new class 
                                    to your level. </p>
                                 <p class="para-desc">By the time you reach the end of this guide, you`ll be able to see your 
                                    programmed Actor floating above a table in the level.</p>
                              </div>
                           </div>
                        </div>
                        <!-- Accordion card 1 end-->

                        <!-- Accordion card 2 -->
                        <div class="card">
                           <!-- Card header -->
                           <div class="card-header" role="tab" id="heading6">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse6"
                                 aria-expanded="false" aria-controls="collapse6">
                                 <h5 class="h5-tittle mb-0">Your First Webpage <i class="fas fa-angle-down rotate-icon"></i></h5>
                              </a>
                           </div>

                           <!-- Card body -->
                           <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6"
                              data-parent="#accordionEx2">
                              <div class="card-body">
                                 <p class="para-desc">The primary goal of this quick start guide is to introduce you to Unreal 
                                    Engine 4`s (UE4) development environment. By the end of this guide, you`ll know how to set 
                                    up and develop C++ Projects in UE4. This guide shows you how to create a new Unreal Engine 
                                    project, add a new C++ class to it, compile the project, and add an instance of a new class 
                                    to your level. </p>
                                 <p class="para-desc">By the time you reach the end of this guide, you`ll be able to see your 
                                    programmed Actor floating above a table in the level.</p>
                              </div>
                           </div>
                        </div>
                        <!-- Accordion card 2 end -->

                        <!-- Accordion card 3 -->
                        <div class="card">
                           <!-- Card header -->
                           <div class="card-header" role="tab" id="heading7">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse7"
                                 aria-expanded="false" aria-controls="collapse7">
                                 <h5 class="h5-tittle mb-0">Some Special Tags<i class="fas fa-angle-down rotate-icon"></i> </h5>
                              </a>
                           </div>

                           <!-- Card body -->
                           <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading7"
                              data-parent="#accordionEx2">
                              <div class="card-body">
                                 <p class="para-desc">The primary goal of this quick start guide is to introduce you to Unreal 
                                    Engine 4`s (UE4) development environment. By the end of this guide, you`ll know how to set 
                                    up and develop C++ Projects in UE4. This guide shows you how to create a new Unreal Engine 
                                    project, add a new C++ class to it, compile the project, and add an instance of a new class 
                                    to your level. </p>
                                 <p class="para-desc">By the time you reach the end of this guide, you`ll be able to see your 
                                    programmed Actor floating above a table in the level.</p>
                              </div>
                           </div>
                        </div>
                        <!-- Accordion card 3 end -->

                        <!-- Accordion card 4 -->
                        <div class="card">
                           <!-- Card header -->
                           <div class="card-header" role="tab" id="heading8">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse8"
                                 aria-expanded="false" aria-controls="collapse8">
                                 <h5 class="h5-tittle mb-0">HTML Advance Level<i class="fas fa-angle-down rotate-icon"></i> </h5>
                              </a>
                           </div>

                           <!-- Card body -->
                           <div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="heading8"
                              data-parent="#accordionEx2">
                              <div class="card-body">
                                 <p class="para-desc">The primary goal of this quick start guide is to introduce you to Unreal 
                                    Engine 4`s (UE4) development environment. By the end of this guide, you`ll know how to set 
                                    up and develop C++ Projects in UE4. This guide shows you how to create a new Unreal Engine 
                                    project, add a new C++ class to it, compile the project, and add an instance of a new class 
                                    to your level. </p>
                                 <p class="para-desc">By the time you reach the end of this guide, you`ll be able to see your 
                                    programmed Actor floating above a table in the level.</p>
                              </div>
                           </div>
                        </div>
                        <!-- Accordion card 4 end -->

                     </div>
                     <!-- Accordion wrapper 2 end -->
                  </div>
                  <!-- tab pane 3 end -->
                  <!-- tab pane 4 -->
                  <div id="announcement" class="tab-pane fade"><br>
                     <h4 class="h4-tittle">Announcement</h4>

                     <div class="row mt-3">
                        <div class="col-xl-2 col-lg-2 col-md-3 col-xs-4">
                           <div class="pf-img-box">
                              <img src="img/instructor-slide.png" alt="">
                           </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-9 col-xs-8">
                           <div class="pf-content-box">
                              <h6 class="h6-tittle">Stella Johnson</h6>
                              <p class="para-desc">Instructor <span>1 year ago</span></p>
                           </div>
                        </div>
                     </div>

                     <div class="announcement-content">
                        <h4 class="h4-tittle">Nam liber tempor cum soluta nobis eleifend 
                           option congue imperdiet doming id quod mazim placerat facer possim assum.</h4>
                        <p class="para-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                           exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
                           in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur 
                           sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est 
                           laborum.</p>
                        <p class="para-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
                           nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
                           enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut 
                           aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend option congue 
                           nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit 
                           amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet 
                           dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
                           tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                     </div>

                  </div>
                  <!-- tab pane 4 end -->
                  <!-- tab pane 5 -->
                  <div id="review" class="tab-pane fade"><br>

                     <h4 class="h4-tittle">Student Feedbacck</h4>
                     <div class="row">

                        <div class="col-xl-2 col-lg-3 col-md-3">
                           <!-- circular progress bar -->
                           <div class="set-size charts-container">
                              <div class="pie-wrapper progress-75 style-2">
                                 <span class="label">4.2</span>
                                 <div class="pie">
                                    <div class="left-side half-circle"></div>
                                    <div class="right-side half-circle"></div>
                                 </div>
                                 <div class="shadow"></div>
                              </div>
                           </div>
                           <!-- circular progress bar -->
                           <div class="stars"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i> <i class="far fa-star"></i>
                           </div>
                        </div>

                        <div class="col-xl-8 col-lg-6 col-md-6 col-xs-8">
                           <div class="progress md-progress">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <div class="progress md-progress">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <div class="progress md-progress">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <div class="progress md-progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <div class="progress md-progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>

                        <div class="col-xl-2 col-lg-3 col-md-3 col-xs-4">
                           <div class="stars2"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i> <i class="fas fa-star"></i> <span>95%</span>
                           </div>
                           <div class="stars2 stars3"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i> <i class="fas fa-star"></i> <span>80%</span>
                           </div>
                           <div class="stars2 stars4"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i> <i class="fas fa-star"></i> <span>60%</span>
                           </div>
                           <div class="stars2 stars5"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i> <i class="fas fa-star"></i> <span>30%</span>
                           </div>
                           <div class="stars2 stars6"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i> <i class="fas fa-star"></i> <span>25%</span>
                           </div>
                        </div>
                     </div>
                     <br>

                     <h4 class="h4-tittle">Reviews <span>(4610)</span></h4>
                     <div class="row mt-3">
                        <div class="col-xl-2 col-lg-2 col-md-3 col-xs-3">
                           <div class="pf-img-box">
                              <img src="img/instructor-slide.png" alt="">
                           </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-7 col-xs-7">
                           <div class="pf-content-box">
                              <h6 class="h6-tittle">Stella Johnson</h6>
                              <p class="para-desc">Student</p>
                           </div>
                        </div>
                        <div class="col-xl-1 col-lg-1 col-md-2 col-xs-2">
                           <div class="st-rating-box">
                              <p class="para-desc">5 <i class="fas fa-star"></i></p>
                           </div>
                        </div>
                     </div>
                     <div class="row mt-3">
                        <div class="col-md-3 col-lg-2"></div>
                        <div class="col-md-9 col-lg-10">
                           <p class="para-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
                              nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim 
                              veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea 
                              commodo consequat.</p>
                           <p class="para-desc">Was this review helpful? <i class="far fa-thumbs-up"></i> <span>163</span>
                           <i class="far fa-thumbs-down"></i> <span>18</span> Report</p>
                        </div>
                     </div>

                     <div class="row mt-3">
                        <div class="col-xl-2 col-lg-2 col-md-3 col-xs-3">
                           <div class="pf-img-box">
                              <img src="img/instructor-slide.png" alt="">
                           </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-7 col-xs-7">
                           <div class="pf-content-box">
                              <h6 class="h6-tittle">Stella Johnson</h6>
                              <p class="para-desc">Student</p>
                           </div>
                        </div>
                        <div class="col-xl-1 col-lg-1 col-md-2 col-xs-2">
                           <div class="st-rating-box">
                              <p class="para-desc">5 <i class="fas fa-star"></i></p>
                           </div>
                        </div>
                     </div>
                     <div class="row mt-3">
                        <div class="col-md-3 col-lg-2"></div>
                        <div class="col-lg-10 col-md-9">
                           <p class="para-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
                              nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim 
                              veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea 
                              commodo consequat.</p>
                           <p class="para-desc">Was this review helpful? <i class="far fa-thumbs-up"></i> <span>163</span>
                           <i class="far fa-thumbs-down"></i> <span>18</span> Report</p>
                        </div>
                     </div>

                     <div class="row mt-3">
                        <div class="col-xl-2 col-lg-2 col-md-3 col-xs-3">
                           <div class="pf-img-box">
                              <img src="img/instructor-slide.png" alt="">
                           </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-7 col-xs-7">
                           <div class="pf-content-box">
                              <h6 class="h6-tittle">Stella Johnson</h6>
                              <p class="para-desc">Student</p>
                           </div>
                        </div>
                        <div class="col-xl-1 col-lg-1 col-md-2 col-xs-2">
                           <div class="st-rating-box">
                              <p class="para-desc">5 <i class="fas fa-star"></i></p>
                           </div>
                        </div>
                     </div>
                     <div class="row mt-3">
                        <div class="col-md-3 col-lg-2"></div>
                        <div class="col-lg-10 col-md-9">
                           <p class="para-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
                              nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim 
                              veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea 
                              commodo consequat.</p>
                           <p class="para-desc">Was this review helpful? <i class="far fa-thumbs-up"></i> <span>163</span>
                           <i class="far fa-thumbs-down"></i> <span>18</span> Report</p>
                        </div>
                     </div>

                  </div>
                  <!-- tab pane 5 end -->
               </div>
               <!-- Tab panes end-->
            </div>

            <!-- right content -->
            <div class="col-md-5">

               <div class="css2-wt-wrapper">
                  <div class="css2-wt-wrapper-content">
                     <?php  if($course->featured_video!=''): ?>
                     <div class="video-box">
                        <div class="embed-responsive embed-responsive-16by9">
                           <video controls src="<?=UPLOADS.$course->featured_video?>" style="width:100%">
                           </video>
                        </div>
                     </div>
                     <?php endif; ?>
                     <div class="content-box">
                        <h3 class="h3-tittle">
                     <?php if($course->sale_price==0): ?> $<?=$course->price?> <?php else: ?>
                           $<?=$course->sale_price?>  
                           <span><del>$<?=$course->price?></del></span>
                     <?php endif; ?>
                        </h3>
                        <p style="display:none" class="para-desc">! Hour left this price</p>
                        <div class="btn-group">
                           <a href="<?=site_url()?><?=$course->slug?>/checkout/add/" class="read-more-btn">Add to cart</a>
                           <button type="button" class="buy-now-btn">Buy Now</button>
                        </div>
                        <h6 class="h6-tittle">This Course Include</h6>
                        <div class="row">
                           <div class="col-md-6 col-xs-6">
                              <p class="para-desc"> <i class="far fa-play-circle"></i> <?=$course->video_hours?> hours video</p>
                              <p class="para-desc"> <i class="far fa-file-alt"></i> <?=$course->numberof_article?> Article</p>
                             
                           </div>
                           <div class="col-md-6 col-xs-6">
                              <p class="para-desc"> <img src="<?=ASSETS?>images/medal.png" alt="">Certificate</p>
                              <p class="para-desc"> <i class="far fa-clock"></i> Lifetime access</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="ft-mb-buying-box">
                  <div class="btn-group">
                     <h3 class="h3-tittle">$12.99</h3>
                     <button type="button" class="read-more-btn">Add to cart</button>
                     <button type="button" class="buy-now-btn">Buy Now</button>
                  </div>
               </div>
            </div>
            <!-- right content end -->
         </div>
      </div>

   </div>
</section>
<!-- =============== section-2 end here ================= -->