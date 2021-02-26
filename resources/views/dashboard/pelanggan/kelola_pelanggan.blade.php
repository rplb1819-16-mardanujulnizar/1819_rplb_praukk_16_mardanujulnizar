<!-- menandakan ini adalah konten kelola pelanggan laundry -->
@extends('layout/main')

<!-- menandakan ini title di halaman ini adalah judul Kelola pelanggan laundry -->
@section('title', 'Kelola Pelanggan Laundry')

<!-- ini adalah isi kelola pelanggan admin -->
@section('container')
<div class="header">
    <h1 class="page-header">
        Kelola Data Pelanggan Laundry
    </h1>
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/kelola_pelanggan">Kelola Data Pelanggan Laundry</a></li>
    </ol>

</div>
<div id="page-inner">

    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="box-header">
                <a href="/tambah_pelanggan" class="btn btn-success" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
            </div>

            <div class="card">
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                            <thead>
                                <tr>
                                    <th class="center">No</th>
                                    <th class="center">ID Pelanggan</th>
                                    <th class="center">Nama Pelanggan </th>
                                    <th class="center">Jenis Kelamin</th>
                                    <th class="center">Alamat </th>
                                    <th class="center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr class="gradeA">
                                    <td class="center">1</td>
                                    <td class="center">PLG1</td>
                                    <td class="center">Mardanu</td>
                                    <td class="center">Laki-Laki</td>
                                    <td class="center">Bintara IV, Bekasi Barat</td>
                                    <td class="center" style="margin: 5;">

                                        <button class=" btn-warning">
                                            <a href="/edit_pelanggan">
                                                <i class="glyphicon glyphicon-edit"></i>
                                                Edit </a>
                                        </button>
                                        <button class="btn-primary">
                                            <a href="/detail_pelanggan">
                                                <i class="glyphicon glyphicon-check"></i>
                                                Detail
                                            </a>
                                        </button>
                                        <button class="btn-danger">
                                            <a href="/kelola_pelanggan">
                                                <i class="glyphicon glyphicon-trash"></i>
                                                Hapus
                                            </a>
                                        </button>
                                    </td>
                                </tr>

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