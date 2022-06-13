{{-- kid/{{ $baza->id }} --}}
<meta name="_token" content="{{ csrf_token() }}" />
<style>
    .form-inlin {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-gap: 15px;

    }

    .form-inlin select {
        width: 200px;
    } 

    .mr-2 {
        padding-left: 50px !important;
    }

</style>
@extends('layout')
<link rel="stylesheet" href="{{ asset('css/delete.css') }}">
@section('content') 
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Top Leaders</h4>
                    <form action="" method="post" class="form-inlin">
                        <select class="form-control sel">
                            <option value="0">ALL</option>
                            @foreach ($items as $item)
                                <option value="{{ $item->id }}">{{ $item->cat }}</option>
                            @endforeach
                        </select>
                        <select class="sel_ar form-control"></select>

                        <button value="ASC" class="btn btn-info asc"><i class="fas fa-upload"></i></button>
                        <button value="DESC" class="btn btn-info desc"><i class="fas fa-download"></i></button>

                    </form>
                    <div class="table-responsive">
                        <table class="table no-wrap v-middle mb-0 ">
                            <thead>
                                <tr class="border-0">
                                    <th class="border-0 font-weight-medium text-muted px-2">Kategoryasi</th>
                                    <th class="border-0 font-weight-medium text-muted ">Turi</th>
                                    <th class="border-0 font-weight-medium text-muted text-center">Rangi</th>
                                    <th class="border-0 font-weight-medium text-muted text-center">Miqdori </th>
                                    <th class="border-0 font-weight-medium text-muted text-center">Rulon Soni </th>
                                    <th class="border-0 font-weight-medium text-muted text-center">Narxi</th>
                                    <th class="border-0 font-weight-medium text-muted text-center">Amallar</th>
                                </tr>
                            </thead>
                            <tbody class="bir">
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
                                            <td class="border-top-0 text-center">{{ $baza->miqdori }}</td>
                                            <td class="border-top-0 text-center">{{ $baza->rulon }}</td>
                                            <td class="border-top-0 text-center">{{ $baza->miqdori * $baza->tur->narxi }}
                                            </td>

                                            <?
                                                if(isset($baza->miqdor))
                                                {
                                                    $miqdors = 0;
                                                    $miqdor = $miqdors+$baza->miqdor;
                                                }
                                                ?>
                                            <td class="font-weight-medium text-dark border-top-0">
                                                <a href="kid/{{ $baza->id }}" class="btn btn-success pil"><i
                                                        class="fas fa-plus"></i></a>
                                                <a href="kid2/{{ $baza->id }}" class="btn btn-dark min"><i
                                                        class="fas fa-minus"></i></a>
                                                <a href="{{ route('rang.show', ['rang' => $baza->id]) }}"
                                                    class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                <br>
                                                <br>
                                                <a href='rangdel/{{ $baza->id }}' class='del btn btn-danger '><i
                                                        class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @else 
                                        <tr>
                                        <h2></h2>
                                            <td class="border-top-0 p-2">
                                                <div class="d-flex no-block align-items-center">
                                                    <div class="">
                                                        <h5 class="mb-0 font-16 font-weight-medium">
                                                            Bu kategorya o'chirilgan
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-top-0 text-muted p-2">
                                                @if (!isset($baza->tur->turi))
                                                    Bu tur o'chirilgan
                                                @endif
                                            </td>

                                            <td class="border-top-0 text-center">{{ $baza->rang }}</td>
                                            <td class="border-top-0 text-center">{{ $baza->rang }}</td>
                                            <td class="border-top-0 text-center">{{ $baza->miqdori }}</td>
                                            <td class="border-top-0 text-center">{{ $baza->rulon }}</td>

                                            <td class="font-weight-medium text-dark border-top-0">
                                                <a href="kid/{{ $baza->id }}" class="btn btn-success pil"><i
                                                        class="fas fa-plus"></i></a>
                                                <a href="kid2/{{ $baza->id }}" class="btn btn-dark min"><i
                                                        class="fas fa-minus"></i></a>
                                                <a href="{{ route('rang.show', ['rang' => $baza->id]) }}"
                                                    class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                <br><br>
                                                <a href='{{ $baza->id }}' class='del btn btn-danger'><i
                                                        class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach

                            </tbody>
                        </table>
                        {{ $bazas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="alert alert-info">
        <h6>Miqdori: <span class="miqdor">
                @if (isset($baza->miqdor))
                    {{ $miqdor }}
                @endif
            </span></h6>
    </div>
    <div class="alert alert-info">
        <h6>Summa: <span class="narx"></span></h6>
    </div>
    <div class="alert alert-info">
        <h6>Rulon soni: <span class="rsoni"></span></h6>
    </div>

    <script src="{{ asset('help/jquery.js') }}"></script>
    <script>
        $(function() {


            summa = 0;
            miqdori = 0;
            rsoni = 0;
            // [ ======== ajax setup ========= ]

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
                $(".desc").click(function(e) {
                    e.preventDefault();
                    summa = 0;
                    miqdori = 0;
                    rsoni = 0; 
                
                    $(".bir").empty();
                  
                    $.ajax({
                        url: "{{ route('ajaxdate') }}",
                        method: 'post',
                        data: {
                            desc: $(this).val(),
                            tests1: $(".sel").val(),
                            tests2: $(".sel_ar").val()
                        },

                        success: function(result) {
                            result.tests.forEach(testes);

                            function testes(item, index) {
                                $(".bir").html($(".bir").html() + "<tr><td>" + item.cat +
                                    "</td><td>" + item.turi + "</td><td class='mr-2'>" +
                                    item
                                    .rang + "</td><td class='mr-2'>" + item.miqdori +
                                    "</td><td class='mr-2'>" + item.rulon +
                                    "</td><td class='mr-2'>" + item.narxi * item.miqdori +
                                    "</td><td class='mr-2'><a href='kid/{{ $baza->id }}'' class='btn btn-success'><i class='fas fa-plus'></i></a> <a href='kid2/{{ $baza->id }}' class='btn btn-dark'><i class='fas fa-minus'></i></a>  <a href='{{ route('rang.show', ['rang' => $baza->id]) }}' class='btn btn-info'><i class='fas fa-eye'></i></a> <br><br> <a href='rangdel/{{ $baza->id }}' class='del btn btn-danger'><i class='fas fa-trash'></i></a></td></tr>"
                                )
                                miqdori = miqdori + item.miqdori;
                                rsoni = rsoni + item.rulon;
                                summa = summa + item.narxi * miqdori;
                                $('.miqdor').html(miqdori);
                                $('.narx').html(summa);
                                $('.rsoni').html(rsoni);
                            }
                            summa = 0;
                            miqdori = 0;
                            rsoni = 0;
                        }
                    });

                });
            
            $(".asc").click(function(e) {
                e.preventDefault();
                summa = 0;
                miqdori = 0;
                rsoni = 0;
              
                $(".bir").empty();
                $.ajax({
                    url: "{{ route('ajaxdate') }}",
                    method: 'post',
                    data: {
                        desc: $(this).val(), 
                        tests1: $(".sel").val(),
                        tests2: $(".sel_ar").val()
                    },

                    success: function(result) {
                        result.tests.forEach(testes);

                        function testes(item, index) {
                            $(".bir").html($(".bir").html() + "<tr><td>" + item.cat +
                                "</td><td>" + item.turi + "</td><td class='mr-2'>" + item
                                .rang + "</td><td class='mr-2'>" + item.miqdori +
                                "</td><td class='mr-2'>" + item.rulon +
                                "</td><td class='mr-2'>" + item.narxi * item.miqdori +
                                "</td><td class='mr-2'><a href='kid/{{ $baza->id }}'' class='btn btn-success'><i class='fas fa-plus'></i></a> <a href='kid2/{{ $baza->id }}' class='btn btn-dark'><i class='fas fa-minus'></i></a>  <a href='{{ route('rang.show', ['rang' => $baza->id]) }}' class='btn btn-info'><i class='fas fa-eye'></i></a> <br><br> <a href='rangdel/{{ $baza->id }}' class='del btn btn-danger'><i class='fas fa-trash'></i></a></td></tr>"
                            )
                            miqdori = miqdori + item.miqdori;
                            rsoni = rsoni + item.rulon;
                            summa = summa + item.narxi * miqdori;
                            $('.miqdor').html(miqdori);
                            $('.narx').html(summa);
                            $('.rsoni').html(rsoni);
                        }
                        summa = 0;
                        miqdori = 0;
                        rsoni = 0;
                    }
                });

            });
        
            $(".sel").change(function() {   
                summa = 0;
                miqdori = 0;
                rsoni = 0;
             
                $(".bir").empty();
                $(".sel_ar").empty();
                $.ajax({
                    url: "{{ route('ajaxdata') }}",
                    method: 'post',
                    data: {
                        test11: $(this).val(),
                    },

                    success: function(result) {
                        result.data.forEach(data);

                        function data(item, index) {
                            $(".sel_ar").html($(".sel_ar").html() + "<option value='" + item
                                .id + "'>" + item.turi + "</option>")
                        }
                        result.test.forEach(tes);

                        function tes(item, index) {
                            $(".bir").html($(".bir").html() + "<tr><td>" + item.cat +
                                "</td><td>" + item.turi + "</td><td class='mr-2'>" + item
                                .rang + "</td><td class='mr-2'>" + item.miqdori +
                                "</td><td class='mr-2'>" + item.rulon +
                                "</td><td class='mr-2'>" + item.narxi * item.miqdori +
                                "</td><td class='mr-2'><a href='kid/{{ $baza->id }}'' class='btn btn-success'><i class='fas fa-plus'></i></a> <a href='kid2/{{ $baza->id }}' class='btn btn-dark'><i class='fas fa-minus'></i></a>  <a href='{{ route('rang.show', ['rang' => $baza->id]) }}' class='btn btn-info'><i class='fas fa-eye'></i></a> <br><br> <a href='rangdel/{{ $baza->id }}' class='del btn btn-danger'><i class='fas fa-trash'></i></a></td></tr>"
                            )
                            miqdori = miqdori + item.miqdori;
                            rsoni = rsoni + item.rulon;
                            summa = summa + item.narxi * miqdori;
                            $('.miqdor').html(miqdori);
                            $('.narx').html(summa);
                            $('.rsoni').html(rsoni);
                        }
                        summa = 0;
                        miqdori = 0;
                        rsoni = 0;
                    }
                });


               
                
                });
            // [ ======== select type ========= ]
            $(".sel_ar").change(function() {
                summa = 0;
                miqdori = 0;
                rsoni = 0;
                $(".bir").empty();
                $.ajax({
                    url: "{{ route('ajaxbase') }}",
                    method: 'post',
                    data: {
                        test: $(this).val()
                    },

                    success: function(result) {

                        result.test2.forEach(tes2);

                        function tes2(item, index) {
                            $(".bir").html($(".bir").html() + "<tr><td>" + item.cat +
                                "</td><td>" + item.turi + "</td><td class='mr-2'>" + item
                                .rang + "</td><td class='mr-2'>" + item.miqdori +
                                "</td><td class='mr-2'>" + item.rulon +
                                "</td><td class='mr-2'>" + item.narxi * item.miqdori +
                                "</td><td class='mr-2'><a href='kid/{{ $baza->id }}'' class='btn btn-success'><i class='fas fa-plus'></i></a> <a href='kid2/{{ $baza->id }}' class='btn btn-dark'><i class='fas fa-minus'></i></a><a href='{{ $baza->id }}' class='btn btn-info'><i class='fas fa-eye'></i></a> <br> <br> <a href='rangdel/{{ $baza->id }}' class='del btn btn-danger'><i class='fas fa-trash'></i></a></td></tr>"
                            )
                            miqdori = miqdori + item.miqdori;
                            rsoni = rsoni + item.rulon;
                            summa = summa + item.narxi * miqdori;
                            $('.miqdor').html(miqdori);
                            $('.narx').html(summa);
                            $('.rsoni').html(rsoni);
                        }


                    }
                });
            });
            // [ ============ delete ============= ]
            $(function() {
                $(".del").click(function(e) {
                    e.preventDefault();
                    id = $(this).attr('href')
                    a = confirm("rostdan ushirilsinmi")
                    if (a == true) {
                        window.location.href = "rangdel/" + id;
                    }
                });
            })
        })
    </script>
@endsection
