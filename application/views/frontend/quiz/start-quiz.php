   <section class="quiz-section">
      <div class="container-fluid">
         <div class="mid-container">
            <div class="row">
               <div class="col-md-12">
                  <div class="qs1-wrapper">
                     <h4 class="h4-tittle"><?=ucfirst($course->title)?> Quiz</h4>
                     <p class="para-desc">The test contains 10 Questions and there is no time limit. </p>
                     <p class="para-desc">The test is not official, it's just a nice way to see how much you know, or don't know about HTML. </p>

                     <div class="inner-box1">
                        <h6 class="h6-tittle">Start the Quiz</h6>
                        <p class="para-desc">Good Luck </p>
                        <button class="signup-btn" id="start_quiz" data-id="<?=$purchasedItems->id?>">Start the <?=ucfirst($course->title)?> Quiz <img src="img/right.png" alt=""></button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <span id="base_url" data-base="<?=site_url()?>"></span>
   <script>
   $(document).ready(function(){
     $('#start_quiz').click(function(e){
      e.preventDefault();
      var _that = $(this);
      var _id = _that.attr('data-id');
      $.ajax({url:'/api',method:'post',data:{'pcourse_id':_id,'action':'quizSetup'}}).done(function(response){
        response = JSON.parse(response);
        if(response.status==true)
        {
          $data = response.data;
          if($data.status==0)
          {
            window.location.href= $('#base_url').attr('data-base')+'start-quiz/'+$data.quiz_id+'/'+$data.question;
          }
          else
          {

          }
        }
        else
        {

        }
      })
     });
   })
   </script>