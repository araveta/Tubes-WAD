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

          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
		  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<div class="row">
					
                    <div class="col-md-2"></div>

					<div class="col-md-8">
					<?php foreach($q as $k => $item): ?>
                    <form class="form-horizontal" action="{{ route('grapher.job.store',$item->code) }}" method="POST" enctype="multipart/form-data">
						@csrf
                        
                        <input type="hidden" name="code" value="<?= $item->code ?>">

                        <div class="form-group row">
							<label class="col-sm-3 col-form-label">Nama Pemesan</label>
							<div class="col-sm-4">
                            <label class="col-form-label">: <?= $item->name ?></label>
							</div>
						</div>

                        <div class="form-group row">
							<label class="col-sm-3 col-form-label">No. Tlp</label>
							<div class="col-sm-4">
                            <label class="col-form-label">: <?= $item->tlp ?></label>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Jenis Layanan</label>
							<div class="col-sm-4">
                                <label class="col-form-label">: <?= $item->nama_layanan ?></label>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Harga</label>
							<div class="col-sm-4">
                            <label class="col-form-label">: Rp. <?= number_format($item->tarif_grapher,0,',','.') ?></label>
							</div>
						</div>
                       

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Tgl Pelaksanaan</label>
							<div class="col-sm-4">
                            <label class="col-form-label">: <?= $item->tgl_kerja ?></label>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Jam Pelaksanaan</label>
							<div class="col-sm-4">
                            <label class="col-form-label">: <?= $item->waktu_kerja ?></label>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Lokasi</label>
							<div class="col-sm-9">
                            <label class="col-form-label">: <?= $item->lokasi ?></label>
							</div>
						</div>

						<center>
						<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Take Job</button>
						</center>
						</form>
                        <?php endforeach ?>
					</div>

					<div class="col-md-2"></div>
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