<!-- menandakan ini adalah isi konten detail Paket Laundry -->
@extends('layout/main')

<!-- menandakan ini adalah judul detail Paket Laundry -->
@section('title', 'Detail Data Paket Laundry')

<!-- menandakan ini adalah isi dari halaman detail Paket Laundry -->
@section('container')
<div class="header">
    <h1 class="page-header">
        Detail Paket
    </h1>
    <ol class="breadcrumb">
        <li><a href="/">Dashboard</a></li>
        <li><a href="/kelola_paket">Kelola Paket</a></li>
        <li><a href="/detail_paket">Detail Paket</a></li>
    </ol>



    <div id="page-inner">

        <div class="row" style="background-color: white;">
            <div class="column">
                <img class="img-detail" src="assets/img/logo_telma.png" align="middle" alt="">
            </div>

            <div class="column2">
                <div class="row">
                    <div class="input-field col s6">
                        ID Paket
                        <input id="password" type="text" readonly class="validate" value="PL1">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        Nama Paket Laundry
                        <input id="password" type="text" readonly class="validate" value="kaos">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        Jenis Paket Laundry
                        <input id="password" type="text" readonly class="validate" value="Kaos">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        Harga Paket Laundry (Kg)
                        <input id="password" type="text" readonly class="validate" value="10000">
                    </div>
                </div>
                <div class="box-header">
                    <a href="/kelola_paket_laundry" class="btn btn-success" title="Kembali">
                        Kembali</a>
                </div>
            </div>

        </div>
    </div>




    <!-- ini tutup section -->
    @endsection


    <!-- menandakan ini adalah isi konten detail paket laundry -->
    @extends('layout/main')