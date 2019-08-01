<div class="container">
    <div class="card">
        <div class="card-body">
            <h3 class="title">{{ trans('messages.filter') }}</h3>
            <form id="filter_houses" action="{{ route('welcome') }}">
                <input type="hidden" id="rooms_min" name="rooms_min">
                <input type="hidden" id="rooms_max" name="rooms_max">
                <input type="hidden" id="bathrooms_min" name="bathrooms_min">
                <input type="hidden" id="bathrooms_max" name="bathrooms_max">
                <input type="hidden" id="price_min" name="price_min">
                <input type="hidden" id="price_max" name="price_max">
                <input type="hidden" id="size_min" name="size_min">
                <input type="hidden" id="size_max" name="size_max">

                <div class="form-group">
                <label for="amount">{{trans('messages.rooms')}}</label>
                    <input type="text" id="amount-rooms" class="mb-2" readonly
                        style="border:0; color:#f6931f;font-weight:bold;width:100%;">
                    <div id="slider-range-rooms"></div>
                </div>

                <div class="form-group">
                    <label for="amount-bathrooms">{{trans('messages.bathrooms')}}</label>
                    <input type="text" id="amount-bathrooms" readonly class="mb-2 w-100"
                        style="border:0; color:#f6931f; font-weight:bold;">
                    <div id="slider-range-bathrooms"></div>
                </div>

                <div class="form-group">
                    <label for="amount-price">{{trans('messages.price')}}:</label>
                    <input type="text" id="amount-price" readonly class="mb-2 w-100"
                        style="border:0; color:#f6931f; font-weight:bold;">
                    <div id="slider-range-price"></div>
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
