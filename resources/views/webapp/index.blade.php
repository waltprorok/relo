@extends('layouts.webapp')
@section('title', 'Dashboard')
@section('content')
    <div class="row">
        <card :count="{{ $contactsCount }}" :title="`Contacts`" :icon="`icon icon-people`"></card>
    </div>
@endsection
