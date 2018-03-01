<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="icon" type="image/ico" href="/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">

</head>
<body>
<div id="biggest-container">
	@yield('content')
</div>

<script src="/js/jquery.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/js/vue.js"></script>
<script src="/js/app.js"></script>

</body>
</html>