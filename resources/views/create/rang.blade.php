<meta name="_token" content="{{ csrf_token() }}" />

@extends('layout')
@section('content')
    <h3>Miqdor qo'shish</h3>
    <form action="{{ route('rang.store' ) }}" method="POST">
        @csrf
        <select name="cat_id" id="" class="form-control sel" >
            <option>---</option>
            @foreach ($cats as $cat)
                <option value="{{ $cat->id }}">{{ $cat->cat }}</option>
            @endforeach
        </select><br>
        <select name="tur_id" id="" class="form-control sel_ar">         
        </select>
        <br>
        <input type="text" name="rang" class="form-control" placeholder="Rangi"><br>
        <input type="hidden" name="rulon"  class="form-control" placeholder="Rulon soni" value="0"><br>
        <input type="hidden" name="miqdori" class="form-control" placeholder="Miqdori" value="0"><br>
        <input type="submit" value="Yuborish" class="btn btn-success">
        <a href="{{ route('color.index') }}" class="btn btn-dark">Orqaga</a>
    </form>
@endsection
<script src="{{ asset('help/jquery.js') }}"></script>
<script>
     $(function() {
     
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $(".ikki").hide();
            $(".uch").hide();
 
            $(".sel").change(function() {
               

                $(".sel_ar").empty();
                $(".ikki").empty();
                $.ajax({
                    url: "{{ route('ajaxdata') }}",
                    method: 'post',
                    data: {
                        test11: $(".sel").val()
                    },

                    success: function(result) {
                        result.data.forEach(data);

                        function data(item, index) {
                            $(".sel_ar").html($(".sel_ar").html() + "<option value='" + item
                                .id + "'>" + item.turi + "</option>")
                        }
                      
                      
                                                       
                    }
                });

            }); 
        });
</script>