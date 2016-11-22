<?php

class crud
{
	
	public function __construct()
	{

		$this->db = new PDO('mysql:host=localhost;dbname=lth2','root','');
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}


	public function viewimg()
	{
			$query = $this->db->query('Select * from `galeri`');
			return $query;

	}

	public function insertimg($a,$b,$c)
	{
		$sql = "INSERT INTO `galeri`(`judul_gmbr`,`ket_gmbr`,`gmbr`) values (?,?,?)";
		$query = $this->db->prepare($sql);

		$params = array(
			$a,
			$b,
			$c
		);

		$query->execute($params);		


	}

	public function criimg($id){
		$stmt = $this->db->prepare("SELECT * FROM galeri WHERE id_gmbr=:id");
		$stmt->execute(array(":id"=>$id));
		$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}
	
	public function delimg($id)
	{
		$sql= "DELETE FROM galeri where id_gmbr = ?";
		$query = $this->db->prepare($sql);

		$params = array(
			$id
			);
		$query->execute($params);
	}

	public function vei($id){
		$stmt = $this->db->prepare("SELECT * FROM galeri WHERE id_gmbr=:id");
		$stmt->execute(array(":id"=>$id));
		$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}

	public function editimg($judul_gmbr,$ket_gmbr,$gmbr,$id_gmbr){
		$sql ="UPDATE galeri set judul_gmbr=?,ket_gmbr=?,gmbr=? where id_gmbr =?";
		$query = $this->db->prepare($sql);
		$params = array(
			$judul_gmbr,
			$ket_gmbr,
			$gmbr,
			$id_gmbr);
		$query->execute($params);

	}

	public function editimg2($judul_gmbr,$ket_gmbr,$gmbr,$id_gmbr){
		$sql ="UPDATE galeri set judul_gmbr=?,ket_gmbr=?,gmbr=? where id_gmbr =?";
		$query = $this->db->prepare($sql);
		$params = array(
			$judul_gmbr,
			$ket_gmbr,
			$gmbr,
			$id_gmbr);
		$query->execute($params);		
	}


}


?>