<meta name="_token" content="{{ csrf_token() }}" />
<style>
  .but{
    margin-left: 90%;
    top: -35px;
    position: relative;
  }
</style>
@extends('layout')
@section('content')
    <h3>Miqdor qo'shish</h3>
    <form action="{{ route('rang.store' ) }}" method="POST">
        @csrf
        <select name="cat_id" id="" class="form-control sel" >
            <option selected value="{{ $color->tur->kat->id }}">  {{ $color->tur->kat->cat }} </option>
            @foreach ($cats as $cat)
              @if (!($color->tur->kat->cat==$cat->cat))
                <option value="{{ $cat->id }}">{{ $cat->cat }}</option>
              @endif
            @endforeach 
        </select><br>
        <select name="tur_id" id="" class="form-control sel_ar">
          <option selected > {{ $color->tur->turi }} </option>
        </select>
        <br>
        <input type="text" name="rang" class="form-control" placeholder="Rangi" value="{{ $color->rang }}"><br>
        <input type="number" name="rulon" class="form-control" placeholder="Rulon soni" value="{{ $color->rulon }}"><br>
        <input type="number" name="miqdori" class="form-control" placeholder="Miqdori" value="{{ $color->miqdori }}"><br>
        <input type="submit" value="Yuborish" class="btn btn-success">
        <button type="button" class="but btn btn-danger"><i class="fas fa-trash"> </i> colse</button>
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
            $(".sel").change(function() {
              $(".sel_ar").empty();

              $.ajax({
                url: "{{ route('ajaxdata') }}",
                method: 'post',
                data: {
                  test: $(this).val()
                },

                    success: function(result) {
                      $(".sel_ar").empty();
                        result.data.forEach(data);

                        function data(item, index) {
                            $(".sel_ar").html($(".sel_ar").html() + "<option value='" + item
                                .id + "'>" + item.turi + "</option>")
                        }
                      
                      
                                                       
                    }
                });

            }); 
            $(".but").click(function (e) { 
              e.preventDefault();
              window.location.href="";
            });
        });
</script>