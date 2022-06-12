@extends('layout')
@section('content')
    <form action="{{ route('cat.store') }}" method="post">
      @csrf
      <br>
      <input type="text" name="cat" id="" class="form-control" placeholder="Kategorya Nomi"><br>
      <input type="submit" class="btn btn-info" value="Yuborish" >
      <a href="{{ route('cat.index') }}" class="btn btn-dark">Orqaga</a>
    </form>
  
@endsection