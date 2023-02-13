@component('mail::message')

# Ada Panel Baru dari Produksi

Berikut data panel yang telah diinput pihak PRODUKSI, mohon untuk melakukan input tahap QC

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
        <td style="width: 120px; padding: 8px; font-weight: bold;">Tanggal Input</td>
        <td style="padding: 8px;">: {{$created_at}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">SPV</td>
        <td style="padding: 8px;">: {{$spv_name}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Wiring</td>
        <td style="padding: 8px;">: {{$wiring}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Mekanik</td>
        <td style="padding: 8px;">: {{$mekanik}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Status Komponen</td>
        <td style="padding: 8px;">: {{$status_komponen}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Admin</td>
        <td style="padding: 8px;">: {{$admin}}</td>
    </tr>
</table>
    <br>
    @component('mail::button', ['url' => $link])
        Create QC
    @endcomponent
    Thanks,<br>
    Tim Produksi
@endcomponent
