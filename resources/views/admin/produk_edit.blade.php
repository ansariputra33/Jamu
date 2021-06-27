<!-- form start -->
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Detail Produk</h3>
  </div>
  
  <div class="card-body">
    <div class="form-group">
      <input type="hidden" class="form-control" name="_token" id="exampleInpu" placeholder="Enter email" value="{{ csrf_token() }}">
      <input type="hidden" class="form-control" name="id" id="exampleInputEmail1" placeholder="Enter email" value="{{ $data->id }}">
      <label for="exampleInputEmail1">Nama</label>
      <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Nama Produk" value="{{ $data->nama }}">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Harga</label>
      <input type="number" class="form-control" name="harga" id="exampleInput" placeholder="Harga Produk" value="{{ $data->harga }}">
      </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Stok</label>
      <input name="stok" type="number" class="form-control" id="exampleInputPassword1" placeholder="Jumlah Stok" value="{{ $data->stok }}">
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
          <input type="file" id="gambar" class="custom-file-input" name="gambar[]" id="exampleInputFile" multiple>
          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputFile">Gambar Gambar</label>
      <div class="row">
        @foreach($data->foto as $foto => $ft)
        <div class="col-md-12 col-lg-6 col-xl-4">
          <div class="card mb-2 bg-gradient-dark">
            <img class="card-img-top" src="{{ asset('foto_produk/'.$ft['nama']) }}" alt="Dist Photo 1">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              
            </div>
          </div>
        </div>
      @endforeach
      </div>
    </div>
  </div>
</div>
  
  
              