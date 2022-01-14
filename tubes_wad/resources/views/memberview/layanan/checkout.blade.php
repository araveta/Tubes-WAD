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

    <?php 
    foreach($q as $k => $item): ?>
		<!-- Main content -->
		<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> RentGrapher
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  Pemesan
                  <?php 
                    foreach($members as $dt): ?>
                  <address>
                    <strong><?= $dt['name'] ?></strong><br>
                    <?= $dt['alamat'] ?><br>
                    Phone: <?= $dt['tlp'] ?><br>
                    Email: <?= $dt['email'] ?>
                  </address>
                  <?php endforeach ?>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  Pemilik Jasa
                  <address>
                    <strong>Dhafin</strong><br>
                    Tanjung Karang<br>
                    Bandar Lampung<br>
                    Phone: 0812-1234-1234<br>
                    Email: mail@example.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Order Code #{{$item->code}}</b><br>
                  <br>
                  <b>Tanggal Order:</b> <?php echo date('d/m/yy') ?><br>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Layanan</th>
                      <th>Tanggal Pekerjaan</th>
                      <th>Lokasi</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <tr>
                      <td>{{$item->nama_layanan}}</td>
                      <td>{{$item->tgl_kerja}} {{$item->waktu_kerja}}</td>
                      <td>{{$item->lokasi}}</td>
                      <td>{{number_format($item->harga_order,0,',','.')}}</td>
                    </tr>
                    
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Metode Pembayaran:</p>
                  

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    BANK BNI<br>
                    No. Rekening : 12345678<br>
                    a.n Dhafin<br>
                    </p>
                    <hr>
                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">  
                    Go Pay<br>
                    No. Hp : 0812345678<br>
                    a.n Dhafin
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Tanggal Bayar: <?php echo date('d/m/yy') ?></p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>Rp {{number_format($item->harga_order,0,',','.')}}</td>
                      </tr>
                      <tr>
                        <th>Diskon</th>
                        <td>Rp 0</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>{{number_format($item->harga_order,0,',','.')}}</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <a href="{{ route('memberview.layanan.cetakinvoice',$item->code) }}" target="_blank" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Bayar</a>
              <a href="/memberview/home" class="btn btn-success right"> Home</a>
              <form action="{{ route('memberview.layanan.batalorder',$item->code) }}" method="POST">
                    @csrf
							      @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Batalkan order ini?')"><i class="fas fa-undo"> </i> Batalkan Order</button>
                	</form>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <?php endforeach ?>
        
	</div>
	<!-- /.content-wrapper -->

@endsection