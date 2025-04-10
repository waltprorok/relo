@component('mail::message')

@component('mail::panel')

Sent: {{ now()->format('M d, Y | g:i a') }}

Thank you {{ $name }} for reaching out.

We have received your message!

We'll get back to you in 1-2 business days.

<br>

<img src="{{ $message->embed(public_path() . '/marketing/images/McQ.jpg') }}" alt="agent pic" width="105" height="120">

Michael McQuillan<br/>
412-855-5420<br/>
<a href="mailto:pghmcq@gmail.com">pghmcq@gmail.com</a>

@endcomponent

@endcomponent
