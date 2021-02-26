<!-- menandakan ini adalah konten kelola user -->
@extends('layout/main')

<!-- menandakan ini title di halaman ini adalah judul Kelola user -->
@section('title', 'Kelola User')

<!-- ini adalah isi data user -->
@section('container')
<div class="header">
    <h1 class="page-header">
        Kelola Data User
    </h1>
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/kelola_user">Kelola Data User</a></li>
    </ol>

</div>
<div id="page-inner">

    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="box-header">
                <a href="/tambah_user" class="btn btn-success" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
            </div>

            <div class="card">
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                            <thead>
                                <tr>
                                    <th class="center">No</th>
                                    <th class="center">ID User</th>
                                    <th class="center">Nama User </th>
                                    <th class="center">Jenis Kelamin </th>
                                    <th class="center">Username</th>
                                    <th class="center">password</th>
                                    <th class="center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr class="gradeA">
                                    <td class="center">1</td>
                                    <td class="center">U1</td>
                                    <td class="center">Deka</td>
                                    <td class="center">Laki-Laki</td>
                                    <td class="center">kasir1</td>
                                    <td class="center">kasir1</td>
                                    <td class="center" style="margin: 5;">

                                        <button class=" btn-warning">
                                            <a href="/edit_user">
                                                <i class="glyphicon glyphicon-edit"></i>
                                                Edit </a>
                                        </button>
                                        <button class="btn-primary">
                                            <a href="/detail_user">
                                                <i class="glyphicon glyphicon-check"></i>
                                                Detail
                                            </a>
                                        </button>
                                        <button class="btn-danger"><i class="glyphicon glyphicon-trash"></i>
                                            Hapus
                                        </button>

                                    </td>
                                </tr>

                            </tbody>
                        </table>


                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
    <!-- ini adalah tutup section -->
    @endsection