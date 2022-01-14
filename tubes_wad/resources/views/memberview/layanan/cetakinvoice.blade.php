
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RentGrapher</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset ('lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

  <!-- DataTables -->
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/datatable/jquery.dataTables.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/datatable/jquery.dataTables.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/datatable/dataTables.bootstrap5.min.css')}}">

  <!-- Select2 -->
	<link rel="stylesheet" href="{{asset('plugins/select2/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/select2/select2-bootstrap4.min.css')}}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset ('lte/dist/css/adminlte.min.css')}}">
</head>
<body>
<div class="wrapper">
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
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <?php endforeach ?>
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
  window.addEventListener("load", window.print());
</script>

<!-- jQuery -->
<script src="{{asset ('lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset ('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset ('lte/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('lte/dist/js/pages/dashboard2.js')}}"></script>
</body>
</html>
