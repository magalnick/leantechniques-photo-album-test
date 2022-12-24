@php
    $site_name = 'Lean TECHniques Photo Album';
    $page_js = isset($js) ? "js.{$js}" : null;
@endphp
@include('site.header')
@include($page)
@include('site.footer')
