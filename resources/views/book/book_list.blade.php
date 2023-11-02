@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Book List</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Category</th>
                                <th scope="col">Author</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $row)
                                <tr>
                                    <th scope="row">{{ $row->id }}</th>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->price }}</td>
                                    <td>{{ $row->category }}</td>
                                    <td>{{ $row->author }}</td>
                                    <td> <a href="#" class="btn btn-success"> Edit</a> </td>
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
