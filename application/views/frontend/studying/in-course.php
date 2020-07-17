<style>
a.signup-btn{
   width: 100%;
   display: block;
   text-align: center;
}
</style>
<?php 
$course = $course[0];
$p = site_url($course->course_content); ?>
<section class="cvp-section cvp-section3">
    <div class="cvp-left-wrapper">
      <div class="left-wrapper">
            <div class="head-box">
                  <p class="para-desc">Notebook</p>
               </div>
               <div class="body-box">
                  <form action="" id="notesHandler" method="post">
                     <div class="inner-box">
                        <textarea name="notes" style="width:100%; height: 100%" id="notes"><?=$notes?></textarea>
                     </div>
                     <input type="hidden" name="action" value="saveNotes">
                     <input type="hidden" name="course" value="<?=$course->id?>">
                     <button class="signup-btn">Save</button>
                  </form>

                  <div class="quiz-area">
                     <p>Is your <strong>Course</strong> done? Are you Ready for <strong>Quiz</strong>?</p>
                     <a class="signup-btn" href="/start-quiz/<?=$course->slug?>">Start Quiz</a>
                  </div>
               </div>
      </div>
      
    </div>

   <div class="cvp-right-wrapper">
      <div class="body-wrapper">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"  src="<?=$p?>" frameborder="0" allowfullscreen></iframe>
          </div>
      </div>
   </div>   
</section>
<section class="cvp-section3" style="width: 100%">
   <div class="container-fluid">
      <div class="row">
         <!-- left wrapper -->
  
         <!-- left wrapper end -->
         <!-- right wrapper -->
         <div class="col-md-12">
            <div class="right-wrapper">
               <div class="head-box">
                   <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item" style="width: auto!important">
                        <a class="nav-link active" data-toggle="tab" href="#overview">Overview</a>
                     </li>
                     <li class="nav-item" style="width: auto!important">
                        <a class="nav-link" data-toggle="tab" href="#curriculum">Curriculum</a>
                     </li>
                     <!-- <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#faq">FAQ</a>
                     </li> -->
                     <li class="nav-item" style="width: auto!important">
                        <a class="nav-link" data-toggle="tab" href="#review">Reviews</a>
                     </li>
                     <li class="nav-item" style="width: auto!important">
                        <a class="nav-link" data-toggle="tab" href="#announcement">Trainer</a>
                     </li>
                  </ul>
                  <!-- Nav tabs end -->
               </div>
               <div class="body-box">
                  <!-- Tab panes -->
                  <div class="tab-content">
                     <!-- tab pane 1 -->
                     <div id="overview" class="tab-pane active"><br>
                        <h4 class="h4-tittle">Description</h4>
                        <p class="para-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
                        <p class="para-desc">consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci</p>

                        <h4 class="h4-tittle">What You’ll Learn</h4>
                        <div class="row">
                           <div class="col-md-6">
                              <ul class="list1">
                                 <li><i class="fas fa-check"></i> Setting up the environment</li>
                                 <li><i class="fas fa-check"></i> Advance HTML Practices</li>
                                 <li><i class="fas fa-check"></i> Build a portfolio website</li>
                                 <li><i class="fas fa-check"></i> Responsive Designs</li>
                              </ul>
                           </div>
                           <div class="col-md-6">
                              <ul class="list1">
                                 <li><i class="fas fa-check"></i> Understand HTML Programming</li>
                                 <li><i class="fas fa-check"></i> Html Code</li>
                                 <li><i class="fas fa-check"></i> Start building beautiful websites</li>
                              </ul>
                           </div>
                        </div>

                        <h4 class="h4-tittle">Who is this course for</h4>
                        <ul>
                           <li>Any computer will work: Windows, macOS or Linux</li>
                           <li>Basic programming HTML and CSS.</li>
                           <li>Basic/Minimal understanding of JavaScript</li>
                        </ul>

                        <!-- <h4 class="h4-tittle">Here Is Exactly What We Cover In This Course:</h4>
                        <p class="para-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
                        <p class="para-desc">consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci</p>
                        <p class="para-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p> -->
                        
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
                     <div id="review" class="tab-pane fade"><br>

                        <h4 class="h4-tittle">All Reviews from learners</h4>
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

                        <h4 class="h4-tittle">What our learners say</h4>
                        <div class="row mt-3">
                           <div class="col-xl-2 col-lg-2 col-md-3 col-xs-3">
                              <div class="pf-img-box">
                                 <img src="img/instructor4.png" alt="">
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
                                 <img src="img/instructor3.png" alt="">
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
                                 <img src="img/instructor5.png" alt="">
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

                        <br>
                        <h4 class="h4-tittle">Submit Review</h4>
                        <form action="#" method="get">
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name" id="f_name">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email" id="c_email">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <p class="para-desc"><span>Rating</span> &nbsp; <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i></p>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <textarea class="form-control" rows="3">Enter Your Message Here</textarea>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <button class="signup-btn">Apply now</button>
                                 </div>
                              </div>
                           </div>
                        </form>
                      
                     </div>
                     <!-- tab pane 3 end -->
                     <!-- tab pane 4 -->
                     <div id="announcement" class="tab-pane fade"><br>
                        <h4 class="h4-tittle">Trainer</h4>

                        <div class="row mt-3">
                           <div class="col-xl-2 col-lg-2 col-md-3 col-xs-4">
                              <div class="pf-img-box">
                                 <img src="img/instructor4.png" alt="">
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
                  </div>
                  <!-- Tab panes end-->
               </div>
            </div>
         </div>
         <!-- right wrapper end -->
      </div>
   </div>
</section>
<script>
var editor = '';
$(document).ready(function(){
   $('#notesHandler').submit(function(e){
      e.preventDefault();
      let p = editor.getData();
      $('#notes').val(p);
      var data = $(this).serialize();
      $.post('/api',data,function(response){
         response = JSON.parse(response);
         if(response.status==1)
         {
             $.notify({
               icon: "glyphicon glyphicon-warning-sign",
               message: response.message
            },{
               type: 'success'
            });
         }
         else
         {
             $.notify({
               icon: "glyphicon glyphicon-warning-sign",
               message: response.message
            },{
               type: 'danger'
            });
         }
      });
   })
});
</script>