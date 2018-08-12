<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- Styles -->
	<link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/select2-bootstrap4.min.css') }}">

	@yield('css')

</head>

<body class="app">

    <div>
        <!-- #Left Sidebar ==================== -->
        @include('admin.partials.sidebar')

        <!-- #Main ============================ -->
        <div class="page-container">
            <!-- ### $Topbar ### -->
            @include('admin.partials.topbar')

            <!-- ### $App Screen Content ### -->
            <main class='main-content bgc-grey-100'>
                <div id='mainContent'>
                    <div class="container-fluid">

                        <h2 class="c-grey-900 mT-10 mB-30 font-weight-light">@yield('page-header')</h2>

						@include('admin.partials.messages')
						@yield('content')

                    </div>
                </div>
            </main>

            <!-- ### $App Screen Footer ### -->
            <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
                <span>Made with <i class="fa fa-heart c-red-500"></i> and <i class="fa fa-code c-blue-500"></i> in East Java</span>
            </footer>
        </div>
    </div>

    <script src="{{ mix('/js/app.js') }}"></script>

    @yield('js')

</body>

</html>
