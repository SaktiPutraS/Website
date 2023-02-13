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

        .center {
            text-align: center;
            justify-content: center;
        }

        .font-bold {
            font-weight: bold;
        }
        .f-13{
            font-size: 13px;
        }
        .f-bot{
            display: flex;
            height: auto;
            width: auto;;
        }
        .f-bot span{
            align-self: flex-end;
        }
        .head {
            padding: 10px;
            margin-top: 10px;
        }

        .bg-lightgray {
            background-color: lightgray !important;
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
            height: 100px;
        }

        .box-detail {
            height: 150px;
        }

        hr {
            margin: 10px 20px;
            padding: 0px;
            opacity: 1;
        }

        #header {
            margin: 0px;

        }
        .text-block{
            min-width: 25ch;
            /* max-width: 30ch; */
            display: inline-block;
        }
        .box-st{
            height: 175px;
        }
        .box-estimasi{
            height: 100px;
        }
        @media print {
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
        <h4 class="center">PERMINTAAN PEMBUATAN SOFTWARE</h4>
        <h4 class="center">{{ $list->soft_req_number }}</h4>
        <hr>

        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-5">Nama Pemohon</div>
                    <div class="col">: {{ $list->soft_req_user }}</div>
                </div>
                <div class="row">
                    <div class="col-5">Tanggal Permohonan</div>
                    <div class="col">: {{ date('d-m-Y'), strtotime($list->created_at) }}</div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-5">Divisi</div>
                    <div class="col">: {{ $list->soft_req_divisi }}</div>
                </div>
                <div class="row">
                    <div class="col-5">Jam Permohonan</div>
                    <div class="col">: {{ date('h:i:s A'), strtotime($list->created_at) }}</div>
                </div>

            </div>
        </div>
    </div>
    <div class="mx-3 border-right border-left">
        <div id="Uraian">
            <div class="head bg-lightgray border-top  font-bold">I. Uraian Permintaan Pembuatan Software & Spesifikasi
                System</div>
            <div class="border-top box-detail p-2">
                @if (!empty($list->soft_req_email))
                <span class="text-block">Email </span>: {{ $list->soft_req_email }} <br />
                @endif
                @if (!empty($list->soft_req_email_forward))
                <span class="text-block">Email Forward</span>: {{ $list->soft_req_email_forward }}<br />
                @endif
                @if ($list->soft_req_akses_server=="Iya")
                <span class="text-block">Akses Server</span>: {{ $list->soft_req_akses_server }}<br />
                @endif
                @if ($list->soft_req_akses_internet =="Iya")
                <span class="text-block">Akses Internet HP dan Laptop</span>: {{ $list->soft_req_akses_internet }}<br />
                @endif
                @if ($list->soft_req_akses_fina!="Kosong")
               <span class="text-block">Akses FINA - Username</span>: {{ $list->soft_req_akses_fina }}<br />
                @endif
                @if (!empty($list->soft_req_other))
                <span class="text-block">Permintaan Lainnya</span>: {{ $list->soft_req_other }}
                @endif
            </div>
        </div>
        <div id="Persetujuan">
            <div class="row border-top">
                <div class="col border-right">Prioritas Permintaan</div>
                <div class="col"><input type="checkbox"> Urgent</div>
                <div class="col"><input type="checkbox"> Normal</div>
                <div class="col"><input type="checkbox"> Non Priority</div>
            </div>
            <div class="row border-top">
                <div class="col border-right bg-lightgray ">Diajukan Oleh</div>
                <div class="col border-right bg-lightgray ">Diketahui Oleh</div>
                <div class="col border-right bg-lightgray ">Disetujui Oleh</div>
                <div class="col bg-lightgray ">Diterima Oleh</div>
            </div>
            <div class="row  border-top">
                <div class="col border-right box center f-bot"></div>
                <div class="col border-right box"></div>
                <div class="col border-right box"></div>
                <div class="col box"></div>
            </div>
            <div class="row  border-top">
                <div class="col border-right border-bottom">Tgl: </div>
                <div class="col border-right border-bottom">Tgl: </div>
                <div class="col border-right border-bottom">Tgl: </div>
                <div class="col border-bottom">Tgl: </div>
            </div>
        </div>
        <div id="Alasan">
            <div id="AlasanHeader" class="head bg-lightgray border-top font-bold">
                II. Alasan Permintaan Pembuatan Software
            </div>
            <div id="AlasanDetail" class="p-2 box-detail border-top border-bottom">
                {{ $list->soft_req_reason }}
            </div>
        </div>
        <div id="Estimasi">
            <div id="EstimasiHeader" class="head bg-lightgray border-top font-bold">
                III. Estimasi Pengerjaan
            </div>
            <div id="EstimasiDetail" class="p-2 box-estimasi border-top border-bottom">
                {{-- {{ $list->soft_req_reason }} --}}
                <span class="text-block">Pengerjaan</span>:<br>
                <span class="text-block">Masa Percobaan</span>:<br>
                <span class="text-block">Revisi</span>:<br>
                <span class="text-block">Estimasi</span>:<br>

            </div>
        </div>

        <div id="SerahTerima">
            <div id="SerahTerimaHeader" class="head bg-lightgray border-top font-bold">
                IV. Serah Terima Hasil Pembuatan Software
            </div>
            <div id="SerahTerimaDetail" class="border-top">
                <div class="row box-st border-bottom">
                    <div class="col-8">
                        <span class="text-block">Catatan/Validasi</span>:
                    </div>
                    <div class="col-4 px-0">
                        <div class="row">
                            <div class="col border-left border-bottom center bg-lightgray f-13 px-0">Diserahkan Oleh</div>
                            <div class="col border-left border-bottom center bg-lightgray f-13 px-0">Diterima Oleh</div>
                        </div>
                        <div class="row box">
                            <div class="col border-left border-bottom center f-13 px-0"></div>
                            <div class="col border-left border-bottom center f-13 px-0"></div>
                        </div>
                        <div class="row">
                            <div class="col border-left border-bottom f-13 ">Tgl :</div>
                            <div class="col border-left border-bottom f-13 ">Tgl :</div>
                            {{-- <div class="col border-left border-bottom center bg-lightgray f-13 px-0">Diterima Oleh</div> --}}
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-8 box-st">
                       </div>
                    <div class="col-2 border-left box border-bottom"></div>
                    <div class="col-2 border-left box border-bottom"></div>
                </div>
                 <div class="row">
                    <div class="col-8 border-bottom">
                        <input type="checkbox">Diterima <input type="checkbox"> Ditolak
                    </div>
                    <div class="col-2 border-left border-bottom">Tgl :</div>
                    <div class="col-2 border-left border-bottom">Tgl :</div>
                </div> --}}
            </div>
        </div>
    </div>
</body>

</html>
