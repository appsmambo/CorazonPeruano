<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=9">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Entel Perú, Corazón Peruano</title>
		<link href="{{url()}}/css/bootstrap.min.css" rel="stylesheet">
		<link href="{{url()}}/css/main.css?v=1" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script type="text/javascript">
			var urlBase = '{{url()}}';
		</script>
		<script src="{{url()}}/js/jquery.min.js"></script>
		<script src="{{url()}}/js/main.js?v=1"></script>
		<script>
			(function (i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] || function () {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o),
						m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
			ga('create', 'UA-65121437-1', 'auto');
			ga('require', 'displayfeatures');
			ga('send', 'pageview');
		</script>
	</head>
	<body>
		<header>
			<section class="container">
				<div class="row">
					<div class="col-xs-5 col-sm-6">
						<img src="{{url()}}/img/entel-header.png" alt="" class="pull-left img-responsive">
					</div>
					<div class="col-xs-7 col-sm-6">
						<p class="text-right compartir">
							<img src="{{url()}}/img/compartir-siguenos.png" alt="" class="hidden-xs">
							&nbsp;&nbsp;
							<a id="rs_facebook" href="https://www.facebook.com/EntelPeru" target="_blank">
								<img src="{{url()}}/img/compartir-facebook.png" alt="">
							</a>
							<span class="hidden-xs">&nbsp;&nbsp;</span>
							<a id="rs_twitter" href="https://twitter.com/EntelPeru" target="_blank">
								<img src="{{url()}}/img/compartir-twitter.png" alt="">
							</a>
						</p>
					</div>
				</div>
			</section>
		</header>
		<div id="acceso" class="jumbotron">
			<div class="container">
				<div class="marco2">
					<form class="acceso" method="post" action="{{url()}}/listaDeVideos">
						@if (isset($mensaje))
						<div class="alert alert-danger" role="alert">{{$mensaje}}</div>
						@endif;
						<div class="form-group">
							<label for="clave">Coloca tu contraseña para ingresar:</label>
							<input type="password" class="form-control" id="clave" name="clave" placeholder="Clave">
						</div>
						<button type="submit" class="btn btn-default">Acceder</button>
					</form>
				</div>
			</div>
		</div>
		<footer>
			<section class="container">
				<p class="text-center">
					<img class="logo" src="{{url()}}/img/entel-footer.jpg" alt="">
					<br>
					Copyright Entel Perú S.A., Todos los derechos reservados.
				</p>
			</section>
		</footer>
	</body>
</html>