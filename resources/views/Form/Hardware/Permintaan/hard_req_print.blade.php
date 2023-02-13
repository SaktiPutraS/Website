<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            /* display: grid; */
            margin: 20px;
            border: 1px solid black;
            font-size: 14px;
            width: 210mm;
            height: 297mm;
        }

        table,
        td,
        th {
            border: 1px solid black;

            padding: 5px;
        }

        .for-table {
            margin: 5px 5px 0px 5px;

        }

        .font-bold {
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        .center {
            text-align: center;
            justify-content: center;
        }

        .head {
            padding: 10px;
            margin-top: 10px;
        }

        .bg-lightgray {
            background-color: lightgray !important;
        }
        .font-bold{
            font-weight: bold;
        }
        .f-13{
            font-size: 13px;
        }
        .border-right {
            border-right: 1px solid black;
        }

        .border-left {
            border-left: 1px solid black;
        }

        .border-top {
            border-top: 1px solid black !important;
        }

        .border-bottom {
            border-bottom: 1px solid black !important;
        }

        .border-all {
            border: 1px solid black;
        }

        .row,
        .col {
            margin: inherit;
            padding: inherit;
        }

        .col {
            padding-left: 10px;
        }
        .box {
            height: 75px;
        }

        .box-detail {
            height: 100px;
        }

        hr {
            margin: 10px 20px;
            padding: 0px;
            opacity: 1;
        }

        #header {
            margin: 0px;

        }
        @page {
        size: A4;
        margin: 0;
        }
        @media print {
            html, body {
            width: 210mm;
            height: 297mm;
        }
            hr {
                color: black;
                background-color: black;
                opacity: 1;
                border: 0.2px solid black;
            }

            .bg-lightgray {
                -webkit-print-color-adjust: exact;
            }
        }

    </style>

</head>

<body onload="window.print()">
    <div id="header">
        <h4 class="center">PERMINTAAN PENGADAAN HARDWARE</h4>
        <h4 class="center">{{ $list->hard_req_number }}</h4>
        <hr>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-5">Nama Pemohon</div>
                    <div class="col">: {{ $list->hard_req_user }}</div>
                </div>

                <div class="row">
                    <div class="col-5">Tanggal Permohonan</div>
                    <div class="col">: {{ date('d-m-Y'), strtotime($list->created_at) }}</div>
                </div>
                <div class="row">
                    <div class="col-5">No Referensi</div>
                    <div class="col">: {{ $list->hard_req_referensi }}</div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-5">Divisi</div>
                    <div class="col">: {{ $list->hard_req_divisi }}</div>
                </div>
                <div class="row">
                    <div class="col-5">Estimasi</div>
                    <?php
                    $date=$list->created_at;
                    $date=date('d-m-Y', strtotime($date. '+ 10 days'));
                    ?>
                    <div class="col">: <?php echo $date;?></div>
                </div>
                <div class="row">
                    <div class="col-5"></div>
                    <div class="col"></div>
                </div>

            </div>
        </div>
    </div>
    <div class="mx-3 border-right border-left">
        <div id="Uraian">
            <div class="head bg-lightgray border-top font-bold">I. Daftar Hardware Yang Diajukan</div>
            <div class="for-table center">

                <table>
                    <thead>
                        <tr class="bg-lightgray font-bold">
                            <td>BARANG</td>
                            <td>KETERANGAN</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mainboard</td>
                            <td>{{ $list->hard_req_mainboard }}</td>
                        </tr>
                        <tr>
                            <td>Processor</td>
                            <td>{{ $list->hard_req_processor }}</td>
                        </tr>
                        <tr>
                            <td>Memory</td>
                            <td>{{ $list->hard_req_memory }}</td>
                        </tr>
                        <tr>
                            <td>Harddisk</td>
                            <td>{{ $list->hard_req_hdd }}</td>
                        </tr>
                        <tr>
                            <td>Solid State Disk</td>
                            <td>{{ $list->hard_req_ssd }}</td>
                        </tr>
                        <tr>
                            <td>VGA</td>
                            <td>{{ $list->hard_req_vga }}</td>
                        </tr>
                        <tr>
                            <td>Casing</td>
                            <td>{{ $list->hard_req_casing }}</td>
                        </tr>
                        <tr>
                            <td>Keyboard</td>
                            <td>{{ $list->hard_req_keyboard }}</td>
                        </tr>
                        <tr>
                            <td>Mouse</td>
                            <td>{{ $list->hard_req_mouse }}</td>
                        </tr>
                        <tr>
                            <td>Monitor</td>
                            <td>{{ $list->hard_req_monitor }}</td>
                        </tr>
                        <tr>
                            <td>Printer</td>
                            <td>{{ $list->hard_req_printer }}</td>
                        </tr>
                        <tr>
                            <td>Lainnya</td>
                            <td>{{ $list->hard_req_other }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="Alasan">
            <div id="AlasanHeader" class="head bg-lightgray border-top font-bold">
                II. Alasan Permintaan Hardware
            </div>
            <div id="AlasanDetail" class="p-2 box-detail border-top border-bottom">
                {{ $list->hard_req_alasan }}
            </div>
        </div>
        <div id="Persetujuan">
            <div class="row font-bold center bg-lightgray">
                <div class="col-8 border-right ">PIHAK PEMOHON</div>
                <div class="col-4">DIVISI EDP</div>
            </div>
            <div class="row border-top center  bg-lightgray">
                <div class="col-2 border-right">Diajukan Oleh</div>
                <div class="col-6 border-right">Disetujui Oleh</div>
                <div class="col-2 border-right">Diterima Oleh</div>
                <div class="col-2">Disetujui Oleh</div>
            </div>
            <div class="row  border-top">
                <div class="col-2 border-right box"></div>
                <div class="col-3 border-right box"></div>
                <div class="col-3 border-right box"></div>
                <div class="col-2 border-right box"></div>
                <div class="col-2 box"></div>
            </div>
            <div class="row  border-top">
                <div class="col-2 border-right border-bottom">Tgl: </div>
                <div class="col-3 border-right border-bottom">Tgl: </div>
                <div class="col-3 border-right border-bottom">Tgl: </div>
                <div class="col-2 border-right border-bottom">Tgl: </div>
                <div class="col-2 border-bottom">Tgl: </div>
            </div>
        </div>
        <div id="SerahTerima">

            <div id="SerahTerimaDetail">
                <div class="row">
                    <div class="col-8">
                        Catatan/Validasi
                    </div>
                    <div class="col-4 border-left border-bottom font-bold center bg-lightgray">Permohonan Selesai</div>

                </div>
                <div class="row">
                    <div class="col-8">
                        Estimasi Harga
                    </div>
                    <div class="col-2 border-left border-bottom center bg-lightgray f-13">Diserahkan Oleh</div>
                    <div class="col-2 border-left border-bottom center bg-lightgray">Diterima Oleh</div>
                </div>
                <div class="row box">
                    <div class="col-8 ">
                    </div>
                    <div class="col-2 border-left box border-bottom"></div>
                    <div class="col-2 border-left box border-bottom"></div>
                </div>
                <div class="row">
                    <div class="col-8 border-bottom">
                    </div>
                    <div class="col-2 border-left border-bottom">Tgl :</div>
                    <div class="col-2 border-left border-bottom">Tgl :</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
