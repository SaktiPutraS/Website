@component('mail::message')

# Ada Panel Baru

Berikut data panel yang telah diinput pihak P3C, mohon untuk melakukan input tahap produksi

## Nomor Panel - {{$nomor_seri_panel}}
<table style="border-collapse: collapse; width: 100%;">
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Customer</td>
        <td style="padding: 8px;">: {{$nama_customer}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Proyek</td>
        <td style="padding: 8px;">: {{$nama_proyek}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Nomor WO</td>
        <td style="padding: 8px;">: {{$nomor_wo}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Nama Panel</td>
        <td style="padding: 8px;">: {{$nama_panel}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Tanggal Terima dari Produksi</td>
        <td style="padding: 8px;">: {{$tgl_terima_dr_produksi}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Tanggal QC Pass</td>
        <td style="padding: 8px;">: {{$actual_qc_pass}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Catatan Test</td>
        <td style="padding: 8px;">: {{$catatan_test}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">PIC Test</td>
        <td style="padding: 8px;">: {{$picTestQc}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Tanggal Input</td>
        <td style="padding: 8px;">: {{$created_at}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Admin</td>
        <td style="padding: 8px;">: {{$admin}}</td>
    </tr>
</table>
    <br>
    @component('mail::button', ['url' => $link])
        Edit P3C
    @endcomponent
    Thanks,<br>
    Tim QC
@endcomponent
