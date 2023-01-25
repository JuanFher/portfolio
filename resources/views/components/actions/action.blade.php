@props(['Edit' => null])
<a href="#" {{ $attributes->merge(['class' => 'font-medium'])}} title="{{__('Edit')}}">
    {{ $slot }}
</a>