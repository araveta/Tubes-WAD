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
					
          <a class="btn btn-tool" href="{{route('admin.order')}}"> <i class="fas fa-undo"> </i> Back </a>  

          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
		  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<div class="row">
					
					<div class="col-md-3"></div>
					
					<div class="col-md-6">
						<form class="form-horizontal" action="{{ route('admin.order.update',$row->id) }}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Id User</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="id_user" value="{{ old('nama', $row->nama) }}" placeholder="Nama Lengkap">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Id Photographer</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="id_pg" value="{{ old('tempat_lahir', $row->tempat_lahir) }}" placeholder="Tempat Lahir">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Id Layanan</label>
							<div class="col-sm-5">
								<input type="date" class="form-control" name="id_layanan" value="{{ old('tgl_lahir', $row->tgl_lahir) }}">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Tanggal</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="tgl" placeholder="No. Tlp" value="{{ old('tlp', $row->tlp) }}">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Tempat</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="tempat" placeholder="Alamat Lengkap" value="{{ old('alamat', $row->alamat) }}">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Jam</label>
							<div class="col-sm-9">
								<input type="file" class="form-control" name="jam">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Status</label>
							<div class="col-sm-9">
								<input type="file" class="form-control" name="status">
							</div>
						</div>
						<center>
						<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
						</center>
						</form>
					</div>

					<div class="col-md-3">
						<center>
							<img src="{{ URL('image/'.$row->foto) }}" width="70%" />
						</center>
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