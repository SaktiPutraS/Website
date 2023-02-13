<table class="table table-striped table-bordered" id="barang">
    <caption>Inventaris Barang</caption>
    <thead>
        <tr class="table-primary">
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Buat</th>
            <th>Tanggal Update</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        @foreach ($export as $list)

            <tr>
                <td><?php echo $nomor; ?></td>
                <td>{{ $list->nama_barang }}</td>
                <td>{{ $list->tanggal_barang }}</td>
                <td>{{ $list->updated_at }}</td>
            </tr>
            <?php $nomor++; ?>
        @endforeach
    </tbody>

</table>
