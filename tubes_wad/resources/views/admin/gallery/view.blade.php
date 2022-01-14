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
				<li class="breadcrumb-item"><a href="/admin/gallery">Home</a></li>
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
                <h4 class="card-title"><?php echo $judul ?>
                </h4>
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

  <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Foto</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="form-horizontal" action="{{ route('grapher.gallery.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
            <div class="modal-body">

            <input type="hidden" name="id_order" value="<?php echo $ido;?>">

            <input type="hidden" name="code_order" value="<?php echo $code_order;?>">

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Nama File *</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="nama_foto" placeholder="Nama file foto">
							</div>
						</div>

            <div class="form-group row">
							<label class="col-sm-3 col-form-label">File Foto *</label>
							<div class="col-sm-9">
								<input type="file" class="form-control" name="foto">
                <small>file type : *.jpg;*.jpeg;*.png max size : 200kb</small>
							</div>
						</div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
              <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

@endsection