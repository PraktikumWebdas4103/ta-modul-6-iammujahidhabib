<div>
  <h2>Daftar Posting</h2>
  <a href="index.php">Profile</a>&nbsp&nbsp&nbsp
  <a href="posting.php">Post a New Story</a>&nbsp&nbsp&nbsp
  <a href="logout.php">Logout</a>
<?php 
include 'koneksi.php';
$sele="SELECT * FROM `post`";
$feed = $db->query($sele);
//$query = mysqli_query($connection,"SELECT * FROM rsh_admin ORDER BY id DESC");
if(mysqli_num_rows($feed)>0){
    $no = 1;
    echo "<table border=1>";
    
    while($data = mysqli_fetch_array($feed)){
    	echo "<tr>";//nama
			echo "<td>";
			echo "<b>".$data['nama']."</b>";
			echo "</td>";
      echo "</tr>";

      echo "<tr>";//foto
      echo "<td>";
      echo "<img src='uploads/";
      echo $data['foto'];
      echo "' >";
      echo "</td>";
      echo "</tr>";

      echo "<tr>";//cerita
      echo "<td>";
      echo $data['cerita'];
      echo "</td>";
      echo "</tr>";

      echo "<tr>";//batas
      echo "<td>";
      echo "<a href='editpost.php'>Edit</a><br>===================================================";
      echo "</td>";
      echo "</tr>";
      $no++; 
      }
      echo "</table>";
    }
?>

</div>