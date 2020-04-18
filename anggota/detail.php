<?php 	

include '../koneksi.php';
include '../aset/header.php';

$id_anggota = $_GET["id_anggota"];

$query = mysqli_query($connect, "SELECT * FROM anggota INNER JOIN level ON anggota.id_level = level.id_level WHERE id_anggota = $id_anggota");

$anggota = mysqli_fetch_assoc($query);

?>

<div class="card">
  <div class="card-header">
  		<h2 class="card-title"> <i class="fas fa-edit"> </i> Detail Anggota </h2>
  </div>

<center>
		<br/>

		<h3> DETAIL ANGGOTA PERPUSTAKAAN</h3>

		<form action="" method="post">
			<table>
				
				<tr>
					<td>
	  					<div class="form-group">
	    					<b> <label for="nama">Nama</label> </b>
	    					<br>
	    					<?= $anggota['nama']; ?>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<b> <label for="kelas">Kelas</label> </b>
	    					<br>
	    					<?= $anggota['kelas']; ?>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<b> <label for="telp">Telepon</label> </b>
	    					<br>
	    					<?= $anggota['telp']; ?>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<b> <label for="username">Username</label> </b>
	    					<br>
	    					<?= $anggota['username']; ?>
	    						
	    					</textarea>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<b> <label for="password">Password</label> </b>
	    					<br>
	    					<?= $anggota['password']; ?>
	  					</div>
	  				</td>
				</tr>

				<br>

			</table>
		</form>
		<br>
		<br>
		<br>

	</center>



<?php 	

include '../aset/footer.php';

?>