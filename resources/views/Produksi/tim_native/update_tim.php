<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "produksi";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
  // set the PDO error mode to exception
  // $panel_nomor=$_POST['panel_nomor'];
  $tim_nama=$_POST['tim_nama'];
  $tim_alias=$_POST['tim_alias'];
  $tim_id=$_POST['tim_id'];
 

  $sql = "UPDATE tim SET tim_nama=:tim_nama, tim_alias=:tim_alias WHERE tim_id=:tim_id";
  $query=$conn->prepare($sql);
  $query->bindparam(':tim_id',$tim_id);
  $query->bindparam(':tim_nama',$tim_nama);
  $query->bindparam(':tim_alias',$tim_alias);
  $query->execute();
  
  header("Location: index.php");

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
?>