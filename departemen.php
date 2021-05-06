 <?php include "back_departemen.php";?>


<div class="card mt-2">
  <div class="card-header bg-info">
    Form Data departemen
  </div>
  	<div class="card-body">
		<form method="post" action="">
  			<div class="form-group">
   			<label for="nama_departemen">NAMA departemen</label>
    		<input type="text" class="form-control" id="nama_siswa" name="nama_departemen" value="<?=@$vnama_departemen?>">
 			</div>
  		<button type="submit" name="bsimpan" class="btn btn-primary">simpan</button>
  		<button type="submit" name="bbatal" class="btn btn-danger">batal</button>

</form>
</div>
</div>

<div class="card mt-2">
  <div class="card-header bg-info">
    Data departemen
  </div>
  	<div class="card-body ">
	<table class="table table-borderd table-hovered table-striped">
		<tr>
			<th>NO</th>
			<th>nama departemen</th>
			<th>AKSI</th>
		</tr>
		<?php
			$tampil = mysqli_query($koneksi, "SELECT * from tbl_departemen order by id_departemen desc");
			$NO=1;
			while ($data = mysqli_fetch_array($tampil)):
		?>
		<tr>
			<td><?=$NO++?></td>
			<td><?=$data ['nama_departemen']?></td>

			<td> 
				<a href="?halaman=siswa&hal=edit&id=<?=$data['id_departemen']?>" class=" btn btn-success"  > Edit </a>
				<a href="?halaman=siswa&hal=hapus&id=<?=$data['id_departemen']?>" class=" btn btn-danger"  
					onclick ="return confirm ('apakah anda inggi menghapus data???') "> Hapus </a>
			</td>

		</tr>
	<?php endwhile;?>
	</table>
</form>
</div>
</div>