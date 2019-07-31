<div class="container">
    <div class="card">
        <div class="card-body">
                <h4 class="title">{{ trans('messages.filter') }}</h4>
                <hr style="margin: 0px 0px;">
                <form id="filter_houses" action="{{ route('welcome') }}">
                    <input type="hidden" id="rooms_min" name="rooms_min">
                    <input type="hidden" id="rooms_max" name="rooms_max">
                    <input type="hidden" id="bathrooms_min" name="bathrooms_min">
                    <input type="hidden" id="bathrooms_max" name="bathrooms_max">
                    <input type="hidden" id="price_min" name="price_min">
                    <input type="hidden" id="price_max" name="price_max">
                    <input type="hidden" id="size_min" name="size_min">
                    <input type="hidden" id="size_max" name="size_max">
                <br>
                    <div class="form-group">
                        <h5>Numero de habitaciones</h5>
                    <select class="form-control" name="n_rooms" id="n_rooms">
                        <option name="n_room_1" value="n_room_1">1</option>
                        <option name="n_room_2" value="n_room_2">2</option>
                        <option name="n_room_3" value="n_room_3">3</option>
                        <option name="n_room_4" value="n_room_4">4</option>
                        <option name="n_room_5" value="n_room_5">5</option>
                    </select>
                    </div>

                    <h5>Numero de baños</h5>
                    <select class="form-control" name="n_bathrooms" id="n_bathrooms">
                        <option name="n_bathrooms_1" value="n_bathrooms_1">1</option>
                        <option name="n_bathrooms_2" value="n_bathrooms_2">2</option>
                        <option name="n_bathrooms_3" value="n_bathrooms_3">3</option>
                        <option name="n_bathrooms_4" value="n_bathrooms_4">4</option>
                        <option name="n_bathrooms_5" value="n_bathrooms_5">5</option>
                    </select>


                    <div class="form-group">
                            <p>

                                Precio: <span id="nlVal"></span><br/>
                                </p>
                                <div id="price_range"></div>
                    </div>

                    <div class="form-group">
                        <label for="amount-size">Metros cuadrados:</label>
                        <input type="text" id="amount-size" readonly class="mb-2 w-100"
                            style="border:0; color:#f6931f; font-weight:bold;">
                        <div id="slider-range-size"></div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <input id="elevator" name="elevator" class="form-check-input" type="checkbox">
                                <label class="form-check-label ml-1" for="parking">@lang('messages.elevator')</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input id="parking" name="parking" class="form-check-input" type="checkbox">
                                <label class="form-check-label ml-1" for="parking">@lang('messages.parking')</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <input id="air_conditioner" name="air_conditioner" class="form-check-input" type="checkbox">
                                <label class="form-check-label ml-1" for="parking">@lang('messages.air_conditioner')</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input id="parking" class="form-check-input" type="checkbox">
                                <label class="form-check-label ml-1" for="furnished">@lang('messages.furnished')</label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input id="send_filters" type="submit" value="Filtrar" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
