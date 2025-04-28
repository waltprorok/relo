@extends('layouts.webapp')
@section('title', 'Dashboard')
@section('content')
    <div class="row">
        <card :count="{{ $contactsCount }}" :title="`Contacts`" :icon="`fa fa-users`"></card>
        <card :count="{{ $repliedContactsCount }}" :title="`Replied To`" :icon="`fa fa-envelope-open`"></card>
        <card :count="{{ $unRepliedContactsCount }}" :title="`Not Replied To`" :icon="`fa fa-envelope`"></card>
    </div>
@endsection
