@extends('layout')
@section('content')
    <form action="{{ route('cat.update',['cat'=>$bazas->id]) }}" method="post">
      @csrf
      @method('PUT')
      <br>
      <input type="text" name="cat" id="" class="form-control" placeholder="Kategorya Nomi" value="{{ $bazas->cat }}"><br>
      <input type="submit" class="btn btn-info" value="Yuborish" >
      <a href="{{ route('cat.index') }}" class="btn btn-dark">Orqaga</a>
    </form>
  
@endsection