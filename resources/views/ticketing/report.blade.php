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
            <th>No Tiket</th>
            <th>Pengaju</th>
            <th>Tipe</th>
            <th>Judul</th>
            <th>Detail</th>
            <th>Penyelesaian</th>
            <th>PIC</th>
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
        <td>{{$list->ticket_number}}</td>
        <td>{{$list->ticket_referrer}}</td>
        <td>{{$list->ticket_type}}</td>
        <td>{{$list->ticket_judul}}</td>
        <td>{{$list->ticket_detail}}</td>
        <td>{{$list->ticket_solve}}</td>
        <td>{{$list->ticket_solver}}</td>
        <td>{{$list->ticket_status}}</td>
        <td>{{$list->updated_at}}</td>
        <td>{{$list->created_at}}</td>
    </tr>
    @endforeach
</tbody>
</table>
    </body>
</html>

