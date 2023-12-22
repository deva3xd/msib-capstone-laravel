@extends('layouts.dashboard.master')
@extends('layouts.dashboard.sidebar-admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Perusahaan</h1>
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
                        <a href="{{ route('createDataPelamar') }}" class="btn btn-primary" role="button">Tambah Data</a>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>TTL</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No Telpon</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Pendidikan</th>
                                        <th>Nama Institusi</th>
                                        <th>Pengalaman Organisasi</th>
                                        <th>Pengalaman Kerja</th>
                                        <th>Skill</th>
                                        <th>Sertifikasi</th>
                                        <th>Gaji Yang Diinginkan</th>
                                        <th>Lampiran</th>
                                        <th>CV</th>
                                        <th>Foto</th>
                                        <th>NPWP</th>
                                        <th>NIK</th>
                                        <th>Status Nikah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pelamars as $pelamar)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $pelamar->nama }}</td>
                                            <td>{{ $pelamar->alamat }}</td>
                                            <td>{{ $pelamar->ttl }}</td>
                                            <td>{{ $pelamar->jk }}</td>
                                            <td>{{ $pelamar->no_telp }}</td>
                                            <td>{{ $pelamar->email }}</td>
                                            <td>{{ $pelamar->password }}</td>
                                            <td>{{ $pelamar->pendidikan }}</td>
                                            <td>{{ $pelamar->nama_institusi }}</td>
                                            <td>{{ $pelamar->pengalaman_organisasi }}</td>
                                            <td>{{ $pelamar->pengalaman_kerja }}</td>
                                            <td>{{ $pelamar->skill }}</td>
                                            <td>{{ $pelamar->sertifikasi }}</td>
                                            <td>{{ $pelamar->gaji_diinginkan }}</td>
                                            <td>{{ $pelamar->lampiran }}</td>
                                            <td>{{ $pelamar->cv }}</td>
                                            <td>@if ($perusahaan->logo)
                                                <img src="{{ asset('dokumen/foto/' . $pelamar->foto) }}" alt="foto pelamar">
                                            @else
                                                Tidak ada logo
                                            @endif</td>
                                            <td>{{ $pelamar->npwp }}</td>
                                            <td>{{ $pelamar->nik }}</td>
                                            <td>{{ $pelamar->status_nikah }}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('editDataPelamar', ['id' => $pelamar->id]) }}"
                                                    class="btn btn-warning btn-sm text-white border" role="button">Edit</a>
                                                <a onclick="confirmDelete(this)"
                                                    data-url="{{ route('deletePelamar', ['id' => $pelamar->id]) }}"
                                                    class="btn btn-danger btn-sm text-white border"
                                                    role="button border">Hapus</a>
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
                'title': 'Konfirmasi Hapus',
                'text': 'Apakah Kamu Yakin Ingin Menghapus Data Ini?',
                'dangermode': true,
                'buttons': true
            }).then(function(value) {
                if (value) {
                    window.location = url;
                }
            })
        }
    </script>
@endsection
