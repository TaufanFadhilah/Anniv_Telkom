<div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="dashboard.html" class="site_title"><img src="<?php echo base_url() ?>assets/images/Logo_TelU.png" style="width: 20%; color: white;"><span>Registrasi</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?php echo base_url() ?>assets/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $this->session->userdata('id_staff'); ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Operator</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url() ?>index.php/admin"><i class="fa fa-home"></i> Home </a></li>
                  <li><a><i class="fa fa-edit"></i> Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url() ?>index.php/admin/list_participant">Guest List</a></li>
                      <li><a href="<?php echo base_url() ?>index.php/admin/insert_participant">Input Guest</a></li>
                      <li><a href="<?php echo base_url() ?>index.php/admin/guest_page">Guest Page</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Registration <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url() ?>index.php/admin/registration_list">Registration List</a></li>
                      <li><a href="<?php echo base_url() ?>index.php/admin/input_registration">Input Registration</a></li>
                    </ul>
                  </li> 
                </ul>
              </div>
            </div>
          </div>