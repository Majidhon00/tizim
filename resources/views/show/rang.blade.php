    <style>
      .mut{
        color: #212a80 !important;
      }
      table{
        width: 98% !important;
      }
    </style>
    <link rel="stylesheet" href="{{ asset('help/bootstrap.css') }}">
@extends('layout')  
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
              @foreach ($blog as $baza)
                <h4 class="card-title mb-4">{{ $baza->tur->kat->cat }}/{{ $baza->tur->turi }}/{{ $baza->rang }} haqida: </h4>
              @endforeach                
                <div class="table-responsive">
                    <table class="table  no-wrap v-middle mb-0" >
                        <thead class="table table-dark">
                            <tr class="border-0">
                                <th class="">Kategoryasi</th>
                                <th class="">Turi</th>
                                <th class="">rangi</th>
                                <th class="">Miqdori</th>
                                <th class="">Rulon Soni</th>
                                <th class="">Vaqti</th>
                                <th class="">Amallar</th>
                        </thead>
                        <tbody>
                          
                          
                          @foreach ($bazas as $baza)
                            <tr @if ($baza->tip==1)
                                class="alert alert-info"
                                @else
                                class="alert alert-danger"
                            @endif>
                                <td class="">
                                    <div class="d-flex no-block align-items-center">
                                        <div class="">
                                            <h5 class="mb-0 font-16 font-weight-medium">{{ $baza->cat->cat }}</h5>
                                        </div>
                                    </div>
                                </td>
                                <td class="">{{ $baza->tur->turi }}</td>
                                
                                <td class="">{{ $baza->rang->rang }}</td>
                               
                                <td class="">
                                  @if ($baza->tip==0)
                                      -
                                  @endif
                                  {{ $baza->miqdor }}
                                </td>
                                <td class="">
                                  @if ($baza->tip==0)
                                      -
                                  @endif
                                  {{ $baza->r_soni }}
                                </td>
                                <td class="">
                                  {{ substr($baza->created_at,0,10) }}
                                </td>
                                <td class="">
                                    <form action="{{ route('delkirim.delkirim',['delkirim'=>$baza->rang_id]) }}" method="post">
                                        @csrf   
                                        @method('PUT')
                                        <input type="hidden" name="miqdor" value="{{ $baza->miqdor }}">
                                        <input type="hidden" name="r_soni" value="{{ $baza->r_soni }}">
                                        <input type="hidden" name="tip" value="{{ $baza->tip }}">
                                        <input type="hidden" name="id" value="{{ $baza->id }}">
                                        <input type="hidden" name="rang_id" value="{{ $baza->rang_id }}">
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                      </form>
                                     <a href="{{ route('kirim.edit',['kirim'=>$baza->id]) }}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                  </td>
                            </tr>
                          
                            @endforeach  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="{{ route('rang.index') }}" class="btn btn-dark"><--back</a>
<script src="{{ asset('help/jquery.js') }}"></script>
@endsection