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
					
          <a class="btn btn-tool" href="/memberview/memberorder"> <i class="fas fa-undo"> </i> Back </a>  

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
                    <th width="10%">Nama Layanan</th>
					<th width="10%">DateTime Kerja</th>
					<th width="10%">Grapher</th>
                    <th width="10%">Tarif</th>
                    <th width="30%">Lokasi</th>
					<th style="text-align:center" width="10%">Status</th>
                    <th style="text-align:center" width="15%">Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $i = 1;
                  foreach($q as $k => $item): ?>
                  <tr>
                    <td style="text-align: center;"><?php echo $i++;?></td>
                    <td><?= $item->nama_layanan ?></td>
					<td><?= $item->tgl_kerja ?></td>
					<td>
						<?php if($item->id_grapher==0){ ?>
							<span class="badge badge-warning">Belum Diambil</span>
						<?php }else{ ?>
							<?= $item->name ?>
						<?php } ?>
					</td>
                    <td>Rp <?= number_format($item->harga_order,0,',','.') ?></td>
                    <td><?= $item->lokasi ?></td>
					<td style="text-align:center">
						<?php if($item->status_order==0){ ?>
							<span class="badge badge-warning">Baru</span>
						<?php }elseif($item->status_order==1){ ?>
							<span class="badge badge-info">Proses</span>
						<?php }elseif($item->status_order==2){ ?>
							<span class="badge badge-success">Selesai</span>
						<?php } ?>
					</td>
					<td style="text-align: center;">
					<?php if($item->status_order==1){ ?>
					<form class="form-horizontal" action="{{ route('memberview.memberorder.done',$item->code) }}" method="POST" enctype="multipart/form-data">
						@csrf
                        <a class="btn btn-secondary btn-xs" href="{{ route('memberview.memberorder.selesai',$item->code) }}"><i class="fas fa-checklist"> </i> Done</a>
						</form>
						<?php } ?>
                      </td>
					  
                    <td style="text-align: center;">
					<?php if($item->status_order==0){ ?>
						<form action="{{ route('memberview.layanan.batalorder',$item->code) }}" method="POST">
                    		<a class="btn btn-info btn-xs" href="{{ route('memberview.memberorder.edit',$item->code) }}"><i class="fas fa-pencil-alt"> </i> Edit</a>
							@csrf
							@method('DELETE')
                    		<button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"> </i> Delete</button>
                		</form>
            	<?php } ?>
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