{{-- @section('content') --}}

<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @extends('layouts.index')
    @section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item">Products</li>
                    <li class="breadcrumb-item active">Edit Products</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <a href="/data_barang" class="btn btn-primary mb-3">Kembali</a>

        <div class="card">
            <div class="card-header">Edit Products</div>
            <div class="card-body">
                <div class="container">
                    <form class="form-horizontal" action="{{ url('data_barang/' .$products->product_ID) }}"
                        method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        @method('PATCH')
                        <div class="row mb-3">
                            <label for="product_ID" class="col-sm-2 col-form-label">Product ID</label>
                            <div class="col-sm-10">
                                <input name="product_ID" class="form-control" type="char" maxlength="5" id="product_ID"
                                    disabled value="{{ $products->product_ID }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="product_name" class="col-sm-2 col-form-label">Product Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="product_name" class="form-control" id="product_name"
                                    value="{{ $products->product_name }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="buy_rate" class="col-sm-2 col-form-label">Buy Rate</label>
                            <div class="col-sm-10">
                                <input type="number" name="buy_rate" class="form-control" id="buy_rate"
                                    value="{{ $products->buy_rate }}" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="type" class="col-sm-2 col-form-label">Type</label>
                            <div class="col-sm-10">
                                <select name="type" class="form-control" id="type">
                                    @foreach($typeProducts as $typ)
                                    <option value="{{ $typ->id }}">{{ $typ->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="initial_quantity" class="col-sm-2 col-form-label">Initial Quantity</label>
                            <div class="col-sm-10">
                                <input type="number" name="initial_quantity" class="form-control" id="initial_quantity"
                                    value="{{ $products->initial_quantity }}" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <input name="description" class="form-control" id="description"
                                    value="{{ $products->description }}" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="image" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <img width="150px" src="{{asset('storage/'.$products->image)}}" class="mb-3">
                                <input type="file" class="form-control" name="image" value="{{$products->image}}"
                                    id="image">
                            </div>
                        </div>



                        <input type="submit" value="update" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </main>
    @endsection
</body>
{{-- @endsection --}}