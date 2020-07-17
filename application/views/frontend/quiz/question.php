
<!-- =============== section-1 start here =============== -->
<section class="quiz-section1">
   <div class="container-fluid">
      <div class="mid-container">
         <div class="row">
            <div class="col-md-12">
               <div class="qs1-wrapper">
                  <h4 class="h4-tittle"><?=ucfirst($course->title)?> Quiz</h4>
                  <h6 class="h6-tittle">Question <?=$qNo?> of 10:</h6>
                  <div class="row">
                     <div class="col-md-6">
                        <p class="para-desc"><?=$question->question?></p>
                     </div>
                     <div class="col-md-6">
                        <!-- <div class="right-link-box">
                           <a href="#">https://Lorem_ipsum_dummy_link/html_video</a>
                        </div> -->
                     </div>
                  </div>

                  <div class="inner-box1">
                     <label class="custom_radio"><?=$question->option_a?>
                        <input type="radio" value="a" name="answer">
                        <span class="checkmark"></span>
                     </label>
                     <label class="custom_radio"><?=$question->option_b?>
                        <input type="radio" value="b" name="answer">
                        <span class="checkmark"></span>
                     </label>
                     <label class="custom_radio"><?=$question->option_c?>
                        <input type="radio" value="c" name="answer">
                        <span class="checkmark"></span>
                     </label>
                     <label class="custom_radio"><?=$question->option_d?>
                        <input type="radio" value="d" name="answer">
                        <span class="checkmark"></span>
                     </label>
                  </div>
                  <span id="quest_details" data-of="<?=$qNo?>"  data-q="<?=$qm_id?>" data-qz="<?=$qz_id?>"></span>
                  <div class="row">
                     <div class="col-md-8 col-xs-8">
                        <button class="signup-btn" id="next">Next <img src="img/right.png" alt=""></button>
                        <button class="pause-btn" id="pause">Pause</button>
                     </div>
                     <div class="col-md-4 col-xs-4 text-right">
                        <p class="para-desc">4:38</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<span id="base_url" data-base="<?=site_url()?>"></span>
<!-- =============== section-1 end here ================= -->
<script>

$(document).ready(function(){
  
  $('#next').click(function(){
    var quest_details = $('#quest_details');
    var _qm_id = quest_details.attr('data-q');
    var _qz_id = quest_details.attr('data-qz');
    var _of_no = quest_details.attr('data-of');
    var answer = $('input[name="answer"]:checked').val();
    var base_url = $('#base_url').attr('data-base');
    if(typeof answer=='undefined')
    {
      alert('Please choose an option');
    }
    else
    {
       $.ajax({url:'/api',method:'post',data:{'qm':_qm_id,'qz':_qz_id,'ar':answer,'of':_of_no,'action':'submitAnswer'}}).done(function(response){
        response = JSON.parse(response);
        if(response.status==true)
        {
          $data = response.data;
          if($data.code=='200' && $data.of!='-1')
          {
            window.location.href= base_url+'start-quiz/'+$data.qz+'/'+$data.of;
          }
          else
          {
            window.location.href= base_url+'quiz-result/'+$data.pcid;
          }
        }
        else
        {

        }
      })
    }
  });

});

</script>
