<?php
require_once "config.php";
$data = new crud;

require_once "hdr.php";
require_once "nav.php";
?>

	
	<div class="container">
		<h3>Input Gambar</h3>
		<div class="row">

			<div class="col-sm-8">
				<form action="proses.php?aksi=insertimg" enctype="multipart/form-data" method="post">
					
					<div class="form-group">
					    <label>Nama Gambar:</label>
					    <input type="text" name="judul_gmbr" class="form-control">
					</div>

					<div class="form-group">
					    <label>Ketengan:</label>
					    <textarea type="text" name="ket_gmbr" class="form-control"></textarea>
					</div>

					<div class="form-group">
						<label class="control-label">Gambar</label>
						<input name="gmbr" type="file" class="form-control" accept="image/*" id="recipient-name" required>
					</div>					

					<div class="form-group">
						<button type="reset"  class="btn btn-default">Reset</button>
						<button type="submit" name="krm"  class="btn btn-primary">Simpan</button>
					 </div>

				</form>
			</div>

			<div class="col-sm-4">
			</div>

		</div>
	</div>




<?php require_once "ftr.php";?>