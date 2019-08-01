<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="title">{{ trans('messages.filter') }}</h4>
            <hr style="margin: 0px 0px;">
            <form id="filter_houses" action="{{ route('welcome') }}">
                <input type="hidden" id="price" name="price">
                <input type="hidden" id="size_min" name="size_min">
                <input type="hidden" id="size_max" name="size_max">
                <br>
                <div class="form-group">
                    <h5>{{trans('messages.rooms')}}</h5>
                    <select class="form-control" name="rooms" id="rooms">
                        <option  value="1">1</option>
                        <option name="2" value="2">2</option>
                        <option name="3" value="3">3</option>
                        <option name="4" value="4">4</option>
                        <option name="5" value="5">5</option>
                    </select>
                </div>

                <div class="form-group">
                    <h5>{{trans('messages.bathrooms')}}</h5>
                    <select class="form-control" name="bathrooms" id="bathrooms">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>

                </div>


                <div class="form-group">
                    <h5>@lang('messages.price'): <span id="price-val">0</span>€</h5>
                    <div id="price_range"></div>
                </div>

                <div class="form-group">
                    <label for="amount-size">{{trans('messages.size')}}:</label>
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
