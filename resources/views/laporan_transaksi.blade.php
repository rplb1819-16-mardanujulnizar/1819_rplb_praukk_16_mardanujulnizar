@extends('layout/main')


@section('title', 'Laporan Transaksi')

@section('container')
<div class="header">
    <h1 class="page-header">
        Laporan Data Transaksi Pembayaran
    </h1>
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/laporan_transaksi">Laporan Data Transaksi Pembayaran</a></li>
    </ol>

</div>

<div id="page-inner">

    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="card">
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                            <thead>
                                <tr>
                                    <th class="center">No</th>
                                    <th class="center">ID Transaksi</th>
                                    <th class="center">Pembayaran</th>
                                    <th class="center">Nama Pelanggan </th>
                                    <th class="center">Paket </th>
                                    <th class="center">Status Pesan </th>
                                    <th class="center">Total Harga </th>
                                    <th class="center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr class="gradeA">
                                    <td class="center">1</td>
                                    <td class="center">TR1</td>
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
                                    <td class="center">22000</td>
                                    <td class="center" style="margin: 5;">

                                        <button class=" btn-danger">
                                            <a href="edit_kasir.html">
                                                <i class="glyphicon glyphicon-print"></i>
                                                Print </a>
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