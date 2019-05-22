<header class="main-header">
        <!-- Logo -->
        <a href="<?php 
        if ($this->session->userdata('role') == "admin") {
            echo base_url('admin/dasbor'); 
           }
           else if($this->session->userdata('role') == "admin"){
            echo base_url('helpdesk/TIK/dasbor'); 
           }   
           else if($this->session->userdata('role') == "member"){
            echo base_url('member/Dashboard'); 
           }
        
       ?>" class="logo">
          
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">
          
          <?php
                  //cek user_foto
                  if ($this->session->userdata('role') == "admin") {
                   echo "<b>A</b>S";
                  }else if($this->session->userdata('role') == "member"){
                    echo "<b>M</b>S";
                  }else{
                    echo "<b>H</b>D</b>S";
                  }
                ?></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">
          
          <b>
          
          <?php
                  if ($this->session->userdata('role') == "admin") {
                   echo "AdminSystem";
                  }else if($this->session->userdata('role') == "member"){
                    echo "MemberSystem";
                  }else{
                    echo "HelpDeskSystem";
                  }
                ?></b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <?php
                  //cek user_foto
                  if ($this->session->userdata('userfoto') == "") {
                    ?>
                    <img class="user-image" src="<?=base_url();?>assets/img/not_ready.png" alt="User Image">
                    <?php
                  }else{
                    ?>
                    <img class="user-image" src="<?=base_url();?>assets/uploads/files/cabor/<?=$this->session->userdata('userfoto');?>" class="img-circle" alt="User Image">
                    <?php
                  }
                ?>
                    <span class="hidden-xs">Hai, 
                <?php
                  if ($this->session->userdata('role') == "admin") {
                   echo "Admin ";
                  }else if($this->session->userdata('role') == "member"){
                    echo "Member ";
                  }else if($this->session->userdata('role') == "TIK"){
                    echo "HelpDesk TIK";
                  }else if($this->session->userdata('role') == "RT"){
                    echo "HelpDesk RT";
                  }else if($this->session->userdata('role') == "BMN"){
                    echo "HelpDesk BMN";
                  }
                ?>
                    <?=ucfirst($this->session->userdata('username')); ?></span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                    <?php
                  //cek user_foto
                  if ($this->session->userdata('userfoto') == "") {
                    ?>
                    <img class="img-circle" src="<?=base_url();?>assets/img/not_ready.png" class="img-circle" alt="User Image">
                    <?php
                  }else{
                    ?>
                    <img class="img-circle" src="<?=base_url();?>assets/uploads/files/cabor/<?=$this->session->userdata('userfoto');?>" class="img-circle" alt="User Image">
                    <?php
                  }
                ?>
                    <p>    
                        <small>Hai, 
                <?php
                  if ($this->session->userdata('role') == "admin") {
                   echo "Admin ";
                  }else if($this->session->userdata('role') == "member"){
                    echo "Member ";
                  }else if($this->session->userdata('role') == "TIK"){
                    echo "HelpDesk TIK";
                  }else if($this->session->userdata('role') == "RT"){
                    echo "HelpDesk RT";
                  }else if($this->session->userdata('role') == "BMN"){
                    echo "HelpDesk BMN";
                  }
                ?>
                        <?=ucfirst($this->session->userdata('username'));?>!</small>
                      </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-left">

                      </div>
                      <div class="pull-right">
                        <a href="#" data-toggle="modal" data-target="#logoutConfirm" class="btn 
                        <?php
                            if ($this->session->userdata('role') == "admin") {
                            echo "btn-primary ";
                            }else if($this->session->userdata('role') == "member"){
                                echo "btn-danger ";
                            }else{
                              echo "btn-warning ";
                            }
                        ?>
                         btn-flat">Keluar</a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>  
                </li>
                </ul>
          </div>


        </nav>
      </header>