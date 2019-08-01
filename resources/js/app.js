import $ from 'jquery'
import './jquery-ui'
import './filters'
require('./bootstrap')

window.$ = window.jQuery = $

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
})
