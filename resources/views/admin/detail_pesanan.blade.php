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
          <input type="hidden" class="form-control" name="produk" id="exampleInputEmail1" placeholder="Enter email" value="{{ $pesanan->id }}">
          <label for="exampleInputEmail1">Nama Produk : {{ $pesanan->produk_data['nama'] }} </label>
          
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Harga : {{ $pesanan->produk_data['harga'] }}</label>
          
          </div>
        <div class="form-group">
          <label>Deskripsi Produk : {{ $pesanan->produk_data['deskripsi'] }}</label>
        </div>

        <div class="form-group" id="gambar_prev">
          <img src="{{ asset('foto_produk/'.$pesanan->produk_data['gambar']) }}" id="imgx_e" style="width: 300px; height: 200px;">
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-6">
    <div class="card card-primary">
      <div class="card-header">
        <h5 class="card-title">Detail Pemesanan</h5>
      </div>
      
      <div class="card-body">
        <div class="form-group">
          <input type="hidden" class="form-control" name="id" id="exampleInputEmail1" placeholder="Enter email" value="{{ $pesanan->id }}">
          <label for="exampleInputEmail1">Nomor Pesanan </label>
          <input type="text" class="form-control" name="nama" id="nama_p" placeholder="Masukkan Nama Pemesan" value="{{ $pesanan->kode }}" readonly="">
        </div>
        <div class="form-group">
          <input type="hidden" class="form-control" name="id" id="exampleInputEmail1" placeholder="Enter email" value="{{ $pesanan->id }}">
          <label for="exampleInputEmail1">Nama Pemesan </label>
          <input type="text" class="form-control" name="nama" id="nama_p" placeholder="Masukkan Nama Pemesan" value="{{ $pesanan->nama_pemesan }}" readonly="">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">No Hp Pemesan</label>
          <input type="text" class="form-control" name="hp" id="exampleInputEmail1" placeholder="Masukkan No Hp Pemesan" value="{{ $pesanan->hp_pemesan }}" readonly="">
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Jumlah Pesanan</label>
          <input name="kuantitas" type="number" class="form-control" id="qty" placeholder="Jumlah Pesanan" value="{{ $pesanan->kuantitas }}" readonly="">
        </div>
        <div class="form-group">
          <label>Alamat Pemesan</label>
          <textarea class="form-control" name="alamat" rows="3" placeholder="Alamat" readonly="">
            {{ $pesanan->alamat_pemesan }}
          </textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Total Pembayaran</label>
          <input name="kuantitas" type="text" class="form-control" id="qty" placeholder="Jumlah Pesanan" value="Rp. {{ $pesanan->kuantitas*$pesanan->produk_data['harga'] }}" readonly="">
        </div>
        
      </div>
    </div>
  </div>
  <div class="col-lg-12" id="detail_bayar" style="display: none;">
    <div class="card card-primary">
      <div class="card-header">
        <h5 class="card-title">Bukti Bayar</h5>
      </div>
      
      <div class="card-body">
        <img src="{{ asset('bukti_bayar/'.$pesanan->pembayaran_data['bukti']) }}" style="height:180px;">
      </div>
    </div>
    
  </div>
  @if($pesanan->status == 0)
  <div class="col-lg-12" id="tbl_bayar" style="display: none;">

    <button class="btn btn-success"  >Pesanan Anda Belum Dikonfirmasi, Silahkan Menunggu Sampai Pesanan Anda Dikonfirmasi</button>
  </div>
  @elseif($pesanan->status == 1)
  <div class="col-lg-12" id="tbl_bayar" style="display: none;">
    <button class="btn btn-success" data-toggle="modal" data-target="#modal_bayar2" >Pesanan Anda Telah Dikonfirmasi,Klik Untuk Upload Bukti Bayar Anda!</button>
  </div>
  @elseif($pesanan->status == 3)
  <div class="col-lg-12" id="tbl_bayar" style="display: none;">
    <button class="btn btn-success" >Validasi Pembayaran</button>
  </div>
  @elseif($pesanan->status == 4)
  <div class="col-lg-12" id="tbl_bayar" style="display: none;">
    <button class="btn btn-danger" disabled="">Bukti Bayar Ditolak, Silahkan Upload Ulang!</button>
    <button class="btn btn-success" data-toggle="modal" data-target="#modal_bayar2" >Upload Ulang Bukti</button>
  </div>
  @elseif($pesanan->status == 5)
  <div class="col-lg-12" id="tbl_bayar" style="display: none;">
    <button class="btn btn-success" disabled="">Bukti Bayar Anda Telah di Validasi, Terima Kasih!</button>
  </div>
  @elseif($pesanan->status == 6)
  <div class="col-lg-12" id="tbl_bayar" style="display: none;">
    <button class="btn btn-danger" disabled="">Pesanan Anda Telah Dibatalkan, Silahkan Pesan Kembali!</button>
  </div>
  @endif
  {{-- 
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
  
  --}}
</div>
<div class="modal fade" id="modal_bayar2">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Bayar Pesanan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="tambah_bayar" enctype="multipart/form-data">
      <div class="modal-body">
       <div class="row">
        <div class="col-lg-7">
          <div class=" text-center d-flex align-items-center justify-content-center">
            <img src="" id="img_ds" style="height:200px;">
          </div>    
        </div>
        <div class="col-lg-5">
          <div class="form-group">
            <label for="inputSubject">Nomor Pesanan</label>
            <input type="hidden" class="form-control" name="_token" id="token" placeholder="Enter email" value="{{ csrf_token() }}">
            <input type="hidden" class="form-control" name="id_pesanan" id="id_pesanan" placeholder="Enter email" value="{{ $pesanan->id }}">
            <input type="text" id="judul_ds" name="pesanan" value="{{ $pesanan->kode }}" class="form-control" readonly=""  />
          </div>

          <div class="form-group">
            <label for="inputSubject">Foto Bukti Transfer</label>
            <input type="file" id="gbr_ds" name="bukti" class="form-control" onchange="prev_img_ds(this)" required="" />
          </div>      
        </div>
      </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success" onclick="">Upload Bukti</button>
      </div>
    </form>

    
    <!-- /.modal-content -->
    </div>
  <!-- /.modal-dialog -->
  </div>
</div>
<script type="text/javascript">
  function total_bayar() {
    $('#total_bayar').html( $('#qty').val() * {{ 0 }} );
    $('#pemesan').html( $('#nama_p').val() );
  }

  $( "#bayar2" ).click(function() {
    console.log('Mulai BUka Modal')
    $("#modal_bayar2").modal("show");
  });

  function prev_img_ds(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) { 
        document.querySelector("#img_ds").setAttribute("src",e.target.result);
      };
      reader.readAsDataURL(input.files[0]); 
    }
  }

  $('#tambah_bayar').submit(function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      type:'POST',
      url: "/pesanan/bayar",
      data: formData,
      cache:false,
      contentType: false,
      processData: false,
      success: (data) => {
        $('#token').val('{{ csrf_token() }}')
        alert('Data has been uploaded successfully');
        $("#modal_bayar2").modal("hide");
      },
      error: function(data){
        console.log(data);
        }
    });
  });
  
</script>

  
  
              