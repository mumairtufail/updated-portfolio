<head>

	<!--
		Basic
	-->
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ config('app.name', 'Ryan - vCard / Resume / CV Template') }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="vCard & Resume Template" />
	<meta name="keywords" content="vcard, resposnive, resume, personal, card, cv, cards, portfolio" />
	<meta name="author" content="bslthemes" />

	<!--
		Load Fonts
	-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!--
		Load CSS
	-->
	<link rel="stylesheet" href="{{ asset('css/basic.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/layout.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/blogs.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/ionicons.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />

	<!--
		Background Gradient
	-->
	<link rel="stylesheet" href="{{ asset('css/gradient.css') }}" />

	<!--
		Template New-Skin
	-->
	<link rel="stylesheet" href="{{ asset('css/new-skin/new-skin.css') }}" />

	<!--
		Template RTL
	-->
	<!--<link rel="stylesheet" href="{{ asset('css/rtl-new.css') }}" />-->

	<!--
		Template Colors
	-->
	<link rel="stylesheet" href="{{ asset('css/demos/demo-2-colors.css') }}" />
	<!--<link rel="stylesheet" href="{{ asset('css/template-colors/blue.css') }}" />-->
	<!--<link rel="stylesheet" href="{{ asset('css/template-colors/orange.css') }}" />-->
	<!--<link rel="stylesheet" href="{{ asset('css/template-colors/pink.css') }}" />-->
	<!--<link rel="stylesheet" href="{{ asset('css/template-colors/purple.css') }}" />-->
	<!--<link rel="stylesheet" href="{{ asset('css/template-colors/red.css') }}" />-->

	<!--
		Template Dark
	-->
	<link rel="stylesheet" href="{{ asset('css/new-skin/classic-skin.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/template-dark/dark.css') }}" />


	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!--
		Favicons
	-->
	<link rel="shortcut icon" href="{{ asset('images/favicons/favicon.ico') }}">

	@stack('head')

</head>
