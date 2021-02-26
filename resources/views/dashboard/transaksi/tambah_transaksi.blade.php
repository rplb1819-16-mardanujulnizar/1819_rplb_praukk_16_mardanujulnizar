<!-- menandakan ini adalah isi konten tambah Transaksi -->
@extends('layout/main')

<!-- menandakan ini adalah judul tambah Transaksi -->
@section('title', 'Tambah Data Transaksi')

<!-- menandakan ini adalah isi dari halaman tambah Transaksi -->
@section('container')
<div class="header">
    <h1 class="page-header">
        Tambah Transaksi
    </h1>
    <ol class="breadcrumb">
        <li><a href="/">Dashboard</a></li>
        <li><a href="/kelola_transaksi">Kelola Transaksi</a></li>
        <li><a href="/tambah_transaksi">Tambah Transaksi</a></li>
    </ol>



    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-action">
                        Tambah Data Transaksi
                    </div>
                    <div class="card-content">
                        <form class="col s12 ">

                            <div class="row">
                                <div class="input-field col s6">
                                    <h4>ID Transaksi</h4>
                                    <input id="id_kasir" type="text" class="validate" readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <h4>Nama Pelanggan</h4>
                                    <input id="password" type="text" class="validate">
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <h4>Nama Admin</h4>
                                    <input id="password" type="text" class="validate">
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <h4>Tanggal Terima</h4>
                                    <input id="password" type="date" class="validate">
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <h4>Tanggal Bayar</h4>
                                    <input id="password" type="date" class="validate">
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <h4>Tanggal Ambil</h4>
                                    <input id="password" type="date" class="validate">
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <h4>Durasi Cuci(Hari)</h4>
                                    <input id="password" type="number" class="validate">
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    Jenis Paket Laundry
                                    <select name="small_select" id="small_select" class="form-control form-control-sm mb-3">
                                        <option value="small_select">Baju</option>
                                        <option value="small_select">Celana</option>
                                        <option value="small_select">Kiloan</option>
                                        <option value="small_select">Selimut</option>
                                        <option value="small_select">Lainnya</option>\
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <h4>Berat Cucian(Kg))</h4>
                                    <input id="password" type="number" class="validate">
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <h4>Diskon (5%)</h4>
                                    <input id="password" type="number" class="validate">
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <h4>Pajak (10%)</h4>
                                    <input id="password" type="number" class="validate">
                                </div>
                            </div>


                            <div class="row">
                                <div class="input-field col s6">
                                    Status Bayar
                                    <select name="small_select" id="small_select" class="form-control form-control-sm mb-3">
                                        <option value="small_select">Lunas</option>
                                        <option value="small_select">Belum Lunas</option>\
                                    </select>
                                </div>
                            </div>


                            <div class="row">
                                <div class="input-field col s6">
                                    <h4>Total Bayar</h4>
                                    <input id="password" type="text" class="validate" readonly>
                                </div>
                            </div>

                            <div class="box-header">
                                <a href="/kelola_transaksi" class="btn btn-success" title="Tambah Data Transaksi">
                                    Tambah Data </a>
                            </div>
                        </form>
                        <div class="clearBoth"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ini tutup section -->
        @endsection