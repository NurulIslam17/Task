@extends('home.index')
@section('body')
    <div class="container">
        <div class="row mt-5">

            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card card-body">
                        <h2 class="text-center my-5">Edit Product</h2>
                        <form method="post" action="{{ route('update.product')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="update_product">
                            <div class="row mb-3">
                                <label class="col-md-5" for="">Product Name</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" value="{{ $product->title }}" name="title">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-5" for="">Product</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" value="{{ $product->product }}" name="product">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-5" for="">Price</label>
                                <div class="col-md-7">
                                    <input type="number" class="form-control" value="{{ $product->price }}" name="price">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-5" for="">Olgg Image</label>
                                <div class="col-md-7">
                                    <img src="{{ asset($product->image) }}" style="height: 80px; width: 80px;" alt="">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-5" for="">Image</label>
                                <div class="col-md-7">
                                    <input type="file" class="form-control"  name="image">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-5" for=""></label>
                                <div class="col-md-7">
                                    <input type="submit" class="btn btn-green rounded-0" value="Update">
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
