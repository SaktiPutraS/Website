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
                ?>
                @foreach ($panel as $panel)
                    <div class="d-none">
                        {{-- {{$deadline=date("Y-m-d", strtotime(substr($panel->panel_deadline,0,10). " + 30 days"))}} --}}
                        {{$deadline=date("Y-m-d", strtotime(substr($panel->panel_deadline,0,10)))}}
                        {{$curDate=date("Y-m-d")}}

                        @if ($panel->panel_status_pekerjaan=="Tunda")
                        {{$class="table-warning"}}

                        @elseif ($panel->panel_status_pekerjaan=="Selesai")
                        {{$class="table-success"}}

                        @elseif (strtotime($curDate) > strtotime($deadline))
                        {{$class="table-danger"}}
                        @else
                        {{$class="table-light"}}
                        @endif
                    </div> {{-- END D-NONE --}}

                        <tr class="{{$class}}">
                            <td>{{$nom++}}</td>
                            <td class="text-start"><strong class="mx-2">{{$panel->panel_seri}}</strong></td>
                            <td>{{$panel->panel_nama}}</td>
                            <td>{{$panel->panel_cell}}</td>
                            <td style="white-space: nowrap"><marquee>{{$panel->panel_proyek}}</marquee></td>
                            <td>{{$panel->tim_nama}}</td>
                            <td style="white-space: nowrap">
                                @php
                                    if (strlen($panel->panel_wiring)>15){

                                        echo '<marquee>'.$panel->panel_wiring.'</marquee>';
                                    } else {
                                        echo $panel->panel_wiring;
                                    }
                                @endphp
                            </td>
                            <td style="white-space: nowrap">
                                @php
                                if (strlen($panel->panel_mekanik)>15){

                                    echo '<marquee>'.$panel->panel_mekanik.'</marquee>';
                                } else {
                                    echo $panel->panel_mekanik;
                                }
                                @endphp
                            </td>
                            <td>{{substr($panel->panel_deadline,0,10)}}</td>
                            <td>{{substr($panel->panel_deadline,11,6)}}</td>
                            <td>{{substr($panel->panel_qcpass,0,10)}}</td>
                            <td>{{substr($panel->panel_qcpass,11,6)}}</td>
                            <td>
                                @php
                                if ($panel->panel_status_komponen==='Lengkap'){
                                    echo $panel->panel_status_komponen;
                                } else {
                                    echo '<marquee>'.$panel->panel_status_komponen.'</marquee>';
                                }
                                @endphp
                                {{-- <marquee>{{$panel->panel_status_komponen}}</marquee> --}}
                            </td>
                            {{-- <td>{{$nom++}}</td>
                            <td class="text-start"><strong class="mx-2">{{$panel->panel_seri}}</strong></td>
                            <td>{{$panel->panel_nama}}</td>
                            <td>{{$panel->panel_cell}}</td>
                            <td class="marquee"><p>{{$panel->panel_proyek}}</p></td>
                            <td>{{$panel->panel_spv}}</td>
                            <td class="marquee"><p>{{$panel->panel_wiring}}</p></td>
                            <td class="marquee"><marquee>{{$panel->panel_mekanik}}</marquee></td>
                            <td>{{substr($panel->panel_deadline,0,10)}}</td>
                            <td>{{substr($panel->panel_deadline,11,6)}}</td>
                            <td>{{substr($panel->panel_qcpass,0,10)}}</td>
                            <td>{{substr($panel->panel_qcpass,11,6)}}</td>
                            <td><marquee>{{$panel->panel_status_komponen}}</marquee></td> --}}
                        </tr>

                @endforeach
            </tbody>
        </table>
    </div>
        <footer id="bott">
            <div id="setting" class="visually-hidden">
                @php
                    $cFL=[0,0]; //Count panel FL and cell
                    $cFM=[0,0]; //Count panel FM and cell
                    $cWL=[0,0]; //Count panel WL and cell
                    $cWM=[0,0]; //Count panel WM and cell
                    $ccFL=[0,0]; //Count cell panel FL and cell
                    $ccFM=[0,0]; //Count cell panel FM and cell
                    $ccWL=[0,0]; //Count cell panel WL and cell
                    $ccWM=[0,0]; //Count cell panel WM and cell
                @endphp
                @foreach ($paneldata as $panel)
                    @if(($panel->panel_FW=="F") &&($panel->panel_LM=="L")  )
                    {{-- //  Count Progress --}}
                        @if($panel->panel_status_pekerjaan != "Selesai")
                        @php
                            $cFL[1] += 1;
                            $ccFL[1] += $panel->panel_cell;
                        @endphp
                        @endif
                    {{-- //  Count Total --}}
                        @php
                            $cFL[0]+=1;
                            $ccFL[0]+=$panel->panel_cell;
                        @endphp
                    @elseif (($panel->panel_FW =="F") &&($panel->panel_LM =="M"))
                        {{-- //  Count Progress --}}
                        @if($panel->panel_status_pekerjaan !="Selesai")
                        @php
                            $cFM[1]+=1;
                            $ccFM[1]+=$panel->panel_cell;
                        @endphp
                        @endif
                        {{-- //  Count Total --}}
                        @php
                            $cFM[0]+=1;
                            $ccFM[0]+=$panel->panel_cell;
                        @endphp
                    @elseif (($panel->panel_FW =="W") &&($panel->panel_LM =="L"))
                        @if($panel->panel_status_pekerjaan !="Selesai"){
                            @php
                                $cWL[1]+=1;
                                $ccWL[1]+=$panel->panel_cell;
                            @endphp
                        @endif
                        {{-- //  Count Total --}}
                        @php
                            $cWL[0]+=1;
                            $ccWL[0]+=$panel->panel_cell;
                        @endphp
                    @elseif (($panel->panel_FW =="W") &&($panel->panel_LM =="M"))
                        @if($panel->panel_status_pekerjaan !="Selesai")
                            @php
                                $cWM[1]+=1;
                                $ccWM[1]+=$panel->panel_cell;
                            @endphp
                        @endif
                        {{-- //  Count Total --}}
                        @php
                            $cWM[0]+=1;
                            $ccWM[0]+=$panel->panel_cell;
                        @endphp
                    @endif
                @endforeach
            </div>
            <div class="row text-light info-text mt-2" id="ket">
                <div class="col">
                    <table class="table table-sm text-light info-text text-left">
                        <tbody>
                            <tr>
                                <td>FL: </td>
                                <td>On Progress: </td>
                                <td>{{$cFL[1]}} UNIT,{{$ccFL[1]}} CELL</td>
                                </tr>
                                <tr>
                                <td></td>
                                <td>Total: </td>
                                <td>{{$cFL[0]}} UNIT,{{$ccFL[0]}} CELL</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col">
                    <table class="table table-sm text-light info-text text-left">
                        <tbody>
                            <tr>
                                <td>FM: </td>
                                <td>On Progress: </td>
                                <td>{{$cFM[1]}} UNIT,{{$ccFM[1]}} CELL</td>
                                </tr>
                                <tr>
                                <td></td>
                                <td>Total: </td>
                                <td>{{$cFM[0]}} UNIT,{{$ccFM[0]}} CELL</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col">
                    <table class="table table-sm text-light info-text text-left">
                        <tbody>
                            <tr>
                                <td>WL: </td>
                                <td>On Progress: </td>
                                <td>{{$cWL[1]}} UNIT,{{$ccWL[1]}} CELL</td>
                                </tr>
                                <tr>
                                <td></td>
                                <td>Total: </td>
                                <td>{{$cWL[0]}} UNIT,{{$ccWL[0]}} CELL</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col">
                    <table class="table table-sm text-light info-text text-left">
                        <tbody>
                            <tr>
                                <td>WM: </td>
                                <td>On Progress: </td>
                                <td>{{$cWM[1]}} UNIT,{{$ccWM[1]}} CELL</td>
                                </tr>
                                <tr>
                                <td></td>
                                <td>Total: </td>
                                <td>{{$cWM[0]}} UNIT,{{$ccWM[0]}} CELL</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- <div id="team" class="row text-left text-light mx-2 mt-2">
                <div class="col-12 fs-2">Initial Team :</div>
                    <?php $count=0;
                    $countData=count($tim);
                    $countdiv=intval(floor($countData/6));
                    ?>
                    @for ($i=0 ; $i<$countdiv ; $i++)
                        <div class="col">
                            <ul class="initial">
                                @for ($j=0 ; $j<6 ; $j++)
                                        <li><strong class="text-dark">{{$tim[$count]->tim_alias}}</strong> : {{$tim[$count]->tim_nama}}</li>
                                    <?php
                                    $count=$count+1;
                                    ?>
                                @endfor
                            </ul>
                        </div>
                    @endfor

                    <div class="col-1">

                    </div>
                </div>
            </div> --}}
        </footer>

    <script>
        // setInterval(swapElement, 10000);
        // function swapElement() {
            // let kesatu = document.getElementById("tbod").children[0];
            // let kedua = document.getElementById("tbod").children[1];
            // let ketiga = document.getElementById("tbod").children[2];
            // let keempat = document.getElementById("tbod").children[3];
            // let keenam = document.getElementById("tbod").children[5];
            // document.getElementById("tbod").appendChild(kesatu);
            // document.getElementById("tbod").appendChild(kedua);
            // document.getElementById("tbod").appendChild(ketiga);
            // document.getElementById("tbod").appendChild(keempat);
            // document.getElementById("tbod").sappendChild(kelima);
            // document.getElementById("tbod").sappendChild(keenam);
        // };

        // const table = document.querySelector("table");
        // const tbody = table.querySelector("#tbod");

        // setInterval(() => {
        // const firstRow = tbody.rows[0];
        // tbody.removeChild(firstRow);
        // tbody.appendChild(firstRow);
        // }, 10000);
    </script>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"  referrerpolicy="no-referrer"></script>
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
