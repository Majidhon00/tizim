@extends('layout')
<meta name="_token" content="{{ csrf_token() }}" />
@section('search')
<form class="my-2 my-lg-0">
    <div class="customize-input customize-input-v4">
        <input type="hidden" class="ser2" id="">
        <input class="form-control ser" type="search" placeholder="Color Search..."
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
                        <table class="table no-wrap v-middle mb-0 ">
                            <thead>
                                <tr class="border-0">
                                    <th class="border-0 font-weight-medium text-muted px-2">Kategoryasi</th>
                                    <th class="border-0 font-weight-medium text-muted ">Turi</th>
                                    <th class="border-0 font-weight-medium text-muted text-center">Rangi</th>
                                    <th class="border-0 font-weight-medium text-muted"><a href="{{ route('rang.create') }}" class="btn btn-info pil"><i  class="fas fa-plus"></i></a></th>
                                </tr>
                            </thead>
                            <tbody class="bir area">
                                @foreach ($bazas as $baza)
                                    @if (isset($baza->tur->kat->cat))
                                        <tr>
                                            <td class="border-top-0 p-2">
                                                <div class="d-flex no-block align-items-center">
                                                    <div class="">
                                                        <h5 class="mb-0 font-16 font-weight-medium">
                                                            {{ $baza->tur->kat->cat }}</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-top-0 text-muted p-2">{{ $baza->tur->turi }}</td>

                                            <td class="border-top-0 text-center">{{ $baza->rang }}</td>
                                           

                                            <td class="font-weight-medium text-dark border-top-0">
                                                <a href="updateC/{{ $baza->id }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                                <a href="{{ $baza->id }}" class="btn btn-danger "><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endif
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
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            $(".ser").keyup(function (e) { 
                $.ajax({
                    url: "ajaxcolor",
                    method: "post",
                    data: {
                        color: $(".ser").val()
                    },
                    success: function (result) {
                         $(".area").empty();
                         result.colors.forEach(col)
                         function col(item,index) 
                        {  
                            $(".area").html($(".area").html()+"<tr><td class='border-top-0 p-2'><div class='d-flex no-block align-items-center'><div><h5 class='mb-0 font-16 font-weight-medium'>"+item.cat+"</h5></div></div></td><td class='border-top-0 text-muted p-2'>"+item.turi+"</td><td class='border-top-0 text-center'>"+item.rang+"</td><td class='font-weight-medium text-dark border-top-0'><a href='rangdel/{{ $baza->id }}'class='delete '><span></span></a></td></tr>");
                        }
                    }
                });
            });
                $(".del").click(function(e) {
                    e.preventDefault();
                    id = $(this).attr('href')
                    a = confirm("rostdan ushirilsinmi")
                    if (a == true) {
                        window.location.href = "rangdel/" + id;
                    }
                });
            });
    </script>
@endsection