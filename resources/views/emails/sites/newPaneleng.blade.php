@component('mail::message')

# Ada Panel

Berikut data panel yang telah diinput pihak engineering

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
        <td style="width: 120px; padding: 8px; font-weight: bold;">Tipe Panel</td>
        <td style="padding: 8px;">: {{$tipe_panel}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Tanggal Manufaktur</td>
        <td style="padding: 8px;">: <?php echo date("M Y", strtotime($mfd));?></td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Capacity</td>
        <td style="padding: 8px;">: {{$capacity}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Voltage</td>
        <td style="padding: 8px;">: {{$voltage}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Phase 3</td>
        <td style="padding: 8px;">: {{$phasa_3}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">IP</td>
        <td style="padding: 8px;">: {{$ip}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Ampere</td>
        <td style="padding: 8px;">: {{$ampere}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Frekuensi</td>
        <td style="padding: 8px;">: {{$frekuensi}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Name Plate</td>
        <td style="padding: 8px;">: {{$name_plate}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Admin</td>
        <td style="padding: 8px;">: {{$admin}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Tanggal Input</td>
        <td style="padding: 8px;">: {{$created_at}}</td>
    </tr>
</table>
    <br>
    Thanks,<br>
    Tim Engineering
@endcomponent
