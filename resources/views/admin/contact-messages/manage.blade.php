@extends('admin.master')
@section('title')
    Manage Contact Messages
@endsection

@section('module')
    Contact Messages
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Messages from customer</h4>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-striped border">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 8%">SL NO</th>
                                    <th scope="col" style="width: 10%">Name</th>
                                    <th scope="col" style="width: 15%">Email</th>
                                    <th scope="col" style="width: 10%">Phone</th>
                                    <th scope="col" style="width: 15%">Subject</th>
                                    <th scope="col" style="width: 40%">Message</th>
                                    <th scope="col" style="width: 2%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($messages as $message)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $message->name }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->phone }}</td>
                                        <td>{{ $message->subject }}</td>
                                        <td>{{ $message->message }}</td>
                                        <td>
                                            <a href="{{ route('message.delete', ['id' => $message->id]) }}"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure to delete this?');">
                                                <i class="ti-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
