@component('mail::message')
# Hey Admin

- {{ $msg->name }}
- {{ $msg->email }}
- {{ $msg->subject }}
@component('mail::panel')
{{ $msg->message }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
