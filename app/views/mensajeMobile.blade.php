<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Entel Perú, Corazón Peruano</title>
		<link href="{{url()}}/css/bootstrap.min.css" rel="stylesheet">
		<link href="{{url()}}/css/jquery.fullPage.css" rel="stylesheet">
		<link href="{{url()}}/css/main.css" rel="stylesheet">
		<script src="{{url()}}/js/queryloader2.min.js"></script>
		<script type="text/javascript">
			var urlBase = '{{url()}}';
			window.addEventListener('DOMContentLoaded', function () {
				new QueryLoader2(document.querySelector("body"), {
					barColor:"#fff",
					backgroundColor:"#03539f",
					percentage:false,
					barHeight:1,
					minimumTime:200,
					maxTime:25000,
					fadeOutTime:1000,
					onComplete: function() {
						
					}
				});
			});
		</script>
		<script src="{{url()}}/js/jquery.min.js"></script>
		<script src="{{url()}}/js/jquery.fullPage.min.js"></script>
		<script src="{{url()}}/js/mobile.js"></script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-65121437-1', 'auto');
			ga('require', 'displayfeatures');
			ga('send', 'pageview');
		</script>
	</head>
	<body>
		<header id="header">
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
		<div id="fullpage">
			<div class="section active">
				<div class="row">
					<div class="col-xs-12">
						<div class="marco center-block">
							<img src="{{url()}}/img/corazon-peruano-subir.png" alt="#corazónperuano" class="img-responsive center-block">
							<p class="titulo text-center">
								Tu video se ha cargado correctamente
							</p>
							<p class="text-center">
								<strong class="big">¡Muchas gracias por ayudarnos!</strong>
								<br><br>
								Muy pronto, demostraremos a todo el Perú que nuestro corazón<br>
								es bien peruano. No dejes de seguir nuestra página de Facebook<br>
								y <strong>comparte el video final cuando lo lancemos</strong>.
								<br><br>
								Los ganadores de los premios, los comunicaremos vía e-mail.<br>
								<strong>¡Suerte!</strong>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer id="footer">
			<section class="container">
				<p class="text-center">
					<img class="logo" src="{{url()}}/img/entel-footer.jpg" alt="">
					<br>
					Copyright Entel Perú S.A., Todos los derechos reservados.
				</p>
			</section>
		</footer>
		<script>
			$(document).ready(function () {
				$('#fullpage').fullpage({
					slidesNavigation:false,
					keyboardScrolling:false,
					recordHistory:false,
					controlArrows:false,
					touchSensitivity:1500,
				});
			});
		</script>
	</body>
</html>