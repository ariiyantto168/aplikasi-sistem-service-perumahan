<?php
include 'header.php';
?>
<h3 class="col-md-4">Data Penghuni</h3>
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-14">
<div class="card">
    <div class="card-header" data-background-color="purple">
        <h4 class="title">Profile Penghuni</h4>
        <a href="data_penghuni.php"><i class="material-icons">navigate_before</i>  Kembali</a>
    </div>
	<div class="card-content">
	<div class="col-md-12">
	<?php 
		$id=mysql_real_escape_string($_GET['id_member']);
		$p=mysql_query("select * from member where id_member='$id'");
		while($b=mysql_fetch_array($p)){
		$u=mysql_query("select * from user where id_member='$b[id_member]'");
		$q=mysql_fetch_array($u);
		
		?>
	<form action="buat_akun.php" method="post" class="col-md-7">
		
		<table class="table">
		<input name="id_member" type="hidden" class="form-control"  id="id_member" value="<?php echo $b['id_member']?>">
					<tr>
					<td>
					
					<img class="img-responsive center" style="width:150px;height:150px;" src="../assets/img/<?php echo $b['foto']; ?>">
					</a>
					</td>
					</tr>			
					<tr>
					<td>
					<label>Nama Penghuni</label></td>
					<td><input name="nama" type="text" class="form-control" placeholder="Nama " id="nama" value="<?php echo $b['nama']?>" readonly>
					</td>
					</tr>
					<tr>
					<td>
						<label>Jabatan</label></td>
						<td><input name="jabatan" type="text" class="form-control" placeholder="jabatan" id="jabatan"value="<?php echo $b['jabatan']?>" readonly></td>
					</tr>
					<tr>
					<td>
					<label>No Telepon</label></td>
						<td><input name="no_telp" type="number_format" class="form-control" placeholder="No Telepon" id="no_telp" value="<?php echo $b['telepon']?>" readonly></td>
					</tr>
					<tr>
					<td>
					<label>Kode Area</label></td>
						<td><input name="kode" type="number_format" class="form-control" placeholder="kode area" id="kode" value="<?php echo $b['kode_area']?>" readonly></td>
					</tr>
					<tr>
					<td>
					<label>Alamat</label></td>
						<td><input name="alamat" type="text" class="form-control" placeholder="alamat" id="alamat" value="<?php echo $b['alamat']?>" readonly></td>
					</tr>
					<tr>
					<td>
					<label>Username</label></td>
						<td><input name="uname" type="text" class="form-control" placeholder="Tidak Aktif" id="uname" value="<?php echo $q['uname']?>" required></td>
					</tr>
					<tr>
					<td>
					<label>Password</label></td>
						<td><input name="password" type="text" class="form-control" placeholder="Tidak Aktif" id="password" value="<?php echo $q['password']?>" required></td>
					</tr>	
					<tr>
					<td>
					<label>Hak Akses</label></td>
						<td><select name="akses" type="text" class="form-control" placeholder="Tidak Aktif" id="akses"  selected required>
							<option><?php echo $q['akses']?></option>
							<option value="admin">Admin</option>
							<option value="penghuni">Penghuni</option>
							<option value="tenaga ahli">Tenaga Ahli</option>
							</select></td>
					</tr>						
				</table>
				<button type="submit" class="btn btn-primary pull-left"><i class="material-icons prefix">person_add</i>&nbsp;Simpan</button>
	<?php 
	}
		
	?>	
	</form>	
	
			

	</div>
	</div>
</div>
</div>
</div>
</div>
</div>
<?php
include 'footer.php';
?>