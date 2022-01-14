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
				<li class="breadcrumb-item"><a href="/memberview/gallery">Home</a></li>
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
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="card-title"><?php echo $judul ?></h4>
              </div>
              <div class="card-body">
                <div class="row">
                  
                <?php foreach($q as $k => $item): ?>
                  <div class="col-sm-2">
                    <a href="{{ URL('image/'.$item->foto) }}" data-toggle="lightbox" data-title="<?= $item->nama_foto;?>" data-gallery="gallery">
                      <img src="{{ URL('image/'.$item->foto) }}?" class="img-fluid mb-2" alt="<?= $item->nama_foto;?>"/>
                    </a>
                  </div>
                  <?php endforeach ?>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

@endsection