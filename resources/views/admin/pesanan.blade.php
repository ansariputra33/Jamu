
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pesanan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pesanan</li>
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
                  <div class="col-lg-6"><h3 class="card-title">Daftar Pesanan</h3></div>
                  {{--<div class="col-lg-12"><button class="btn btn-success" style="float: right;" data-toggle="modal" data-target="#modal_add_produk">Tambah Produk</button></div>--}}
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="#tb_products" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>No. Hp </th>
                    <th>Alamat</th>
                    <th>Produk</th>
                    <th>Kuantitas</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $dt => $d)
                    <tr>
                      <td>{{ $d->kode }}</td>
                      <td>{{ $d->nama_pemesan }}</td>
                      <td>{{ $d->hp_pemesan }}</td>
                      <td>{{ $d->alamat_pemesan}}</td>
                      <td>{{ $d->produk_data['nama']}}</td>
                      <td>{{ $d->kuantitas }}</td>
                      <td>
                        @if( $d->status == 0 )
                        <span class="badge bg-warning">
                          Menunggu Konfirmasi
                        </span>
                        @elseif( $d->status == 1 )
                        <span class="badge bg-success">
                          Dikonfimasi
                        </span>
                        @elseif( $d->status == 2 )
                        <span class="badge bg-primary">
                          Selesai
                        </span>
                        @elseif( $d->status == 3 )
                        <span class="badge bg-danger">
                          Dibatalkan
                        </span>
                        @endif 
                      </td>
                      <td> 
                        @if( $d->status == 0 )
                        <button class="btn btn-sm btn-info" onclick="detail({!! $d->id !!})">Detail
                        </button>
                          <button class="btn btn-sm btn-success" onclick="terima({!! $d->id !!})">Terima
                        </button>
                        <button class="btn btn-sm btn-danger" onclick="batal({!! $d->id !!})">Batalkan
                        </button>
                        
                        @elseif( $d->status == 1 )
                        <button class="btn btn-sm btn-info" onclick="detail({!! $d->id !!})">Detail
                        </button>
                        <button class="btn btn-sm btn-primary" onclick="selesai({!! $d->id !!})">Selesai
                        </button>
                          
                        <button class="btn btn-sm btn-danger" onclick="batal({!! $d->id !!})">Batalkan
                        </button>
                       
                        @elseif( $d->status == 2 )
                        <button class="btn btn-sm btn-info" onclick="detail({!! $d->id !!})">Detail
                        </button>

                          <button class="btn btn-sm btn-primary" >Telah Selesai
                        </button>  
                        
                        @endif
                        
                      </td>
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
    <!-- /.content -->

    <div class="modal fade" id="modal_add_produk">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Produk</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- form start -->
            <form id="store_form" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Detail Produk</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="_token" id="exampleInputEmail1" placeholder="Enter email" value="{{ csrf_token() }}">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Nama Produk">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga</label>
                    <input type="number" class="form-control" name="harga" id="exampleInputPassword1" placeholder="Harga Produk">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Stok</label>
                    <input name="stok" type="number" class="form-control" id="exampleInputPassword1" placeholder="Jumlah Stok">
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" rows="3" placeholder="Deskripsi ..."></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" id="gambar" class="custom-file-input" name="gambar[]" id="exampleInputFile" multiple>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                <!-- /.card-body -->
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
            </form>
          </div>
        </div>
          <!-- /.modal-content -->
    </div>
        <!-- /.modal-dialog -->
      

      <div class="modal fade" id="modal_detail_pesanan">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Pesanan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="update_form" enctype="multipart/form-data">
            <div class="modal-body">
              <!-- /.card-header -->
              
                <!-- /.card-body -->
            
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
          </form>

          
          <!-- /.modal-content -->
          </div>
        <!-- /.modal-dialog -->
        </div>
      </div>


      <script type="text/javascript">
        
        var detail = (p) => {
          $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
          $.ajax({
           // type: "POST",
            timeout: 50000,
           // url: 'pengaturan/logs',
            url: '/pesanan/detail/'+p,
            async: true,
            //data: {isi:new FormData($('#store_form')[0])},
            success: function (res) {
              $(`#modal_detail_pesanan .modal-dialog .modal-body`).html('');
              $(`#modal_detail_pesanan .modal-dialog .modal-body`).html(res);
              $(`#modal_detail_pesanan`).modal('show');
            },
            error: function (res, textstatus) {
              if (textstatus === "timeout") {
                notice('Response Time Out', 'error');
              } else {
                notice(res.responseJSON.message, 'error');
              }
            }
          });
        }

        var terima = (p) => {
          $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
          $.ajax({
           // type: "POST",
            timeout: 50000,
           // url: 'pengaturan/logs',
            url: '/pesanan/terima/'+p,
            async: true,
            //data: {isi:new FormData($('#store_form')[0])},
            success: function (res) {
              alert('Status Pesan Telah Dikonfirmasi');
              pesanan();
            },
            error: function (res, textstatus) {
              if (textstatus === "timeout") {
                notice('Response Time Out', 'error');
              } else {
                notice(res.responseJSON.message, 'error');
              }
            }
          });
        }

        var batal = (p) => {
          if(confirm("Balkan Pesanan?")){
            $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
            $.ajax({
             // type: "POST",
              timeout: 50000,
             // url: 'pengaturan/logs',
              url: '/pesanan/batal/'+p,
              async: true,
              //data: {isi:new FormData($('#store_form')[0])},
              success: function (res) {
                alert('Status Pesan Telah Dibatalkan');
                pesanan()
              },
              error: function (res, textstatus) {
                if (textstatus === "timeout") {
                  notice('Response Time Out', 'error');
                } else {
                  notice(res.responseJSON.message, 'error');
                }
              }
            });
          }
        }
        var selesai = (p) => {
          $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
          $.ajax({
           // type: "POST",
            timeout: 50000,
           // url: 'pengaturan/logs',
            url: '/pesanan/selesai/'+p,
            async: true,
            //data: {isi:new FormData($('#store_form')[0])},
            success: function (res) {
              alert('Status Pesan Telah Selesai');
              pesanan()
            },
            error: function (res, textstatus) {
              if (textstatus === "timeout") {
                notice('Response Time Out', 'error');
              } else {
                notice(res.responseJSON.message, 'error');
              }
            }
          });
        }

        
        $(function () {
          var tbl_produk = $("#tb_products").DataTable({
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

