<!-- menandakan ini adalah isi konten detail Transaksi -->
@extends('layout/main')

<!-- menandakan ini adalah judul detail Transaksi -->
@section('title', 'Detail Data Transaksi')

<!-- menandakan ini adalah isi dari halaman detail Transaksi -->
@section('container')
<div class="header">
    <h1 class="page-header">
        Detail Transaksi
    </h1>
    <ol class="breadcrumb">
        <li><a href="/">Dashboard</a></li>
        <li><a href="/kelola_transaksi">Kelola Transaksi</a></li>
        <li><a href="/detail_transaksi">Detail Transaksi</a></li>
    </ol>

    <div id="page-inner" style="background-color: white;">
        <div class="row" style="background-color: white;">
            <div class="column3">
                <div class="row">
                    <div class="input-field col s6">
                        ID Transaksi
                        <input id="password" type="text" readonly class="validate" value="TR1">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        Nama Pelanggan
                        <input id="password" type="text" readonly class="validate" value="PLG1">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        Nama Admin
                        <input id="password" type="text" readonly class="validate" value="Deka">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        Tanggal Bayar
                        <input id="password" type="text" readonly class="validate" value="10/02/2021">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        Tanggal Ambil
                        <input id="password" type="text" readonly class="validate" value="12/02/2021">
                    </div>
                </div>

            </div>


            <div class="column4 ">
                <div class="row">
                    <div class="input-field col s6">
                        Status Bayar
                        <input id="password" type="text" readonly class="validate" value="Lunas">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        Pajak(10%)
                        <input id="password" type="text" readonly class="validate" value="2000">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        Diskon(5%)
                        <input id="password" type="text" readonly class="validate" value="0">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        Durasi Cucian(Hari)
                        <input id="password" type="text" readonly class="validate" value="2">
                    </div>
                </div>
            </div>
        </div>



        <div class="card">
            <div class="card-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered ">

                        <thead>
                            <tr>
                                <th class="center">No</th>
                                <th class="center">Tanggal Terima </th>
                                <th class="center">Paket Laundry</th>
                                <th class="center">Berat Cucian(Kg) </th>
                                <th class="center">Harga(Kg) </th>
                                <th class="center">Total Harga </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="gradeA">
                                <td class="center">1</td>
                                <td class="center">10/02/2021</td>
                                <td class="center">Celana</td>
                                <td class="center">2</td>
                                <td class="center">10000</td>
                                <td class="center">22000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="box-header">

                    <a href="/kelola_transaksi" class="btn btn-success">
                        Kembali </a>

                    <a href="/kelola_transaksi" class="btn btn-danger">
                        <i class="glyphicon glyphicon-print"></i>
                        Cetak Transaksi </a>

                </div>

            </div>
        </div>
        <!--End Advanced Tables -->

        <!-- end page inner -->
    </div>

    <!-- ini tutup section -->
    @endsection