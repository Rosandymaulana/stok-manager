<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pengembalian</title>
</head>

<body>
    @extends('layouts.index')
    @section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
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
                                    <h5 class="card-title">Barang Keluar</h5>

                                    <a href="{{ url('/barang_keluar/create') }}" class="btn btn-success"
                                        data-toggle="modal">
                                        <span>Tambah Data Transaksi</span></a><br><br>

                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID Barang</th>
                                                <th scope="col">Nama Barang</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Jenis Barang</th>
                                                <th scope="col">Stok</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transaction as $item)
                                            <tr>
                                                <td>{$item->id}</td>
                                                <td>
                                                    <a href="#" class="text-secondary fw-bold">Ut inventore ipsa
                                                        voluptas
                                                        nulla
                                                    </a>
                                                </td>
                                                <td>64.000</td>
                                                <td>ELektronik</td>
                                                <td class="fw-bold">124</td>
                                                <td>
                                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i
                                                            class="material-icons" data-toggle="tooltip"
                                                            title="Edit">&#xE254;</i></a>
                                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i
                                                            class="material-icons" data-toggle="tooltip"
                                                            title="Delete">&#xE872;</i></a>
                                                </td>
                                            </tr>
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