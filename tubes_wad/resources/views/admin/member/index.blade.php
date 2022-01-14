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
                    <th width="15%">Nama</th>
                    <th width="15%">Email</th>
                    <th width="10%">Tlp</th>
					<th width="20%">Alamat</th>
                    <th width="10%" style="text-align: center;">Foto</th>
                    <th width="15%" style="text-align: center;">Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $i = 1;
                  foreach($q as $dt): ?>
                  <tr>
                    <td style="text-align: center;"><?php echo $i++;?></td>
                    <td><?= $dt['name'] ?></td>
                    <td><?= $dt['email'] ?></td>
                    <td><?= $dt['tlp'] ?></td>
					<td><?= $dt['alamat'] ?></td>
                    <td style="text-align: center;"><img src="{{ URL('image/'.$dt->foto) }}" height="50px" /></td>
                    <td style="text-align: center;">
						<form action="{{ route('admin.member.destroy',$dt->id) }}" method="POST">
							@csrf
							@method('DELETE')
                    		<button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"> </i> Delete</button>
                		</form>
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