@extends('layouts.dashboard.master')

@section('sidebar')
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a href="{{route('dashboard')}}">
                    <i class="icon-speedometer"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{route('daftarLoker')}}">
                    <i class="icon-notebook"></i><span class="nav-text">Loker</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-note"></i><span class="nav-text">Wawancara</span>
                </a>
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Loker</h1>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->
    
    <!-- Content body start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                    <div class="card">
                        <div class="card-header text-right pb-0" style="padding-top: 1.88rem;">
                            <a href="{{route('createLoker')}}" class="btn btn-primary" role="button">Tambah Loker</a>
                        </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Lulusan</th>
                                        <th>Jurusan</th>
                                        <th>Skill</th>
                                        <th>Pengalaman Kerja</th>
                                        <th>Syarat</th>
                                        <th>Tanggung Jawab</th>
                                        <th>Deskripsi</th>
                                        <th>Batas Lamaran</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($lokers as $loker)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $loker->nama }}</td>
                                        <td>{{ $loker->jabatan }}</td>
                                        <td>{{ $loker->lulusan }}</td>
                                        <td>{{ $loker->jurusan }}</td>
                                        <td>{{ $loker->skill }}</td>
                                        <td>{{ $loker->pengalaman_kerja }}</td>
                                        <td>{{ $loker->syarat }}</td>
                                        <td>{{ $loker->tanggung_jawab }}</td>
                                        <td>{{ $loker->deskripsi }}</td>
                                        <td>{{ $loker->batas_lamaran }}</td>
                                        <td>{{ $loker->alamat }}</td>
                                        <td class="d-flex">
                                            <a href="{{route('editLoker', ['id' => $loker->id])}}" class="btn btn-warning btn-sm" role="button">Edit</a>
                                            <a onclick="confirmDelete(this)" data-url="{{route('deleteLoker', ['id' => $loker->id])}}" class="btn btn-danger btn-sm" role="button">Hapus</a>
                                            <!-- <a href="{{route('deleteLoker', ['id' => $loker->id])}}" class="btn btn-danger" data-confirm-delete="true" role="button">Delete</a> -->
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content body end -->
@endsection

@section('addJavascript')
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script>
        confirmDelete = function(button) {
            var url = $(button).data('url');
            swal({
                'title' : 'Konfirmasi Hapus',
                'text' : 'Apakah Kamu Yakin Ingin Menghapus Data Ini?',
                'dangermode' : true,
                'buttons' : true
            }).then(function(value) {
                if(value) {
                    window.location = url;
                }
            })
        }
    </script>
@endsection