<div class="konten">
    	<div class="slider"><img src="<?php echo base_url(); ?>assets/images/gkn.png" width="624" height="326"></div>
        <div class="anggota">
          <h3>Login Member</h3>
          <?php 
          echo form_open('home/validasi'); 
            echo validation_errors('<div class="alert alert-danger"><button class="close" data-dismiss="alert" type="button">×</button>','</div>');
            echo $this->session->flashdata('msg');
            
        ?>
            <p>
              <label for="email">Username (email)</label>
              <input type="text" name="email" id="email">
            </p>
            <p>
              <label for="password">Password</label>
              <input type="password" name="password" id="password">
            </p>
            <p>
              <input type="submit" name="submit2" id="submit2" value="Masuk">
              <input type="reset" name="submit3" id="submit3" value="Reset">
            </p>
            <!--<p><a href="lohin.php?ref=lupa">Lupa password?</a> | <a href="daftar.php">Daftar jadi anggota</a></p>-->
           <?php echo form_close();?>
      </div>    
  </div>
    <!-- konten bawah -->
  <div class="clearfix"></div>
    <div class="konten">
      <div class="posting">
        <h3>Informasi</h3>
        
        <div class="ringkasan">
          <p>GKN SEMARANG</p>
          <p>Kantor Pengelolaan Teknologi Informasi dan Komunikasi dan 
            Barang Milik Negara yang selanjutnya dalam Peraturan Menteri
             Keuangan nomor 53/PMK.01/2011  disebut Kantor Pengelolaan TIK (KPTIK) dan BMN adalah Unit Pelaksana Teknis yang berada di bawah dan bertanggung jawab langsung kepada Kepala Pusat Sistem Informasi dan Teknologi Keuangan.
              Kantor Pengelolaan TIK dan BMN dipimpin oleh seorang Kepala. Kantor Pengelolaan TIK dan BMN mempunyai tugas melaksanakan Pengelolaan Teknologi Informasi dan Komunikasi dan Barang Milik Negara </p>
              </ul>
          
        </div>
      </div>
   
    </div>