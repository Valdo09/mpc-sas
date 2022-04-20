@component('mail::message')
# Contact

{!!$data['content']!!}

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Cordialement,<br>
{{ config('app.name') }}
@endcomponent
