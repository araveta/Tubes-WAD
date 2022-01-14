@extends('memberview/panel')
   
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
					
          <a class="btn btn-tool" href="{{route('member.order')}}"> <i class="fas fa-undo"> </i> Back </a>  

          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
		  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<div class="row">
					
					<div class="col-md-3"></div>
					
					<div class="col-md-6">
						<form class="form-horizontal" action="{{ route('member.order.store') }}" method="POST" enctype="multipart/form-data">
						@csrf

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Layanan</label>
							<div class="col-sm-9">
							<select class="form-control select2bs4" name="id_layanan" style="width: 100%;">
								<option selected="selected">-Pilih-</option>
								<?php foreach($layanan as $dt): ?>
								<option value="<?= $dt['id'] ?>"><?= $dt['nama_layanan'] ?> | Rp <?= number_format($dt['tarif'],0,',','.')?></option>
								<?php endforeach ?>
							</select>
						
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Tgl Pelaksanaan</label>
							<div class="col-sm-4">
								<input type="date" class="form-control" name="tgl_kerja">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Jam Pelaksanaan</label>
							<div class="col-sm-4">
								<input type="time" class="form-control" name="waktu_kerja">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Lokasi</label>
							<div class="col-sm-9">
								<textarea type="text" rows="3" class="form-control" name="lokasi" placeholder="Lokasi Pekerjaan"></textarea>
								
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Keterangan</label>
							<div class="col-sm-9">
								<textarea type="text" rows="3" class="form-control" name="keterangan" placeholder="Tuliskan keterangan jika ada"></textarea>
								
							</div>
						</div>

						<center>
						<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
						</center>
						</form>
					</div>

					<div class="col-md-3"></div>
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