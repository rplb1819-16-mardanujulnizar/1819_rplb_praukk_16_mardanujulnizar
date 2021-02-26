<!-- menandakan ini adalah konten kelola outlet -->
@extends('layout/main')

<!-- menandakan ini title di halaman ini adalah judul Kelola outlet -->
@section('title', 'Kelola Outlet')

<!-- ini adalah isi kelola outlet -->
@section('container')
<div class="header">
    <h1 class="page-header">
        Kelola Data Outlet
    </h1>
    <ol class="breadcrumb">
        <li><a href="/homepage_admin">Dashboard</a></li>
        <li><a href="/dashboard/outlet">Kelola Data Outlet</a></li>
    </ol>

</div>
<div id="page-inner">

    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="box-header">
                <a href="/dashboard/outlet/create" class="btn btn-success" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
            </div>

            @if (session('status'))
    		 <div class="alert alert-success">
       		    {{ session('status') }}
   			 </div>
			@endif

            <div class="card">
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example" width="auto">

                            <thead>
                                <tr>
                                    <th class="center">No</th>
                                    <th class="center">Nama Outlet </th>
                                    <th class="center">No Telpon </th>
                                    <th class="center">Email </th>
                                    <th class="center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach( $outlet as $laundry => $hasil )
                                <tr class="gradeA">
                                    <td class="center">{{ $laundry + $outlet->firstitem() }}</td>
                                    <td class="center">{{ $hasil->nama_outlet }}</td>
                                    <td class="center">{{ $hasil->no_telp }}</td>
                                    <td class="center">{{ $hasil->email }}</td>
                                    <td class="center">

                                        <button class=" btn-warning">
                                            <a href="{{ route('outlet.edit', $hasil->id) }}">
                                                <i class="glyphicon glyphicon-edit"></i>
                                                Edit </a>
                                        </button>

                                        <button class="btn-primary">
                                            <a href="{{ route('outlet.show', $hasil->id) }}">
                                                <i class="glyphicon glyphicon-check"></i>
                                                Detail
                                            </a>
                                        </button>

                                        <form action="{{ route('outlet.destroy', $hasil->id)}}" method="post" class="d-inline-block">
                                         @method('delete')
                                         @csrf
                                        <button class="btn-danger"><i class="glyphicon glyphicon-trash"></i>
                                            Hapus
                                        </button>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
    <!-- ini adalah tutup section -->
    @endsection