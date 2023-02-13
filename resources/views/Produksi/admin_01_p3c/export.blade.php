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
                text-align: left;background-color:#d1e7dd;
            }
            .pengaju{
                text-align: left;background-color:#f8d7da;
            }
            .acc{
                text-align: left;background-color:#e2e3e5;
            }
            .headertable{
                vertical-align: middle;height:50px;text-align:center;background-color:#fff3cd;
                white-space: normal;
            }
            .nomor{
                text-align: left;background-color:#cff4fc;width:100px;
            }
        </style>
    </head>
    <body>
        <table class="table">
            <thead>
                <tr>
                    <th class="headertable">No</th>
                    <th class="headertable">Nomor Seri</th>
                    <th class="headertable">Nomor WO</th>
                    <th class="headertable">Nama Customer</th>
                    <th class="headertable">Nama Panel</th>
                    <th class="headertable">Cell</th>
                    <th class="headertable">Nama Proyek</th>
                    <th class="headertable">Deadline Produksi</th>
                    <th class="headertable">Deadline QC</th>
                    <th class="headertable">Jenis Panel</th>
                    <th class="headertable">Jenis Tegangan</th>
                    <th class="headertable">Tipe Panel</th>
                    <th class="headertable">Tanggal Manufaktur(Produksi)</th>
                    <th class="headertable">Lokasi Pengerjaan</th>
                    <th class="headertable">Status Pekerjaan</th>
                    <th class="headertable">Status Engineering</th>
                    <th class="headertable">Admin Terakhir Input/Edit</th>
                    <th class="headertable">Tanggal Buat</th>
                    <th class="headertable">Tanggal Update</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor=1;?>
                @foreach ($p3c as $list)
                <tr style="height: 100px;">
                    <td style="text-align: left;background-color:#cff4fc;width:50px;">{{$nomor++}}</td>
                    <td style="text-align: left;background-color:#cff4fc;width:100px;">{{$list->nomor_seri_panel}}</td>
                    <td style="text-align: left;background-color:#cff4fc;width:100px;">{{$list->nomor_wo}}</td>
                    <td style="text-align: left;background-color:#cff4fc;width:300px;">{{$list->nama_customer}}</td>
                    <td style="text-align: left;background-color:#cff4fc;width:300px;">{{$list->nama_panel}}</td>
                    <td style="text-align: left;background-color:#cff4fc;width:50px;">{{$list->cell}}</td>
                    <td style="text-align: left;background-color:#cff4fc;width:300px;">{{$list->nama_proyek}}</td>
                    <td style="text-align: left;background-color:#cff4fc;width:150px;">{{$list->deadline_produksi}}</td>
                    <td style="text-align: left;background-color:#cff4fc;width:150px;">{{$list->deadline_qc_pass}}</td>
                    <td style="text-align: left;background-color:#cff4fc;width:50px;">{{$list->jenis_panel}}</td>
                    <td style="text-align: left;background-color:#cff4fc;width:50px;">{{$list->jenis_tegangan}}</td>
                    <td style="text-align: left;background-color:#cff4fc;width:50px;">{{$list->tipe_panel}}</td>
                    <td style="text-align: left;background-color:#cff4fc;width:100px;">{{$list->mfd}}</td>
                    <td style="text-align: left;background-color:#cff4fc;width:100px;">{{$list->panel_status}}</td>
                    <td style="text-align: left;background-color:#cff4fc;width:100px;">{{$list->status_pekerjaan}}</td>
                    <td style="text-align: left;background-color:#cff4fc;width:100px;">{{$list->det_engineering}}</td>
                    <td style="text-align: left;background-color:#cff4fc;width:100px;">{{$list->admin}}</td>
                    <td style="text-align: left;background-color:#cff4fc;width:150px;">{{$list->created_at}}</td>
                    <td style="text-align: left;background-color:#cff4fc;width:150px;">{{$list->updated_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
