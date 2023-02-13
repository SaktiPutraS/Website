<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Ukuran</th>
            <th>Daya (Watt)</th>
            <th>Pengguna</th>
            <th>Lokasi</th>
            <th>Harga</th>
            <th>Kondisi</th>
            <th>Tanggal Beli</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1?>
        @foreach ($exportData as $list)
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td>{{$list->monitor_number}}</td>
            <td>{{$list->monitor_name}}</td>
            <td>{{$list->monitor_size}}</td>
            <td>{{$list->monitor_energy}}</td>
            <td>{{$list->monitor_user}}</td>
            <td>{{$list->monitor_location}}</td>
            <td>{{$list->monitor_price}}</td>
            <td>{{$list->monitor_condition}}</td>
            <td>{{$list->monitor_buy_date}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
