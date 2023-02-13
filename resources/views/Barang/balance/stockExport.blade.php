<table class="table table-striped table-bordered" id="barang">
    <caption>Inventaris Barang</caption>
    <thead>
        <tr class="table-primary">
            <th>No</th>
            <th>Nama</th>
            <th>HO</th>
            <th>Legok</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        @foreach ($export as $list)

            <tr>
                <td><?php echo $nomor; ?></td>
                <td>{{ $list->nama_barang }}</td>
                <td>{{ $list->HO }}</td>
                <td>{{ $list->Legok }}</td>
            </tr>
            <?php $nomor++; ?>
        @endforeach
    </tbody>

</table>
