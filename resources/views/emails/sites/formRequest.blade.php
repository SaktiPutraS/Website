@component('mail::message')
# Ada permintaan baru

Terdapat permintaan baru, mohon di cek

@component('mail::button', ['url' => 'http://116.197.128.230/dashboard/request'])
Cek Disini
@endcomponent

Terima Kasih,<br>
{{ config('app.name') }}
@endcomponent
