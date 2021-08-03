
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pembayaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pembayaran</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6"><h3 class="card-title">Daftar Pembayaran</h3></div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="#tbl_bayar" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Kode Pesanan</th>
                    <th>Bukti</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $dt => $d)
                    <tr>
                      <td>{{ $dt + 1 }}</td>
                      <td>{{ $d->pesanan_data['kode'] }}</td>
                      <td><img src="{{ asset('bukti_bayar/'.$d->bukti) }}" style="height: 100px;"></td>
                      
                    </tr>
                    @endforeach
                  </tbody>
              </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

      <script type="text/javascript">
        
        $(function () {
          var tbl_produk = $("#tbl_bayar").DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
      </script>

