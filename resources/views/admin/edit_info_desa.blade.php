<div class="row">
  <div class="col-lg-5">
    <div class=" text-center d-flex align-items-center justify-content-center">
      <img id="img_ds_e" src="{{ asset('foto_desa/'.$data->gambar) }}" style="width: 100%;" id="img_ds">
    </div>    
  </div>
  <div class="col-lg-7">
    <div class="form-group">
      <label for="inputSubject">Judul</label>
      <input type="hidden" class="form-control" name="_token" id="token" placeholder="Enter email" value="{{ csrf_token() }}">
      <input type="hidden" class="form-control" name="id" id="id" placeholder="Enter email" value="{{ $data->id }}">
      <input type="text" id="judul_ds" name="judul" value="{{ $data->judul }}" class="form-control"  />
    </div>
    <div class="form-group">
      <label for="inputSubject">Gambar</label>
      <input type="file" id="gbr_ds_e" name="gambar_desa" class="form-control" onchange="prev_img_ds_e(this)" />
    </div>
    <div class="form-group">
      <label for="inputMessage">Deskrpsi</label>
      <textarea id="inputMessage" class="form-control" rows="3" name="deskripsi">
        {{ $data->deskripsi }}
      </textarea>
    </div>      
  </div>
</div>