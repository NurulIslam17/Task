@extends('home.index')
@section('body')
    <div class="container">
        <div class="row mt-5">

            <div class="col-md-12 my-3">
                <h1 class="text-center">All Todo API Data</h1>
            </div>

            <table class="table table-bordered table-striped" id="myTable">
                <thead>
                <tr class="bg-info">
                    <th scope="col">SL</th>
                    <th scope="col">User Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Completed</th>

                </tr>
                </thead>

                    @foreach($data as $value)
                        <tr>
                            <td scope="col">{{ $loop->iteration }}</td>
                            <td scope="col">{{ $value->userId}}</td>
                            <td scope="col">{{ $value->title}}</td>
                            <td scope="col">{{ $value->compeleted == 1 ? 'Complete' : 'Incomplete'}}</td>
                        </tr>
                    @endforeach
                <tbody>

                </tbody>
            </table>
        </div>

    </div>
@endsection
