@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
    </div>
    <!-- Main content -->
    <section class="content col-10 mx-auto">
        <div class="row">
            <!-- Left side: 6 column box -->
            <div class="col-lg-8">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header text-black font-bold">
                        <h1 class="">Selamat Datang Di Master CI | Website</h1>
                    </div>
                    <div class="card-body py-5">
                      <h5>Dimana anda bisa membuat data sendiri sesuai keinginan anda!
                        Tunggu apalagi ayo konfigurasi</h5>
                    </div>
                    <!-- /.card-body -->
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>

            <!-- Right side: 6 columns with two small boxes -->
            <div class="col-lg-4">
                <div class="row">
                    <!-- First small box, 6 columns wide -->
                    <div class="col-lg-12 col-12">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h4>Information</h4>
                                <p>Come take a look at:</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="{{ route('information') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <!-- Second small box, 6 columns wide -->
                    <div class="col-lg-12 col-12">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h4>Configuration</h4>
                                <p>Come take a look at:</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{ route('index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
