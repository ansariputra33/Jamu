<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Info Desa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Info Desa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-primary card-header ">
          <div class="row">
            {{--<div class="col-lg-6"><h3 class="card-title">Daftar Produk</h3></div>--}}
            <div class="col-lg-12"><button class="btn btn-success" style="float: right;" data-toggle="modal" data-target="#modal_tambah_info">Tambah Info Desa</button></div>
          </div>
        </div>
        <div class="card-body row">
          <table id="#tb_info" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
             @foreach($data as $dt => $d) 
            <tr>
              <td>{{ $d->judul }}</td>
              <td>{{ $d->deskripsi }}</td>
              <td>
                <center>
                  <img src="{{ asset('foto_desa/'.$d->gambar) }}" style="width:60px; height: 60px;">
                </center>
              </td>
              <td> 
                <button class="btn btn-sm btn-warning" onclick="edit_info({{ $d->id }})">Edit
                </button>
                <button class="btn btn-sm btn-danger" onclick="delete_info({{ $d->id }})">Hapus
                </button>
              </td>
            </tr>
             @endforeach 
          </tbody>
      </table>
          
          {{--<div class="col-7">
            <form id="data_form" enctype="multipart/form-data">
              
              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Simpan Info Desa">
              </div> 
            </form> 

          </div>--}}
        </div>
      </div>

    </section>

    <div class="modal fade" id="modal_tambah_info">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tambah Informasi Desa</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="tambah_info_form" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-5">
                <div class=" text-center d-flex align-items-center justify-content-center">
                  <img src="" style="width: 100%;" id="img_ds">
                </div>    
              </div>
              <div class="col-lg-7">
                <div class="form-group">
                  <label for="inputSubject">Judul</label>
                  <input type="hidden" class="form-control" name="_token" id="token" placeholder="Enter email" value="{{ csrf_token() }}">
                  <input type="text" id="judul_ds" name="judul" value="" class="form-control"  />
                </div>
                <div class="form-group">
                  <label for="inputSubject">Gambar</label>
                  <input type="file" id="gbr_ds" name="gambar_desa" class="form-control" onchange="prev_img_ds(this)" />
                </div>
                <div class="form-group">
                  <label for="inputMessage">Deskrpsi</label>
                  <textarea id="inputMessage" class="form-control" rows="3" name="deskripsi">
                    
                  </textarea>
                </div>      
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="profil()"><span id="btl">Batal</span></button>
            <button type="submit" class="btn btn-primary" >Simpan Info</button>
          </div>
        </form>
        <!-- /.modal-content -->
        </div>
      <!-- /.modal-dialog -->
      </div>
    </div>

    <div class="modal fade" id="modal_edit_info">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit Informasi Desa</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="edit_info_form" enctype="multipart/form-data">
          <div class="modal-body">
            
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="profil()"><span id="btl_e">Batal</span></button>
            <button type="submit" class="btn btn-primary" >Update Info</button>
          </div>
        </form>
        <!-- /.modal-content -->
        </div>
      <!-- /.modal-dialog -->
      </div>
    </div>
    
    <!-- /.content -->
    <script type="text/javascript">
      function prev_img_ds(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) { 
            document.querySelector("#img_ds").setAttribute("src",e.target.result);
          };
          reader.readAsDataURL(input.files[0]); 
        }
      }

      function prev_img_ds_e(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) { 
            document.querySelector("#img_ds_e").setAttribute("src",e.target.result);
          };
          reader.readAsDataURL(input.files[0]); 
        }
      }

      $('#tambah_info_form').submit(function(e) {
         // $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
          e.preventDefault();
          var formData = new FormData(this);
          $.ajax({
            type:'POST',
            url: "/info-add",
            data: formData,
            cache:false,
            contentType: false,
            processData: false,
            success: (data) => {
              this.reset();
              $('#token').val('{{ csrf_token() }}')
              alert('Data has been uploaded successfully');
              $("#btl").html('');
              $("#btl").html('Tutup & Reload');
            },
            error: function(data){
              console.log(data);
              }
          });
        });

      var edit_info = (p) => {
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $.ajax({
         // type: "POST",
          timeout: 50000,
         // url: 'pengaturan/logs',
          url: '/info-edit/'+p,
          async: true,
          //data: {isi:new FormData($('#store_form')[0])},
          success: function (res) {
            //console.log(res);
            $(`#modal_edit_info .modal-dialog .modal-body`).html('');
            $(`#modal_edit_info .modal-dialog .modal-body`).html(res);
            $(`#modal_edit_info`).modal('show');
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
      var delete_info = (p) => {
          var konf = confirm("Yakin Hapus Data?");
          if (konf) {
            $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
            $.ajax({
             // type: "POST",
              timeout: 50000,
             // url: 'pengaturan/logs',
              url: '/info-delete/'+p,
              async: true,
              success: function (res) {
                console.log(res);
                alert('Data has been deleted successfully');
                profil();
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

      $('#edit_info_form').submit(function(e) {
         // $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
          e.preventDefault();
          var formData = new FormData(this);
          $.ajax({
            type:'POST',
            url: "/profil-update",
            data: formData,
            cache:false,
            contentType: false,
            processData: false,
            success: (data) => {
              this.reset();
              $('#token').val('{{ csrf_token() }}')
              alert('Data has been updated successfully');
              $("#btl_e").html('');
              $("#btl_e").html('Tutup & Reload');
            },
            error: function(data){
              console.log(data);
              }
          });
        });

      $(function () {
          var tbl_info = $("#tb_info").DataTable({
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