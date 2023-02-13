<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "produksi";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
  // set the PDO error mode to exception
  $nomor=$conn->query("SELECT tim_id FROM tim ORDER BY tim_id DESC LIMIT 1");
  $tim_id=1;

  while($row = $nomor->fetch(PDO::FETCH_ASSOC)) { 		
    if(empty($row['tim_id'])){
      $tim_id=1;
    }
    else{
      $tim_id=$row['tim_id']+1;
    }
  }
  // echo $tim_id;
  $tim_nama=$_POST['tim_nama'];
  $tim_alias=$_POST['tim_alias'];
  $sql = "INSERT INTO tim (tim_id, tim_nama, tim_alias) VALUES (:tim_id, :tim_nama, :tim_alias)";
  $query=$conn->prepare($sql);

  $query->bindparam(':tim_id',$tim_id);
  $query->bindparam(':tim_nama',$tim_nama);
  $query->bindparam(':tim_alias',$tim_alias);
  $query->execute();
  header("Location: index.php");

  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>