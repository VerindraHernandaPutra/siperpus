<?php 
	include '../koneksi.php';

	$sql = "SELECT * FROM anggota ORDER BY nama";

	$res = mysqli_query($connect, $sql);

	$pinjam = array();

	while ($data = mysqli_fetch_assoc($res)) {
		$pinjam[] = $data;
	}
?>

<?php 
	include '../aset/header.php';
?>

<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			
		</div>
	</div>
</div>

<div class="card">
  <div class="card-header">
  		<h2 class="card-title"> <i class="fas fa-users"> </i> Data Anggota </h2> 
      <a href="tambah.php" class="badge badge-primary"><i class="fas fa-user-plus" ></i> Tambah </a>
  </div>

  <div class="card-body">
   		<table class="table table-striped">
  <thead>

    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php 
    	$no = 1;
    	foreach ($pinjam as $p) {
    		?>
    	

    <tr>
    	<th scope="row"> <?= $no ?> </th>
    	<td> <?= $p['nama'] ?> </th>
    	<td> <?= $p['kelas'] ?> </td>
    	<td>
    		<a href="detail.php?id_anggota=<?php echo $p['id_anggota']; ?>" class="badge badge-success">Detail</a>
    		<a href="edit.php?id_anggota=<?php echo $p['id_anggota']; ?>" class="badge badge-warning">Edit</a>
    		<a href="hapus.php?id_anggota=<?php echo $p['id_anggota']; ?>" class="badge badge-danger">Hapus</a>
    	</td>
    </tr>

    <?php 
    	$no++;
    }
    ?>
  </tbody>

</table>
  </div>
</div>

<?php 
	include '../aset/footer.php';
?>