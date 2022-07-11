<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="/style/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="/style/css/app.css">

        @livewireStyles
        <style type="text/css">
        	.hover-pointer:hover, .hover-pointer:focus{
        		cursor: pointer;
        	}
        </style>

    </head>
    <body class="font-sans antialiased theme-light">
    	<div class="main-page">
			<div class="header">
				<div class="header-side d-flex justify-content-start align-items-center">
					<h4 class="brand ms-2">
						Zeteo Health Limited
					</h4>
				</div>

				<x-navs.users-navbar />

			</div>

			<div class="main-content">

				<div class="sidebar">
					<x-navs.users-sidebar />
				</div>

				<div class="page-content">
					<x-navs.navs-card /> 

					{{ $slot }}

					<x-navs.users-copy />
				</div>

			</div>

		</div>

        @stack('modals')

        @livewireScripts

        @stack('scripts')
    </body>
    <!-- Scripts -->
        <script src="/style/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/style/js/jquery.min.js"></script>
        <script src="/style/js/app.js"></script>
</html>
