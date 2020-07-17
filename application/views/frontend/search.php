<section class="category-section2 courses-searches-section">
   <div class="container-fluid">

      <div class="mid-container">
         <!-- row-1 -->
         <div class="row">
            <div class="col-md-12">
               <p class="para-desc">SEARCHED FOR</p>
               <h3 class="h3-tittle"><?=ucfirst($search_for)?></h3>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-8 col-md-7">
               <p class="para-desc"><span><?=current($resultCourseCount)->video_count?> Courses</span> &nbsp;&nbsp; <span><?=current($resultVideoCount)->video_count?> Video Tutorials</span></p>
            </div>
            <div class="col-lg-4 col-md-5">
               <div class="css-sort-wrapper">
                  <p class="para-desc"><img src="<?=ASSETS?>images/filter-img.png" alt=""><span>Sort By: release date (newest first)</span></p>
               </div>
            </div>
         </div>
         <!-- row-2 -->
         <div class="row">
            <div class="col-md-12">
               <?php if(count($resultsItem)>0): ?>
               <?php foreach($resultsItem as $item): ?>
               <div class="cs2-wrapper">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="img-box">
                           <img src="<?=UPLOADS.$item->featured_image?>" alt="">
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="content-box">
                           <h6 class="h6-tittle"><?=$item->title?></h6>
                           <!-- <div class="bs-box">Bestseller</div> -->
                           <!-- <p class="para-desc"><span>8.5 total hours</span> <span>.</span> <span>91 lectures </span>
                           <span>.</span> <span>Intermediate Leve</span></p> -->
                           <p class="para-desc"><?=$item->video_count?> Topics/Lectures</p>
                           <p class="para-desc"><?=$item->short_description?></p>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="price-box">
                           <h3 class="h3-tittle">$<?=($item->sale_price!=$item->price)?$item->sale_price:$item->price?></h3>
                           <p class="para-desc"><del><?=($item->sale_price!=$item->price)?$item->price:''?></del></p>
                           <!-- <h6><i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                              <i class="fas fa-star"></i></h6> -->
                        </div>
                     </div>
                  </div>
               </div>
               <?php endforeach; ?>
               <?php endif; ?>
           
              <?php if(current($resultCourseCount)->video_count>10):?>
               <div class="pagination-wrapper">
                  <nav aria-label="Page navigation example">
                     <ul class="pagination pagination-circle pg-blue justify-content-center">
                        <li class="page-item disabled">
                           <a class="page-link" aria-label="Previous">
                           <img src="<?=ASSETS?>images/blue-back.png" alt="">
                           <span class="sr-only">Previous</span>
                           </a>
                        </li>
                        <li class="page-item active"><a class="page-link">1</a></li>
                        <li class="page-item"><a class="page-link">2</a></li>
                        <li class="page-item"><a class="page-link">3</a></li>
                        <li class="page-item"><a class="page-link">4</a></li>
                        <li class="page-item"><a class="page-link">5</a></li>
                        <li class="page-item">
                           <a class="page-link" aria-label="Next">
                           <img src="<?=ASSETS?>images/blue-next.png" alt="">
                           <span class="sr-only">Next</span>
                           </a>
                        </li>
                     </ul>
                  </nav>
               </div>
              <?php endif; ?>    
            </div>
         </div>
         <!-- row-2 end -->
      </div>

   </div>
</section>