@push('scripts')
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css">
<script>


    $( function() {
      $( "#slider-range-rooms" ).slider({
        range: true,
        min: 1,
        max: 8,
        values: [ 1, 8 ],
        slide: function( event, ui ) {
          $( "#amount-rooms" ).val(ui.values[ 0 ] + " hab - " + ui.values[ 1 ] + " hab " );
        }
      });
      $( "#amount-rooms" ).val( $( "#slider-range-rooms" ).slider( "values", 0 ) + " hab  -  " +
      $( "#slider-range-rooms" ).slider( "values", 1 ) + " hab "  );
    } );

    $( function() {
      $( "#slider-range-price" ).slider({
        range: true,
        min: 100,
        max: 5000,
        step: 100,
        values: [ 0, 5000 ],
        slide: function( event, ui ) {
          $( "#amount-price" ).val(ui.values[ 0 ] + " € - " + ui.values[ 1 ] + " € " );
        }
      });
      $( "#amount-price" ).val( $( "#slider-range-price" ).slider( "values", 0 ) + " €  -  " +
      $( "#slider-range-price" ).slider( "values", 1 ) + " € "  );
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

<div id="slider_rooms_update_text" style="width:100%">
    <p>
        <label for="amount">Habitaciones:</label>
        <input type="text" id="amount-rooms" readonly style="border:0; color:#f6931f; font-weight:bold;width:100%;">
    </p>
    <div id="slider-range-rooms" style="width:100%;"></div>
</div>

<div id="slider_price_update_text" style="width:100%">
    <p>
        <label for="amount">Rango de precios:</label>
        <input type="text" id="amount-price" readonly style="border:0; color:#f6931f; font-weight:bold;width:100%;">
    </p>
    <div id="slider-range-price" style="width:100%;"></div>
</div>

