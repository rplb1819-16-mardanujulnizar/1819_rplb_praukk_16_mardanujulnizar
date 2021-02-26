<!-- menandakan ini adalah isi konten tambah paket laundry -->
@extends('layout/main')

<!-- menandakan ini adalah judul tambah paket laundry -->
@section('title', 'Tambah Data Paket Laundry')

<!-- menandakan ini adalah isi dari halaman tambah paket laundry -->
@section('container')
<div class="header">
    <h1 class="page-header">
        Tambah Paket Laundry
    </h1>
    <ol class="breadcrumb">
        <li><a href="/">Dashboard</a></li>
        <li><a href="/kelola_paket_laundry">Kelola Paket Laundry</a></li>
        <li><a href="/tambah_paket_laundry">Tambah Paket Laundry</a></li>
    </ol>



    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-action">
                        Tambah Data Paket Laundry
                    </div>
                    <div class="card-content">
                        <form class="col s12 ">
                            <div class="row">
                                <div class="input-field col s6">
                                    ID Paket
                                    <input id="password" type="text" readonly class="validate">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="password" type="text" class="validate">
                                    <label for="password">Nama Paket </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    Jenis Paket :
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
                                    <input id="password" type="number" class="validate">
                                    <label for="password">Harga Paket</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    Gambar Paket
                                    <input type="file" class="form-control-file border" name="file">
                                </div>
                            </div>


                            <div class="box-header">
                                <a href="/kelola_paket_laundry" class="btn btn-success" title="Tambah Data Paket">
                                    Tambah Data</a>
                            </div>

                        </form>
                        <div class="clearBoth"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ini tutup section -->
        @endsection