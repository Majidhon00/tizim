@extends('layout')
@section('content')
<br>

<form action="{{ route('admin.update',['admin'=>$bazas->id]) }}" method="post">
  @csrf
  @method('PUT')
  <select name="cat_id" id="" class="form-control">

    @foreach ($blogs as $blog)
        <option value="{{ $blog->id }}" @if ($blog->id==$bazas->cat_id)
            selected
        @endif>
        {{ $blog->cat }}</option>
    @endforeach  
  </select><br>
  <input type="text" name="turi" id="" class="form-control" placeholder="Nomi" value="{{ $bazas->turi }}"><br>
    <input type="text" name="narxi" id="" class="form-control" placeholder="Narxi" value="{{ $bazas->narxi }}"><br>
  <input type="submit" class="btn btn-info" value="Yuborish" >
  <a href="{{ route('admin.index') }}" class="btn btn-dark">Orqaga</a>
</form>

@endsection