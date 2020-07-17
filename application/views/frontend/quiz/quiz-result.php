<section class="quiz-section1">
   <div class="container-fluid">
      <div class="mid-container">
         <div class="row">
            <div class="col-md-12">
               <div class="qs1-wrapper">
                  <h4 class="h4-tittle"><?=ucfirst($courseTitle)?> Quiz</h4>
                  
                  <div class="inner-box2">
                     <h4 class="h4-tittle"><?=ucfirst($courseTitle)?> Quiz</h4>
                     <p class="para-desc"><?=(10-$resultWrongCount)?> of 10</p>
                     <p class="para-desc"><?=$resultCorrectScore?>%</p>
                     <?php if($resultCorrectScore>80) { ?>
                        <p class="para-desc">You performed Awesome, Congratulations!</p>
                     <?php } 
                           elseif($resultCorrectScore>50){?>
                        <p class="para-desc">You can do much better, Keep Learning!</p>   
                     <?php 
                          } 
                          else{ ?>
                         <p class="para-desc">You must study much harder!</p>

                     <?php 
                          }
                      ?>    
                     <!-- <p class="para-desc">Time Spent <br> 10:11</p> -->
                     <button class="signup-btn">Check Your Answer</button>
                     <a href="<?=$certificate_path?>" target="_blank" class="pause-btn">Download Certificate</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>