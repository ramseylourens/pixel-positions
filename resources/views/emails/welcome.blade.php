@component('mail::message')
# Welcome, {{ $user->name }}!

Thank you for registering with {{ config('app.name') }}.

We're excited to have you on board!

@component('mail::button', ['url' => route('login')])
Get Started
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
