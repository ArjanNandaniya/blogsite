@component('mail::message')
# Introduction

Thanks For Register

@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
Start Bloging
@endcomponent

@component('mail::panel', ['url' => ''])
Add new Posts
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
