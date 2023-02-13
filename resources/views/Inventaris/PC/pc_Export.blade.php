<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Pengguna</th>
            <th>Nomor</th>
            <th>Harga</th>
            <th>Lokasi</th>
            <th>Kondisi</th>
            <th>Mainboard</th>
            <th>Processor</th>
            <th>VGA</th>
            <th>Ram</th>
            <th>HDD</th>
            <th>SSD</th>
            <th>Daya (Watt)</th>
            <th>OS</th>
            <th>Tanggal Beli</th>
            <th>Tanggal Input</th>
            <th>Tanggal Update</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1?>
        @foreach ($exportData as $list)
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td>{{$list->pc_user}}</td>
            <td>{{$list->pc_number}}</td>
            <td>{{$list->pc_price}}</td>
            <td>{{$list->pc_location}}</td>
            <td>{{$list->pc_condition}}</td>
            <td>{{$list->pc_mainboard}}</td>
            <td>{{$list->pc_processor}}</td>
            <td>{{$list->pc_vga}}</td>
            <td>{{$list->pc_ram}}</td>
            <td>{{$list->pc_hdd}}</td>
            <td>{{$list->pc_ssd}}</td>
            <td>{{$list->pc_energy}}</td>
            <td>{{$list->pc_os}}</td>
            <td>{{$list->pc_buy_date}}</td>
            <td>{{$list->created_at}}</td>
            <td>{{$list->updated_at}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
