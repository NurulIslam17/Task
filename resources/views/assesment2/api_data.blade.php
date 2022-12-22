@extends('home.index')
@section('body')
    <div class="container">
        <div class="row mt-5">

            <div class="col-md-12 my-3">
                <h1 class="text-center">All Student Information</h1>
                <p class="text-danger">{{ Session::get('msg') }}</p>
            </div>

            <table class="table table-bordered table-striped">
                <thead>
                <tr class="bg-info">
                    <th scope="col">SL</th>
                    <th scope="col">User Id</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                </tr>
                </thead>

                <tbody>

                @foreach($students as $student)
                    <tr>
                        <td scope="col">{{$loop->iteration}}</td>
                        <td scope="col">{{$student->user_id}}</td>
                        <td scope="col">{{$student->name}}</td>
                        <td scope="col">{{$student->email}}</td>
                        <td scope="col">{{$student->contact}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection
