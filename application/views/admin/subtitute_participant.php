<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Subtitute | 3rd Anniversary Telkom University</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url() ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url() ?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <?php include('left_bar.php'); ?>
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <?php include 'top_nav.php'; ?>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

          <div class="row">


            <div class="col-md-4 col-sm-4 col-xs-12" style="width: 40%">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>Existing</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                <?php if(!isset($id_participant)){ ?>
                <div class="widget_summary">
                      <form method="post" action="<?php echo base_url().'index.php/admin/subtitute_participant/' ?>">
                        <h4 class="control-label col-md-3 col-sm-3 col-xs-12" for="id" style="width:30%;">Input ID</h4>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="input" name="id_participant" required="required" data-validate-minmax="11,12" maxlength="12" class="form-control col-md-7 col-xs-12" placeholder="Scan Barcode">
                        </div>
                        </form>
                 </div>
                 <?php }else{ ?>
                 <div class="widget_summary">
                        <h4 class="control-label col-md-3 col-sm-3 col-xs-12" for="id" style="width:30%;">ID</h4>
                        <h4 class="control-label col-md-3 col-sm-3 col-xs-12" for="fid" style="width:30%;"><?php echo $id_participant ?></h4>
                 </div>
                  
                 <div class="widget_summary">
                        <h4 class="control-label col-md-3 col-sm-3 col-xs-12" for="name" style="width:30%;">Name</h4>
                        <h4 class="control-label col-md-3 col-sm-3 col-xs-12" for="fname" style="width:30%;"><?php echo $name ?></h4>
                  </div>

                  <div class="widget_summary">
                        <h4 class="control-label col-md-3 col-sm-3 col-xs-12" for="position" style="width:30%;">Position</h4>
                        <h4 class="control-label col-md-3 col-sm-3 col-xs-12" for="fposition" style="width:30%;"><?php echo $position ?></h4>
                  </div>

                  <div class="widget_summary">
                        <h4 class="control-label col-md-3 col-sm-3 col-xs-12" for="company" style="width:30%;">Company</h4>
                        <h4 class="control-label col-md-3 col-sm-3 col-xs-12" for="fcompany" style="width:30%;"><?php echo $company ?></h4>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12" style="width: 40%">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>Subtitute</h2>
                  <div class="clearfix"></div>
                </div>
                 <div class="x_content">
                  <?php if(isset($_POST['id_participant'])){
                    $id_old =  $_POST['id_participant'];
                    }else{
                     $id_old =  $this->uri->segment(3);
                      } ?>
                  <form method="post" action="<?php echo base_url().'index.php/admin/add_subtitute' ?>">
                  <input type="text" name="id_old" value="<?php echo $id_old;?>" hidden="true">
                 <div class="widget_summary">
                        <h4 class="control-label col-md-3 col-sm-3 col-xs-12" for="name" style="width:30%;">Name</h4>
                        <input type="text" id="name" name="name" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" placeholder="Name">
                  </div>

                  <div class="widget_summary">
                        <h4 class="control-label col-md-3 col-sm-3 col-xs-12" for="position" style="width:30%;">Position</h4>
                        <input type="text" id="position" name="position" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" placeholder="Position">
                  </div>

                  <div class="widget_summary">
                        <h4 class="control-label col-md-3 col-sm-3 col-xs-12" for="company" style="width:30%;">Company</h4>
                        <input type="text" id="company" name="company" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" placeholder="Company">
                  </div>
                  
                        <input type="submit" name="submit" value="Submit" style="margin-left: 40%" class="btn btn-success">
                  
                  </form>
                </div>
              </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <!-- <footer> -->
          <!-- <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div> -->
          <div class="clearfix"></div>
        <!-- </footer> -->
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() ?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url() ?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="<?php echo base_url() ?>assets/vendors/validator/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url() ?>assets/build/js/custom.min.js"></script>
  </body>
</html>