<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>
</head>

<body>
    @extends('layouts.index')
    @section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">Stock Barang</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <div class="col-12">
                            <div class="card top-selling overflow-auto">

                                <div class="card-body pb-0">
                                    <h5 class="card-title">Stock Barang</h5>

                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID Barang</th>
                                                <th scope="col">Nama Barang</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Stok</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($stocks as $item)

                                            <tr>
                                                <td>{{ $item->product_ID }}</td>
                                                <td>
                                                    <a href="#" class="text-secondary fw-bold">
                                                        {{$item->product_name}}
                                                    </a>
                                                </td>
                                                <td>{{ $item->buy_rate }}</td>
                                                <td class="fw-bold">{{ $item->initial_quantity }}</td>
                                                <td>
                                                    <a href="#addEmployeeModal" class="btn btn-success"
                                                        data-toggle="modal">
                                                        <span>Add</span>
                                                    </a>
                                                </td>
                                                @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Top Selling -->

                    </div>
                </div><!-- End Left side columns -->
            </div>
        </section>
    </main><!-- End #main -->
    @endsection
</body>

</html>