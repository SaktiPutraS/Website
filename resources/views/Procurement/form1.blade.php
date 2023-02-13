<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'DM Sans', sans-serif;
    padding: 0 10px;
    -webkit-print-color-adjust:exact !important;
  print-color-adjust:exact !important;
  margin-top: 50px;
  font-size: 10px;
}
.wrap{
    padding:0 10px;
    border: 1px solid lightgray;
}
    div.col {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-between;
}
.col label {
    width: 100px;
    display: inline-block;

}

.col span {
    display: inline-block;
    min-width: 10ch;
    overflow: visible;
}
.center-text{
    text-align: center;
}
h3.judulppb {
    margin: 5px 0;
    font-size: 20px;
    font-weight: bold;
}
h5.ppb {
    margin: 0;
    padding: 5px 0px;
}
.bg-lgray{
    background: lightgray;
}
#info-header .col div {
    margin: 2px 0;
    /* font-size: 12px; */
}
div#catatan {
    justify-content: flex-start;
    padding: 5px 0;
}
table#barang {
    max-width: 100%;
    max-height: 100px;
    border-collapse: collapse;
    table-layout: fixed;
    border: 1px solid black;
}
.desc{
    min-width: 300px;
}
.tipe, .merek{
    min-width: 200px;
}
table#forttd {
    width: 100%;
    border-collapse: collapse;
    table-layout: fixed;
    border: 1px solid black;
}
th, tr, td{
    border: 1px solid black;
}
.tl{
}
th.note {
    font-size: 8px;
}

th.twarp.sm-text {font-size: 8px;word-break: break-word;}



td, tr {
    padding: 5px;
    /* margin: 5px; */
}



tr#ttd {
    height: 50px;
}

tr#ttdnama {
    height: 20px;
}

td.center {
    text-align: center;
}


.noted{
    display: inline-block;
}

@page {
    size: landscape;
    margin: 0;
}
@media print {
    /* #barang tbody tr:nth-of-type(7) {
        page-break-after: always;
    } */
footer table{
    max-width: 100%;
}
table#barang { page-break-inside:auto }
  #barang tr    { page-break-inside:avoid;
    page-break-after:auto }
}
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th rowspan="9">
                <div class="center-text">
                    <h3 class="judulppb">PERMOHONAN PEMBELIAN BARANG</h3>
                    <h5 class="ppb bg-lgray">no ppb</h5>
                </div>
                <div id="info-header">
                    <div class="col">
                        <div id="kiri">
                            <div>
                                <label for="">NAMA PELANGGAN</label>
                                <span>Isi</span>
                            </div>
                            <div>
                                <label for="">NO REFERENSI/PO</label>
                                <span>Isi</span>
                            </div>
                            <div>
                                <label for="">NRP</label>
                                <span>Isi</span>
                            </div>
                            <div>
                                <label for="">NPP</label>
                                <span>Isi</span>
                            </div>
                            <div>
                                <label for="">NAMA PROYEK</label>
                                <span>Isi</span>
                            </div>
                            <div>
                                <label for="">ALASAN PEMBELIAN</label>
                                <span>Isi</span>
                            </div>
                        </div>
                        <div id="kanan">
                            <div>
                                <label for="">TGL PO/OC</label>
                                <span>Isi</span>
                            </div>
                            <div>
                                <label for="">TGL PPB</label>
                                <span>Isi</span>
                            </div>
                            <div>
                                <label for="">TGL DEADLINE KIRIM</label>
                                <span>Isi</span>
                            </div>
                        </div>
                    </div>

                </div>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td rowspan="9">

                <div id="info-table">
                    <table id="barang">
                        <thead>
                            <tr>
                                <th colspan="6" class="note border-all">(Diisi oleh pihak pemohon)</th>
                                <th colspan="3" class="note border-all">(Diisi oleh Procurement)</th>
                            </tr>
                            <tr>
                                <th rowspan="2" class="bg-lgray border-bot" style="width:5ch;">NO</th>
                                <th rowspan="2" class="bg-lgray border-bot">QTY</th>
                                <th rowspan="2" class="bg-lgray border-bot">SATUAN</th>
                                <th colspan="3" class="bg-lgray">Nama Barang</th>
                                <th rowspan="2" class="twarp sm-text bg-lgray tl border-bot">REFERENSI PEMASOK</th>
                                <th rowspan="2" class="twarp sm-text bg-lgray tl border-bot">Spesifikasi Penggunaan Energi Signifikan / K3L(*)</th>
                                <th rowspan="2" class="twarp sm-text bg-lgray tl border-bot">Keterangan / No. PO Procurement</th>
                            </tr>
                            <tr>
                                <th class="bg-lgray border-bot desc" >Deskripsi</th>
                                <th class="bg-lgray border-bot tipe">Tipe</th>
                                <th class="bg-lgray border-bot merek">Marek</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            {{-- Batas --}}
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="9" class="center">(*) Spesifikasi Pengguna Energi Signifikan terdapat pada Standar Spesifikasi Pengguna Energi Signifikan / Pengadaan sesuai kententuan K3L</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td rowspan="9">
                <div id="info-footer">
                    <footer>
                        <div class="col" id="catatan">
                            <label for="" class="bg-lgray">Catatan atau alamat pengiriman</label>
                            <span>Isi</span>
                        </div>

                    <table class="center" id="forttd">
                        <thead>
                            <tr>
                                <th colspan="3">PIHAK PEMOHON</th>
                                <th colspan="2">PIHAK PROCUREMENT</th>
                                <th>PPB SELESAI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td class="center">Diajukan Oleh,</td>
                                <td class="center">Disetujui Oleh,</td>
                                <td class="seperate center">Diketahui Oleh, (**)</td>
                                <td class="center">Diterima Oleh,</td>
                                    <td class="seperate center">Disetujui Oleh,</td>
                                <td class="center">Diterima Oleh,</td>
                            </tr>

                            <tr id="ttd">
                                <td></td>
                                <td></td>
                                <td class="seperate"></td>
                                <td></td>
                                <td class="seperate"></td>
                                <td></td>
                            </tr>

                            <tr id="ttdnama">
                                <td></td>
                                <td></td>
                                <td class="seperate"></td>
                                <td></td>
                                <td class="seperate"></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>Tgl :</td>
                                <td>Tgl :</td>
                                <td class="seperate">Tgl :</td>
                                <td>Tgl :</td>
                                <td class="seperate">Tgl :</td>
                                <td>Tgl :</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="noted">
                        <div>(**) Bila diperlukan diisi oleh Direktorat/Manajemen</div>
                        <div>FM-PRO-06/REV-6</div>
                    </div>
                </footer>
                </div>
            </td>
        </tr>
    </tfoot>
</table>



</body>
</html>
