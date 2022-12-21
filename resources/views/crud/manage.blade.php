@extends('home.index')
@section('body')
    <div class="container">
        <div class="row mt-5">

            <div class="col-md-12 my-3">
                <h1 class="text-center">All Product Information</h1>
            </div>

            <table class="table table-bordered table-striped">
                <thead>
                <tr class="bg-info">
                    <th scope="col">SL</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->product }}</td>
                        <td>{{ $product->price }} BDT</td>
                        <td>
                            <img src="{{ asset($product->image) }}" style="height: 80px; width: 80px" alt="Image Not Found">
                        </td>
                        <td>
                            <a href="" class="btn btn-success">EDIT</a>
                            <a href="" class="btn btn-danger">DELETE</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection
