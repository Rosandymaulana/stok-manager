<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body>
    @extends('layouts.index')
    @section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">Products</li>
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
                                    <h5 class="card-title">Data Barang</h5>

                                    <a href="{{ url('/data_barang/create') }}" class="btn btn-success"
                                        data-toggle="tooltip">
                                        <span>Tambah Data</span>
                                    </a><br><br>

                                    <table class="table table-borderless table-bordered py-3" id="">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID Barang</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Nama Barang</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Jenis Barang</th>
                                                {{-- <th scope="col">ID Barang</th> --}}
                                                <th scope="col">Stok</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $item)
                                            {{-- <img class="img-fluid mx-auto" style="max-width: 100%"
                                                src="{{asset('storage/'.$item->image)}}" alt=""> --}}
                                            <tr>
                                                <td>{{ $item->product_ID }}</td>
                                                <td><img style="min-width: 100%" class="
                                                        img-fluid text-center" src="{{asset('storage/'.$item->image)}}"
                                                        alt="">
                                                <td>{{ $item->product_name }}</td>
                                                <td>{{ $item->buy_rate }}</td>
                                                <td>{{ $item->dt_type->name }}</td>
                                                {{-- <td>{{ $item->type }}</td> --}}
                                                <td class="fw-bold">{{ $item->initial_quantity }}</td>
                                                <td>{{ $item->description }}</td>
                                                </td>
                                                <td class="d-flex justify-content-evenly px-3">
                                                    <a href="{{ url('/data_barang/' . $item->product_ID) }}"
                                                        title="View" data-toggle="modal"
                                                        data-target="#showModal{{ $item->product_ID }}">
                                                        <button type="button" class="btn btn-sm btn-primary">
                                                            <i class="bi bi-eye-fill">

                                                            </i>
                                                        </button>
                                                    </a>
                                                    <a href="{{ url('/data_barang/' . $item->product_ID . '/edit') }}"
                                                        class="edit px-1" data-toggle="toggle">
                                                        <button type="button" class="btn btn-sm btn-success">
                                                            <i class="bi bi-pencil-square">

                                                            </i>
                                                        </button>
                                                    </a>
                                                    <form action="{{ url('data_barang'.'/'.$item->product_ID) }}"
                                                        method="post">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button onclick="return confirm('Confirm Delete')" type="submit"
                                                            class="btn btn-sm btn-danger btndelete">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </form>
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

        @foreach ($products as $data)
        <!-- Modal -->
        <div class="modal fade" id="showModal{{ $data->product_ID }}" tabindex="-1" role="dialog"
            aria-labelledby="showModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><span> Product ID</span> : {{
                            $data->product_ID }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th scope="row">Product Name</th>
                                    <td>{{ $data->product_name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Buy Rate</th>
                                    <td>{{ $data->buy_rate }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jenis Barang</th>
                                    <td>{{ $data->dt_type->name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Stock</th>
                                    <td>{{ $data->initial_quantity }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Description</th>
                                    <td>{{ $data->description }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                    </div>
                </div>
            </div>
        </div>

        @endforeach

    </main><!-- End #main -->
    @endsection
</body>

</html>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
</script>
<script>
    $(document).ready(function () {
    
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
    
                $('.btndelete').click(function (e) {
                    e.preventDefault();
    
                    var deleteid = $(this).closest("tr").find('.delete_id').val();
    
                    swal({
                            title: "Apakah anda yakin?",
                            text: "Setelah dihapus, Anda tidak dapat memulihkan Data ini lagi!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
    
                                var data = {
                                    "_token": $('input[name=_token]').val(),
                                    'id': deleteid,
                                };
                                $.ajax({
                                    type: "DELETE",
                                    url: 'mahasiswa/' + deleteid,
                                    data: data,
                                    success: function (response) {
                                        swal(response.status, {
                                                icon: "success",
                                            })
                                            .then((result) => {
                                                location.reload();
                                            });
                                    }
                                });
                            }
                        });
                });
    
            });
    
</script>
{{-- PHP artisan make request --}}
{{-- plugins data table --}}