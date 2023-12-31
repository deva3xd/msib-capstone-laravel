@extends('layouts.dashboard.master')
@extends('layouts.dashboard.sidebar-perusahaan')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Wawancara</h1>
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
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{route('updateWawancara', ['id' => $wawancara->id])}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Id Data Pelamar</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" placeholder="Kategori Loker" name="id_data_pelamar" id="id_data_pelamar" value="{{ $wawancara->id_data_pelamar}}" readonly>
                                    </div>
                                </div>
                                <input type="hidden" name="id_perusahaan" value="{{Auth::user()->id}}" />
                                @foreach ($datas as $data)
                                    <input type="hidden" name="id_pelamar" value="{{ $data->id_profil_pelamar }}" />
                                @endforeach                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jadwal</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" placeholder="Jadwal" name="jadwal" id="jadwal"  value="{{ $wawancara->jadwal}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Catatan</label>
                                    <div class="col-sm-10">
                                        <textarea h-150px" rows="6" class="form-control" placeholder="Catatan" name="catatan"
                                            id="catatan" required="required">{{ $wawancara->catatan}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label pt-0">Status</label>
                                    <div class="col-sm-10">
                                        <div class="radio mb-3">
                                            <label>
                                                <input type="radio" name="status" id="status" value="diterima"> Diterima
                                            </label>
                                        </div>
                                        <div class="radio mb-3">
                                            <label>
                                                <input type="radio" name="status" id="status"
                                                    value="ditolak"> Ditolak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <a href="{{route('daftarWawancara')}}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content body end -->
@endsection