<?php
//including the database connection file
include_once("../config.php");

$panel=$conn->query("SELECT * FROM panel_header 
 join panel_detail
on panel_header.panel_seri = panel_detail.panel_seri");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  
          <!--Custom CSS -->
          <!-- <link rel="stylesheet" href="style.css"> -->
          <link rel="stylesheet" href="../style2.css">
          <link rel="stylesheet" href="../style3.css">

          <!-- Right Click -->
          <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Datatables -->
    <!-- <link rel="stylesheet" href=" https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> -->
   <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    

    <title>STATUS PRODUKSI TERKINI</title>
  
</head>

<body>
    <div class="container-fluid bg-com">
        <div>
            <button id="side-show" onclick="showNav()" type="button">
            </button>
        </div>
        <div class="row">
            <!-- Left Nav -->
            <div class="col-3 bg-dark text-light sticky-sm-top" id="side-nav">
                <hr>
                <span class="noselect">PRODUKSI</span>
                <a class="icon-close" onclick="closeNav()"><i class="bi bi-x-circle"style="font-size: 1.4rem;cursor:pointer"></i></a>
                <hr>
                <!-- Menu -->
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          Panel
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul class="side-nav text-dark">
                                    <li class="nav-item">
                                        <a href="../panel/index.php" class="nav-link">
                                            List Panel
                                        </a></li>
                                    <li class="nav-item">
                                        <a href="../panel/input_panel.php" class="nav-link">Tambah</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                       Tim
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul class="side-nav text-dark">
                                <li class="nav-item">
                                        <a href="../tim/index.php" class="nav-link">
                                            List Tim
                                        </a></li>
                                    <li class="nav-item">
                                        <a href="../tim/input_tim.php" class="nav-link">Tambah</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Menu -->
            </div>
            <!-- Content -->
            <div class="col">
                <h1 class="text-center text-shadow">Input Panel</h1>
                <!-- Start Card -->
                <div class="card mx-5 shadow mt-5">
                    <div class="card-body">
                    <table class="table table-striped" id="list_panel"style="width:100%">
                        <thead class="table-primary">
                            <tr>
                                <th>#</th>
                                <th>No Seri</th>
                                <th>Nama Panel</th>
                                <th>Nama Proyek</th>
                                <th>Status Komponen</th>
                                <th>Status Pekerjaan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor=1;
                        while($row = $panel->fetch(PDO::FETCH_ASSOC)) { 	
                            // echo "<tr id='".$row['panel_seri']."'>";
                            echo "<tr id='target' oncontextmenu='rightClick()';return false;'>";
                            echo "<td>".$nomor++."</td>";
                            echo "<td>".$row['panel_seri']."</td>";
                            echo "<td>".$row['panel_nama']."</td>";
                            echo "<td>".$row['panel_proyek']."</td>";
                            echo "<td>".$row['panel_status_komponen']."</td>";
                            echo "<td>".$row['panel_status_pekerjaan']."</td>";
                            $change='confirm("Ingin hapus '.$row["panel_seri"].'")';
                            echo "<td><a class='text-primary' href='edit_panel.php?id=".$row['panel_seri']."'><i class='bi bi-pencil-square'></i></a>
                            <a class='text-danger' onclick='return ".$change."'  href='destroy_panel.php?id=".$row['panel_seri']."'><i class='bi bi-trash-fill'></i></a>
                            </td>";
                            // echo "<td><a class='text-danger' href='edit_panel.php?id=".$row['id']."'><i class='bi bi-trash-fill'></i></a></td>";
                            echo "</tr>";
                        }?>
                        </tbody>
                    </table>    

                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Content -->
        </div>

    </div>
    
    <!-- Script -->
    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#list_panel').DataTable();
            } );
    </script>
    <script>
        function closeNav(){
            let ele=document.getElementById("side-nav");
            // document.getElementById
            ele.style.width="0%";
            ele.style.opacity=0;
            let ele1=document.getElementById("side-show");
            ele1.style.opacity=1;
            // ele.style.display="none";
        }
        function showNav(){
            let ele1=document.getElementById("side-show");
            ele1.style.opacity=0;
            let ele=document.getElementById("side-nav");
            // document.getElementById
            ele.style.width="20%";
            ele.style.opacity=1;
            // ele.style.display="none";
        }
    </script>
  
</body>

</html>