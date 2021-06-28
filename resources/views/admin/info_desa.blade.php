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
        <div class="card-body row">
          <div class="col-5 text-center d-flex align-items-center justify-content-center">
            <img src="{{ asset('foto_desa/'.$data->gambar) }}" style="width: 100%;" id="img_ds">
          </div>
          <div class="col-7">
            <form id="data_form" enctype="multipart/form-data">
              <div class="form-group">
                <label for="inputSubject">Gambar</label>
                <input type="hidden" class="form-control" name="_token" id="token" placeholder="Enter email" value="{{ csrf_token() }}">
                <input type="file" id="gbr_ds" name="gambar_desa" class="form-control" onchange="prev_img_ds(this)" />
              </div>
              <div class="form-group">
                <label for="inputMessage">Deskrpsi</label>
                <textarea id="inputMessage" class="form-control" rows="9" name="deskripsi">
                  {{ $data->deskripsi }}
                </textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Simpan Info Desa">
              </div> 
            </form>

          </div>
        </div>
      </div>

    </section>
    
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

      $('#data_form').submit(function(e) {
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
              alert('Data has been uploaded successfully');
              //$("#tb_products").DataTable().reload();
             
              console.log(data);
            },
            error: function(data){
              console.log(data);
              }
          });
        });
    </script>