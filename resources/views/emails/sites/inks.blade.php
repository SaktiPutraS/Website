@component('mail::message')
# Ada permintaan tinta baru

Ada permintaan tinta baru, mohon dicek

@component('mail::button', ['url' => 'http://116.197.128.230/dashboard/request_ink'])
Cek Disini
@endcomponent

Terima Kasih,<br>
{{ config('app.name') }}
@endcomponent
