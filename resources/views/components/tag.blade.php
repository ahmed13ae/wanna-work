@props(['tag','size'=>'base'])
@php
    $classes="bg-white/10  rounded-xl  hover:bg-white/25";
    if ($size==='base') {
         $classes.=" py-1 px-5 text-sm";
    }
    if ($size==='small') {
        $classes.=" py-1 px-2 text-xs";
    }
@endphp
<a href="/tags/{{strtolower($tag->name)}}" class="{{$classes}}">{{$tag->name}}</a>
