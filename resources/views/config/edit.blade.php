@extends('layout.main')
@section('content')
<div class="content-wrapper p-3">
<div class="container">
    <h1 class="mt-2">Edit Data</h1>

      @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

    <form action="{{ route('update', $utp->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nidn" class="form-label">NIDN</label>
            <input type="text" class="form-control" id="nidn" name="nidn" value="{{ $utp->nidn }}" >
        </div>
        <div class="mb-3">
            <label for="nama_dosen" class="form-label">Nama Dosen</label>
            <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" value="{{ $utp->nama_dosen }}" >
        </div>
        <div class="mb-3">
            <label for="tgl_mulai_tugas" class="form-label">Tanggal Mulai Tugas</label>
            <input type="date" class="form-control" id="tgl_mulai_tugas" name="tgl_mulai_tugas" value="{{ $utp->tgl_mulai_tugas }}" >
        </div>
        <div class="mb-3">
            <label for="jenjang_pendidikan" class="form-label">Jenjang Pendidikan</label>
            <input type="text" class="form-control" id="jenjang_pendidikan" name="jenjang_pendidikan" value="{{ $utp->jenjang_pendidikan }}" >
        </div>
        <div class="mb-3">
            <label for="bidang_keilmuan" class="form-label">Bidang Keilmuan</label>
            <input type="text" class="form-control" id="bidang_keilmuan" name="bidang_keilmuan" value="{{ $utp->bidang_keilmuan }}" >
        </div>
        <div class="mb-3">
            <label for="foto_dosen" class="form-label">Foto Dosen</label>
            <input type="file" class="form-control" id="foto_dosen" name="foto_dosen">
            @if($utp->foto_dosen)
                <img src="{{ asset('storage/' . $utp->foto_dosen) }}" alt="News Image" class="img-fluid mt-3" style="max-width: 200px;">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update Data</button>
    </form>
</div>
</div>
@endsection
