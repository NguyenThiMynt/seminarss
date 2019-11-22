<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('page_title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@include('admin.header')
@include('admin.sidebar-left')
    <div class="content-wrapper">
        <section class="content">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @yield('content')
        </section>
    </div>
    @include('admin.footer')
</div>
</body>
@stack('js')
</html>

