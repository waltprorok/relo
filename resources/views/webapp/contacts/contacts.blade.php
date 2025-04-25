@extends('layouts.webapp')
@section('title', 'Dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
{{--                <div class="card-header bg-light">Contacts</div>--}}
                <div class="card-body">
                <contact-list></contact-list>
                </div>
            </div>
        </div>
    </div>
@endsection
