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
        <td style="width: 120px; padding: 8px; font-weight: bold;">Cell</td>
        <td style="padding: 8px;">: {{$cell}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Deadline Produksi</td>
        <td style="padding: 8px;">: {{$deadline_produksi}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Deadline QC</td>
        <td style="padding: 8px;">: {{$deadline_qc_pass}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Jenis Panel</td>
        <td style="padding: 8px;">: {{$jenis_panel}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Jenis Tegangan</td>
        <td style="padding: 8px;">: {{$jenis_tegangan}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Tipe Panel</td>
        <td style="padding: 8px;">: {{$tipe_panel}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Status Panel</td>
        <td style="padding: 8px;">: {{$panel_status}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Status Pekerjaan</td>
        <td style="padding: 8px;">: {{$status_pekerjaan}}</td>
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
        Create Produksi
    @endcomponent
    @component('mail::button', ['url' => $linkEng])
        Create Eng
    @endcomponent
    Thanks,<br>
    Tim P3C
@endcomponent
