<?php 

include '../koneksi.php';
include 'proses-tambah.php';

?>

<?php 
	include '../aset/header.php';
?>

<div class="card">
  <div class="card-header">
  		<h2 class="card-title"> <i class="fas fa-edit"> </i> Data Anggota </h2>
  </div>

<center>
		<br/>

		<h3> TAMBAH DATA ANGGOTA PERPUSTAKAAN</h3>
		<br>

		<form action="" method="post">
			<table>
				<tr>
	  				<td>
		  				<div class="form-group">
		    				<label for="nama">Nama</label>
		    				<input type="text" class="form-control" name="nama">
		  				</div>
	  				</td>
	  			</tr>

	  			<tr>
	  				<td>
		  				<div class="form-group">
		    				<label for="kelas">Kelas</label>
		    				<input type="text" class="form-control" name="kelas">
		  				</div>
	  				</td>
	  			</tr>

	  			<tr>
	  				<td>
		  				<div class="form-group">
		    				<label for="telp">Telepon</label>
		    				<input type="text" class="form-control" name="telp">
		  				</div>
	  				</td>
	  			</tr>

	  			<tr>
	  				<td>
		  				<div class="form-group">
		    				<label for="username">Username</label>
		    				<input type="text" class="form-control" name="username">
		  				</div>
	  				</td>
	  			</tr>

	  			<tr>
	  				<td>
	  					<div class="form-group">
	    					<label for="password">Password</label>
	    					<input type="password" class="form-control" name="password">
	  					</div>
	  				</td>
	  			</tr>

	  			<tr>
	  			<td>
	  			<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
	  			</td>
	  			</tr>
			</table>
		</form>
		<br>
		<br>
		<br>

	</center>

<?php 
	include '../aset/footer.php';
?>