<?php 

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";
		return $this->execute($query); // ekseskusi query
	}

	function add(){
		// memasukkan data ke database dengan membuat query sesuai dengan masukan
		$namex = $_POST['tname'];
		$detailx = $_POST['tdetails'];
		$subjectx = $_POST['tsubject'];
		$priorityx = $_POST['tpriority'];
		$deadlinex = $_POST['tdeadline'];
		// status belum bisa dibuat karena ga paham

		$insert = "INSERT into tb_to_do (name_td, details_td, subject_td, priority_td, deadline_td, status_td) VALUES ('$namex', '$detailx', '$subjectx', '$priorityx', '$deadlinex', 'Belum')";
		return $this->execute($insert);
	}

	// mengubah status jika task sudah dipenuhi dengan memberikan kata sudah
	function update($id){
		$update = "UPDATE tb_to_do SET status_td='Sudah' WHERE id=$id";
		return $this->execute($update);
	}

	// menghapus data dengan menggunakan query yang sudah dibuat dengan berdasarkan id
	function delete($id){
		$delete = "DELETE FROM tb_to_do WHERE id=$id";
		return $this->execute($delete);
	}

	// mengurutkan data
	function sorting($key){
		$sort = "SELECT * FROM tb_to_do ORDER BY $key ASC";
		return $this->execute($sort);
	}
}

?>
