@push('scripts')
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css">
<script>
    $( function() {
      $( "#slider-range" ).slider({
        range: true,
        min: 1,
        max: 8,
        values: [ 1, 8 ],
        slide: function( event, ui ) {
          $( "#amount" ).val(ui.values[ 0 ] + " hab - " + ui.values[ 1 ] + " hab " );
        }
      });
      $( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) + " hab  -  " +
      $( "#slider-range" ).slider( "values", 1 ) + " hab "  );
    } );
    </script>

@endpush



<p>{{trans('messages.filter')}}</p>
<hr>
<input type="checkbox">Casa
<br>
<input type="checkbox">Comprar
<br>
<input type="checkbox">Parking

<div id="slider_update_text" style="width:20%">
    <p>
        <label for="amount">Price range:</label>
        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;width:20%;">
    </p>
    <div id="slider-range" style="width:20%;">
</div>

