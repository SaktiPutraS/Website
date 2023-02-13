<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>PPB TRACK</title>
        <style>
            .procurement{
                text-align: center;background-color:#d1e7dd;
            }
            .pengaju{
                text-align: center;background-color:#f8d7da;
            }
            .acc{
                text-align: center;background-color:#e2e3e5;
            }
            .headertable{
                vertical-align: middle;height:50px;text-align:center;background-color:#fff3cd;
                white-space: normal;
            }
            .nomor{
                text-align: center;background-color:#cff4fc;
            }
        </style>
    </head>
    <body>
        <table class="table">
            <thead>
                <tr>
                    <th colspan="13"class="pengaju">Pengaju</th>
                    <th colspan="3"class="procurement">Procurement</th>
                    <th colspan="2"class="acc">ACC</th>
                </tr>
                <tr>
                    <th class="headertable">No</th>
                    <th class="headertable">No. PPB</th>
                    <th class="headertable">Tgl PPB</th>
                    <th class="headertable">Bulan PPB</th>
                    <th class="headertable">Tgl Diperlukan</th>
                    <th class="headertable">Nama Pemohon</th>
                    <th class="headertable">Nama Barang Yang Di Minta </th>
                    <th class="headertable">Inventory (Persediaan untuk di jual kembali) / Non Inventory (Biaya / Inventaris)</th>
                    <th class="headertable">Keperluan</th>
                    <th class="headertable">Divisi</th>
                    <th class="headertable">Nama Proyek</th>
                    <th class="headertable">No Referensi Proyek (NRP) / NRP Divisi</th>
                    <th class="headertable">No Referensi Proyek (NPP)</th>
                    <th class="headertable">Tanggal PPB diterima</th>
                    <th class="headertable">Tanggal selesai proses PPB</th>
                    <th class="headertable">Keterangan</th>
                    <th class="headertable">TGL ISI</th>
                    <th class="headertable">COA</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor=1;?>
                @foreach ($collection as $item)
                <tr>
                    <td class="nomor"><?php echo $nomor++;?></td>
                    <td class="nomor">{{$item->ppb_no}}</td>
                    <td class="pengaju">{{$item->ppb_tgl_pengajuan}}</td>
                    <td class="pengaju">{{$item->bulan}}</td>
                    <td class="pengaju">{{$item->ppb_tgl_deadline}}</td>
                    <td class="pengaju">{{$item->ppb_pengaju}}</td>
                    <td class="pengaju">{{$item->barang}}</td>
                    <td class="pengaju">{{$item->ppb_tipe}}</td>
                    <td class="pengaju">{{$item->ppb_alasan}}</td>
                    <td class="pengaju">{{$item->ppb_divisi}}</td>
                    <td class="pengaju">{{$item->ppb_proyek}}</td>
                    <td class="pengaju">{{$item->ppb_nrp}}</td>
                    <td class="pengaju">{{$item->ppb_npp}}</td>
                    <td class="procurement">{{$item->ppb_tgl_terima}}</td>
                    <td class="procurement">{{$item->ppb_tgl_selesai}}</td>
                    <td class="procurement">{{$item->ppb_status}}</td>
                    <td class="acc">{{$item->ppb_tgl_coa}}</td>
                    <td class="acc">{{$item->ppb_coa}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
