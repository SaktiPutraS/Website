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
    <link rel="stylesheet" href="{{asset('css/produksi/style.css')}}">
    <title>Produksi</title>

</head>
<body>

    <div class="container-fluid bg-primary" style=" min-height: 100vh;">
        <div class="head">
            <h1 class="text-center text-light">STATUS PRODUKSI TERKINI</h1>
            <h4 class="text-center text-light">
            <span id="jam"></span> | <span id="waktu"></span>
            </h4>
            <div class="mb-4 mt-0 text-light">
                <button class="btn btn-lg btn-light px-4 py-3"></button> <label class="fs-3">PROGRESS</label>
                <button class="btn btn-lg btn-warning px-4 py-3"></button> <label class="fs-3">TUNDA</label>
                <button class="btn btn-lg btn-success px-4 py-3"></button> <label class="fs-3">SELESAI</label>
                <button class="btn btn-lg btn-danger px-4 py-3"></button> <label class="fs-3">WASPADA</label>
            </div>
        </div>
    <div class="table-responsive-sm">
        <table class="table table-light table-bordered text-center" id="table_id">
            <thead class="table-primary">
                <tr>
                    <th rowspan=3 class="align-middle">NO</th>
                    <th rowspan=3 class="align-middle">NO SERI PANEL</th>
                    <th rowspan=3 class="align-middle">NAMA PANEL</th>
                    <th rowspan=3 class="align-middle">CELL</th>
                    <th rowspan=3 class="align-middle">NAMA PROYEK</th>
                    <th rowspan=3 class="align-middle">SPV</th>
                    <th colspan=2>TIM PRODUKSI</th>
                    <th colspan="4">DEADLINE</th>
                    <th rowspan=3 class="align-middle">STATUS KOMPONEN</th>
                </tr>
                <tr>
                    <th rowspan="2" class="align-middle"style="width:30ch;">WIRING</th>
                    <th rowspan="2" class="align-middle"style="width:30ch;">MEKANIK</th>
                    <th colspan=2 style="width:150px;">PRODUKSI</th>
                    <th colspan=2 style="width:150px;">QC PASS</th>
                </tr>
                <tr>
                    <th>TANGGAL</th>
                    <th>JAM</th>
                    <th>TANGGAL</th>
                    <th>JAM</th>
                </tr>
            </thead>
            <tbody id="tbod">

                <?php
                $nom=1;
                ?>
                @foreach ($list as $panel)
                    <div class="d-none">
                        {{-- {{$deadline=date("Y-m-d", strtotime(substr($panel->panel_deadline,0,10). " + 30 days"))}} --}}
                        {{$deadline=date("Y-m-d", strtotime(substr($panel->deadline_produksi,0,10)))}}
                        {{$curDate=date("Y-m-d")}}

                        @if ($panel->status_pekerjaan=="Tunda")
                        {{$class="table-warning"}}

                        @elseif ($panel->status_pekerjaan=="Selesai")
                        {{$class="table-success"}}

                        @elseif (strtotime($curDate) > strtotime($deadline))
                        {{$class="table-danger"}}
                        @else
                        {{$class="table-light"}}
                        @endif
                    </div> {{-- END D-NONE --}}

                        <tr class="{{$class}}">
                            <td>{{$nom++}}</td>
                            <td class="text-start"><strong class="mx-3">{{$panel->nomor_seri_panel}}</strong></td>
                            <td>{{$panel->nama_panel}}</td>
                            <td>{{$panel->cell}}</td>
                            <td style="white-space: nowrap"><marquee>{{$panel->nama_proyek}}</marquee></td>
                            <td>{{$panel->spv}}</td>
                            <td style="white-space: nowrap">
                                @php
                                    if (strlen($panel->wiring)>15){

                                        echo '<marquee>'.$panel->wiring.'</marquee>';
                                    } else {
                                        echo $panel->wiring;
                                    }
                                @endphp
                            </td>
                            <td style="white-space: nowrap">
                                @php
                                if (strlen($panel->mekanik)>15){

                                    echo '<marquee>'.$panel->mekanik.'</marquee>';
                                } else {
                                    echo $panel->mekanik;
                                }
                                @endphp
                            </td>
                            <td>{{date("d/m/Y",strtotime(substr($panel->deadline_produksi,0,10)))}}</td>
                            <td>{{substr($panel->deadline_produksi,11,5)}}</td>
                            <td>{{date("d/m/Y",strtotime(substr($panel->deadline_qc_pass,0,10)))}}</td>
                            <td>{{substr($panel->deadline_qc_pass,11,5)}}</td>
                            <td>
                                @php
                                if ($panel->status_komponen==='Lengkap'){
                                    echo $panel->status_komponen;
                                } else {
                                    echo '<marquee>'.$panel->status_komponen.'</marquee>';
                                }
                                @endphp
                                {{-- <marquee>{{$panel->panel_status_komponen}}</marquee> --}}
                            </td>

                        </tr>

                @endforeach
            </tbody>
        </table>
    </div>

<script>
    function swap() {
        // Get the table element
        var table = document.querySelector("table");

        // Get the tbody element
        var tbody = table.querySelector("#tbod");
        // var tbody = table.querySelector("tbody");

        // Get the first row element
        var firstRow = tbody.querySelector("tr");

        // Get the last row element
        var lastRow = tbody.querySelector("tr:last-child");

        // Insert the first row before the last row
        tbody.insertBefore(firstRow, lastRow.nextSibling);
        }

        const marquees = document.querySelectorAll("marquee");

        // Define a function that will start all marquees
        function startMarquees() {
        marquees.forEach((marquee) => {
            marquee.setAttribute('scrollamount', '10');
            marquee.setAttribute('loop', 'infinite');
            marquee.start();
        });
        }

        // Start all marquees initially
        startMarquees();

        // Set an interval to re-start all marquees and swap rows every 15 seconds
        setInterval(swap, 15000);
        setInterval(startMarquees, 15000);

</script>

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
    <script type="text/javascript">
        var timeout = setTimeout("location.reload(true);",600000);
        function resetTimeout() {
          clearTimeout(timeout);
          timeout = setTimeout("location.reload(true);",600000);
        }
    </script>
</body>
</html>
