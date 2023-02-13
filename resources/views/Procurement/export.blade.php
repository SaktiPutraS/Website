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
                    <th colspan="13"style="text-align: center;background-color:#f8d7da;">Pengaju</th>
                    <th colspan="3"style="text-align: center;background-color:#d1e7dd;">Procurement</th>
                    <th colspan="2"style=" text-align: center;background-color:#e2e3e5;">ACC</th>
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
                <tr style="height: 100px;">
                    <td style="text-align: center;background-color:#cff4fc;"><?php echo $nomor++;?></td>
                    <td style="text-align: center;background-color:#cff4fc;width:150px;">{{$item->ppb_no}}</td>
                    <td style="text-align: center;background-color:#f8d7da;width:100px;">{{ $item->ppb_tgl_pengajuan === null ? "" : date("d-m-y",strtotime($item->ppb_tgl_pengajuan));}}</td>
                    <td style="text-align: center;background-color:#f8d7da;">{{$item->bulan}}</td>
                    <td style="text-align: center;background-color:#f8d7da;width:100px;">{{ $item->ppb_tgl_deadline === null ? "" : date("d-m-y", strtotime($item->ppb_tgl_deadline));}}</td>
                    <td style="text-align: center;background-color:#f8d7da;width:200px;">{{$item->ppb_pengaju}}</td>
                    <td style="text-align: left;background-color:#f8d7da;width:500px;white-space:pre-wrap;">{{$item->barang}}</td>
                    <td style="text-align: center;background-color:#f8d7da;width:300px;">{{$item->ppb_tipe}}</td>
                    <td style="text-align: center;background-color:#f8d7da;">{{$item->ppb_alasan}}</td>
                    <td style="text-align: center;background-color:#f8d7da;width:150px;">{{$item->ppb_divisi}}</td>
                    <td style="text-align: center;background-color:#f8d7da;width:200px;">{{$item->ppb_proyek}}</td>
                    <td style="text-align: center;background-color:#f8d7da;width:150px;">{{$item->ppb_nrp}}</td>
                    <td style="text-align: center;background-color:#f8d7da;width:150px;">{{$item->ppb_npp}}</td>
                    <td style="text-align: center;background-color:#d1e7dd;width:100px;">{{ $item->ppb_tgl_terima === null ? "" : date("d-m-y", strtotime($item->ppb_tgl_terima));}}</td>
                    <td style="text-align: center;background-color:#d1e7dd;width:100px;">{{ $item->ppb_tgl_selesai === null ? "" : date("d-m-y", strtotime($item->ppb_tgl_selesai));}}</td>
                    <td style="text-align: center;background-color:#d1e7dd;width:100px;">{{$item->ppb_status}}</td>
                    <td style=" text-align: center;background-color:#e2e3e5;width:100px;">{{ $item->ppb_tgl_coa === null ? "" : date("d-m-y", strtotime($item->ppb_tgl_coa));}}</td>
                    <td style=" text-align: center;background-color:#e2e3e5;">{{$item->ppb_coa}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
