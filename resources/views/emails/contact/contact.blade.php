@component('mail::message')

@component('mail::panel')

From: <b>{{ $name }}</b><br/>
Sent: {{ now()->format('M d, Y | g:i a') }}

Email: {{ $email }}

Phone: {{ $phone }}

Current Housing Status: <b>{{ ucfirst($status) }}</b>

Current Zip: {{ $current_zip_code }}

Moving to City: {{ $moving_to_city }}

{{ $contact_message }}

@endcomponent

@endcomponent
