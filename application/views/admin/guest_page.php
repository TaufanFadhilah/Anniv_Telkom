<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    <title>Login | Registrasi 3rd Anniversary</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url() ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url() ?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url() ?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <br/>
      <h1 align="center"><!-- <i class="fa fa-paw"></i> 3rd Anniversarry --> </h1>
      <div class="login_wrapper">
        <div class="animate form login_form">
        <img src="<?php echo base_url() ?>assets/images/Logo.png" style="width: 100%;">
          <section class="login_content">
              <div>
                <h4>WELCOME</h4> 
              </div>
              <div>
                <h4><?php echo $name ?></h4>
              </div>
              <div>
                <?php echo $company ?>
              </div>
                  <!-- <h1><i class="fa fa-paw"></i> 3rd Anniversarry</h1> -->
                  <p>©2016 All Rights Reserved. <!-- Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms --></p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
