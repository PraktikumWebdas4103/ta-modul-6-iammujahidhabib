<div>
  <a href="halamanawal.php">Halaman Awal</a>&nbsp&nbsp&nbsp
  <a href="posting.php">Post a New Story</a>&nbsp&nbsp&nbsp
  <a href="logout.php">Logout</a>
</div>
<form method="POST">
  <p>NIM :<input type="text" name="nim" placeholder="masukkan nim yang akan diubah"></p>
  <p>ID : <input type="text" name="id"></p>
  <p>Nama : <input type="text" name="nama"></p>
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
  $nim=$_POST['nim'];
  $id=$_POST['id']; 
  $nama=$_POST['nama']; 
  $pass=$_POST['pass'];
  //$md5=md5($pass); 
  $alamat=$_POST['alamat'];
  $jk=$_POST['jk'];
  $hobi=$_POST['hobi'];

  $data = "UPDATE `user` SET `id`='$id',`nama`='$nama',`pass`='$pass',`alamat`='$alamat',`jk`='$jk',`hobi`='$hobi' WHERE `nim`='$nim'";
  $simpan = $db->query($data);

  if($simpan) {
         echo "<div align='center'><b>Data telah diedit!</b></div>";
       } else {
         echo "<div align='center'>Data gagal diedit!</div>";
       } 
}
?>