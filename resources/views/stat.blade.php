{{-- kid/{{ $baza->id }} --}}
<meta name="_token" content="{{ csrf_token() }}" />
<style>
    .form-inlin {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
        grid-gap: 15px;

    }

    .form-inlin select {
        width: 150px;
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
                        <select class="tip form-control ">
                            <option value="1">-----</option>
                            <option value="1">kirim</option>
                            <option value="0">chiqim</option>
                        </select>
                        <input type="month" class="form-control month">
                        <input type="date" class="form-control date">
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
                                </tr>
                            </thead>
                            <tbody class="bir">
                                @foreach ($bazas as $baza)
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="alert alert-info">
        <h6>Miqdori: <span class="miqdor">

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
            // [ ======== select categoria ========= ]

            $(".sel").change(function() {


                $(".bir").empty();
                $(".sel_ar").empty();
                $.ajax({
                    url: "{{ route('ajaxsel') }}",
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
                            let summa =  item.narxi * item.miqdori ;
                            $(".bir").html($(".bir").html() + "<tr><td>" + item.cat +
                                "</td><td>" + item.turi + "</td><td class='mr-2'>" + item
                                .rang + "</td><td class='mr-2'>" + item.miqdori +
                                "</td><td class='mr-2'>" + item.rulon +
                                "</td><td class='mr-2'>" + summa.toLocaleString('en-US') +
                                "</td></tr>"
                            )
                            miqdori = miqdori + item.miqdori;
                            rsoni = rsoni + item.rulon;
                            summa = summa + item.narxi * miqdori;
                            $('.miqdor').html(miqdori.toLocaleString('en-US'));
                            $('.narx').html(summa.toLocaleString('en-US'));
                            $('.rsoni').html(rsoni.toLocaleString('en-US'));
                        }
                        summa = 0;
                        miqdori = 0;
                        rsoni = 0;
                    }
                });




            });
            // [ ======== select type ========= ]
            $(".sel_ar").change(function() {

                $(".bir").empty();
                $.ajax({
                    url: "{{ route('ajaxbase2') }}",
                    method: 'post',
                    data: {
                        test: $(this).val()
                    },

                    success: function(result) {

                        result.test2.forEach(tes2);

                        function tes2(item, index) {
                            let summa =  item.narxi * item.miqdori;
                            $(".bir").html($(".bir").html() + "<tr><td>" + item.cat +
                                "</td><td>" + item.turi + "</td><td class='mr-2'>" + item
                                .rang + "</td><td class='mr-2'>" + item.miqdori +
                                "</td><td class='mr-2'>" + item.rulon +
                                "</td><td class='mr-2'>" + summa.toLocaleString('en-US') +
                                "</td></tr>"
                                // <td class='mr-2'><a href='kid/{{ $baza->id }}'' class='btn btn-success'><i class='fas fa-plus'></i></a> <a href='kid2/{{ $baza->id }}' class='btn btn-dark'><i class='fas fa-minus'></i></a><a href='{{ $baza->id }}' class='btn btn-info'><i class='fas fa-eye'></i></a> <br> <br> <a href='rangdel/{{ $baza->id }}' class='del btn btn-danger'><i class='fas fa-trash'></i></a></td>
                            )
                            miqdori = miqdori + item.miqdori;
                            rsoni = rsoni + item.rulon;
                            summa = summa + item.narxi * miqdori;
                            $('.miqdor').html(miqdori.toLocaleString('en-US'));
                            $('.narx').html(summa.toLocaleString('en-US'));
                            $('.rsoni').html(rsoni.toLocaleString('en-US'));
                        }

                        summa = 0;
                        miqdori = 0;
                        rsoni = 0;
                    }
                });
                // [ ============ delete ============= ]
            });
            // [ ======== month search ========= ]
            $(".month").change(function() {


                $(".bir").empty();
                $.ajax({
                    url: "{{ route('ajaxmonth') }}",
                    method: 'post',
                    data: {
                        sel: $(".sel").val(),
                        selar: $(".sel_ar").val()
                    },

                    success: function(result) {


                        result.month.forEach(mont);

                        function mont(item, index) {
                            let ursoni = 0;
                            let umiqdori = 0;

                            result.month3.forEach(mont3);

                            function mont3(item2, index2) {
                                console.log(item2.miqdor);
                                if (item.cat_id == item2.cat_id && item.tur_id == item2
                                    .tur_id && item.cidd == item2.rang_id && $(".month")
                                .val() ==
                                    item2.created_at.substring(0, 7) && $(".tip").val() ==
                                    item2.tip) {
                                    umiqdori = umiqdori * 1 + item2.miqdor * 1;
                                    ursoni = ursoni * 1 + item2.r_soni * 1;
                                }
                            }
                            if (!(umiqdori == 0 && ursoni == 0)) {
                                let summa = item.narxi * umiqdori;
                                $(".bir").html($(".bir").html() + "<tr><td>" + item.cat +
                                    "</td><td>" + item.turi + "</td><td class='mr-2'>" +
                                    item.rang + "</td><td class='mr-2'>" + umiqdori +
                                    "</td><td class='mr-2'>" + ursoni +
                                    "</td><td class='mr-2'>" + summa.toLocaleString('en-US') +
                                    "</td></tr>"
                                    // <td class='mr-2'><a href='kid/" + item.kid +
                                    // "' class='btn btn-success'><i class='fas fa-plus'></i></a> <a href='kid2/" +
                                    // item.kid +
                                    // "' class='btn btn-dark'><i class='fas fa-minus'></i></a><a href='find3/" +
                                    // item.kid +
                                    // "' class='btn btn-info'><i class='fas fa-eye'></i></a> <br> <br> <a href='rangdel/" +
                                    // item.kid +
                                    // "' class='del btn btn-danger'><i class='fas fa-trash'></i></a></td>
                                )

                            } else {
                                $(".bir").html($(".bir").html() +
                                    "<tr><td>Malumot mavjud emas</td></tr>");
                            }

                            miqdori = miqdori + umiqdori;
                            rsoni = rsoni + ursoni;
                            summa = summa + item.narxi * umiqdori;
                            $('.miqdor').html(miqdori.toLocaleString('en-US'));
                            $('.narx').html(summa.toLocaleString('en-US'));
                            $('.rsoni').html(rsoni.toLocaleString('en-US'));
                        }

                        summa = 0;
                        miqdori = 0;
                        rsoni = 0;

                    }
                });

            });
            // [ ======== date search ========= ]
            $(".date").change(function() {


                $(".bir").empty();
                $.ajax({
                    url: "{{ route('ajaxmonth') }}",
                    method: 'post',
                    data: {
                        sel: $(".sel").val(),
                        selar: $(".sel_ar").val()
                    },

                    success: function(result) {


                        result.month.forEach(mont);

                        function mont(item, index) {
                            let ursoni = 0;
                            let umiqdori = 0;

                            result.month3.forEach(mont3);

                            function mont3(item2, index2) {
                                console.log(item2.miqdor);
                                if (item.cat_id == item2.cat_id && item.tur_id == item2
                                    .tur_id && item.cidd == item2.rang_id && $(".date").val() ==
                                    item2.created_at.substring(0, 10) && $(".tip").val() ==
                                    item2.tip) {
                                    umiqdori = umiqdori * 1 + item2.miqdor * 1;
                                    ursoni = ursoni * 1 + item2.r_soni * 1;
                                }
                            }
                            if (!(umiqdori == 0 && ursoni == 0)) {
                                let summa = item.narxi * umiqdori;
                                $(".bir").html($(".bir").html() + "<tr><td>" + item.cat +
                                    "</td><td>" + item.turi + "</td><td class='mr-2'>" +
                                    item.rang + "</td><td class='mr-2'>" + umiqdori +
                                    "</td><td class='mr-2'>" + ursoni +
                                    "</td><td class='mr-2'>" + summa.toLocaleString('en-US') +
                                    "</td></tr>"
                                    // <td class='mr-2'><a href='kid/" + item.cidd +
                                    // "' class='btn btn-success'><i class='fas fa-plus'></i></a> <a href='kid2/" +
                                    // item.cidd +
                                    // "' class='btn btn-dark'><i class='fas fa-minus'></i></a><a href='view/" +
                                    // item.cidd +
                                    // "' class='btn btn-info'> <i class='fas fa-eye'></i></a> <br> <br> <a href='" +
                                    // item.cidd +
                                    // "' class='del btn btn-danger' ><i class='fas fa-trash'></i></a></td>
                                )
                            } else {

                                $(".bir").html($(".bir").html() +
                                    "<tr><td>Malumot mavjud emas</td></tr>");

                            }


                            miqdori = miqdori + umiqdori;
                            rsoni = rsoni + ursoni;
                            summa = summa + item.narxi * umiqdori;
                            $('.miqdor').html(miqdori.toLocaleString('en-US'));
                            $('.narx').html(summa.toLocaleString('en-US'));
                            $('.rsoni').html(rsoni.toLocaleString('en-US'));
                        }

                        summa = 0;
                        miqdori = 0;
                        rsoni = 0;

                    }
                });

            });
            // [ ======== delete fun ========= ]
            $(".del").click(function(e) {
                e.preventDefault();
                id = $(this).attr('href')
                a = confirm("rostdan ushirilsinmi")
                if (a == true) {
                    window.location.href = "rangdel/" + id;
                }
            });

        })
    </script>
@endsection
