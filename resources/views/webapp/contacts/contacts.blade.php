@extends('layouts.webapp')
@section('title', 'Dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Contacts</div>
                <div class="card-body">
                    <table class="table table-responsive-md table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Current Zip</th>
                            <th scope="col">Moving to City</th>
                            <th scope="col">Replied</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->name }}</td>
                                <td>{{ ucfirst($contact->status) }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->current_zip_code }}</td>
                                <td>{{ $contact->moving_to_city }}</td>
                                <td class="pl-4">{!! $contact->replied ? '<i class="fa fa-check" aria-hidden="true"></i>' : '<i class="fa fa-times" aria-hidden="true"></i>' !!}</td>
                                <td class="text-nowrap">
                                    <span class="align-baseline">
                                    <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fa fa-envelope"></i>
                                    </button>
                                        <a href="#" class="btn btn-sm btn-outline-secondary" role="button" title="edit"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="btn btn-sm btn-outline-danger" role="button" title="delete"><i class="fa fa-trash"></i></a>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <span class="float-right">
                    {{ $contacts->links() }}
                    </span>
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
