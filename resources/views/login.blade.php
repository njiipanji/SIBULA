<!DOCTYPE html>
<html>
<head>
	<title>SIBULA | Halaman Masuk</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="icon" type="assimage/png" href="/favicon.png">
	<link rel="stylesheet" type="text/css" href="/materialize/css/materialize.min.css">
</head>
<body style="background: #eee">
	<div class="container">
		<div class="row" style="margin-top: 20px">
			<div class="col s12 m6 l6 offset-m3 offset-l3">
				<div class="card large">
					<div class="card-image">
						<img src="/images/login/card-1.png">
						<span class="card-title"><strong>Menu Login</strong></span>
					</div>
					<form action="#">
						<div class="card-content teal-text">
							<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
								<i class="material-icons prefix">email</i>
								<input id="emailLogin" type="email" class="validate">
								<label for="emailLogin">Email</label>
							</div>
							<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
								<i class="material-icons prefix">vpn_key</i>
								<input id="passwordLogin" type="password" class="validate">
								<label for="passwordLogin">Password</label>
							</div>
						</div>
						<div class="card-action center" style="position: relative">
							<button class="btn waves-effect waves-light" type="submit" name="action">Masuk
								<i class="material-icons right">send</i>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="fixed-action-btn" style="bottom: 35px; right: 24px">
			<a class="btn-floating tooltipped btn-small blue" data-position="left" data-delay="50" data-tooltip="Belum punya akun? Hubungi Ibu Eni Purwati">
				<i class="material-icons">live_help</i>
			</a>
		</div>
	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/materialize/js/materialize.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.tooltipped').tooltip();
		});
	</script>
</body>
</html>