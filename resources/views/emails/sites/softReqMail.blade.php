@component('mail::message')
# Ada permintaan software baru - {{$number}}

## Terdapat satu permintaan software baru! - {{$number}}
Dari : {{$user}}<br>
Alasan Permintaan : {{$soft_req_reason}}<br>
@component('mail::button', ['url' => $link])
Cek disini
@endcomponent

Terima Kasih,<br>
{{ config('app.name') }}
@endcomponent
