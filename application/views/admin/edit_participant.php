<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit Tamu | Registrasi 3rd Anniversary</title>

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
                    <h2><?php echo $title ?> <small><?php echo $this->session->flashdata('edit'); ?></small></h2>

                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url() ?>index.php/admin/do_edit_participant">
                     <!--  <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                      </p>
                      <span class="section">Personal Info</span> -->
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">ID <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" value="<?php echo $randNum ?>" disabled>
                          <input type="hidden" name="id_participant" class="form-control" value="<?php echo $randNum ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" name="name" placeholder="Full Name" required="required" type="text" value="<?php echo $data->name ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" placeholder="Email"  value="<?php echo $data->email ?>">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="position">Position <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="position" name="position" required="required" data-validate-minmax="11,12" maxlength="12" class="form-control col-md-7 col-xs-12" placeholder="Position"  value="<?php echo $data->position ?>">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="company">Company <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="company" type="text" name="company" required="required" data-validate-length-range="5,20" class="form-control col-md-7 col-xs-12" placeholder="Company Name"  value="<?php echo $data->company ?>">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Phone Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" placeholder="Phone Number"  value="<?php echo $data->phone ?>">
                        </div>
                      </div>
                     
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="participant">Participant Type<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="participant" name="participant_type" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $data->participant_type ?>">
                            <?php foreach ($participant_type as $row) { ?>
                  <option value="<?php echo $row['id_participant_type'] ?>"><?php echo $row['participant_type'] ?></option>
                <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="confirmation">Confirmation <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="confirm" name="attend_confirmation" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $data->attend_confirmation ?>">
                            <?php foreach ($attend_confirmation as $row) { ?>
                  <option value="<?php echo $row['id_attend_confirmation'] ?>"><?php echo $row['attend_confirmation'] ?></option>
                <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <input type="submit" value="Edit" class="btn btn-warning" name="">
                          </form>
                          <button class="btn btn-primary">Subtitute</button>
                          <form method="post" action="<?php echo base_url().'index.php/admin/delete/'.$randNum ?>">
                            <input type="submit" name="" class="btn btn-danger" value="Delete"></form>
                        </div>
                      </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
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