@foreach($data as $dt => $d)
  <div class="col-sm-4">
    <div class="position-relative">
      <img src="{{asset('foto_produk/'.$d->gambar)}}" alt="Gambar" class="img-fluid" style="width: 160px;">
      <div class="ribbon-wrapper ribbon-lg">
        
        Ribbon Extra Large <br /> with Extra Large Text <br />
      <small>.ribbon-wrapper.ribbon-xl .ribbon.text-xl</small>
      
      
      </div>
      <button class="btn btn-sm btn-warning" onclick="edit_produk({{ $d->id }})">Edit</button>
      <button class="btn btn-sm btn-danger" onclick="delete_produk({{ $d->id }})">Delete</button>
    </div>
  </div>
@endforeach

<script>

$(function () {
  var total = {!! $total !!}
  var page = '<ul class="pagination pagination-sm">'+
    '<li class="page-item"><a href="#" class="page-link">&laquo;satu</a></li>'+
    
    
    '<li class="page-item"><a href="#" class="page-link">&raquo;dua</a></li>'+
  '</ul>'
  $('#nav_pag').html(page);
  for (let index = 0; index < array.length; index++) {
    const element = array[index];
    
  }
  
});
</script>