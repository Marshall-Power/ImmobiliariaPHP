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
    $( "#slider-range-bathroom" ).slider({
      range: true,
      min: 1,
      max: 3,
      step: 1,
      values: [ 1, 3 ],
      slide: function( event, ui ) {
        $( "#amount-bathroom" ).val(ui.values[ 0 ] + " baños - " + ui.values[ 1 ] + " baños " );
      }
    });
    $( "#amount-bathroom" ).val( $( "#slider-range-bathroom" ).slider( "values", 0 ) + " baños  -  " +
    $( "#slider-range-bathroom" ).slider( "values", 1 ) + " baños "  );
  } );
</script>
<script>
    $( function() {
      $( "#slider-range-size" ).slider({
        range: true,
        min: 0,
        max: 600,
        step: 5,
        values: [ 0, 600 ],
        slide: function( event, ui ) {
          $( "#amount-size" ).val(ui.values[ 0 ] + " m2 - " + ui.values[ 1 ] + " m2 " );
          if ( ui.values[0] >= 100 ) $("#slider-range-size").slider('option', 'step', 10);
          if ( ui.values[0] < 100 ) $("#slider-range-size").slider('option', 'step', 5);
        }
      });
      $( "#amount-size" ).val( $( "#slider-range-size" ).slider( "values", 0 ) + " m2  -  " +
      $( "#slider-range-size" ).slider( "values", 1 ) + " m2 "  );
    } );
    </script>
<script>

    $( function() {
        $( "#slider-range-price" ).slider({
          range: true,
          min: 100,
          max: 1000000,
          step: 100,
          values: [ 0, 1000000 ],
          slide: function( event, ui ) {
            $( "#amount-price" ).val(ui.values[ 0 ] + " € - " + ui.values[ 1 ] + " € " );
          }
        });
        $( "#amount-price" ).val( $( "#slider-range-price" ).slider( "values", 0 ) + " €  -  " +
        $( "#slider-range-price" ).slider( "values", 1 ) + " € "  );
      } );
</script>
<script>


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

<div id="slider_bathroom_update_text" style="width:100%">
        <p>
            <label for="amount-bathroom">WC:</label>
            <input type="text" id="amount-bathroom" readonly style="border:0; color:#f6931f; font-weight:bold;width:100%;">
        </p>
        <div id="slider-range-bathroom" style="width:100%;"></div>
</div>

<div id="slider_price_update_text" style="width:100%">
    <p>
        <label for="amount-price">Rango de precios:</label>
        <input type="text" id="amount-price" readonly style="border:0; color:#f6931f; font-weight:bold;width:100%;">
    </p>
    <div id="slider-range-price" style="width:100%;"></div>
</div>


<div id="slider_size_update_text" style="width:100%">
        <p>
            <label for="amount-size">Metros cuadrados:</label>
            <input type="text" id="amount-size" readonly style="border:0; color:#f6931f; font-weight:bold;width:100%;">
        </p>
        <div id="slider-range-size" style="width:100%;"></div>
</div>

<input id="send_filters" type="button" value="Filtrar">

