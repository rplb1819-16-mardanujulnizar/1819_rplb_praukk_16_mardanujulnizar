<!-- menandakan ini adalah isi konten Edit Outlet -->
@extends('layout/main')

<!-- menandakan ini adalah judul Edit Outlet -->
@section('title', 'Edit Data Outlet')

<!-- menandakan ini adalah isi dari halaman Edit Outlet -->
@section('container')
<div class="header">
    <h1 class="page-header">
        Edit Outlet
    </h1>
    <ol class="breadcrumb">
        <li><a href="/homepage_admin">Dashboard</a></li>
        <li><a href="/dashboard/outlet">Kelola Outlet</a></li>
        <li><a href="/dashboard/outlet/edit">Edit Outlet</a></li>
    </ol>

    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-action">
                        Edit Data Outlet
                    </div>
                    <div class="card-content">
                        <form class="col s12" method="post" action="{{ route('outlet.update', $outlet->id) }}">
                        @method('patch')
                        @csrf
                        <div class="row">
                                <div class="input-field col s6">
                                    <h4>Nama Outlet</h4>
                                    <input type="text" class="form-control @error('nama_outlet') is-invalid @enderror" name="nama_outlet" value="{{ $outlet->nama_outlet }}">
                                </div>
                                @error('nama_outlet')
                                 <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <h4>Alamat</h4>
                                    <input type="textarea" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $outlet->alamat }}">
                                </div>
                                @error('alamat')
                                 <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <h4>No Telpon </h4>
                                    <input type="number" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ $outlet->no_telp }}">
                                </div>
                                @error('no_telp')
                                 <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <h4>Email </h4>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $outlet->email }}">
                                </div>
                                @error('email')
                                 <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-warning">Edit</button>
                        </form>
                        <div class="clearBoth"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ini tutup section -->
        @endsection