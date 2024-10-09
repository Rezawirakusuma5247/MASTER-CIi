@extends('layout.main')
@section('content')
<section class="content mb-5">
    <div class="container-fluid">
        <div class="container my-5">
            <h1 class="mt-5">Create Dosen</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nidn" class="form-label">NIDN</label>
                    <input type="text" class="form-control" id="nidn" name="nidn" value="{{ old('nidn') }}" required>
                    @error('nidn')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nama_dosen" class="form-label">Nama Dosen</label>
                    <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" value="{{ old('nama_dosen') }}" required>
                    @error('nama_dosen')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tgl_mulai_tugas" class="form-label">Tanggal Mulai Tugas</label>
                    <input type="date" class="form-control" id="tgl_mulai_tugas" name="tgl_mulai_tugas" value="{{ old('tgl_mulai_tugas') }}" required>
                    @error('tgl_mulai_tugas')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jenjang_pendidikan" class="form-label">Jenjang Pendidikan</label>
                    <input type="text" class="form-control" id="jenjang_pendidikan" name="jenjang_pendidikan" value="{{ old('jenjang_pendidikan') }}" required>
                    @error('jenjang_pendidikan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="bidang_keilmuan" class="form-label">Bidang Keilmuan</label>
                    <input type="text" class="form-control" id="bidang_keilmuan" name="bidang_keilmuan" value="{{ old('bidang_keilmuan') }}" required>
                    @error('bidang_keilmuan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="foto_dosen" class="form-label">Dosen Image</label>
                    <input type="file" class="form-control" id="foto_dosen" name="foto_dosen">
                    @error('foto_dosen')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Create Dosen</button>
            </form>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection
