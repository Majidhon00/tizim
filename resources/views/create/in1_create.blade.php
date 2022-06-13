@extends('layout')
@section('content')
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
    <form action="{{ route('admin.store') }}" method="post">
        @csrf
        <select name="cat_id" id="" class="form-control @error('cat_id') is-invalid @enderror" value="{{ old('cat_id') }}">
            @foreach ($blogs as $blog)
                <option value="{{ $blog->id }}">{{ $blog->cat }}</option>
            @endforeach
        </select><br>
        <input type="text" name="turi" id="" class="form-control @error('turi') is-invalid @enderror"  value="{{ old('turi') }}" placeholder="Nomi"><br>
        <input type="text" name="narxi" id="" class="form-control @error('narxi') is-invalid @enderror" placeholder="Narxi" value="{{ old('narxi') }}"><br>
        <input type="submit" class="btn btn-info" value="Yuborish">
        <a href="{{ route('admin.index') }}" class="btn btn-dark">Orqaga</a>
    </form>
@endsection
