@extends('home.index')
@section('body')
    <div class="container">
        <div class="row mt-5">

            <div class="col-md-12 my-3">
                <h1 class="text-center">All Product Information</h1>
                <p class="text-danger">{{ Session::get('msg') }}</p>
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
                            <form action="{{ route('delete.product') }}" method="post" class="d-inline-flex">
                                @csrf
                                <input type="hidden" name="deleteProduct" value="{{$product->id}}">
                                <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure ?')" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection
