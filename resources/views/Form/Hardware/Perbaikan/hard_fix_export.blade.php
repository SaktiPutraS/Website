<html>
    <head>
        <style>
            table, td, th {
  border: 1px solid black;
  width: 100%;
}

        </style>
    </head>
    <body>
        <table>
            <thead>
        <tr>
            <th>No</th>
            <th>No Perbaikan</th>
            <th>Pengaju</th>
            <th>Divisi</th>
            <th>Lokasi</th>
            <th>Nama Perangkat</th>
            <th>Uraian Masalah</th>
            <th>Status</th>
            <th>Tanggal Buat</th>
            <th>Tanggal Update</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1?>
        @foreach ($exportData as $list)
        <tr>
        <td><?php echo $nomor++; ?></td>
        <td>{{$list->hard_fix_number}}</td>
        <td>{{$list->hard_fix_user}}</td>
        <td>{{$list->hard_fix_divisi}}</td>
        <td>{{$list->hard_fix_location}}</td>
        <td>{{$list->hard_fix_hardware_name}}</td>
        <td>{{$list->hard_fix_uraian}}</td>
        <td>{{$list->hard_fix_status}}</td>
        <td>{{$list->created_at}}</td>
        <td>{{$list->updated_at}}</td>
    </tr>
    @endforeach
</tbody>
</table>
    </body>
</html>

