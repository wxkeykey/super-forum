<!DOCTYPE html>
<html lang="zh-CN" data-theme="{{session()->get('theme','antialiased')}}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title","标题") - {{ get_options("title",config('app_name', 'CodeFec')) }}</title>
    <link rel="icon" href="/logo.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="/logo.svg" type="image/x-icon" />
    <link href="{{ '/tabler/css/tabler.min.css' }}" rel="stylesheet" />
    <link href="{{ '/tabler/css/tabler-flags.min.css' }}" rel="stylesheet" />
    <link href="{{ '/tabler/css/tabler-payments.min.css' }}" rel="stylesheet" />
    <link href="{{ '/tabler/css/tabler-vendors.min.css' }}" rel="stylesheet" />
    <script>var csrf_token="{{csrf_token()}}";</script>
    <meta name="description" content="{{ get_options("description") }}">
    <meta name="keywords" content="{{ get_options("keywords") }}">
    <!-- 自定义CSS -->
    @foreach(\App\CodeFec\Ui\functions::get("css") as $key => $value)
        <link rel="stylesheet" href="{{ $value }}">
    @endforeach
    @yield('css')
</head>

<body class="antialiased">
<div id="app" class="wrapper {{ path_class() }}-page">
    @yield('content')
</div>

<script src="{{ mix('js/vue.js') }}"></script>
@if(get_options("theme_common_require_mithril","yes")!="no")
    <script src="{{ mix('plugins/Core/js/mithril.js') }}"></script>
@endif
<script src="{{ '/tabler/libs/apexcharts/dist/apexcharts.min.js' }}"></script>
<!-- Tabler Core -->
<script src="{{ '/tabler/js/tabler.min.js' }}"></script>
<script src="{{ mix('plugins/Core/js/app.js') }}"></script>
{{-- <!-- 自定义Js --> --}}
@foreach(\App\CodeFec\Ui\functions::get("js") as $key => $value)
    <script src="{{ $value }}"></script>
@endforeach
@yield('scripts')
</body>

</html>
