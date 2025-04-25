@extends('layouts.webapp')
@section('title', 'Dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-light">Contacts</div>
                <div class="card-body">
                <contact-list></contact-list>
                </div>
            </div>
        </div>

        <!-- TODO: Make into Vue Component to back called -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Modal -->
    </div>
@endsection
