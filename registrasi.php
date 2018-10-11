<form method="POST">
	<p>ID : <input type="text" name="id"></p>
	<p>Nama : <input type="text" name="nama"></p>
	<p>NIM : <input type="text" name="nim"></p>
	<p>Pass : <input type="text" name="pass"></p>
	<p>re-Pass : <input type="text" name="re-pass"></p>
	<p>Alamat : <textarea name="alamat"></textarea></p>
	<p>Jenis Kelamin :
      <input type="radio" name="jk" value="Laki-Laki"> Laki-Laki
      <input type="radio" name="jk" value="Perempuan"> Perempuan</p>
    <p>Hobi : <br>
      <input type="checkbox" name="hobi[]" value="Futsal"> Futsal <br>
      <input type="checkbox" name="hobi[]" value="Basket"> Basket<br>
      <input type="checkbox" name="hobi[]" value="Mancing"> Mancing</p>
	<input type="submit" name="submit">
</form>

<?php 
	include 'koneksi.php'; 
	if(isset($_POST['submit'])){
		$id=$_POST['id']; 
		$nama=$_POST['nama'];
		$nim=$_POST['nim']; 
		$pass=$_POST['pass'];
		//$md5=md5($pass); 
		$alamat=$_POST['alamat'];
		$jk=$_POST['jk'];
		$hobi=$_POST['hobi'];

		$data = "INSERT INTO user(nim,id,nama,pass,alamat,jk,hobi) VALUES ('$nim','$id','$nama','$pass','$alamat','$jk','$newhobi')";
	    $simpan = $db->query($data);

		if($simpan) {
	         header('Location:login.php');
	       } else {
	         echo "<div align='center'>Proses Gagal!</div>";
	       } 
	}
?>