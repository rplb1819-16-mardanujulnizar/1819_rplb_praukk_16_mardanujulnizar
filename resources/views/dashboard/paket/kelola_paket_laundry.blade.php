<!-- menandakan ini adalah konten kelola paket laundry -->
@extends('layout/main')

<!-- menandakan ini title di halaman ini adalah judul Kelola paket laundry -->
@section('title', 'Kelola Paket Laundry')

<!-- ini adalah isi homepage admin -->
@section('container')
<div class="header">
    <h1 class="page-header">
        Kelola Data Paket Laundry
    </h1>
    <ol class="breadcrumb">
        <li><a href="/">Dashboard</a></li>
        <li><a href="/kelola_paket_laundry">Kelola Data Paket Laundry</a></li>
    </ol>

</div>
<div id="page-inner">

    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="box-header">
                <a href="/tambah_paket_laundry" class="btn btn-success" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
            </div>

            <div class="card">
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                            <thead>
                                <tr>
                                    <th class="center">No</th>
                                    <th class="center">ID User</th>
                                    <th class="center">Nama Paket </th>
                                    <th class="center">Harga</th>
                                    <th class="center">Jenis Paket </th>
                                    <th class="center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr class="gradeA">
                                    <td class="center">1</td>
                                    <td class="center">PL1</td>
                                    <td class="center">Kaos</td>
                                    <td class="center">8000</td>
                                    <td class="center">Kaos</td>
                                    <td class="center" style="margin: 5;">

                                        <button class=" btn-warning">
                                            <a href="/edit_paket_laundry">
                                                <i class="glyphicon glyphicon-edit"></i>
                                                Edit </a>
                                        </button>
                                        <button class="btn-primary">
                                            <a href="/detail_paket_laundry">
                                                <i class="glyphicon glyphicon-check"></i>
                                                Detail
                                            </a>
                                        </button>
                                        <button class="btn-danger"><i class="glyphicon glyphicon-trash"></i>
                                            Hapus
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