<?php

include_once("config.php");
$panel=$conn->query("SELECT * FROM panel_header 
 join panel_detail
on panel_header.panel_seri = panel_detail.panel_seri");
$panel1=$conn->query("SELECT * FROM panel_header 
 join panel_detail
on panel_header.panel_seri = panel_detail.panel_seri");
 $cFL=[0,0]; //Count panel FL and cell
 $cFM=[0,0]; //Count panel FM and cell
 $cWL=[0,0]; //Count panel WL and cell
 $cWM=[0,0]; //Count panel WM and cell
 $ccFL=[0,0]; //Count cell panel FL and cell
 $ccFM=[0,0]; //Count cell panel FM and cell
 $ccWL=[0,0]; //Count cell panel WL and cell
 $ccWM=[0,0]; //Count cell panel WM and cell
 while($row = $panel->fetch(PDO::FETCH_ASSOC)) {
 if(($row['panel_FW']=='F') &&($row['panel_LM']=='L')  ){
    //  Count Progress
     if($row['panel_status_pekerjaan']!='Selesai'){
         $cFL[1]+=1;
         $ccFL[1]+=$row['panel_cell'];
     }
    //  Count Total
     $cFL[0]+=1;
     $ccFL[0]+=$row['panel_cell'];
 }elseif (($row['panel_FW']=='F') &&($row['panel_LM']=='M')) {
    //  Count Progress
    if($row['panel_status_pekerjaan']!='Selesai'){
        $cFM[1]+=1;
        $ccFM[1]+=$row['panel_cell'];
    }
    //  Count Total
    $cFM[0]+=1;
    $ccFM[0]+=$row['panel_cell'];
}elseif (($row['panel_FW']=='W') &&($row['panel_LM']=='L')) {
     if($row['panel_status_pekerjaan']!='Selesai'){
         $cWL[1]+=1;
         $ccWL[1]+=$row['panel_cell'];
     }
     //  Count Total
     $cWL[0]+=1;
     $ccWL[0]+=$row['panel_cell'];
    }elseif (($row['panel_FW']=='W') &&($row['panel_LM']=='M')) {
     if($row['panel_status_pekerjaan']!='Selesai'){
         $cWM[1]+=1;
         $ccWM[1]+=$row['panel_cell'];
     }
     //  Count Total
     $cWM[0]+=1;
     $ccWM[0]+=$row['panel_cell'];
 }
}
?>