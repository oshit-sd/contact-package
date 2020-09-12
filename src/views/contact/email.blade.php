@component('mail::message')
# Introduction

This message from {{ $name }}
<br />
Message:
{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
<!-- config('app.name') -->
{{ "Oshit Sutra Dar" }}
@endcomponent