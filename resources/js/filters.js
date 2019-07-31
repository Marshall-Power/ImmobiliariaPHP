import $ from 'jquery'
// Filters
$(function () {

  $('#slider-range-size').slider({
    range: true,
    min: 0,
    max: 600,
    step: 5,
    values: [0, 600],
    slide: function (event, ui) {
      $('#amount-size').val(
        ui.values[0] + ' m2 - ' + ui.values[1] + ' m2 '
      )
      if (ui.values[0] >= 100) {
        $('#slider-range-size').slider('option', 'step', 10)
      }
      if (ui.values[0] < 100) {
        $('#slider-range-size').slider('option', 'step', 5)
      }
      $('#size_min').val(ui.values[0])
      $('#size_max').val(ui.values[1])
    }
  })

  $('#amount-size').val(
    $('#slider-range-size').slider('values', 0) +
        ' m2  -  ' +
        $('#slider-range-size').slider('values', 1) +
        ' m2 ')

  $('#size_min').val($('#slider-range-size').slider('values', 0))
  $('#size_max').val($('#slider-range-size').slider('values', 1))

  $('#slider-range-price').slider({
    range: true,
    min: 100,
    max: 1000000,
    step: 100,
    values: [0, 1000000],
    slide: function (event, ui) {
      $('#amount-price').val(
        ui.values[0] + ' € - ' + ui.values[1] + ' € '
      )

      $('#price_min').val(ui.values[0])
      $('#price_max').val(ui.values[1])
    }
  })

  $('#amount-price').val(
    $('#slider-range-price').slider('values', 0) +
            ' €  -  ' +
            $('#slider-range-price').slider('values', 1) +
            ' € '
  )

  $('#price_min').val($('#slider-range-price').slider('values', 0))
  $('#price_max').val($('#slider-range-price').slider('values', 1))
})

$(function() {
    var valMap = [0, 200,450,700,900,1200,1500,2000,3000, 5000, 10000, 20000, 40000, 80000, 150000, 200000, 400000, 1000000];
    $("#price_range").slider({
       // min: 0,
        max: valMap.length - 1,
        slide: function(event, ui) {
          $("#val").text(ui.value);
          $("#nlVal").text(valMap[ui.value]);
        }
    });
   });
