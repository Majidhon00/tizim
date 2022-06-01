@extends('layout')
@section('content')
<h3>{{ $kirim->tur->kat->cat }}/{{ $kirim->tur->turi }}/{{ $kirim->rang }} ga qo'shilyapti:</h3>
@if (\Session::has('success'))
<div class="alert alert-danger">
    <h6>{!! \Session::get('success') !!}</h6>
</div> 
@endif
    <form action="{{ route('kirim.update',['kirim'=>$kirim->id]) }}" method="POST">
      @csrf
      @method('put')
      <input type="hidden" name="rang_id" value="{{ $kirim->id }}">
      <input type="hidden" name="cat_id" value="{{ $kirim->cat_id }}">
      <input type="hidden" name="tur_id" value="{{ $kirim->tur_id }}">
      <input type="hidden" name="tip" value="1">
      <br>
      <input type="date" name="date"  class="form-control"  placeholder="date"> <br>
      <input type="number" name="miqdor"  class="form-control"  placeholder="Miqdori"> <br>
      <input type="number" name="r_soni"  class="form-control" placeholder="Rulon Soni"> <br>
      <input type="submit" value="Yuborish" class="btn btn-success"> 
      <a href="{{ route('rang.index') }}" class="btn btn-dark">Orqaga</a>
    </form>
@endsection 