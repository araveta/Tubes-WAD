@extends('memberview/panel')
   
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
          <div class="col-12 col-sm-6 col-md-12">
            <div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-info"></i> Selamat Datang Member <b>{{Auth::user()->name}}</b></h5>
                  Rent Grapher v.1.0
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
                <h3 class="card-title">My Orders History</h3>

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
                <div class="table-responsive">
                  <table id="myTable" class="table m-0 table-striped display nowrap compact" style="width:100%">
                    <thead>
                    <tr>
                      <th style="text-align: center;">Order Code</th>
                      <th>Nama Jasa</th>
                      <th style="text-align: center;">Tgl Order</th>
                      <th>Tarif</th>
                      <th style="text-align: center;">Status</th>
                      <th style="text-align: right;">Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                  $i = 1;
                  foreach($q as $k => $item): ?>
                  <tr>
                    <td style="text-align: center;"><?= $item->code ?></td>
                    <td><?= $item->nama_layanan ?></td>
					<td style="text-align: center;"><?= $item->tgl_kerja ?></td>
					
                    <td>Rp <?= number_format($item->harga_order,0,',','.') ?></td>
					<td style="text-align:center">
						<?php if($item->status_order==0){ ?>
							<span class="badge badge-warning">Baru</span>
						<?php }elseif($item->status_order==1){ ?>
							<span class="badge badge-info">Proses</span>
						<?php }elseif($item->status_order==2){ ?>
							<span class="badge badge-success">Selesai</span>
						<?php }elseif($item->status_order==3){ ?>
							<span class="badge badge-danger">Reject</span>
						<?php } ?>
					</td>

          <td style="text-align: right;">
					<?php if($item->status_order==0){ ?>
						<form action="{{ route('memberview.layanan.batalorder',$item->code) }}" method="POST">
                    		<a class="btn btn-warning btn-xs" href="{{ route('memberview.memberorder.edit',$item->code) }}"><i class="fas fa-pencil-alt"> </i> Edit</a>
							@csrf
							@method('DELETE')
                    		<button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"> </i> Delete</button>
                		</form>
						
            <?php } ?>
                    </td>

                  </tr>
                  <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="{{route('memberview.layanan')}}" class="btn btn-sm btn-info float-left">New Order</a>
                <a href="/memberview/memberorder" class="btn btn-sm btn-secondary float-right">View All Orders</a>
              </div>
              <!-- /.card-footer -->
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