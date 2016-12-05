<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="icon" type="assimage/png" href="/favicon.png">
	<link rel="stylesheet" type="text/css" href="/materialize/css/materialize.min.css">
	<style>
		body {
			display: flex;
			min-height: 100vh;
			flex-direction: column;
		}

		main {
			flex: 1 0 auto;
		}
		a {
			color: #212121;
		}
		a:hover {
			color: #eee;
		}
	</style>
</head>
<body style="background: #eee">
	<header>
		<nav>
			<div class="nav-wrapper cyan darken-2">
				<a href="/admin/" class="brand-logo" style="padding: 0px 15px">SIBULA</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="/admin/">Beranda</a></li>
					<li><a href="/admin/daftar_pengelola">Daftar Pengelola</a></li>
					<li><a href="/">Keluar</a></li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="/admin/">Beranda</a></li>
					<li><a href="/admin/daftar_pengelola">Daftar Pengelola</a></li>
					<li><a href="/">Keluar</a></li>
				</ul>
			</div>
		</nav>
	</header>

	<div class="container center">
		<div class="row" style="margin-top: 50px">
			<div class="col s10 m10 l10 offset-s1 offset-m1 offset-l1">
				@yield('title-page')
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row" style="margin-top: 10px">
			@yield('content')
		</div>
	</div>

	<footer class="page-footer" style="padding-top: 0px">
		<div class="footer-copyright cyan darken-3">
			<div class="container grey-text text-lighten-4">
				&copy; 2016 <a href="/admin/">SIBULA</a> B-04
				<div class="right">Teknik Informatika ITS</div>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/materialize/js/materialize.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".button-collapse").sideNav();
			@yield('addscript')
		});
	</script>
</body>
</html>