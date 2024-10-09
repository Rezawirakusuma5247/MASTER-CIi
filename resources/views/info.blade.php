@extends('layout.main')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <h2 class="text-center display-4">List Dosen</h2>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="{{ route('dosen.search') }}" method="GET">
                        <div class="input-group input-group-lg">
                            <input type="text" name="query" class="form-control form-control-lg" placeholder="Mau Nyari Siapa?" value="{{ request()->input('query') }}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-lg btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-10 offset-md-1">
                    <div class="list-group">
                        @if($utp->count() > 0)
                            @foreach($utp as $item)
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="{{ Storage::url($item->foto_dosen) }}" class="img-fluid mb-3" alt="{{ $item->nama_dosen }}" style="max-height: 160px;">
                                    </div>
                                    <div class="col px-4">
                                        <div>
                                            {{--  <div class="float-right">{{ $item->created_at->format('Y-m-d h:ia') }}</div>  --}}
                                            <h3>{{ $item->nama_dosen }}</h3>
                                            <h6>NIDN: {{ $item->nidn }}</h6>
                                            <h6>Tanggal Mulai Tugas: {{ $item->tgl_mulai_tugas }}</h6>
                                            <h6>Jenjang Pendidikan: {{ $item->jenjang_pendidikan }}</h6>
                                            <h6>Bidang Keilmuan: {{ $item->bidang_keilmuan }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <p class="text-center">No results found for '{{ request()->input('query') }}'</p>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="mx-auto my-3">
                {{ $utp->appends(request()->input())->links() }}
            </div>
        </div>
    </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
@endsection
