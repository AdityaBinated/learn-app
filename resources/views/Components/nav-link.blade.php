{{-- $attributes is object associated with <a> for customised navbar--}}
{{-- <a {{$attributes}}> {{$slot}} </a>   $slot used in this is for navbar --}}

@props(['active'=> false])

<a  class=" {{ $active ? ' bg-red-700 text-white ':'text-red-300 hover:bg-red-800 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium" 
    aria-current="$active  ? 'page':'false' }}" 
    {{$attributes}}>
    {{$slot}}
</a>