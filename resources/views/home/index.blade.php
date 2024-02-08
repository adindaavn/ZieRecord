@extends('templates.header')
@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-bold">Dashboard</h1>
          <h6 class="text-secondary">Halaman Khusus Admin</h6>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
      <hr>
    </div>
  <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box p-2 bg-info">
              <div class="inner">
                <h1 class="text-bold">51</h1>

                <h4>Kelas Aktif</h4>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">Lihat Detail</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box p-2 bg-success">
              <div class="inner">
                <h1 class="text-bold">05</h1>

                <h4>Jurusan Aktif</h4>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">Lihat Detail</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box p-2 bg-warning">
              <div class="inner">
                <h1 class="text-bold">1.320</h1>

                <h4>Siswa Aktif</h4>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Lihat Detail</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box p-2 bg-danger">
              <div class="inner">
                <h1 class="text-bold">91</h1>

                <h4>Guru Aktif</h4>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">Lihat Detail</a>
            </div>
          </div>
          <!-- ./col -->
        </div>
    </section>
    <!-- /.content -->
@endsection
