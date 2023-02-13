<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Display Produksi</title>
    <style type="text/css">
        .none{
            display: none;
        }
        @font-face {
          font-weight: 400;
          font-style:  normal;
          font-family: 'Circular-Loom';

          src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Book.woff2') format('woff2');
        }

        @font-face {
          font-weight: 500;
          font-style:  normal;
          font-family: 'Circular-Loom';

          src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Medium.woff2') format('woff2');
        }

        @font-face {
          font-weight: 700;
          font-style:  normal;
          font-family: 'Circular-Loom';

          src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Bold.woff2') format('woff2');
        }

        @font-face {
          font-weight: 900;
          font-style:  normal;
          font-family: 'Circular-Loom';

          src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Black.woff2') format('woff2');
        }</style>
</head>
<body class="bg-primary bg-opacity-75">
<header>
    <h1 class="text-center text-white fs-1">STATUS PRODUKSI TERKINI</h1>
    <h2 class="text-center text-white fs-2">
        <span id="jam"></span> | <span id="waktu"></span>
    </h2>
</header>
<div class="mx-4">
    <table class="table table-bordered border-2">
        <thead class="bg-white bg-opacity-50 text-center align-middle">
            <tr>
                <th rowspan="2" style="width: 6ch;">NO</th>
                <th rowspan="2" style="width:20ch">NO SERI PANEL</th>
                <th rowspan="2">NAMA PANEL</th>
                <th rowspan="2" style="width:5ch">CELL</th>
                <th rowspan="2">NAMA PROYEK</th>
                <th rowspan="2" style="width: 20ch">SPV</th>
                <th rowspan="1" colspan="2">TIM PRODUKSI</th>
                <th rowspan="1" colspan="2">DEADLINE</th>
                <th rowspan="2" style="width: 10ch">KOMPONEN</th>
            </tr>
            <tr>
                <th style="width: 20ch">WIRING</th>
                <th style="width: 20ch">MEKANIK</th>
                <th style="width: 20ch">PRODUKSI</th>
                <th style="width: 20ch">QC</th>
            </tr>
        </thead>
        <tbody class="text-center align-middle border-black" id="list">
            <?php $nomor=1;
                $freeWaspada=0; //Nilai Waspada Freestanding
                $freeProgress=0;//Nilai Progress Freestanding
                $freeSelesai=0;//Nilai Selesai Freestanding
                $freeTunda=0;//Nilai Tunda Freestanding
                $freeTotal=0;
                $wallWaspada=0;
                $wallProgress=0;
                $wallSelesai=0;
                $wallTunda=0;
                $wallTotal=0;
                $willNone="";
            ?>
            @foreach ($list as $list)
            @php
                $pDone = $list->PDone; //timestamp produksi done
                $qDone = $list->QDone; //timestamp qc done
                $now = new DateTime(); //current date and time
                $dProduksi=new DateTime($list->deadline_produksi); //Deadline set by p3c
                $dQC=new DateTime($list->deadline_qc_pass); //Deadline set by p3c
                // Hitung jumlah profuksi
                if ($pDone != null) {
                    $pdStats="bg-success text-white";
                } else {
                    if ($now > $dProduksi) {
                        $pdStats="bg-danger text-white 3";
                    }else {
                        $pdStats="";
                    }
                }
                // Hitung jumlah QC
                if ($qDone != null) {
                    // Hitung jumlah yang selesai
                    $timestamp = strtotime($qDone);
                    
                    // Check if more than 7 days
                    if(time() - $timestamp > 604800) {
                    // run something if the assigned timestamp is more than 7 days from the current timestamp
                        $willNone="none";
                    }else {
                        $willNone="";
                        $qcStats="bg-success text-white";
                    }
                    switch ($list->jenis_panel) {
                        case 'W':
                            $wallSelesai += 1;
                        break;
                        default:
                            $freeSelesai += 1;
                        break;
                    }

                } else {
                    if ($now > $dQC) {
                        $qcStats="bg-danger text-white 3";
                        switch ($list->jenis_panel) {
                            case 'W':
                                $wallWaspada += 1;
                            break;
                            default:
                                $freeWaspada += 1;
                            break;
                        }
                    }else {
                        $qcStats="bg-success text-white";
                        switch ($list->jenis_panel) {
                            case 'W':
                                $wallProgress += 1;
                            break;
                            default:
                                $freeProgress += 1;
                            break;
                        }
                    }
                }

                // Hitung total panel berdasarkan jenisnya
                switch ($list->jenis_panel) {
                    case 'W':
                        $wallTotal += 1;
                    break;

                    default:
                    $freeTotal += 1;
                        break;
                }
            @endphp
            <tr class="bg-light {{$willNone}}">
                <td>{{$nomor++}}</td>
                <td class="fw-bold">{{$list->nomor_seri_panel}}</td>
                <td> {{$list->nama_panel}}</td>
                <td>{{$list->cell}}</td>
                <td>{{$list->nama_proyek}}</td>
                <td>{{$list->spv}}</td>
                <td>{{implode(", ",explode(",",$list->wiring))}}</td>
                <td>{{implode(", ",explode(",",$list->mekanik))}}</td>
                <td class="{{$pdStats}}">{{date("d/m/Y",strtotime(substr($list->deadline_produksi,0,10)))}}</td>
                <td class="{{$qcStats}}">{{date("d/m/Y",strtotime(substr($list->deadline_qc_pass,0,10)))}}</td>
                <td>{{$list->status_komponen}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<footer>
    <div class="mx-4">
    <table class="table table-bordered bg-light text-center table-sm">
        <thead>
            <tr>
                <th>TIPE PANEL</th>
                <th>PROGRESS</th>
                <th class="bg-success text-white">SELESAI</th>
                <th class="bg-danger text-white">WASPADA</th>
                <th class="bg-warning text-dark">TUNDA</th>
                <th>TOTAL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Free Standing</td>
                <td>{{$freeProgress}}</td>
                <td>{{$freeSelesai}}</td>
                <td>{{$freeWaspada}}</td>
                <td>{{$freeTunda}}</td>
                <td>{{$freeTotal}}</td>
            </tr>
            <tr>
                <td>Wall Mounting</td>
                <td>{{$wallProgress}}</td>
                <td>{{$wallSelesai}}</td>
                <td>{{$wallWaspada}}</td>
                <td>{{$wallTunda}}</td>
                <td>{{$wallTotal}}</td>
                </tr>
        </tbody>
    </table>
</div>
</footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/3.29.3/moment.min.js"  referrerpolicy="no-referrer"></script>
    <script src="{{asset('plugins/moment/moment.js')}}"></script>
    <script>
        let tanggal =moment().format("DD MMM YYYY");
        let upp = tanggal.toString("dd MMM yyyy").toUpperCase();
        document.getElementById("waktu").innerHTML=upp;
        setInterval(jam,1000);
        function jam(){
            let jam =moment().format("HH:mm:ss");
            document.getElementById("jam").innerHTML=jam;
        }
    </script>

    <script>
        $(document).ready(function(){
            var table = $("#list");
            var tableRows = $("#list tr");
            var numRows = tableRows.length;

            // Reset or refresh page
            var time=numRows*7000;
            setTimeout("location.reload(true);",time);


            var rowsToAdd = 10 - (numRows % 10);
            var rowIndex = 0;

            // Add blank rows if needed
            for(var i = 0; i < rowsToAdd; i++) {
                table.append("<tr><td>&nbsp;</td></tr>");
            }

            tableRows = $("#list tr");
            numRows = tableRows.length;
            // Hide all rows except the first 10
            tableRows.hide();
            tableRows.slice(0, 10).show();

            setInterval(function(){
                // Hide the previous 10 rows
                tableRows.slice(rowIndex, rowIndex + 10).hide();

                // Increment the row index
                rowIndex += 10;

                // If we've reached the end of the table, reset the row index
                if(rowIndex >= numRows){
                    rowIndex = 0;
                }

                // Show the next 10 rows
                tableRows.slice(rowIndex, rowIndex + 10).show();
                // $('marquee[behavior=""][direction=""]').marquee('destroy').marquee();

            }, 12000); // 5 seconds
        });
    </script>

</body>
</html>
