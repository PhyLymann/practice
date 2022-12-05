@component('mail::message')

<h4>Dear, {{ $user->name }}</h4>

<p>Thank you for your registration with us.If you have any comments or feedback please let me know.</p><br>
<p>I am looking forward to hearing from you</p>

@component('mail::button', ['url' => url('/')])
Visit
@endcomponent

Best regard,<br>
{{ config('app.name') }}
@endcomponent
