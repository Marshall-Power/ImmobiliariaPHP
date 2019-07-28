<style>
  .cookiediv{
    background-color:darkslateblue;
    text-align: center;
  }
  .cookietxt{
    color: white;
  }
</style>


<div class="js-cookie-consent cookie-consent cookiediv">

    <span class="cookie-consent__message cookietxt">
        {!! trans('cookieConsent::texts.message') !!}
    </span>

    <button class="btn btn-info js-cookie-consent-agree cookie-consent__agree ">
        {{ trans('cookieConsent::texts.agree') }}
    </button>

</div>
