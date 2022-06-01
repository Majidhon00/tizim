<link rel="stylesheet" href="{{ asset('css/delete.css') }}">
<meta name="_token" content="{{ csrf_token() }}" />
<style>
    .fa-edit{
  margin-top: 2px;
}
</style>
@extends('layout')
@section('search')
<form class="my-2 my-lg-0">
    <div class="customize-input customize-input-v4">
        <input type="hidden" class="ser2" id="">
        <input class="form-control ser" type="search" placeholder="Categoria Search..."
            aria-label="Search">
        <i class="form-control-icon" data-feather="search"></i>
    </div>
</form>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Top Leaders</h4>
                <div class="table-responsive">
                    <table class="table no-wrap v-middle mb-0">
                        <thead>
                            <tr class="border-0">
                                <th class="border-0 font-weight-medium text-muted px-2">Kategoryasi</th>
                                <th class="border-0 font-weight-medium text-muted ">sana</th>
                                <th class="border-0 font-weight-medium text-muted ">Ohirgi o'zgarish</th>
                                <th class="border-0 font-weight-medium text-muted pil"><a href="{{ route('cat.create') }}" class="btn btn-info"><i class="fas fa-plus"></i></a></th>
                            </tr>
                        </thead>
                        <tbody class="area">
                            @foreach ($bazas as $baza)
                                
                            <tr>
                                <td class="border-top-0 p-2">
                                    <div class="d-flex no-block align-items-center">
                                        <div class="">
                                            <h5 class="mb-0 font-16 font-weight-medium">{{ $baza->cat }}</h5>
                                        </div>
                                    </div>
                                </td>
                                <td class="font-weight-medium text-dark border-top-0">
                                  @if (isset($baza->created_at))
                                  {{ substr($baza->created_at,0,10) }}
                                  @else
                                  hech narsa topilmadi
                                  @endif
                                </td>
                                <td class="font-weight-medium text-dark border-top-0">
                                  {{ substr($baza->updated_at,0,16) }}
                                </td>

                                <td class="font-weight-medium text-dark border-top-0 d-f">
                                    
                                    <a href="{{ $baza->id }}" class="delete del"><span></span></a>
                                    <a href="catedit/{{ $baza->id }}" class="btn btn-success delete"><i class="fas fa-edit"></i></a>
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
<script src="{{ asset('help/jquery.js') }}"></script>
<script>
    $(function(){

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
        $(".ser").keyup(function (e) { 
            $('.area').empty();
            search = $(".ser").val();
            if(search.length==0){
                $(".ser2").val('all')
            }
            $.ajax({
                url: "{{ route('ajaxkat') }}",
                method: 'post',
            data: {
                cata: $(".ser").val(),
                catb: $(".ser2").val()
            },
            success: function(result) {
            $('.area').empty();
                result.catz.forEach(catt);
                function catt(item,index) 
                { 
                   $(".area").html($(".area").html()+"<tr><td class='border-top-0 p-2'><div class='d-flex no-block align-items-center'><div> <h5 class='mb-0 font-16 font-weight-medium'>"+item.cat+"</h5> </div></div></td><td class='font-weight-medium text-dark border-top-0'> "+item.created_at+"</td><td class='font-weight-medium text-dark border-top-0'>"+item.updated_at+"</td><td class='font-weight-medium text-dark border-top-0 d-f'><a href='{{ $baza->id }}' class=' del delete'><span></span></a><a href='catedit/{{ $baza->id }}' class='btn btn-success delete'><i class='fas fa-edit'></i></a></td> </tr>")      
                }
            
            }
        });
    });

        $(".del").click(function (e) { 
            e.preventDefault();
            id = $(this).attr('href')
            a = confirm("rostdan ushirilsinmi")
            if(a==true)
            {
                window.location.href="catdel/"+id;
            }
        });
    })
</script>
@endsection 