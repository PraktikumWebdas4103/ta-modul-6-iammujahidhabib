<?php
	//require_once('login.php');
	include 'koneksi.php';
	$sele="SELECT nama, id, alamat,jk,hobi FROM `user`";
	$feed = $db->query($sele);
	$data = mysqli_fetch_array($feed);
?>
<div>
	<a href="editprofile.php">Edit Profile</a>&nbsp&nbsp&nbsp
	<a href="posting.php">Post a New Story</a>&nbsp&nbsp&nbsp
	<a href="logout.php">Logout</a>
</div>
<div>
	<?php
		echo "<h2>My Profile</h2>";
		echo "<table>";
		echo "<tr><td>Nama</td><td>:</td>";//nama
		echo "<td>";
		echo $data['nama'];
		echo "</td><tr>";
		echo "<tr><td>ID</td><td>:</td>";//id
		echo "<td>".$data['id']."</td><tr>";
		echo "<tr><td>Alamat</td><td>:</td>";//alamat
		echo "<td>".$data['alamat']."</td><tr>";
		echo "<tr><td>Jenis Kelamin</td><td>:</td>";//jeniskelamin
		echo "<td>".$data['jk']."</td><tr>";
		echo "<tr><td>Hobi</td><td>:</td>";//hobi
		echo "<td>".$data['hobi']."</td><tr>";
		echo "<table>";
	?>
</div>