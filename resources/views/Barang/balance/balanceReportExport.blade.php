<table class="table table-striped table-bordered" id="barang">
    <caption>Inventaris Barang</caption>
    <thead>
        <tr class="table-primary">
            <th>No</th>
            <th>User</th>
            <th>Divisi</th>
            <th>Gudang</th>
            <th>Barang</th>
            <th>QTY</th>
            <th>Alasan</th>
            <th>Status</th>
            <th>Tanggal Pengajuan</th>
            <th>Update terakhir</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        @foreach ($export as $list)

            <tr>
                <td><?php echo $nomor; ?></td>
                <td>{{ $list->k_nama }}</td>
                <td>{{ $list->div_name }}</td>
                <td>{{ $list->nama_gudang }}</td>
                <td>{{ $list->nama_barang }}</td>
                <td>{{ $list->qty }}</td>
                <td>{{ $list->alasan_pengajuan }}</td>
                <td>{{ $list->status_pengajuan }}</td>
                <td>{{ $list->tgl_pengajuan }}</td>
                <td>{{ $list->updated_at }}</td>
            </tr>
            <?php $nomor++; ?>
        @endforeach
    </tbody>

</table>
