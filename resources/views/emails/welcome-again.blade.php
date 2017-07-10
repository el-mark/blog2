@component('mail::message')
# Introduction

The body of your message.

Thanks for registring!

- one
- two
- three


@component('mail::button', ['url' => 'https://www.laracasts.com'])
Start Borwsing
@endcomponent

@component('mail::panel', ['url' => ''])
Lorem ipsum dolor sit amet.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent