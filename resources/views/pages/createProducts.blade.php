<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link href="{{ asset('style/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('style/assets/img/apple-touch-icon.pn') }}g" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('style/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('style/assets/css/style.css') }}" rel="stylesheet">
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
                    <li class="breadcrumb-item active">Create Products</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        <a href="/data_barang" class="btn btn-primary mb-3">Kembali</a>

        <div class="d-flex justify-content-center align-items-center">

            <div class="container card my-auto p-5">
                <form method="POST" action="/data_barang" class="w-sm-50" enctype="multipart/form-data">

                    @csrf

                    <div class="row mb-3">
                        <label for="product_ID" class="col-sm-2 col-form-label">Product ID</label>
                        <div class="col-sm-10">
                            <input name="product_ID" class="form-control" type="char" maxlength="5" id="product_ID">
                            @if($errors->has('product_ID'))
                            <div class="text-danger">
                                {{ $errors->first('product_ID')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="product_name" class="col-sm-2 col-form-label">Product Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="product_name" class="form-control" id="product_name">
                            @if($errors->has('product_name'))
                            <div class="text-danger">
                                {{ $errors->first('product_name')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="buy_rate" class="col-sm-2 col-form-label">Buy Rate</label>
                        <div class="col-sm-10">
                            <input type="number" name="buy_rate" class="form-control" id="buy_rate" />
                            @if($errors->has('buy_rate'))
                            <div class="text-danger">
                                {{ $errors->first('buy_rate')}}
                            </div>
                            @endif
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
                            @if($errors->has('type'))
                            <div class="text-danger">
                                {{ $errors->first('type')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="initial_quantity" class="col-sm-2 col-form-label">Initial Quantity</label>
                        <div class="col-sm-10">
                            <input type="number" name="initial_quantity" class="form-control" id="initial_quantity" />
                            @if($errors->has('initial_quantity'))
                            <div class="text-danger">
                                {{ $errors->first('initial_quantity')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea name="description" class="form-control" id="description"></textarea>
                            @if($errors->has('description'))
                            <div class="text-danger">
                                {{ $errors->first('description')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" required="required" name="image">
                            {{-- <input type="file" name="image" class="form-control" id="image" /> --}}
                            @if($errors->has('image'))
                            <div class="text-danger">
                                {{ $errors->first('image')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3 w-25 mx-auto">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>

                </form>


            </div>
            @endsection
    </main>
</body>

</html>