@component('mail::message')
# Ada tiket baru masuk - {{$judul}}

## Terdapat satu tiket baru! - {{$ticket_number}}
<table style="border-collapse: collapse; width: 100%;">
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Dari : </td>
        <td style="padding: 8px;">{{$user}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Tipe : </td>
        <td style="padding: 8px;">{{$type}}</td>
    </tr>
    <tr style="border: none;">
        <td style="width: 120px; padding: 8px; font-weight: bold;">Detail : </td>
        <td style="padding: 8px;">{{$detail}}</td>
    </tr>
</table>
<br>
@component('mail::button', ['url' => $link])
Cek disini
@endcomponent

Terima Kasih,<br>
{{ config('app.name') }}
@endcomponent
