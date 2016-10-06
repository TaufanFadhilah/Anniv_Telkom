<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Input Registration | 3rd Anniversary Telkom University</title>

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
          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <!-- <h2><?php echo $title ?> <small><?php echo $this->session->flashdata('insert'); ?></small></h2> -->
                    <h2>Input Registration</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  
                  <a href="<?php echo base_url().'index.php/admin/subtitute_participant/'?>">
                    <button class="btn btn-primary" style="float: right;"> Subtitute</button>
                  </a>     
                    <form class="form-horizontal form-label-left" method="post"  action="<?php echo base_url() ?>index.php/admin/input_registration" >
                      <div class="item form-group">
                        <h2 class="control-label col-md-3 col-sm-3 col-xs-12" for="id">ID <span class="required">:</span></h2>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="id" class="form-control col-md-7 col-xs-12" autofocus=""  style="float: left;" name="id">
                        </div>
                      </div>
                      </form>
                      <?php echo $this->session->flashdata('input_registration'); ?>
                      <?php if(isset($name)){ ?>
                      <div class="item form-group">
                        <h3 class="control-label col-md-3 col-sm-3 col-xs-12">Name <span class="required"> : </span></h3>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <h3 class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;"><?php echo $name ?> <span class="required"></span></h3>
                        </div>
                      </div>


                      <div class="item form-group">
                        <h3 class="control-label col-md-3 col-sm-3 col-xs-12">Company <span class="required">:</span></h3>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <h3 class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;"><?php echo $company ?> <span class="required"></span></h3>
                        </div>
                      </div>


                      <div class="item form-group">
                        <h3 class="control-label col-md-3 col-sm-3 col-xs-12">Position <span class="required">:</span></h3>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <h3 class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;"><?php echo $position ?> <span class="required"></span></h3>
                        </div>
                      </div>


                      <div class="item form-group">
                        <h3 class="control-label col-md-3 col-sm-3 col-xs-12">Type <span class="required">:</span></h3>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <h3 class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align: left;"><?php echo $type ?> <span class="required"></span></h3>
                        </div>
                      </div>
                      <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <!-- <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div> -->
          <div class="clearfix"></div>
        </footer>
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

    <!-- validator -->
    <script>
      // initialize the validator function
      validator.message.date = 'not a real date';

      // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
      $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

      $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

      $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
          submit = false;
        }

        if (submit)
          this.submit();

        return false;
      });
    </script>
    <!-- /validator -->
  </body>
</html>