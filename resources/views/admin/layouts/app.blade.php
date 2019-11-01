<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('admin.partials.head')
    
</head>
<body class="hold-transition sidebar-mini layout-fixed">

    @include('admin.partials.header')

    @include('admin.partials.sidebar')

    <div class="wrapper">

    	<div class="content-wrapper">

       		@yield('main-content')

		</div>

        @include('admin.partials.footer')

    </div>

    @include('admin.partials.scripts')

</body>
</html>