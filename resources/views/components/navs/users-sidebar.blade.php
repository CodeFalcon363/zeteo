@if (Auth::user()->role == 1)
    <x-navs.admin-menu />
@elseif (Auth::user()->role == 2)
    <x-navs.docs-menu />
@elseif (Auth::user()->role == 3)
    <x-navs.clients-menu />
@else
    <x-navs.null-menu />
@endif