
<section class="category-section1">
   <div class="container-fluid">
      <div class="mid-container">
         <!-- row-1 -->
         <div class="row">
            <div class="col-md-12">
               <div class="cs1-wrapper-1">
                  <div class="row">
                     <div class="col-md-8 col-xs-8">
                        <h3 class="h3-tittle"><?=$subject->subject_name?></h3>
                     </div>
                     <div class="col-md-4 col-xs-4">
                        <div class="dp-toggle-bars">
                           <div class="t-bar1"></div>
                           <div class="t-bar2"></div>
                           <div class="t-bar3"></div>
                           <div class="t-bar4"></div>
                        </div>
                     </div>
                  </div>
                  <div class="dp-toggle-menu">
                     <div class="row">
                        <div class="col-md-6 col-xs-6">
                           <ul class="list-unstyled">
                              <li class="dp-toggle-item">
                                 <a href="#!">All Development</a>
                              </li>
                              <li class="dp-toggle-item">
                                 <a href="#!">Web Development</a>
                              </li>
                              <li class="dp-toggle-item">
                                 <a href="#!">Data Science</a>
                              </li>
                              <li class="dp-toggle-item">
                                 <a href="#!">Mobile Apps</a>
                              </li>
                              <li class="dp-toggle-item">
                                 <a href="#!">Programming Languages</a>
                              </li>
                              <li class="dp-toggle-item">
                                 <a href="#!">Game Development</a>
                              </li>
                           </ul>
                        </div>
                        <div class="col-md-6 col-xs-6">
                           <ul class="list-unstyled">
                              <li class="dp-toggle-item">
                                 <a href="#!">Databases</a>
                              </li>
                              <li class="dp-toggle-item">
                                 <a href="#!">Software Testing</a>
                              </li>
                              <li class="dp-toggle-item">
                                 <a href="#!">Software Engineering</a>
                              </li>
                              <li class="dp-toggle-item">
                                 <a href="#!">Development Tools</a>
                              </li>
                              <li class="dp-toggle-item">
                                 <a href="#!">E-Commerce</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- row-2 -->
         <?php if(count($courses)>0): ?>
         <div class="row">
            <div class="col-md-12">
               <div class="cs1-wrapper-2">

                  <div class="hs2-wrapper-head">
                     <div class="row">
                        <div class="col-xl-9 col-lg-8 col-md-7 col-xs-8">
                           <h3 class="h3-tittle">Courses to get you started</h3>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-5 col-xs-4 text-center">
                           <a href="#">View All</a>
                        </div>
                     </div>
                  </div>

                  <div class="hs2-wrapper-slider">
                     <div class="slider autoplay">
                        <!-- slide-1 -->
                        <?php foreach($courses as $key=>$course): ?>
                        <div>
                           <a href="<?=site_url().'course/'.$course->slug?>" tabindex="-1">
                              <div class="card-box">
                                 <div class="img-box">
                                    <img src="<?=UPLOADS.$course->featured_image?>" alt="">
                                 </div>
                                 <div class="content-box">
                                    <h6 class="h6-tittle"><?=ucfirst($course->title)?></h6>
                                    <p class="para-desc" style="text-transform: uppercase;"><?=ucfirst($subject->subject_name)?></p>
                                    <h6><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i> <i class="fas fa-star"></i></h6>
                                    <p class="para-desc"><?=$course->short_description?></p>
                                    <div class="price-box">$<?=$course->price?></div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <?php endforeach; ?>
                     
                    </div>
               </div>
            </div>
         </div>
         <?php endif; ?>
         <!-- row-3 -->
         <div class="row">
            <div class="col-md-12">
               <div class="cs1-wrapper-2 cs1-wrapper3">

                  <div class="hs2-wrapper-head">
                     <div class="row">
                        <div class="col-xl-9 col-lg-8 col-md-7 col-xs-8">
                           <h3 class="h3-tittle">Popular Topics</h3>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-5 col-xs-4 text-center">
                           <a href="#">View All</a>
                        </div>
                     </div>
                  </div>

                  <div class="hs2-wrapper-slider">
                     <div class="slider autoplay slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style=""><img src="img/back.png" alt=""></button>
                        <!-- slide-1 -->
                        <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4466px; transform: translate3d(-1595px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1" style="width: 319px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="<?=ASSETS?>images/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                           <br>
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="img/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1" style="width: 319px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="<?=ASSETS?>images/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                           <br>
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="<?=ASSETS?>images/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1" style="width: 319px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="<?=ASSETS?>images/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                           <br>
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="<?=ASSETS?>images/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 319px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="<?=ASSETS?>images/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                           <br>
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="<?=ASSETS?>images/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 319px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="<?=ASSETS?>images/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                           <br>
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="<?=ASSETS?>images/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" style="width: 319px;">
                           <a href="#" tabindex="0">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="<?=ASSETS?>images/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                           <br>
                           <a href="#" tabindex="0">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="<?=ASSETS?>images/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" style="width: 319px;">
                           <a href="#" tabindex="0">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="<?=ASSETS?>images/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                           <br>
                           <a href="#" tabindex="0">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="<?=ASSETS?>images/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" style="width: 319px;">
                           <a href="#" tabindex="0">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="<?=ASSETS?>images/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                           <br>
                           <a href="#" tabindex="0">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="<?=ASSETS?>images/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-active" data-slick-index="4" aria-hidden="false" tabindex="0" style="width: 319px;">
                           <a href="#" tabindex="0">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="<?=ASSETS?>images/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                           <br>
                           <a href="#" tabindex="0">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="<?=ASSETS?>images/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" tabindex="-1" style="width: 319px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="<?=ASSETS?>images/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                           <br>
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="<?=ASSETS?>images/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" tabindex="-1" style="width: 319px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="img/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                           <br>
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="img/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-cloned" data-slick-index="7" aria-hidden="true" tabindex="-1" style="width: 319px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="img/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                           <br>
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="img/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-cloned" data-slick-index="8" aria-hidden="true" tabindex="-1" style="width: 319px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="img/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                           <br>
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="img/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" tabindex="-1" style="width: 319px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="img/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                           <br>
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="content-box">
                                    <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                          <img src="img/course-category.png" alt="">
                                       </div>
                                       <div class="col-md-9 col-xs-9">
                                          <div class="mb-box">
                                             <h6 class="h6-tittle">HTML 5 Courses</h6>
                                             <p class="para-desc" style="text-transform: uppercase;">5 courses 3 bundles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div></div></div>
                        <!-- slide-2 -->
                        
                        <!-- slide-3 -->
                        
                        <!-- slide-4 -->
                        
                        <!-- slide-5 -->
                        
                        <!-- slide-5 end -->
                     <button class="slick-next slick-arrow" aria-label="Next" type="button" style=""><img src="img/right.png" alt=""></button></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- row-4 -->
         <div class="row">
            <div class="col-md-12">
               <div class="cs1-wrapper-2 cs1-wrapper-4">

                  <div class="hs2-wrapper-head">
                     <div class="row">
                        <div class="col-xl-9 col-lg-8 col-md-7 col-xs-8">
                           <h3 class="h3-tittle">Featured Courses</h3>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-5 col-xs-4 text-center">
                           <a href="#">View All</a>
                        </div>
                     </div>
                  </div>

                  <div class="hs2-wrapper-slider">
                     <div class="slider autoplay2 slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style=""><img src="img/back.png" alt=""></button>
                        <!-- slide-1 -->
                        <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 8925px; transform: translate3d(-2550px, 0px, 0px); transition: transform 500ms ease 0s;"><div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 1275px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="row">
                                    <div class="col-md-5">
                                       <div class="img-box">
                                          <img src="img/category-slide2.png" alt="">
                                       </div>
                                    </div>
                                    <div class="col-md-7">
                                       <div class="content-box">
                                          <h6 class="h6-tittle">Testing and Monitoring Machine Learning Model Deployments</h6>
                                          <p class="para-desc">Last Updated March 2020</p>
                                          <p class="para-desc"><span>8.5 total hours</span> <span>.</span> 
                                          <span>91 lectures</span> <span>.</span> <span>Intermediate Level</span></p>
                                          <h6><i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                                              <i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                                              <i class="fas fa-star"></i></h6>
                                          <p class="para-desc">ML testing strategies, shadow deployments, production model monitoring and more By Christopher Samiullah and 1 other</p>
                                          <button class="read-more-btn" tabindex="-1">Get Started</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="0" style="width: 1275px;">
                           <a href="#" tabindex="0">
                              <div class="card-box">
                                 <div class="row">
                                    <div class="col-md-5">
                                       <div class="img-box">
                                          <img src="img/category-slide2.png" alt="">
                                       </div>
                                    </div>
                                    <div class="col-md-7">
                                       <div class="content-box">
                                          <h6 class="h6-tittle">Testing and Monitoring Machine Learning Model Deployments</h6>
                                          <p class="para-desc">Last Updated March 2020</p>
                                          <p class="para-desc"><span>8.5 total hours</span> <span>.</span> 
                                          <span>91 lectures</span> <span>.</span> <span>Intermediate Level</span></p>
                                          <h6><i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                                              <i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                                              <i class="fas fa-star"></i></h6>
                                          <p class="para-desc">ML testing strategies, shadow deployments, production model monitoring and more By Christopher Samiullah and 1 other</p>
                                          <button class="read-more-btn" tabindex="0">Get Started</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="-1" style="width: 1275px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="row">
                                    <div class="col-md-5">
                                       <div class="img-box">
                                          <img src="img/category-slide2.png" alt="">
                                       </div>
                                    </div>
                                    <div class="col-md-7">
                                       <div class="content-box">
                                          <h6 class="h6-tittle">Testing and Monitoring Machine Learning Model Deployments</h6>
                                          <p class="para-desc">Last Updated March 2020</p>
                                          <p class="para-desc"><span>8.5 total hours</span> <span>.</span> 
                                          <span>91 lectures</span> <span>.</span> <span>Intermediate Level</span></p>
                                          <h6><i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                                              <i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                                              <i class="fas fa-star"></i></h6>
                                          <p class="para-desc">ML testing strategies, shadow deployments, production model monitoring and more By Christopher Samiullah and 1 other</p>
                                          <button class="read-more-btn" tabindex="-1">Get Started</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 1275px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="row">
                                    <div class="col-md-5">
                                       <div class="img-box">
                                          <img src="img/category-slide2.png" alt="">
                                       </div>
                                    </div>
                                    <div class="col-md-7">
                                       <div class="content-box">
                                          <h6 class="h6-tittle">Testing and Monitoring Machine Learning Model Deployments</h6>
                                          <p class="para-desc">Last Updated March 2020</p>
                                          <p class="para-desc"><span>8.5 total hours</span> <span>.</span> 
                                          <span>91 lectures</span> <span>.</span> <span>Intermediate Level</span></p>
                                          <h6><i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                                              <i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                                              <i class="fas fa-star"></i></h6>
                                          <p class="para-desc">ML testing strategies, shadow deployments, production model monitoring and more By Christopher Samiullah and 1 other</p>
                                          <button class="read-more-btn" tabindex="-1">Get Started</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-cloned" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 1275px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="row">
                                    <div class="col-md-5">
                                       <div class="img-box">
                                          <img src="img/category-slide2.png" alt="">
                                       </div>
                                    </div>
                                    <div class="col-md-7">
                                       <div class="content-box">
                                          <h6 class="h6-tittle">Testing and Monitoring Machine Learning Model Deployments</h6>
                                          <p class="para-desc">Last Updated March 2020</p>
                                          <p class="para-desc"><span>8.5 total hours</span> <span>.</span> 
                                          <span>91 lectures</span> <span>.</span> <span>Intermediate Level</span></p>
                                          <h6><i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                                              <i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                                              <i class="fas fa-star"></i></h6>
                                          <p class="para-desc">ML testing strategies, shadow deployments, production model monitoring and more By Christopher Samiullah and 1 other</p>
                                          <button class="read-more-btn" tabindex="-1">Get Started</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" tabindex="-1" style="width: 1275px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="row">
                                    <div class="col-md-5">
                                       <div class="img-box">
                                          <img src="img/category-slide2.png" alt="">
                                       </div>
                                    </div>
                                    <div class="col-md-7">
                                       <div class="content-box">
                                          <h6 class="h6-tittle">Testing and Monitoring Machine Learning Model Deployments</h6>
                                          <p class="para-desc">Last Updated March 2020</p>
                                          <p class="para-desc"><span>8.5 total hours</span> <span>.</span> 
                                          <span>91 lectures</span> <span>.</span> <span>Intermediate Level</span></p>
                                          <h6><i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                                              <i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                                              <i class="fas fa-star"></i></h6>
                                          <p class="para-desc">ML testing strategies, shadow deployments, production model monitoring and more By Christopher Samiullah and 1 other</p>
                                          <button class="read-more-btn" tabindex="-1">Get Started</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" tabindex="-1" style="width: 1275px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box">
                                 <div class="row">
                                    <div class="col-md-5">
                                       <div class="img-box">
                                          <img src="img/category-slide2.png" alt="">
                                       </div>
                                    </div>
                                    <div class="col-md-7">
                                       <div class="content-box">
                                          <h6 class="h6-tittle">Testing and Monitoring Machine Learning Model Deployments</h6>
                                          <p class="para-desc">Last Updated March 2020</p>
                                          <p class="para-desc"><span>8.5 total hours</span> <span>.</span> 
                                          <span>91 lectures</span> <span>.</span> <span>Intermediate Level</span></p>
                                          <h6><i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                                              <i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                                              <i class="fas fa-star"></i></h6>
                                          <p class="para-desc">ML testing strategies, shadow deployments, production model monitoring and more By Christopher Samiullah and 1 other</p>
                                          <button class="read-more-btn" tabindex="-1">Get Started</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div></div></div>
                        <!-- slide-2 -->
                        
                        <!-- slide-3 -->
                        
                        <!-- slide-3 end -->
                     <button class="slick-next slick-arrow" aria-label="Next" type="button" style=""><img src="img/right.png" alt=""></button></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- row-5 -->
         <div class="row">
            <div class="col-md-12">
               <div class="cs1-wrapper-2 cs1-wrapper-5">

                  <div class="hs2-wrapper-head">
                     <div class="row">
                        <div class="col-xl-9 col-lg-8 col-md-7 col-xs-8">
                           <h3 class="h3-tittle">Popular Instructors</h3>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-5 col-xs-4 text-center">
                           <a href="#">View All</a>
                        </div>
                     </div>
                  </div>

                  <div class="hs2-wrapper-slider">
                     <div class="slider autoplay3 slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style=""><img src="img/back.png" alt=""></button>
                        <!-- slide-1 -->
                        <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4335px; transform: translate3d(-2295px, 0px, 0px); transition: transform 500ms ease 0s;"><div class="slick-slide slick-cloned" data-slick-index="-5" aria-hidden="true" tabindex="-1" style="width: 255px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box2">
                                 <div class="img-box">
                                    <img src="img/instructor-slide.png" alt="">
                                 </div>
                                 <div class="content-box">
                                    <h6 class="h6-tittle">Instructors Dummy Username</h6>
                                    <p class="para-desc">Html, CSS, Bootstrap</p>
                                    <p class="para-desc">25,000 Student <br> 29 Courses</p>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1" style="width: 255px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box2">
                                 <div class="img-box">
                                    <img src="img/instructor-slide.png" alt="">
                                 </div>
                                 <div class="content-box">
                                    <h6 class="h6-tittle">Instructors Dummy Username</h6>
                                    <p class="para-desc">Html, CSS, Bootstrap</p>
                                    <p class="para-desc">25,000 Student <br> 29 Courses</p>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1" style="width: 255px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box2">
                                 <div class="img-box">
                                    <img src="img/instructor-slide.png" alt="">
                                 </div>
                                 <div class="content-box">
                                    <h6 class="h6-tittle">Instructors Dummy Username</h6>
                                    <p class="para-desc">Html, CSS, Bootstrap</p>
                                    <p class="para-desc">25,000 Student <br> 29 Courses</p>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1" style="width: 255px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box2">
                                 <div class="img-box">
                                    <img src="img/instructor-slide.png" alt="">
                                 </div>
                                 <div class="content-box">
                                    <h6 class="h6-tittle">Instructors Dummy Username</h6>
                                    <p class="para-desc">Html, CSS, Bootstrap</p>
                                    <p class="para-desc">25,000 Student <br> 29 Courses</p>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 255px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box2">
                                 <div class="img-box">
                                    <img src="img/instructor-slide.png" alt="">
                                 </div>
                                 <div class="content-box">
                                    <h6 class="h6-tittle">Instructors Dummy Username</h6>
                                    <p class="para-desc">Html, CSS, Bootstrap</p>
                                    <p class="para-desc">25,000 Student <br> 29 Courses</p>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 255px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box2">
                                 <div class="img-box">
                                    <img src="img/instructor-slide.png" alt="">
                                 </div>
                                 <div class="content-box">
                                    <h6 class="h6-tittle">Instructors Dummy Username</h6>
                                    <p class="para-desc">Html, CSS, Bootstrap</p>
                                    <p class="para-desc">25,000 Student <br> 29 Courses</p>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 255px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box2">
                                 <div class="img-box">
                                    <img src="img/instructor-slide.png" alt="">
                                 </div>
                                 <div class="content-box">
                                    <h6 class="h6-tittle">Instructors Dummy Username</h6>
                                    <p class="para-desc">Html, CSS, Bootstrap</p>
                                    <p class="para-desc">25,000 Student <br> 29 Courses</p>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 255px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box2">
                                 <div class="img-box">
                                    <img src="img/instructor-slide.png" alt="">
                                 </div>
                                 <div class="content-box">
                                    <h6 class="h6-tittle">Instructors Dummy Username</h6>
                                    <p class="para-desc">Html, CSS, Bootstrap</p>
                                    <p class="para-desc">25,000 Student <br> 29 Courses</p>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="0" style="width: 255px;">
                           <a href="#" tabindex="0">
                              <div class="card-box2">
                                 <div class="img-box">
                                    <img src="img/instructor-slide.png" alt="">
                                 </div>
                                 <div class="content-box">
                                    <h6 class="h6-tittle">Instructors Dummy Username</h6>
                                    <p class="para-desc">Html, CSS, Bootstrap</p>
                                    <p class="para-desc">25,000 Student <br> 29 Courses</p>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-current slick-active" data-slick-index="4" aria-hidden="false" tabindex="0" style="width: 255px;">
                           <a href="#" tabindex="0">
                              <div class="card-box2">
                                 <div class="img-box">
                                    <img src="img/instructor-slide.png" alt="">
                                 </div>
                                 <div class="content-box">
                                    <h6 class="h6-tittle">Instructors Dummy Username</h6>
                                    <p class="para-desc">Html, CSS, Bootstrap</p>
                                    <p class="para-desc">25,000 Student <br> 29 Courses</p>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-active" data-slick-index="5" aria-hidden="false" tabindex="0" style="width: 255px;">
                           <a href="#" tabindex="0">
                              <div class="card-box2">
                                 <div class="img-box">
                                    <img src="img/instructor-slide.png" alt="">
                                 </div>
                                 <div class="content-box">
                                    <h6 class="h6-tittle">Instructors Dummy Username</h6>
                                    <p class="para-desc">Html, CSS, Bootstrap</p>
                                    <p class="para-desc">25,000 Student <br> 29 Courses</p>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-cloned slick-active" data-slick-index="6" aria-hidden="false" tabindex="-1" style="width: 255px;">
                           <a href="#" tabindex="0">
                              <div class="card-box2">
                                 <div class="img-box">
                                    <img src="img/instructor-slide.png" alt="">
                                 </div>
                                 <div class="content-box">
                                    <h6 class="h6-tittle">Instructors Dummy Username</h6>
                                    <p class="para-desc">Html, CSS, Bootstrap</p>
                                    <p class="para-desc">25,000 Student <br> 29 Courses</p>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-cloned slick-active" data-slick-index="7" aria-hidden="false" tabindex="-1" style="width: 255px;">
                           <a href="#" tabindex="0">
                              <div class="card-box2">
                                 <div class="img-box">
                                    <img src="img/instructor-slide.png" alt="">
                                 </div>
                                 <div class="content-box">
                                    <h6 class="h6-tittle">Instructors Dummy Username</h6>
                                    <p class="para-desc">Html, CSS, Bootstrap</p>
                                    <p class="para-desc">25,000 Student <br> 29 Courses</p>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-cloned slick-active" data-slick-index="8" aria-hidden="false" tabindex="-1" style="width: 255px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box2">
                                 <div class="img-box">
                                    <img src="img/instructor-slide.png" alt="">
                                 </div>
                                 <div class="content-box">
                                    <h6 class="h6-tittle">Instructors Dummy Username</h6>
                                    <p class="para-desc">Html, CSS, Bootstrap</p>
                                    <p class="para-desc">25,000 Student <br> 29 Courses</p>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" tabindex="-1" style="width: 255px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box2">
                                 <div class="img-box">
                                    <img src="img/instructor-slide.png" alt="">
                                 </div>
                                 <div class="content-box">
                                    <h6 class="h6-tittle">Instructors Dummy Username</h6>
                                    <p class="para-desc">Html, CSS, Bootstrap</p>
                                    <p class="para-desc">25,000 Student <br> 29 Courses</p>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-cloned" data-slick-index="10" aria-hidden="true" tabindex="-1" style="width: 255px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box2">
                                 <div class="img-box">
                                    <img src="img/instructor-slide.png" alt="">
                                 </div>
                                 <div class="content-box">
                                    <h6 class="h6-tittle">Instructors Dummy Username</h6>
                                    <p class="para-desc">Html, CSS, Bootstrap</p>
                                    <p class="para-desc">25,000 Student <br> 29 Courses</p>
                                 </div>
                              </div>
                           </a>
                        </div><div class="slick-slide slick-cloned" data-slick-index="11" aria-hidden="true" tabindex="-1" style="width: 255px;">
                           <a href="#" tabindex="-1">
                              <div class="card-box2">
                                 <div class="img-box">
                                    <img src="img/instructor-slide.png" alt="">
                                 </div>
                                 <div class="content-box">
                                    <h6 class="h6-tittle">Instructors Dummy Username</h6>
                                    <p class="para-desc">Html, CSS, Bootstrap</p>
                                    <p class="para-desc">25,000 Student <br> 29 Courses</p>
                                 </div>
                              </div>
                           </a>
                        </div></div></div>
                        <!-- slide-2 -->
                        
                        <!-- slide-3 -->
                        
                        <!-- slide-4 -->
                        
                        <!-- slide-5 -->
                        
                        <!-- slide-6 -->
                        
                        <!-- slide-6 end -->
                     <button class="slick-next slick-arrow" aria-label="Next" type="button" style=""><img src="img/right.png" alt=""></button></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- row-5 end -->
      </div>
   </div>
</section>

<section class="category-section2">
   <div class="container-fluid">

      <div class="mid-container">
         <!-- row-1 -->
         <div class="row">
            <div class="col-md-12">
               <h3 class="h3-tittle">All Development courses</h3>
            </div>
         </div>
         <!-- row-2 -->
         <div class="row">
            <div class="col-md-12">

               <div class="cs2-wrapper">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="img-box">
                           <img src="img/courses-img.png" alt="">
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="content-box">
                           <h6 class="h6-tittle">Complete Python Bootcamp: Go from zero to hero in Python 3</h6>
                           <div class="bs-box">Bestseller</div>
                           <p class="para-desc"><span>8.5 total hours</span> <span>.</span> <span>91 lectures </span>
                           <span>.</span> <span>Intermediate Leve</span></p>
                           <p class="para-desc">Learn Python like a Professional! Start from the basics and go all the way to
                              creating your own applications and games! </p>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="price-box">
                           <h3 class="h3-tittle">$720</h3>
                           <p class="para-desc"><del>$120,048</del></p>
                           <h6><i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i></h6>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="cs2-wrapper">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="img-box">
                           <img src="img/courses-img.png" alt="">
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="content-box">
                           <h6 class="h6-tittle">Complete Python Bootcamp: Go from zero to hero in Python 3</h6>
                           <div class="bs-box">Bestseller</div>
                           <p class="para-desc"><span>8.5 total hours</span> <span>.</span> <span>91 lectures </span>
                           <span>.</span> <span>Intermediate Leve</span></p>
                           <p class="para-desc">Learn Python like a Professional! Start from the basics and go all the way to
                              creating your own applications and games! </p>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="price-box">
                           <h3 class="h3-tittle">$720</h3>
                           <p class="para-desc"><del>$120,048</del></p>
                           <h6><i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i></h6>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="cs2-wrapper">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="img-box">
                           <img src="img/courses-img.png" alt="">
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="content-box">
                           <h6 class="h6-tittle">Complete Python Bootcamp: Go from zero to hero in Python 3</h6>
                           <div class="bs-box">Bestseller</div>
                           <p class="para-desc"><span>8.5 total hours</span> <span>.</span> <span>91 lectures </span>
                           <span>.</span> <span>Intermediate Leve</span></p>
                           <p class="para-desc">Learn Python like a Professional! Start from the basics and go all the way to
                              creating your own applications and games! </p>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="price-box">
                           <h3 class="h3-tittle">$720</h3>
                           <p class="para-desc"><del>$120,048</del></p>
                           <h6><i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i></h6>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="cs2-wrapper">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="img-box">
                           <img src="img/courses-img.png" alt="">
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="content-box">
                           <h6 class="h6-tittle">Complete Python Bootcamp: Go from zero to hero in Python 3</h6>
                           <div class="bs-box">Bestseller</div>
                           <p class="para-desc"><span>8.5 total hours</span> <span>.</span> <span>91 lectures </span>
                           <span>.</span> <span>Intermediate Leve</span></p>
                           <p class="para-desc">Learn Python like a Professional! Start from the basics and go all the way to
                              creating your own applications and games! </p>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="price-box">
                           <h3 class="h3-tittle">$720</h3>
                           <p class="para-desc"><del>$120,048</del></p>
                           <h6><i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i></h6>
                        </div>
                     </div>
                  </div>
               </div>

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

            </div>
         </div>
         <!-- row-2 end -->
      </div>

   </div>
</section>