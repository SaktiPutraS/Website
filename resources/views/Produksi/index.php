<?php
include_once("index_setting.php");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <!--Custom CSS -->
        <link rel="stylesheet" href="style.css">
        <title>STATUS PRODUKSI TERKINI</title>
    </head>
    
    <body>

        <div class="container-fluid bg-primary" style=" min-height: 100vh;">
            <h1 class="text-center text-light">STATUS PRODUKSI TERKINI</h1>
            <h4 class="text-center text-light">
            <span id="jam"></span> | <span id="waktu"></span>
            </h4>
            <div class="mb-4 mt-0 text-light">
                <button class="btn btn-light px-4"></button> <label>PROGRESS</label>
                <button class="btn btn-warning px-4"></button> <label>TUNDA</label>
                <button class="btn btn-success px-4"></button> <label>SELESAI</label>
                <button class="btn btn-danger px-4"></button> <label>WASPADA</label>
            </div>
            <!-- <button onclick="swapElement()">swap</button> -->
            <table class="table table-light table-bordered text-center" id="table_id">
                <!-- <table class="table_ini table-light table-bordered text-center" id="table_id"> -->
                <thead class="table-primary">
                    <tr>
                        <th rowspan=2 class="align-middle">NO</th>
                        <th rowspan=2 class="align-middle">NO SERI PANEL</th>
                        <th rowspan=2 class="align-middle">NAMA PANEL</th>
                        <th rowspan=2 class="align-middle">CELL</th>
                        <th rowspan=2 class="align-middle">NAMA PROYEK</th>
                        <th rowspan=2 class="align-middle">SPV</th>
                        <th colspan=2>TIM PRODUKSI</th>
                        <th colspan=2>DEADLINE</th>
                        <th colspan=2>QC PASS</th>
                        <th rowspan=2 class="align-middle">STATUS KOMPONEN</th>
                    </tr>
                    <tr>
                        <th>WIRING</th>
                        <th>MEKANIK</th>
                        <th>TANGGAL</th>
                        <th>JAM</th>
                        <th>TANGGAL</th>
                        <th>JAM</th>
                    </tr>
                </thead>
                <tbody id="tbod">
                    <?php
                    $nom=1;
                    while($row = $panel1->fetch(PDO::FETCH_ASSOC)) {
                        $deadline=date("Y-m-d", strtotime(substr($row['panel_deadline'],0,10). " + 30 days"));
                        // echo $deadline."time".strtotime($deadline);
                        // echo ("|");
                        $curDate=date("Y-m-d");
                        // echo strtotime($curDate);
                        // echo ("|");
                        // if($row['panel_status_pekerjaan']=='Progress'){
                        //     echo "<tr class='table-light'>";
                        // }
                        if($row['panel_status_pekerjaan']=='Tunda'){
                            echo "<tr class='table-warning'>";
                        }
                        elseif($row['panel_status_pekerjaan']=='Selesai'){
                            echo "<tr class='table-success'>";
                        }
                        elseif(strtotime($curDate) > strtotime($deadline)  ){
                            echo "<tr class='table-danger'>";
                        }
                        else{
                            echo "<tr class='table-light'>";
                        }
                        echo "<td>".$nom++."</td>";
                        echo "<td class='text-start'><span class='mx-2'>".$row['panel_seri']."</span></td>";
                        echo "<td>".$row['panel_nama']."</td>";
                        echo "<td>".$row['panel_cell']."</td>";
                        echo "<td class='marquee'><p>".$row['panel_proyek']."</p></td>";
                        echo "<td>".$row['panel_spv']."</td>";
                        echo "<td>".$row['panel_wiring']."</td>";
                        echo "<td>".$row['panel_mekanik']."</td>";
                        // echo "<td>".$deadline."</td>";
                        echo "<td>".substr($row['panel_deadline'],0,10)."</td>";
                        // echo date("Y-m-d", strtotime(substr($row['panel_deadline'],0,10). " + 1 days"));
                        echo "<td>".substr($row['panel_deadline'],11,6)."</td>";
                        echo "<td>".substr($row['panel_qcpass'],0,10)."</td>";
                        echo "<td>".substr($row['panel_qcpass'],11,6)."</td>";
                        echo "<td>".$row['panel_status_komponen']."</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <footer id="bott">
            <div class="row text-light info-text mt-2">
                <div class="col">
                    <table class="table table-sm text-light info-text text-left">
                        <tbody>
                            <tr>
                                <td>FL : </td>
                                <td>On Progress: </td>
                                <?php                           
                                echo "<td>".$cFL[1]." UNIT, ".$ccFL[1]." CELL</td>";
                                ?>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total: </td>
                                <?php                           
                                echo "<td>".$cFL[0]." UNIT, ".$ccFL[0]." CELL</td>";
                                ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col">
                    <table class="table table-sm text-light info-text text-left">
                        <tbody>
                            <tr>
                                <td>FM : </td>
                                <td>On Progress: </td>
                                <?php                           
                                echo "<td>".$cFM[1]." UNIT, ".$ccFM[1]." CELL</td>";
                                ?>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total: </td>
                                <?php                           
                                echo "<td>".$cFM[0]." UNIT, ".$ccFM[0]." CELL</td>";
                                ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col">
                    <table class="table table-sm text-light info-text text-left">
                        <tbody>
                            <tr>
                                <td>WL : </td>
                                <td>On Progress: </td>
                                <?php                           
                                echo "<td>".$cWL[1]." UNIT, ".$ccWL[1]." CELL</td>";
                                ?>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total: </td>
                                <?php                           
                                echo "<td>".$cWL[0]." UNIT, ".$ccWL[0]." CELL</td>";
                                ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col">
                    <table class="table table-sm text-light info-text text-left">
                        <tbody>
                            <tr>
                                <td>WM : </td>
                                <td>On Progress: </td>
                                <?php                           
                                echo "<td>".$cWM[1]." UNIT, ".$ccWM[1]." CELL</td>";
                                ?>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total: </td>
                                <?php                           
                                echo "<td>".$cWM[0]." UNIT, ".$ccWM[0]." CELL</td>";
                                ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row text-left text-light mx-2 mt-2">Initial Team :<br>
                <div class="col">
                    <ul class="initial">
                        <li>AAZ : Abdul Azis</li>
                        <li>APR : Agus Prianto</li>
                        <li>RBU : Rochmad Budi Utomo</li>
                        <li>AST : Ahmad Sutisna</li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="initial">
                        <li>SBH : Samsul Bahri</li>
                        <li>ASL : Akhmad Solihin</li>
                        <li>LSM : Lasimin</li>
                        <li>MIV : Muhamad Ivansyah</li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="initial">
                        <li>MRD : Muhammad Ramdhani</li>
                        <li>MAW : Muhamad Abdul Wahiyd</li>
                        <li>AFZ : Ahmad Fauzan </li>
                        <li>MNF : Muhamad Nur Fadillah</li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="initial">
                        <li>RRD : Rizki Ramadani</li>
                        <li>FAS : Faris Alfiansyah</li>
                        <li>MIA : M. Ivan Abdillah Rizky M.</li>
                    </ul>
                </div>
                <div class="col-1">
                   
                </div>
            </div>
            </footer>
        </div>
        <script>
            setInterval(swapElement, 10000);

            function swapElement() {
                let kesatu = document.getElementById("tbod").children[0];
                let kedua = document.getElementById("tbod").children[1];
                let ketiga = document.getElementById("tbod").children[2];
                let keempat = document.getElementById("tbod").children[3];
                let keenam = document.getElementById("tbod").children[5];
                document.getElementById("tbod").appendChild(kesatu);
                document.getElementById("tbod").appendChild(kedua);
                document.getElementById("tbod").appendChild(ketiga);
                document.getElementById("tbod").appendChild(keempat);
                document.getElementById("tbod").sappendChild(kelima);
                document.getElementById("tbod").sappendChild(keenam);
            };
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"  referrerpolicy="no-referrer"></script>
        <script>
        let tanggal =moment().format("DD MMM YYYY");
            document.getElementById("waktu").innerHTML=tanggal;
            setInterval(jam,1000);
            function jam(){
                let jam =moment().format("HH:mm:ss");
                document.getElementById("jam").innerHTML=jam;
            }
        </script>
    </body>
</html>