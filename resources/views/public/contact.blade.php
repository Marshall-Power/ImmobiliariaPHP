@extends('layouts.app')
@section('content')

<div class="container">

<div class="row">


    <div class="row">
<h2 class="h1-responsive font-weight-bold text-center my-4">{{trans('messages.contact')}}</h2>

<p class="text-center w-responsive mx-auto mb-5">{{trans('messages.text_contact')}}</p>
        <div class="col-md-12 mb-md-0 mb-5">

            <form id="contact-form" name="contact-form" action="{{route('contactaction')}}" method="POST">
                @csrf
                <div class="row">

                    <div class="col-md-8">
                        <div class="md-form mb-0">
                            <label for="name" class="">{{trans('messages.name')}}</label>
                            <input type="text" id="name" name="name" class="form-control">

                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="md-form mb-0">
                         <label for="email" class="">{{trans('messages.email')}}</label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="phone" class="">{{trans('messages.phone')}}</label>
                            <input type="text" id="phone" name="phone" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                            <label for="message">{{trans('messages.message')}}</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        </div>

                    </div>
                </div>

            </form>

            <div class="text-center text-md-left" style="margin-top:10px;">
            <a class="btn btn-secondary" href="{{ url('/') }}">{{trans('messages.back')}}</a>
            <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">{{trans('messages.send')}}</a>

        <div class="text-center text-md-right">
        </div>
         </div>
        </div>

    </div>

</div>




</div>
@endsection
