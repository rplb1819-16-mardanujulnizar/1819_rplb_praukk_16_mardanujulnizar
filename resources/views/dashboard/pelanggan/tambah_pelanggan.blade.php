<!-- menandakan ini adalah isi konten tambah Pelanggan -->
@extends('layout/main')

<!-- menandakan ini adalah judul tambah Pelanggan -->
@section('title', 'Tambah Data Pelanggan')

<!-- menandakan ini adalah isi dari halaman tambah Pelanggan -->
@section('container')
<div class="header">
    <h1 class="page-header">
        Tambah Pelanggan
    </h1>
    <ol class="breadcrumb">
        <li><a href="/">Dashboard</a></li>
        <li><a href="/kelola_pelanggan">Kelola Pelanggan</a></li>
        <li><a href="/tambah_pelanggan">Tambah Pelanggan</a></li>
    </ol>



    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-action">
                        Tambah Data Pelanggan
                    </div>
                    <div class="card-content">
                        <form class="col s12 ">

                            <div class="row">
                                <div class="input-field col s6">
                                    <h4>ID Pelanggan</h4>
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
                                    <h4>Jenis Kelamin </h4>
                                    <div class="custom-control custom-radio custom-contro mb-3">
                                        <input type="radio" class="custom-control-input" id="customRadio1" name="example1" checked>
                                        <label class="custom-control-label" for="customRadio1">Laki-Laki</label>
                                        <input type="radio" class="custom-control-input" id="customRadio2" name="example1">
                                        <label class="custom-control-label" for="customRadio2">Perempuan</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <h4>Alamat</h4>
                                    <input id="password" type="text" class="validate">
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <h4>No Telpon </h4>
                                    <input id="password" type="text" class="validate">
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <h4>Email Pelanggan </h4>
                                    <input id="password" type="email" class="validate">
                                </div>
                            </div>


                            <div class="box-header">
                                <a href="/kelola_pelanggan" class="btn btn-success" title="Tambah Data Kasir">
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