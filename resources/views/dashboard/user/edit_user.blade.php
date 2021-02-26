<!-- menandakan ini adalah isi konten edit user laundry -->
@extends('layout/main')

<!-- menandakan ini adalah judul edit user laundry -->
@section('title', 'Edit Data User Laundry')

<!-- menandakan ini adalah isi dari halaman edit User laundry -->
@section('container')
<div class="header">
    <h1 class="page-header">
        Edit User Laundry
    </h1>
    <ol class="breadcrumb">
        <li><a href="/">Dashboard</a></li>
        <li><a href="/kelola_user">Kelola User Laundry</a></li>
        <li><a href="/edit_user">Edit User Laundry</a></li>
    </ol>




    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-action">
                        Edit Data User
                    </div>
                    <div class="card-content">
                        <form class="col s12 ">
                            <div class="row">
                                <div class="input-field col s6">
                                    <h4>ID User</h4>
                                    <input id="id_user" type="text" class="validate" readonly value="U1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <h4>Nama User</h4>
                                    <input id="password" type="text" class="validate" value="Mardanu">

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

                            <div class="row">
                                <div class="input-field col s6">
                                    User Level :
                                    <select name="small_select" id="small_select" class="form-control form-control-sm mb-3">
                                        <option value="small_select">Kasir</option>
                                        <option value="small_select">Lainnya</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    Gambar User
                                    <input type="file" class="form-control-file border" name="file">
                                </div>
                            </div>

                            <div class="box-header">
                                <a href="/kelola_user" class="btn btn-warning" title="Edit Data User">
                                    Edit Data</a>
                            </div>
                        </form>
                        <div class="clearBoth"></div>
                    </div>
                </div>
            </div>

            <!-- ini tutup section -->
            @endsection