<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

	<div class="container" style="margin-top: 80px">
		<div class="col-md-12">
			<?php echo form_open('angg/simpan') ?>
			  
			  <div class="form-group">
              <label for="text">Formulir Keanggotaan </label>
			    <label for="text">Kode Anggota</label>
			    <input type="text" name="kode_agt" class="form-control" placeholder="Masukkan No. ISBN">
			  </div>

				<div class="form-group">
			    <label for="text">Nama</label>
			    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Buku">
			  </div>

				<div class="form-group">
			    <label for="text">Nip</label>
			    <input type="text" name="nip" class="form-control" placeholder="Masukkan Nama Buku">
			  </div>

              <div class="form-group">
			    <label for="text">Akun Kemenkeu</label>
			    <input type="text" name="akun" class="form-control" placeholder="Masukkan Nama Buku">
			  </div>

               <div class="form-group">
			    <label for="text">......................</label>
			    <input type="text" name="eslon" class="form-control" placeholder="Masukkan Nama Buku">
			  </div>

             <div class="form-group">
			    <label for="text">Nip</label>
			    <input type="text" name="nip_eslon" class="form-control" placeholder="Masukkan Nama Buku">
			  </div>

              




			  
			  <button type="submit" class="btn btn-md btn-success">Simpan</button>
			  <button type="reset" class="btn btn-md btn-warning">reset</button>
			<?php echo form_close() ?>
		</div>
	</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
	$('#table').DataTable( {
    autoFill: true
} );
</script>
</body>
</html>