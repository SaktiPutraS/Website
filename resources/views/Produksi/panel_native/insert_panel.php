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
//   $panel_seri=$_POST['panel_seri'];
  $panel_cell=$_POST['panel_cell'];
  $panel_nama=$_POST['panel_nama'];
  $panel_pelanggan=$_POST['panel_pelanggan'];
  $panel_proyek=$_POST['panel_proyek'];
  $panel_status_pekerjaan=$_POST['panel_status_pekerjaan'];
  $panel_spv=$_POST['panel_spv'];
  $panel_wiring="";
  $panel_mekanik="";
  foreach ($_POST['panel_wiring'] as $key => $value){
        // echo $value;
        $panel_wiring=$panel_wiring.$value.", ";
      }
      foreach ($_POST['panel_mekanik'] as $key => $value) {
    $panel_mekanik=$panel_mekanik.$value.", ";
		} 
    $panel_wiring= substr($panel_wiring,0,-2);
    $panel_mekanik= substr($panel_mekanik,0,-2);
  $panel_deadline=$_POST['panel_deadline'];
  $panel_qcpass=$_POST['panel_qcpass'];
  $panel_status_komponen=$_POST['panel_status_komponen'];
  $panel_FW=$_POST['panel_FW'];
  $panel_LM=$_POST['panel_LM'];
  $panel_nomor=1;
  $nomor=$conn->query("SELECT panel_nomor FROM panel_header ORDER BY panel_nomor DESC LIMIT 1");
  while($row = $nomor->fetch(PDO::FETCH_ASSOC)) { 		
    if(empty($row['panel_nomor'])){
      $panel_nomor=1;
    }
    else{
      $panel_nomor=$row['panel_nomor']+1;
    }
  }
  $panel_nomor= sprintf('%04d', $panel_nomor); //ubah nomor dengan depan 000
  $panel_seri=substr(date('Y'),2,2) . date('m') . $panel_nomor .$panel_cell. $panel_FW .  $panel_LM;
  $sql = "INSERT INTO panel_header (panel_nomor, panel_seri, panel_nama, panel_pelanggan, panel_proyek, panel_status_pekerjaan)
  VALUES (:panel_nomor, :panel_seri, :panel_nama, :panel_pelanggan, :panel_proyek, :panel_status_pekerjaan)";
  $query=$conn->prepare($sql);

  $query->bindparam(':panel_nomor',$panel_nomor);
  $query->bindparam(':panel_seri',$panel_seri);
  $query->bindparam(':panel_nama',$panel_nama);
  $query->bindparam(':panel_pelanggan',$panel_pelanggan);
  $query->bindparam(':panel_proyek',$panel_proyek);
  $query->bindparam(':panel_status_pekerjaan',$panel_status_pekerjaan);
  $query->execute();
  // Insert Into Detail
  $sql = "INSERT INTO panel_detail (panel_seri, panel_spv, panel_wiring, panel_mekanik, panel_deadline, panel_qcpass, panel_status_komponen, panel_cell,panel_FW, panel_LM)
  VALUES ( :panel_seri, :panel_spv, :panel_wiring, :panel_mekanik, :panel_deadline, :panel_qcpass, :panel_status_komponen, :panel_cell, :panel_FW, :panel_LM)";
  $query=$conn->prepare($sql);

  $query->bindparam(':panel_spv',$panel_spv);
  $query->bindparam(':panel_seri',$panel_seri);
  $query->bindparam(':panel_wiring',$panel_wiring);
  $query->bindparam(':panel_mekanik',$panel_mekanik);
  $query->bindparam(':panel_deadline',$panel_deadline);
  $query->bindparam(':panel_qcpass',$panel_qcpass);
  $query->bindparam(':panel_status_komponen',$panel_status_komponen);
  $query->bindparam(':panel_cell',$panel_cell);
  $query->bindparam(':panel_FW',$panel_FW);
  $query->bindparam(':panel_LM',$panel_LM);
  $query->execute();


  // use exec() because no results are returned
//   $conn->exec($sql);
header("Location: input_panel.php");

  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>