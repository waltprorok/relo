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

<hr>

<div>
<img src="{{ asset('marketing/images/McQ.jpg') }}" alt="agent pic" width="100" height="120" style="align: left">

Michael McQuillan<br/>
412-855-5420<br/>
    <a href="mailto:pghmcq@gmail.com">pghmcq@gmail.com</a>
</div>
@endcomponent

@endcomponent
