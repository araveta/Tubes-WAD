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
		
    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
          
          <?php 
          foreach($row as $dt): ?>
          
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                <?= $dt['nama_layanan'] ?>
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Rp <?= number_format($dt['tarif'],0,',','.') ?></b></h2>
                      <p class="text-muted text-sm"><?= $dt['deskripsi'] ?></p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-dollar-sign"></i></span> Diskon: 0%</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-circle"></i></span> Minimal Order : 1 kali</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="{{ URL('image/'.$dt->cover) }}" alt="user-avatar" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a class="btn btn-sm btn-primary" href="{{ route('memberview.layanan.detail',$dt->id) }}">
                      <i class="fas fa-dollar-sign"></i> Order Now
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <?php endforeach ?>

            
          </div>
        </div>
        <!-- /.card-body -->
				<!-- ./card-body -->
				</div>
				<!-- /.card -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

@endsection