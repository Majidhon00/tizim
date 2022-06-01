@extends('layout')
@section('content')
<h3>{{ $kirim->cat->cat }}/{{ $kirim->tur->turi }}/{{ $kirim->rang->rang }} @if ($kirim->tip==0)
    dan chiqarilgan:
    @else
    ga qushilgan:

@endif 
{{ $kirim->miqdor }}
</h3>
<h5>Bazada mavjud miqdor: {{ $rang->miqdori }}</h5>

    <form action="{{ route('upkirim.update',['upkirim'=>$kirim->rang_id]) }}" method="POST">
 
      @csrf
      @method('put')
      <input type="hidden" name="id" value="{{ $kirim->id }}">
      <input type="hidden" name="cat_id" value="{{ $kirim->cat_id }}">
      <input type="hidden" name="tur_id" value="{{ $kirim->tur_id }}">
      <input type="hidden" name="miqdor2" value="{{ $kirim->miqdor }}">
      <input type="hidden" name="r_soni2" value="{{ $kirim->r_soni }}">
      <input type="hidden" name="tip" value="{{ $kirim->tip }}">
      <br>
      <input type="number" name="miqdor"  class="form-control"  placeholder="Miqdori" value="{{ $kirim->miqdor }}"> <br>
      <input type="number" name="r_soni"  class="form-control" placeholder="Rulon Soni" value="{{ $kirim->r_soni }}"> <br>
      <input type="submit" value="Yuborish" class="btn btn-success"> 
      <a href="{{ route('rang.show',['rang'=>$kirim->rang_id]) }}" class="btn btn-dark">Orqaga</a>
    </form>
@endsection