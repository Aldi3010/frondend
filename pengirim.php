 <?php include "back_pengirim.php";?>


<div class="card mt-2">
  <div class="card-header bg-info">
    Form Data pengirim surat
  </div>
  	<div class="card-body">
		<form method="post" action="">
  			<div class="form-group">
   				<label for="nama_pengirim">Nama pengirim</label>
    			<input type="text" class="form-control" id="nama_pengirim" name="nama_pengirim" value="<?=@$vnama_pengirim?>">
 			</div>
 			<div class="form-group">
   				<label for="alamat">Alamat</label>
    			<input type="text" class="form-control" id="alamat" name="alamat" 
    			value="<?=@$valamat?>">
 			</div>
 			<div class="form-group">
   				<label for="email">EMAIL </label>
    			<input type="email" class="form-control" id="email" name="email"
    			 value="<?=@$vemail?>">
 			</div>
 			<div class="form-group">
   				<label for="no_hp">NO.hp</label>
    			<input type="text" class="form-control" id="no_hp" name="no_hp"
    			value="<?=@$vno_hp?>">
 			</div>
  		<button type="submit" name="bsimpan" class="btn btn-primary">simpan</button>
  		<button type="submit" name="bbatal" class="btn btn-danger">batal</button>

</form>
</div>
</div>

<div class="card mt-2">
  <div class="card-header bg-info">
    Data pengirim surat
  </div>
  	<div class="card-body ">
	<table class="table table-borderd table-hovered table-striped">
		<tr>
			<th>NO</th>
			<th>nama Pengirim Surat</th>
			<th>Alamat</th>
			<th>NO.hp</th>
			<th>Email</th>
			<th>AKSI</th>
		</tr>
		<?php
			$tampil = mysqli_query($koneksi, "SELECT * from pengirim_surat order by id_pengirim desc");
			$NO=1;
			while ($data = mysqli_fetch_array($tampil)):
		?>
		<tr>
			<td><?=$NO++?></td>
			<td><?=$data ['nama_pengirim']?></td>
			<td><?=$data ['alamat']?></td>
			<td><?=$data ['email']?></td>
			<td><?=$data ['no_hp']?></td>

			<td> 
				<a href="?halaman=guru&hal=edit&id=<?=$data['id_pengirim']?>" class=" btn btn-success"  > Edit </a>
				<a href="?halaman=guru&hal=hapus&id=<?=$data['id_pengirim']?>" class=" btn btn-danger"  
					onclick ="return confirm ('apakah anda inggi menghapus data???') "> Hapus </a>
			</td>

		</tr>
	<?php endwhile;?>
	</table>
</form>
</div>
</div>