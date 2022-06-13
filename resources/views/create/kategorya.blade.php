@extends('layout')
@section('content')
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
    <form action="{{ route('cat.store') }}" method="post">
      @csrf
      <br>
      <input type="text" name="cat" id="" class="form-control @error('cat') is-invalid @enderror"  placeholder="Kategorya Nomi"><br>
      <input type="submit" class="btn btn-info" value="Yuborish" >
      <a href="{{ route('cat.index') }}" class="btn btn-dark">Orqaga</a>
    </form>
@endsection