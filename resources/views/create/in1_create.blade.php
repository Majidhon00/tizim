@extends('layout')
@section('content')
    <form action="{{ route('admin.store') }}" method="post">
      @csrf
      <select name="cat_id" id="" class="form-control">
        @foreach ($blogs as $blog)
            <option value="{{ $blog->id }}">{{ $blog->cat }}</option>
        @endforeach  
      </select><br>
      <input type="text" name="turi" id="" class="form-control" placeholder="Nomi"><br>
        <input type="text" name="narxi" id="" class="form-control" placeholder="Narxi"><br>
      <input type="submit" class="btn btn-info" value="Yuborish" >
      <a href="{{ route('admin.index') }}" class="btn btn-dark">Orqaga</a>
    </form>
  
@endsection 