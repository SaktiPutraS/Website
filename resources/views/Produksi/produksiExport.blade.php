<table>
    <thead>
        <tr>
            <th>#</th>
            <th>No Seri</th>
            <th>Nama Panel</th>
            <th>Nama Pelanggan</th>
            <th>Nama Proyek</th>
            <th>Cell</th>
            <th>SPV</th>
            <th>Wiring</th>
            <th>Mekanik</th>
            <th>Deadline Produksi</th>
            <th>Deadline QC Pass</th>
            <th>Aktual Produksi</th>
            <th>Aktual QC Pass</th>
            <th>Jenis Panel (F/W)</th>
            <th>Jenis Panel (L/M)</th>
            <th>Status Komponen</th>
            <th>Status Pekerjaan</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1?>
        @foreach ($exportData as $list)
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td>{{$list->panel_seri}}</td>
            <td>{{$list->panel_nama}}</td>
            <td>{{$list->panel_pelanggan}}</td>
            <td>{{$list->panel_proyek}}</td>
            <td>{{$list->panel_cell}}</td>
            <td>{{$list->panel_spv}}</td>
            <td>{{$list->panel_wiring}}</td>
            <td>{{$list->panel_mekanik}}</td>
            <td>{{$list->panel_deadline}}</td>
            <td>{{$list->panel_qcpass}}</td>
            <td>{{$list->panel_aktual_produksi}}</td>
            <td>{{$list->panel_aktual_qc}}</td>
            <td>{{$list->panel_FW}}</td>
            <td>{{$list->panel_FW}}</td>
            <td>{{$list->panel_status_komponen}}</td>
            <td>{{$list->panel_status_pekerjaan}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
