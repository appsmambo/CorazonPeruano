<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Entel Perú, Corazón Peruano</title>
		<link href="{{url()}}/css/bootstrap.min.css" rel="stylesheet">
		<link href="{{url()}}/css/jquery.fullPage.css" rel="stylesheet">
		<link href="{{url()}}/css/main.css?v=1" rel="stylesheet">
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
		<script src="{{url()}}/js/mobile.js?v=1"></script>
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
				<div class="slide active">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<img src="{{url()}}/img/corazon-peruano-home.png" alt="#corazónperuano" class="img-responsive center-block">
							<label class="center-block text-center">
								Ingresa tu Doc. de Identidad para acceder:
								<br>
								<input type="tel" name="dni" id="dni" maxlength="10"><input type="button" style="height:1px;width:1px;opacity:0">
								<br>
								<span id="mensajeError" class="label label-danger" style="display:none"></span>
							</label>
							<p class="text-center">
								<a href="#" class="entrar">
									<img src="{{url()}}/img/boton-entrar.png" class="">
								</a>
							</p>
						</div>
					</div>
				</div>
				<div class="slide active">
					<div class="row">
						<div class="col-xs-12">
							<div class="marco center-block">
								<img src="{{url()}}/img/corazon-peruano-subir.png" alt="#corazónperuano" class="img-responsive center-block" style="width:120px">
								<h2 class="text-center">
									¡Participa por tres iPhone 6!
								</h2>
								<p class="text-center">
									<strong>
										Para concursar, solo tienes que demostrar tu corazón peruano y grabarte haciendo eso que te identifique con orgullo como peruano.
									</strong>
									<br>
									Aquí tienes una referencia, pero...<br>
									<strong>
										¡¡tienes total libertad para demostrar tu peruanidad!!
									</strong>
								</p>
								<div class="botones center-block">
									<div class="row">
										<div class="col-xs-8 col-xs-offset-2">
											<div class="embed-responsive embed-responsive-16by9">
												<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/d_FqF3u22Lc?rel=0&amp;controls=1&amp;showinfo=0"></iframe>
											</div>
										</div>
									</div>
									<div class="paso-1">
										<div class="tyc">
											Acepto los <a href="http://corazonperuano.pe/docs/Bases%20-%20Corazo%CC%81n%20Orgullo%20Peruano.pdf" target="_blank">Términos y Condiciones</a><br>
											y el <a href="http://corazonperuano.pe/docs/Aceptacio%CC%81n%20del%20Uso%20de%20Derechos%20de%20imagen.pdf" target="_blank">Acuerdo de Privacidad</a>
										</div>
										<a href="#" class="elegirArchivo pull-right">
											<img src="{{url()}}/img/boton-subir-video.png" alt="" class="img-responsive" style="width:135px">
										</a>
									</div>
									<div class="paso-2" style="display:none">
										<form id="enviarDatos" action="{{url()}}/enviarDatos" method="post" enctype="multipart/form-data">
											<div class="form-group">
												<input type="file" id="archivo" name="archivo" accept="video/*" size="25">
				  							</div>
											<input type="hidden" name="dni" id="tuDni">
											<input type="hidden" name="ie" id="ie" value="0">
										</form>
										<div class="progreso pull-left" style="display:none">
											
										</div>
										<span class="archivo text-right"></span>
										<a href="#" id="confirmar" class="pull-right">
											<img src="{{url()}}/img/boton-confirmar.png" alt="" class="img-responsive" style="width:135px">
										</a>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="slide active">
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