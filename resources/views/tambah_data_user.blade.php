<!-- menandakan ini adalah isi konten tambah user  -->
@extends('layout/main')

<!-- menandakan ini adalah judul tambah user  -->
@section('title', 'Tambah Data Paket Laundry')

<!-- menandakan ini adalah isi dari halaman tambah user  -->
@section('container')
<div class="header">
    <h1 class="page-header">
        Tambah User ARES
    </h1>
    <ol class="breadcrumb">
        <li><a href="/">Dashboard</a></li>
        <li><a href="/kelola_user">Kelola User</a></li>
        <li><a href="/tambah_user">Tambah User</a></li>
    </ol>



    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-action">
                        Tambah Data Kasir
                    </div>
                    <div class="card-content">
                        <form class="col s12 ">

                            <div class="row">
                                <div class="input-field col s6">
                                    <h4>ID Kasir</h4>
                                    <input id="id_kasir" type="text" class="validate">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <h4>Nama Kasir</h4>
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
                                    <h4>Username</h4>
                                    <input id="password" type="text" class="validate">
                                    <label for="password"></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <h4> Password</h4>
                                    <input class="myinput" type="password" name="" value="" id="pass">
                                    <span id="mybutton" onclick="change()"><i class="glyphicon glyphicon-eye-open"></i></span>
                                </div>

                            </div>


                            <div class="box-header">
                                <a href="kelola_kasir.html" class="btn btn-success" title="Tambah Data Kasir">
                                    Selesai</a>
                            </div>
                        </form>
                        <div class="clearBoth"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ini tutup section -->
        @endsection