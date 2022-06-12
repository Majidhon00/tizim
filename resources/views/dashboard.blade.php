<meta name="_token" content="{{ csrf_token() }}" />
@extends('layout')
@section('search')
<form class="my-2 my-lg-0">
    <div class="customize-input customize-input-v4">
        <input type="hidden" class="ser2" id="">
        <input class="form-control ser" type="search" placeholder="Type Search..."
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
                <h4 class="card-title mb-4">Top</h4>
                <div class="table-responsive">
                    <table class="table no-wrap v-middle mb-0">
                        <thead>
                            <tr class="border-0">
                                <th class="border-0 font-weight-medium text-muted px-2">Kategoryasi</th>
                                <th class="border-0 font-weight-medium text-muted px-2">Turi</th>
                                <th class="border-0 font-weight-medium text-muted text-center">Narxi
                                </th>
                               
                                <th class="border-0 font-weight-medium text-muted"><a href="{{ route('admin.create') }}" class="btn btn-info"><i class="fas fa-plus"></i></a></th>
                            </tr>
                        </thead>
                        <tbody class="area">
                            @foreach ($bazas as $baza)
                                @if(isset($baza->kat->cat))
                                
                                <tr>
                                    <td class="border-top-0 p-2">
                                        <div class="d-flex no-block align-items-center">
                                            <div class="">
                                                <h5 class="mb-0 font-16 font-weight-medium">{{ $baza->kat->cat }}</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border-top-0 text-muted p-2">{{ $baza->turi }}</td>
                                    
                                    <td class="border-top-0 text-center">{{ $baza->narxi }}</td>
                                    
                                    <td class="font-weight-medium text-dark border-top-0">
                                        <a href="adminedit/{{ $baza->id }}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                        <a href="{{ $baza->id }}" class="btn btn-danger del"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @else
                                <tr>
                                    <td class="border-top-0 p-2">
                                        <div class="d-flex no-block align-items-center">
                                            <div class="">
                                                <h5 class="mb-0 font-16 font-weight-medium">kategorya o'chirilgan</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border-top-0 text-muted p-2">{{ $baza->turi }}</td>
                                    
                                    <td class="border-top-0 text-center">{{ $baza->narxi }}</td>
                                    
                                    <td class="font-weight-medium text-dark border-top-0">
                                        <a href="adminedit/{{ $baza->id }}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                        <a href="{{ $baza->id }}" class="btn btn-danger del"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endif

                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
     
                {{ $bazas->links() }}

        </div>
    </div>
</div>
<script src="{{ asset('help/jquery.js') }}"></script>
<script>
    $(function(){
        $(".hi").show();
          $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $(".ser").keyup(function (e) { 
                $.ajax({
                    url: "{{ route('ajaxtur') }}",
                    method: "POST",
                    data: {
                        tur: $(".ser").val()
                    },
                    success: function (result) {
                        $(".area").empty();
                        $(".hi").hide();
                        result.turlar.forEach(tura)
                        
                        function tura(item,index) 
                        { 
                            $(".area").html($(".area").html()+"<tr><td class='border-top-0 p-2'><div class='d-flex no-block align-items-center'> <div><h5 class='mb-0 font-16 font-weight-medium'>"+item.cat+"</h5></div></div></td><td class='border-top-0 text-muted p-2'>"+item.turi+"</td><td class='border-top-0 text-center'>"+item.narxi+"</td><td class='font-weight-medium text-dark border-top-0'> <a href='adminedit/"+item.id+"' class='btn btn-info'><i class='fas fa-edit'></i></a>  <a href='up/{{ $baza->id }}' class='btn btn-danger del'><i class='fas fa-trash'></i></a></td>"
                            )
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
                window.location.href="up/"+id;
            }
        });
    })
</script>
@endsection