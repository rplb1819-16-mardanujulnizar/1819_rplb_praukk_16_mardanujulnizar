<!-- menandakan ini adalah konten kelola user -->
@extends('layout/main')

<!-- menandakan ini adalah judul detail paket laundry -->
@section('title', 'Detail Data User')

<!-- menandakan ini adalah isi dari halaman detail paket laundry -->
@section('container')
<div class="header">
    <h1 class="page-header">
        Detail User Laundry
    </h1>
    <ol class="breadcrumb">
        <li><a href="/">Dashboard</a></li>
        <li><a href="/kelola_user">Kelola User </a></li>
        <li><a href="/detail_user">Detail User </a></li>
    </ol>



    <div id="page-inner">

        <div class="row" style="background-color: white;">
            <div class="column">
                <img class="img-detail" src="assets/img/logo_telma.png" align="middle" alt="">
            </div>

            <div class="column2">
                <div class="row">
                    <div class="input-field col s6">
                        ID User
                        <input id="password" type="text" readonly class="validate" value="U1">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        Nama User
                        <input id="password" type="text" readonly class="validate" value="Deka">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        Jenis Kelamin
                        <input id="password" type="text" readonly class="validate" value="Laki-Laki">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        Username
                        <input id="password" type="text" readonly class="validate" value="kasir1">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        Password
                        <input id="password" type="text" readonly class="validate" value="kasir1">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        User Level
                        <input id="password" type="text" readonly class="validate" value="Kasir">
                    </div>
                </div>
                <div class="box-header">
                    <a href="/kelola_user" class="btn btn-success" title="Kembali">
                        Kembali</a>
                </div>
            </div>

        </div>
    </div>




    <!-- ini tutup section -->
    @endsection