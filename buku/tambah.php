<?php 

include '../koneksi.php';
include 'proses-tambah.php';

$query = mysqli_query($connect, ("SELECT * FROM kategori"));
	
?>

<?php 
	include '../aset/header.php';
?>

<div class="card">
  <div class="card-header">
  		<h2 class="card-title"> <i class="fas fa-edit"> </i> Data Buku </h2>
  </div>

<center>
		<br/>

		<h3> TAMBAH DATA BUKU PERPUSTAKAAN</h3>

		<form action="" method="post">
			<table>
				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="judul">Judul</label>
	    					<input type="text" class="form-control" name="judul">
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="penerbit">Penerbit</label>
	    					<input type="text" class="form-control" name="penerbit">
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="pengarang">Pengarang</label>
	    					<input type="text" class="form-control" name="pengarang">
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="ringkasan">Ringkasan</label>
	    					<textarea type="text" class="form-control" name="ringkasan">
	    						
	    					</textarea>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="cover">Cover</label>
	    					<input type="file" class="form-control" name="cover">
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="stok">Stok</label>
	    					<input type="int" class="form-control" name="stok">
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
						<div class="form-group">
    						<label for="kategori">Kategori</label>
						    <select class="form-control" name="id_kategori">

						      <option> Pilih </option>
						      	<?php while ($kategori = mysqli_fetch_assoc($query)): ?>

						      <option value="<?php echo $kategori["id_kategori"]; ?>"> <?php echo $kategori["kategori"]; ?> </option>

						      <?php endwhile; ?>
						    </select>
  						</div>
					</td>
				</tr>

				<br>

				<tr>
					<td> <button type="submit" class="btn btn-primary" name="simpan"> Simpan </button> </td>
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