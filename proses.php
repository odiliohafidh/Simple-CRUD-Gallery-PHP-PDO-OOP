<?php
require_once "config.php";

$aksi = $_GET['aksi'];

if(empty($aksi)){
	?>
		<script>
			window.location ='index.php';
		</script>
	<?php
}

if($aksi == "insertimg")
{
	$judul_gmbr= $_POST['judul_gmbr'];
	$ket_gmbr= $_POST['ket_gmbr'];
	$gmbr= $_FILES['gmbr']['tmp_name'];
	$target = 'img/';
	$nama_gmbr =$_FILES['gmbr']['name'];
	$pindah = move_uploaded_file($gmbr, $target.$nama_gmbr);
	
	if($pindah)
	{
		$data = new crud;
		$data->insertimg($judul_gmbr,$ket_gmbr,$nama_gmbr);
		?>
		<script>
			alert('Berhasil input!');
			window.location ='index.php';
		</script>
		<?php
	}

	else
	{
		?>
		<script type="text/javascript">
			alert("Tambah data tdk berhasil!");
		</script>
		<?php
	}
	
}

	if($aksi == "hps")
	{
		$data = new crud;
		$idhps =$_GET['id'];
		extract($data->criimg($idhps));
		$data->delimg($idhps);
		unlink("img/".$gmbr);
		?>
		<script>
			alert('Berhasil hapus!');
			window.location ='index.php';
		</script>
		<?php
	}

	if($aksi == "editimg")
	{
		$data = new crud;
		$eid = $_POST['id_gmbr'];
		$gmbrlm=$_POST['gmbrlm'];
		$judul_gmbr= $_POST['judul_gmbr'];
		$ket_gmbr=$_POST['ket_gmbr'];
		$gmbr= $_FILES['gmbr']['tmp_name'];
		$target = 'img/';
		$nama_gmbr =$_FILES['gmbr']['name'];
		//edit nek gambare gak mau update
		if(empty($_FILES['gmbr']) || empty($_FILES['gmbr']['tmp_name'])  )
		{			
			$data->editimg2($judul_gmbr,$ket_gmbr,$gmbrlm,$eid);
			?>
			<script>
				alert('Berhasil edit!');
				window.location ='index.php';
			</script>
			<?php
		}
		//nek gambare mau di update baru
		else
		{

			$pindah = move_uploaded_file($gmbr, $target.$nama_gmbr);
			unlink("img/".$gmbrlm);
			$data->editimg($judul_gmbr,$ket_gmbr,$nama_gmbr,$eid);
			?>
			<script>
				alert('Berhasil edit!');
				window.location ='index.php';
			</script>
			<?php

			
		}
	}

?>