
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Produk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Produk</li>
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
                  {{--<div class="col-lg-6"><h3 class="card-title">Daftar Produk</h3></div>--}}
                  <div class="col-lg-12"><button class="btn btn-success" style="float: right;" data-toggle="modal" data-target="#modal_add_produk">Tambah Produk</button></div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="#tb_products" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Produk</th>
                    <th>Harga </th>
                    <th>Kuantitas</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $dt => $d)
                    <tr>
                      <td>{{ $d->nama}}</td>
                      <td>{{ $d->harga}}</td>
                      <td>{{ $d->stok}}</td>
                      <td>{{ $d->deskripsi}}</td>
                      <td> 
                        <button class="btn btn-sm btn-warning" onclick="edit_produk({!! $d->id !!})">Edit
                        </button>
                        <button class="btn btn-sm btn-danger" onclick="delete_produk({!! $d->id !!})">Hapus
                        </button>
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
                    <input type="hidden" class="form-control" name="_token" id="token" placeholder="Enter email" value="{{ csrf_token() }}">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama_store" placeholder="Nama Produk">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Rp.</span>
                      </div>
                      <input type="text" class="form-control" name="harga" id="harga_store" onkeyup="format_harga(this)">
                      <div class="input-group-append" >
                      </div>
                    </div>
                    {{--
                    <input type="number" class="form-control" name="harga" id="harga_store" placeholder="Harga Produk"> --}}
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Stok</label>
                    <input name="stok" type="number" class="form-control" id="stok_store" placeholder="Jumlah Stok">
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" rows="3" placeholder="Deskripsi ..."></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" id="gambar" class="custom-file-input" name="gambar" id="gambar" onchange="prev_img(this);" >
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group" id="gambar_prev">
                    <img src="" id="imgx" style="width: 425px;">
                  </div>
                </div>
              </div>
            </div>
                <!-- /.card-body -->
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal" onclick=" product()">Batal</button>
              <button type="submit" class="btn btn-primary" onclick="">Simpan Produk</button>
            </div>
            </form>
          </div>
        </div>
          <!-- /.modal-content -->
    </div>
        <!-- /.modal-dialog -->
      

      <div class="modal fade" id="modal_edit_produk">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Produk</h4>
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
              <button type="button" class="btn btn-default" data-dismiss="modal" onclick="product()">Batal</button>
              <button type="submit" class="btn btn-primary" >Update Produk</button>
            </div>
          </form>

          
          <!-- /.modal-content -->
          </div>
        <!-- /.modal-dialog -->
        </div>
      </div>


      <script type="text/javascript">
        // var prev_img = () => {
          
          function prev_img(input) {
            ''
            if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) { 
                document.querySelector("#imgx").setAttribute("src",e.target.result);
              };
              reader.readAsDataURL(input.files[0]); 
            }
          }

//         }
        
        $('#store_form').submit(function(e) {
         // $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
          e.preventDefault();
          var formData = new FormData(this);
          $.ajax({
            type:'POST',
            url: "/produk/store",
            data: formData,
            cache:false,
            contentType: false,
            processData: false,
            success: (data) => {
              this.reset();
              $('#token').val('{{ csrf_token() }}')
              alert('Data has been uploaded successfully');
              //$("#tb_products").DataTable().reload();
             
              console.log(data);
            },
            error: function(data){
              console.log(data);
              }
          });
        });

        var edit_produk = (p) => {
          $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
          $.ajax({
           // type: "POST",
            timeout: 50000,
           // url: 'pengaturan/logs',
            url: '/produk/edit/'+p,
            async: true,
            //data: {isi:new FormData($('#store_form')[0])},
            success: function (res) {
              //console.log(res);
              $(`#modal_edit_produk .modal-dialog .modal-body`).html('');
              $(`#modal_edit_produk .modal-dialog .modal-body`).html(res);
              $(`#modal_edit_produk`).modal('show');
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

        $('#update_form').submit(function(e) {
         // $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
          e.preventDefault();
          var formData = new FormData(this);
          $.ajax({
            type:'POST',
            url: "/produk/update",
            data: formData,
            cache:false,
            contentType: false,
            processData: false,
            success: (data) => {
              //this.reset();
              alert('Data has been updated successfully');
               
            },
            error: function(data){
              alert('Process Failed!');
              }
          });

          //product();
        });

        var delete_produk = (p) => {
          var konf = confirm("Yakin Hapus Data?");
          if (konf) {
            $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
            $.ajax({
             // type: "POST",
              timeout: 50000,
             // url: 'pengaturan/logs',
              url: '/produk/delete/'+p,
              async: true,
              success: function (res) {
                console.log(res);
                alert('Data has been deleted successfully');
                product();
                //produk_fetch(0);
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

        function format_harga(t){
          
          //t.value = x.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
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

