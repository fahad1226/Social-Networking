@component('mail::message')


welcome to LinkedUp {{ $user['name'] }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
