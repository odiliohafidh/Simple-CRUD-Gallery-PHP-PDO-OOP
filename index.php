<?php
require_once "config.php";
$data = new crud;

require_once "hdr.php";
require_once "nav.php";
?>

	
	<div class="container">
		
		<div class="row">


			<?php
			$no=1;
			$view = $data->viewimg();
		
			if($view->rowCount()>0)
			{
				while ($row = $view->fetch(PDO::FETCH_OBJ)) 
				{
				?>

					<div class="col-sm-3 col-md-4">
					<div class="thumbnail">
					  <img style="height: 250px;" src="img/<?php echo $row->gmbr;?>" height="200px" alt="<?php echo $row->judul_gmbr ;?>">
					  <div class="caption">
						<h3><?php echo $row->judul_gmbr ;?></h3>
						<p><?php echo $row->ket_gmbr ;?></p>
						<p><a href="edit.php?id=<?php echo $row->id_gmbr ; ?>" class="btn btn-primary" role="button">Edit</a> 
						<a href="proses.php?aksi=hps&id=<?php echo $row->id_gmbr ; ?>" class="btn btn-default" onclick="return confirm('Yakin Hapus?')" role="button">Hapus</a></p>
					  </div>
					</div>
				  </div>
				
				<?php
				}
			}
			else
			{

				echo "Data Kosong";
			}
			?>

		</div>
	</div>
<?php require_once "ftr.php";?>