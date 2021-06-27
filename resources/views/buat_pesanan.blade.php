<!-- form start -->
<div class="row">
  <div class="col-lg-6">
    <div class="card card-primary">
      <div class="card-header">
        <h5 class="card-title">Detail Produk</h5>
      </div>
      
      <div class="card-body">
        <div class="form-group">
          <input type="hidden" class="form-control" name="_token" id="exampleInpu" placeholder="Enter email" value="{{ csrf_token() }}">
          <input type="hidden" class="form-control" name="produk" id="exampleInputEmail1" placeholder="Enter email" value="{{ $data->id }}">
          <label for="exampleInputEmail1">Nama Produk : {{ $data->nama }} </label>
          
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Harga : {{ $data->harga }}</label>
          
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Stok Tersedia : {{ $data->stok }}</label>
        </div>
        <div class="form-group">
          <label>Deskripsi Produk : {{ $data->deskripsi }}</label>
        </div>
        <div class="form-group" id="gambar_prev">
          <img src="{{ asset('foto_produk/'.$data->gambar) }}" id="imgx_e" style="width: 300px; height: 200px;">
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-6">
    <div class="card card-primary">
      <div class="card-header">
        <h5 class="card-title">Detail Pesanan</h5>
      </div>
      
      <div class="card-body">
        <div class="form-group">
          <input type="hidden" class="form-control" name="id" id="exampleInputEmail1" placeholder="Enter email" value="{{ $data->id }}">
          <label for="exampleInputEmail1">Nama Pemesan </label>
          <input type="text" class="form-control" name="nama" id="nama_p" placeholder="Masukkan Nama Pemesan" value="" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">No Hp Pemesan</label>
          <input type="text" class="form-control" name="hp" id="exampleInputEmail1" placeholder="Masukkan No Hp Pemesan" value="" required="">
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Jumlah Pesanan</label>
          <input name="kuantitas" type="number" class="form-control" id="qty" placeholder="Jumlah Pesanan" max="{{ $data->stok }}" required="" onkeyup="total_bayar()">
        </div>
        <div class="form-group">
          <label>Alamat Pemesan</label>
          <textarea class="form-control" name="alamat" rows="3" placeholder="Alamat" required=""></textarea>
        </div>
        
      </div>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="card card-primary">
      <div class="card-header">
        <h5 class="card-title">Detail Pembayaran</h5>
      </div>
      
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nomor Pemesanan : <span id="kode"><strong>...</strong></span> </label>
          
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Total Pembayaran : Rp. <span id="total_bayar"></span></label>
          
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Pemesan : <strong><span id="pemesan"></span></strong></label>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Catatan : <strong>Tolong Catat atau Foto Kode Pesanan Anda!</strong></label>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function total_bayar() {
    $('#total_bayar').html( $('#qty').val() * {{ $data->harga }} );
    $('#pemesan').html( $('#nama_p').val() );
  }
</script>

  
  
              