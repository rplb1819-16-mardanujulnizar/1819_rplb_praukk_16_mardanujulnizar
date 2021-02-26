<!-- menandakan ini adalah konten kelola paket laundry -->
@extends('layout/main')

<!-- menandakan ini title di halaman ini adalah judul Kelola paket laundry -->
@section('title', 'Kelola Transaksi Pembayaran')

<!-- ini adalah isi homepage admin -->
@section('container')
<div class="header">
    <h1 class="page-header">
        Kelola Data Transaksi Pembayaran
    </h1>
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/kelola_transaksi">Kelola Data Transaksi Pembayaran</a></li>
    </ol>

</div>
<div id="page-inner">

    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="box-header">
                <a href="/tambah_transaksi" class="btn btn-success" title="Tambah Data">
                    <i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
            </div>

            <div class="card">
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                            <thead>
                                <tr>
                                    <th class="center">No</th>
                                    <th class="center">ID Pelanggan</th>
                                    <th class="center">Tanggal Transaksi </th>
                                    <th class="center">Pembayaran</th>
                                    <th class="center">Nama Pelanggan </th>
                                    <th class="center">Paket </th>
                                    <th class="center">Status Pesan </th>
                                    <th class="center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr class="gradeA">
                                    <td class="center">1</td>
                                    <td class="center">TR1</td>
                                    <td class="center">10/02/2021</td>
                                    <td class="center">
                                        <button class="btn-primary">
                                            Lunas
                                        </button>
                                    </td>
                                    <td class="center">Mardanu</td>
                                    <td class="center">Kaos</td>
                                    <td class="center">
                                        <button class="btn-primary">
                                            Diambil
                                        </button>
                                    </td>
                                    <td class="center" style="margin: 5;">

                                        <button class=" btn-warning">
                                            <a href="/edit_transaksi">
                                                <i class="glyphicon glyphicon-edit"></i>
                                                Edit </a>
                                        </button>
                                        <button class="btn-primary">
                                            <a href="/detail_transaksi">
                                                <i class="glyphicon glyphicon-check"></i>
                                                Detail
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