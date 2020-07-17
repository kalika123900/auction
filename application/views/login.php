<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?=SITE_TITLE?> </title>

    <!-- Bootstrap -->
    <link href="<?=ASSETS?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=ASSETS?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=ASSETS?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?=ASSETS?>vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=ASSETS?>/css/custom.min.css" rel="stylesheet">
  </head>
   
  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <img src="<?=ASSETS?>/images/logo.png" style="margin-right: 20px; max-width: 300px;">
            <form action="" method="post">
              <h1>Login Form</h1>
               <?php if(isset($error)):?>
               <div class="row">
                <div class="col-lg-12">
                  <div class="alert alert-danger">
                    <?php echo $error; ?>
                  </div>
                </div>
              </div>
                 <?php endif;?>
              <div>
                <input type="text" name="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
               <input type="submit" name="submit" value="Login">
              </div>
                <a class="reset_pass" href="#" style="float:right">Lost your password?</a>
             

              <div class="clearfix"></div>

              <div class="separator">
                <!-- <p class="change_link">New to site?
                  <a href="registration" > Create Account </a>
                </p> -->

                <div class="clearfix"></div>
                <br />

                <div>
                  <p>Upskill Right - Admin | Copyrights 2020-21 @ <a href="https://pixbrand.com">Pixbrand</a></p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit">Submit</a>
              </div>
                
              <div class="clearfix"></div>
            
              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="login" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
    <script>
    $(document).ready(function(){
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
