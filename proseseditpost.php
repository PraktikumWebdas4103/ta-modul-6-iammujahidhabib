<?php
	if (isset($_POST['submit'])) {
		$cerita=$_POST['cerita'];
		$nama=$_POST['nama'];
		//$foto=$_FILES['fileToUpload'];

	$fileName = $_FILES['gambar']['name'];
	move_uploaded_file($_FILES['gambar']['tmp_name'], "uploads/".$_FILES['gambar']['name']);
	//echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";

	include 'koneksi.php';
	if (empty($error_cerita)) {
		//UPDATE `user` SET `id`='$id',`nama`='$nama',`pass`='$pass',`alamat`='$alamat',`jk`='$jk',`hobi`='$hobi' WHERE `nim`='$nim'
		$sql="UPDATE `post` SET `foto`='$fileName', `cerita`='$cerita' WHERE `nama`='$nama'";
		$simpan = $db->query($sql);
	    if ($simpan) {
	      echo "<p>POSTED</p>";
	      header('Location:daftarposting.php');
	    }else{
	      echo "<p>POST ERROR</p>";
	    }
	}
  
  }
?>