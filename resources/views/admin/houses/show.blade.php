{{ $house->name }}
<a href="{{ route('houses.edit', $house->id) }}">{{ trans('messages.edit_house') }}</a>
