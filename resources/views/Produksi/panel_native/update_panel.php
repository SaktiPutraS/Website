<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "produksi";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
session_start();
try {
  // set the PDO error mode to exception
  // $panel_nomor=$_POST['panel_nomor'];
  $panel_seri=$_POST['panel_seri'];
  $panel_cell=$_POST['panel_cell'];
  $panel_nama=$_POST['panel_nama'];
  $panel_pelanggan=$_POST['panel_pelanggan'];
  $panel_proyek=$_POST['panel_proyek'];
  $panel_status_pekerjaan=$_POST['panel_status_pekerjaan'];
  $panel_spv=$_POST['panel_spv'];
  echo $_POST['panel_mekanik'];
  echo $_POST['panel_wiring'];
  if (empty($_POST['panel_wiring'])) {
      $_SESSION["message"] = "Isi data tim wiring";
      header("Location: edit_panel.php?id=".$panel_seri."");
    } elseif (empty($_POST['panel_mekanik'])){
    $_SESSION["message"] = "Isi data tim mekanik";
    header("Location: edit_panel.php?id=".$panel_seri."");
  }else{
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
  $panel_aktual_produksi=$_POST['panel_aktual_produksi'];
  $panel_aktual_qc=$_POST['panel_aktual_qc'];

  $sql = "UPDATE panel_header SET panel_nama=:panel_nama, panel_pelanggan=:panel_pelanggan, panel_proyek=:panel_proyek, 
  panel_status_pekerjaan=:panel_status_pekerjaan WHERE panel_seri=:panel_seri";
  $query=$conn->prepare($sql);
  $query->bindparam(':panel_seri',$panel_seri);
  $query->bindparam(':panel_nama',$panel_nama);
  $query->bindparam(':panel_pelanggan',$panel_pelanggan);
  $query->bindparam(':panel_proyek',$panel_proyek);
  $query->bindparam(':panel_status_pekerjaan',$panel_status_pekerjaan);
  $query->execute();
  
  // Update Into Detail
  $sql = "UPDATE panel_detail 
  SET panel_spv=:panel_spv, panel_wiring=:panel_wiring, panel_mekanik=:panel_mekanik, panel_deadline=:panel_deadline,
   panel_qcpass=:panel_qcpass, panel_status_komponen=:panel_status_komponen, panel_cell=:panel_cell, panel_FW=:panel_FW, 
   panel_LM=:panel_LM, panel_aktual_produksi=:panel_aktual_produksi, panel_aktual_qc=:panel_aktual_qc WHERE panel_seri=:panel_seri";
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
  $query->bindparam(':panel_aktual_produksi',$panel_aktual_produksi);
  $query->bindparam(':panel_aktual_qc',$panel_aktual_qc);
  $query->execute();


  // use exec() because no results are returned
//   $conn->exec($sql);
header("Location: index.php");
    }
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>