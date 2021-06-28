<!-- form start -->
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Detail Produk</h3>
  </div>
  
  <div class="card-body">
    <div class="form-group">
      <input type="hidden" class="form-control" name="_token" id="" placeholder="Enter email" value="{{ csrf_token() }}">
      <input type="hidden" class="form-control" name="id" id="update_id" placeholder="Enter email" value="{{ $data->id }}">
      <label for="exampleInputEmail1">Nama</label>
      <input type="text" class="form-control" name="nama" id="update_nama" placeholder="Nama Produk" value="{{ $data->nama }}">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Harga</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">Rp.</span>
        </div>
        <input type="text" class="form-control" name="harga" id="update_harga" value="{{ $data->harga }}">
        <div class="input-group-append">
        </div>
      </div>
      {{--<input type="number" class="form-control" name="harga" id="update_harga" placeholder="Harga Produk" value=""> --}}
      </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Stok</label>
      <input name="stok" type="number" class="form-control" id="update_stok" placeholder="Jumlah Stok" value="{{ $data->stok }}">
    </div>
    <div class="form-group">
      <label>Deskripsi</label>
      <textarea class="form-control" name="deskripsi" rows="3" placeholder="Deskripsi ...">
      {{ $data->deskripsi }}
      </textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputFile">Gambar Baru</label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" id="gambar" class="custom-file-input" name="gambar" id="update_gambar" onchange="prev_img_edit(this);">
          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
        </div>
      </div>
    </div>
    <div class="form-group" id="gambar_prev">
      <img src="{{ asset('foto_produk/'.$data->gambar) }}" id="imgx_e" style="width: 425px;">
    </div>
  </div>
</div>

<script type="text/javascript">
  function prev_img_edit(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) { 
        document.querySelector("#imgx_e").setAttribute("src",e.target.result);
      };
      reader.readAsDataURL(input.files[0]); 
    }
  }
</script>
  
  
              