<!-- menandakan ini adalah isi konten Detail Pelanggan -->
@extends('layout/main')

<!-- menandakan ini adalah judul Detail Pelanggan -->
@section('title', 'Detail Data Pelanggan')

<!-- menandakan ini adalah isi dari halaman Detail Pelanggan -->
@section('container')
<div class="header">
    <h1 class="page-header">
        Detail Pelanggan
    </h1>
    <ol class="breadcrumb">
        <li><a href="/">Dashboard</a></li>
        <li><a href="/kelola_pelanggan">Kelola Pelanggan</a></li>
        <li><a href="/detail_pelanggan">Detail Pelanggan</a></li>
    </ol>



    <div id="page-inner">

        <div class="row" style="background-color: white; ">
            <div class="column">
                <div class="row">
                    <div class="input-field col s6">
                        ID Pelanggan
                        <input id="password" type="text" readonly class="validate" value="PLG1">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        Nama Pelanggan
                        <input id="password" type="text" readonly class="validate" value="Mardanu">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        Alamat Pelanggan
                        <input id="password" type="text" readonly class="validate" value="Bintara IV, Bekasi Barat">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        No Telpon
                        <input id="password" type="text" readonly class="validate" value="081927398174">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        Email Pelanggan
                        <input id="password" type="text" readonly class="validate" value="MardanuTamvans123@gmail.com">
                    </div>
                </div>

                <div class="box-header">
                    <a href="/kelola_pelanggan" class="btn btn-success" title="Kembali">
                        Kembali</a>
                </div>
            </div>

        </div>
    </div>




    <!-- ini tutup section -->
    @endsection