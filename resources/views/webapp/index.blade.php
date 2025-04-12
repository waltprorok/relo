@extends('layouts.webapp')
@section('title', 'Dashboard')
@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="card p-4">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <span class="h4 d-block font-weight-normal mb-2">{{ App\Models\Contact::contactsCount() }}</span>
                    <span class="font-weight-light">Contacts</span>
                </div>

                <div class="h2 text-muted">
                    <i class="icon icon-people"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
