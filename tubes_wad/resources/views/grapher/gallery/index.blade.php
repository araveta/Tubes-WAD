@extends('grapher/panel')
   
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0"><?php echo $judul ?></h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active"><?php echo $judul ?></li>
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
			<div class="col-md-12">
				<div class="card">
				<div class="card-header">
					<h5 class="card-title"><?php echo $judul ?></h5>

					<div class="card-tools">
					
          <a class="btn btn-tool" href="{{route('grapher.home')}}"> <i class="fas fa-undo"> </i> Back </a>  

          <button type="button" class="btn btn-tool" data-card-widget="collapse">
						<i class="fas fa-minus"></i>
					</button>
					<div class="btn-group">
						<button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
						<i class="fas fa-wrench"></i>
						</button>
						<div class="dropdown-menu dropdown-menu-right" role="menu">
						<a href="#" class="dropdown-item">Action</a>
						<a href="#" class="dropdown-item">Another action</a>
						<a href="#" class="dropdown-item">Something else here</a>
						<a class="dropdown-divider"></a>
						<a href="#" class="dropdown-item">Separated link</a>
						</div>
					</div>
					<button type="button" class="btn btn-tool" data-card-widget="remove">
						<i class="fas fa-times"></i>
					</button>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<div class="row">
					<div class="col-md-12">
          		<table id="myTable" class="table table-striped display nowrap compact" style="width:100%">
                  <thead>
                  <tr>
                    <th width="5%" style="text-align: center;">No</th>
					<th width="10%">Pemesan</th>
                    <th width="10%">Nama Layanan</th>
					<th width="10%">DateTime Kerja</th>
                    <th width="20%">Lokasi</th>
					<th style="text-align:center" width="10%">Gallery</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $i = 1;
                  foreach($q as $k => $item): ?>
                  <tr>
                    <td style="text-align: center;"><?php echo $i++;?></td>
					<td><?= $item->name ?></td>
                    <td><?= $item->nama_layanan ?></td>
					<td><?= $item->tgl_kerja ?> | <?= $item->waktu_kerja ?></td>
                    <td><?= $item->lokasi ?></td>
					<td style="text-align:center">
					<a class="btn btn-primary btn-xs" href="{{ route('grapher.gallery.view',$item->code) }}"><i class="fas fa-image"> </i> View Foto</a>
					</td>
                  </tr>
                  <?php endforeach ?>
                  </tbody>
                  </tfoot>
                </table>
					</div>
					<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
				<!-- ./card-body -->
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