<footer>
          <div class="pull-right">
            Upskill Right - Admin | Copyrights @ <a href="https://pixbrand.com">Pixbrand</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <!-- area for messages -->
    <?php 
     $error = $this->session->flashdata('error');
     $success = $this->session->flashdata('success');
     if($error!='')
     {?>
       <div id="has-error" data-msg="<?=$error?>"></div>
     <?php }
     if($success!='')
     { ?>
       <div id="has-success" data-msg="<?=$success?>"></div>
     <?php }
   ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.5/bootstrap-notify.min.js"></script>
    <!-- FastClick -->
    <script src="<?=ASSETS?>/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?=ASSETS?>/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?=ASSETS?>/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?=ASSETS?>/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?=ASSETS?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?=ASSETS?>/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?=ASSETS?>/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?=ASSETS?>/vendors/Flot/jquery.flot.js"></script>
    <script src="<?=ASSETS?>/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?=ASSETS?>/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?=ASSETS?>/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?=ASSETS?>/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?=ASSETS?>/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?=ASSETS?>/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?=ASSETS?>/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?=ASSETS?>/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?=ASSETS?>/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?=ASSETS?>/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?=ASSETS?>/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?=ASSETS?>/vendors/moment/min/moment.min.js"></script>
    <script src="<?=ASSETS?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?=ASSETS?>js/custom.min.js"></script>
    
    
    <script>
    $(document).ready(function(){
      $has_error = $('#has-error');
      if($has_error.length>0)
      {
        $message = $has_error.attr('data-msg');
        $.notify({
            icon: "glyphicon glyphicon-warning-sign",
            message: $message
          },{
            type: 'danger'
          });
      }
      $has_success = $('#has-success');
      if($has_success.length>0)
      {
        $message = $has_success.attr('data-msg');
        $.notify({
            icon: "glyphicon glyphicon-check",
            message: $message 
          },{
            type: 'success'
          });
      }
      if($('.required-error').length>0)
      {
        setTimeout(() => {
          var countP = $('.required-error').find('p').length;
          $('.required-error').find('p').each(function(index,value){
            $(value).delay(400*countP).fadeOut(1000);
            countP--;
          })
        }, 6000);
      }
    });
    
    </script>
  </body>
</html>