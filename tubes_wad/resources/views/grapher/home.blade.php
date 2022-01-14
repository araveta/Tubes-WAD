@extends('grapher/panel')
   
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{$judul}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{$judul}}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Order selesai</span>
                <span class="info-box-number">
                  <?php echo $orderselesai ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Order Proses</span>
                <span class="info-box-number">
                  <?php echo $orderproses?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Grapher</span>
                <span class="info-box-number">
                    <?php echo $totalgrapher?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Member</span>
                <span class="info-box-number">
                  <?php echo $totalmember?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">New Jobs Request</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="myTable" class="table table-striped display nowrap compact" style="width:100%">
                    <thead>
                    <tr>
                      <th style="text-align: center;">#</th>
                      <th style="text-align: center;">Order ID</th>
                      <th>Job Name</th>
                      <th>Order</th>
                      <th style="text-align: center;">DateTime</th>
                      <th style="text-align: right;">Price</th>
                      <th style="text-align: center;">Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $i = 1;
                    foreach($q as $k => $item): ?>
                    <tr>
                      <td style="text-align: center;"><?= $i++ ?></td>
                      <td style="text-align: center;"><?= $item->code ?></td>
                      <td><?= $item->nama_layanan ?></td>
                      <td><?= $item->name ?></td>
                      <td style="text-align: center;"><?= $item->tgl_kerja ?> | <?= $item->waktu_kerja ?></td>
                      <td style="text-align: right;"><?= number_format($item->tarif_grapher,0,',','.') ?></td>
                      <td style="text-align: center;">
                        <a class="btn btn-info btn-xs" href="{{ route('grapher.job.checkout',$item->code) }}"><i class="fas fa-camera"> </i> Take</a>
                      </td>
                    </tr>
                    <?php endforeach ?>
                    </tbody>
                  </table>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection