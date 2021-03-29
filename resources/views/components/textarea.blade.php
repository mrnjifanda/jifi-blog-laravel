@props(['disabled' => false])

<textarea cols="30" rows="10" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}>{{ $attributes['value'] }}</textarea>