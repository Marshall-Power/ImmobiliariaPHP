@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-4 offset-lg-5 col-md-4 col-sm-4">
            <h1>{{trans('messages.aboutUs')}}</h1>
        </div>
    </div>
    <div class="row">

        <div class="col-lg-8 offset-lg-2 col-md-8 col-sm-12">
            <h2>INMO PRO es la proposta per a una plataforma lliure en transparencia de dades.
            </h2>
            <h4 class="mt-4">Coneix als desenvolupadors que creen INMO PRO.</h4>

            <div class="row">
                <div class="col-md-6 mt-5 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{  asset('images/gerard.jpg') }}"
                            style="width:100%;object-fit:cover;" alt="gerard">
                        <div class="card-body">
                            <h2 class="mt-5 mb-4 card-title">Gerard Guillen</h2>
                            <h4 class="card-text text_center">BACKEND</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mb-4">
                    <div class="card">
                        <img src="{{  asset('images/marcel.jpg') }}" style="width: 100%;object-fit:cover;" alt="marcel">
                        <div class="card-body">
                            <h2 class="mt-5 mb-4">Marcel Planas</h2>
                            <h4 class="text_center">BACKEND</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mb-4">
                    <div class="card">
                        <img src="{{  asset('images/kevin.jpg') }}" style="width: 100%;object-fit:cover; height: 500px;"
                            alt="kevin">
                        <div class="card-body">
                            <h2 class="mt-5 mb-4">Kevin Curtet</h2>
                            <h4 class="text_center">PROJECT MANAGER</h4>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 mt-5 mb-4">
                    <div class="card">
                        <img src="{{  asset('images/ruben.jpg') }}" style="width: 100%;object-fit:cover; height: 500px;"
                            alt="kevin">
                        <div class="card-body">
                            <h2 class="mt-5 mb-4">Ruben Idigora</h2>
                            <h4 class="text_center">FRONTEND</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
