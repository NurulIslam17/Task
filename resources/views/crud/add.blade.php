@extends('home.index')
@section('body')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 mt-3">
                <h1 class="text-center">Basic CRUD Operation</h1>
            </div>

            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card card-body">
                        <h2 class="text-center">Add Product</h2>
                        <a href=" {{ route('manage')  }}" class=" btn btn-success my-4">View Product</a>

                        <form method="post" action="" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label class="col-md-5" for="">Name</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="title">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-5" for="">Product</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="product">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-5" for="">Price</label>
                                <div class="col-md-7">
                                    <input type="number" class="form-control" name="price">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-5" for="">Image</label>
                                <div class="col-md-7">
                                    <input type="file" class="form-control" name="price">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-5" for=""></label>
                                <div class="col-md-7">
                                    <input type="submit" class="btn btn-green rounded-0" value="Add">
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
