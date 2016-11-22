<?php
require_once "config.php";
$data = new crud;

require_once "hdr.php";
require_once "nav.php";
?>


	<?php
	$eid = $_GET['id'];
	extract($data->vei($eid));
	?>
	<div class="container">
		<h3>Edit Gambar</h3>
		<div class="row">
			<div class="col-sm-8">
				<form action="proses.php?aksi=editimg" enctype="multipart/form-data" method="post">
					
					<div class="form-group">
					    <label>Nama Gambar:</label>
					    <input type="hidden" name="id_gmbr" class="form-control" value="<?php echo $id_gmbr; ?>" >
					    <input type="hidden" name="gmbrlm" class="form-control" value="<?php echo $gmbr; ?>" >
					    <input type="text" name="judul_gmbr" class="form-control" value="<?php echo $judul_gmbr; ?>">
					</div>

					<div class="form-group">
					    <label>Ketengan:</label>
					    <textarea type="text" name="ket_gmbr" class="form-control"><?php echo $ket_gmbr; ?></textarea>
					</div>

					<div class="form-group">
						<label class="control-label">Gambar</label>
						<p><img src="img/<?php echo $gmbr?>" height="200" /></p>
						<input name="gmbr" type="file" class="form-control" accept="image/*" id="recipient-name" >
					</div>					

					<div class="form-group">
						<a href="index.php" class="btn btn-default">Batal</a>
						<button type="submit" name="krm"  class="btn btn-primary">Simpan</button>
					 </div>

				</form>
			</div>

			<div class="col-sm-4">
			</div>
		</div>
	</div>


<?php require_once "ftr.php";?>