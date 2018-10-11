<?php
  $error_cerita="";
?>
<div>
  <a href="halamanawal.php">Halaman Awal</a>&nbsp&nbsp&nbsp
  <a href="daftarposting.php">Daftar Posting</a>&nbsp&nbsp&nbsp
  <a href="logout.php">Logout</a>
</div>
<div>
  <form method="post" enctype="multipart/form-data" action="proseseditpost.php">
    <p>Nama : <input type="nama" name="nama" placeholder="nama sesuai dengan registrasi"></p>
    <?php  
      if (isset($_POST['cerita'])) {
        $hitung=str_word_count($cerita);
        if ($hitung>30) {
          $error_cerita="Jumlah kata pada cerita anda melebihi batas maksimal.";
        }
      }
    ?>
    <p>Cerita : <textarea name="cerita" rows="20" cols="80" placeholder="maksimal 30 kata"></textarea>
      <span style="color:red"><?php echo $error_cerita; ?></span>
    </p>
    <p>Foto : <input type="file" name="gambar"></p>
    <input type="submit" name="submit" value="Post">
  </form>
</div>
