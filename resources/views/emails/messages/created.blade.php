@component('mail::message')
# Hey Admin

- {{ $name }}
- {{ $email }}
- {{ $subject }}
@component('mail::panel')
{{ $msg }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
