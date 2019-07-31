import $ from 'jquery'
// Filters
$(function () {
  $('#slider-range-rooms').slider({
    range: true,
    min: 1,
    max: 8,
    values: [1, 8],
    slide: function (event, ui) {
      $('#amount-rooms').val(
        ui.values[0] + ' hab - ' + ui.values[1] + ' hab'
      )
      $('#rooms_min').val(ui.values[0])
      $('#rooms_max').val(ui.values[1])
    }
  })

  $('#amount-rooms').val(
    $('#slider-range-rooms').slider('values', 0) +
            ' hab  -  ' +
            $('#slider-range-rooms').slider('values', 1) +
            ' hab')

  $('#rooms_min').val($('#slider-range-rooms').slider('values', 0))
  $('#rooms_max').val($('#slider-range-rooms').slider('values', 1))

  $('#slider-range-bathrooms').slider({
    range: true,
    min: 1,
    max: 3,
    step: 1,
    values: [1, 3],
    slide: function (event, ui) {
      $('#amount-bathrooms').val(ui.values[0] + ' baños - ' + ui.values[1] + ' baños')
      $('#bathrooms_min').val(ui.values[0])
      $('#bathrooms_max').val(ui.values[1])
    }
  })

  $('#amount-bathrooms').val(
    $('#slider-range-bathrooms').slider('values', 0) +
            ' baños  -  ' +
            $('#slider-range-bathrooms').slider('values', 1) +
            ' baños '
  )

  $('#bathrooms_min').val($('#slider-range-bathrooms').slider('values', 0))
  $('#bathrooms_max').val($('#slider-range-bathrooms').slider('values', 1))

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
