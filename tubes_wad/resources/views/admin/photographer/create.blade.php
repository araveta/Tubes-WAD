@extends('admin/admin')
   
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
					
          <a class="btn btn-tool" href="{{route('admin.photographer')}}"> <i class="fas fa-undo"> </i> Back </a>  

          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
		  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<div class="row">
					
					<div class="col-md-3"></div>
					
					<div class="col-md-6">
						<form class="form-horizontal" action="{{ route('admin.photographer.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Nama Lengkap</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Tempat Lahir</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Tanggal Lahir</label>
							<div class="col-sm-5">
								<input type="date" class="form-control" name="tgl_lahir">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">No. Tlp</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="tlp" placeholder="No. Tlp">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Tarif</label>
							<div class="col-sm-5">
								<input type="number" class="form-control" name="tarif" placeholder="Rp..">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Alamat</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap">
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Deskripsi</label>
							<div class="col-sm-9">
								<textarea rows="3" class="form-control" name="deskripsi"></textarea>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Foto</label>
							<div class="col-sm-9">
								<input type="file" class="form-control" name="foto">
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