<div class="modal 
            <?php
                  if ($this->session->userdata('role') == "admin") {
                   echo "modal-primary ";
                  }else if($this->session->userdata('role') == "member"){
                    echo "modal-danger ";
                  }else{
                    echo "modal-warning ";
                  }
                ?>
 fade" id="logoutConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Konfirmasi Keluar</h4>
          </div>
          <div class="modal-body">
            Apakah Kamu benar - benar ingin <strong>keluar dari Sistem  
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
                ?> </strong>, <?=ucfirst($this->session->userdata('username')); ?> ?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Gak Jadi</button>
            <a href="<?=base_url();?>home/logout" class="btn 
            <?php
                  if ($this->session->userdata('role') == "admin") {
                   echo "btn-primary ";
                  }else if($this->session->userdata('role') == "member"){
                    echo "btn-danger ";
                  }else{
                    echo "btn-warning ";
                  }
                ?>
            "><i class="fa fa-check"></i> Logout Sekarang</a>
          </div>
        </div>
      </div>
    </div> <!-- akhir dari modal logout -->