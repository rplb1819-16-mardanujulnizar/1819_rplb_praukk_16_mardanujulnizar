<!-- menandakan ini adalah isi konten Detail Outlet -->
@extends('layout/main')

<!-- menandakan ini adalah judul Detail Outlet -->
@section('title', 'Detail Data Outlet')

<!-- menandakan ini adalah isi dari halaman Detail Outlet -->
@section('container')
<div class="header">
    <h1 class="page-header">
        Detail Outlet
    </h1>
    <ol class="breadcrumb">
        <li><a href="/homepage_admin">Dashboard</a></li>
        <li><a href="/dashboard/outlet">Kelola Outlet</a></li>
        <li><a href="/dashboard/outlet/show">Detail Outlet</a></li>
    </ol>

    <div id="page-inner">

        <div class="row" style="background-color: white; ">
            <div class="column">
                <div class="row">
                    <div class="input-field col s6">
                    ID Outlet : 
                        <input id="password" type="text" readonly class="validate" value=" {{ $outlet->id }}">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                    Nama Outlet :  
                        <input id="password" type="text" readonly class="validate" value="{{ $outlet->nama_outlet }}">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                    Alamat :  
                        <input id="password" type="text" readonly class="validate" value="{{ $outlet->alamat }}">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                    No Telepon :  
                        <input id="password" type="text" readonly class="validate" value="{{ $outlet->no_telp }}">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                    Email Outlet : 
                        <input id="password" type="text" readonly class="validate" value="{{ $outlet->email }}">
                    </div>
                </div>

                <div class="box-header">
                    <a href="/dashboard/outlet" class="btn btn-success" title="Kembali">
                        Kembali</a>
                </div>
            </div>

        </div>
    </div>




    <!-- ini tutup section -->
    @endsection