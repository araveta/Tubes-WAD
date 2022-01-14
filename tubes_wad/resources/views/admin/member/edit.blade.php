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
					
          <a class="btn btn-tool" href="{{route('admin.member')}}"> <i class="fas fa-undo"> </i> Back </a>  

          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
		  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<div class="row">
					
					<div class="col-md-3"></div>
					
					<div class="col-md-6">
						<form class="form-horizontal" action="{{ route('admin.member.update',$row->id) }}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Nama Lengkap</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="name" value="{{ old('name', $row->name) }}" placeholder="Nama Lengkap">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Tempat Lahir</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="tmp_lahir" value="{{ old('tmp_lahir', $row->tmp_lahir) }}" placeholder="Tempat Lahir">
							</div>
						</di@extends('admin/admin')
   
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
					   
			 <a class="btn btn-tool" href="{{route('admin.member')}}"> <i class="fas fa-undo"> </i> Back </a>  
   
			 <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
			 <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
					   </div>
				   </div>
				   <!-- /.card-header -->
				   <div class="card-body">
					   <div class="row">
					   
					   <div class="col-md-3"></div>
					   
					   <div class="col-md-6">
						   <form class="form-horizontal" action="{{ route('admin.member.update',$row->id) }}" method="POST" enctype="multipart/form-data">
						   @csrf
						   @method('PUT')
						   <div class="form-group row">
							   <label class="col-sm-3 col-form-label">Nama Lengkap</label>
							   <div class="col-sm-9">
								   <input type="text" class="form-control" name="name" value="{{ old('name', $row->name) }}" placeholder="Nama Lengkap">
							   </div>
						   </div>
   
						   <div class="form-group row">
							   <label class="col-sm-3 col-form-label">Tempat Lahir</label>
							   <div class="col-sm-9">
								   <input type="text" class="form-control" name="tmp_lahir" value="{{ old('tmp_lahir', $row->tmp_lahir) }}" placeholder="Tempat Lahir">
							   </div>
						   </div>
   
						   <div class="form-group row">
							   <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
							   <div class="col-sm-5">
								   <input type="date" class="form-control" name="tgl_lahir" value="{{ old('tgl_lahir', $row->tgl_lahir) }}">
							   </div>
						   </div>
   
						   <div class="form-group row">
							   <label class="col-sm-3 col-form-label">No. Tlp</label>
							   <div class="col-sm-5">
								   <input type="text" class="form-control" name="tlp" placeholder="No. Tlp" value="{{ old('tlp', $row->tlp) }}">
							   </div>
						   </div>
						   
						   <div class="form-group row">
							   <label class="col-sm-3 col-form-label">Alamat</label>
							   <div class="col-sm-9">
								   <input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap" value="{{ old('alamat', $row->alamat) }}">
							   </div>
						   </div>
   
						   <div class="form-group row">
							   <label class="col-sm-3 col-form-label">Foto</label>
							   <div class="col-sm-9">
								   <input type="file" class="form-control" name="foto">
							   </div>
						   </div>
   
						   <hr>
						   
						   <div class="form-group row">
							   <label class="col-sm-3 col-form-label">Status</label>
							   <div class="col-sm-5">
								   <select class="form-control" name="status">
									   <option value="{{$row->status}}">{{$row->status}}</option>
									   <option value="Aktif">Aktif</option>
									   <option value="Non Aktif">Non Aktif</option>
								   </select>
							   </div>
						   </div>			
   
						   <div class="form-group row">
							   <label class="col-sm-3 col-form-label">Reset Password</label>
							   <div class="col-sm-5">
								   <input type="text" class="form-control" name="password" placeholder="New Password">
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
   
   @endsectionv>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Tanggal Lahir</label>
							<div class="col-sm-5">
								<input type="date" class="form-control" name="tgl_lahir" value="{{ old('tgl_lahir', $row->tgl_lahir) }}">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">No. Tlp</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="tlp" placeholder="No. Tlp" value="{{ old('tlp', $row->tlp) }}">
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Alamat</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap" value="{{ old('alamat', $row->alamat) }}">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Foto</label>
							<div class="col-sm-9">
								<input type="file" class="form-control" name="foto">
							</div>
						</div>

						<hr>
						
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Status</label>
							<div class="col-sm-5">
								<select class="form-control" name="status">
									<option value="{{$row->status}}">{{$row->status}}</option>
									<option value="Aktif">Aktif</option>
									<option value="Non Aktif">Non Aktif</option>
								</select>
							</div>
						</div>			

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Reset Password</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="password" placeholder="New Password">
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