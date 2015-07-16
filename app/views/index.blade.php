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
		<!--[if !IE]><!-->
		<script src="{{url()}}/js/queryloader2.min.js"></script>
		<script type="text/javascript">
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
						setTimeout(function(){ $('#inicio').fadeToggle('slow', 'swing'); }, 1750);
					}
				});
			});
		</script>
		<!--<![endif]-->
		<script src="{{url()}}/js/jquery.min.js"></script>
		<!--[if !IE]><!-->
		<script src="{{url()}}/js/main.js?v=1"></script>
		<!--<![endif]-->
		<!--[if IE]>
		<script src="{{url()}}/js/main-ie.js"></script>
		<script>
			$(window).load(function() {
				setTimeout(function(){ $('#inicio').fadeToggle('slow', 'swing'); }, 1750);
			});
		</script>
		<![endif]-->
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
		<div id="inicio" class="jumbotron" style="display:none">
			<div class="container">
				<img src="{{url()}}/img/corazon-peruano-home.png" alt="#corazónperuano" class="img-responsive center-block">
				<label class="center-block text-center">
					Ingresa tu Doc. de Identidad para acceder:
					<br>
					<input type="text" name="dni" id="dni" maxlength="10">
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
		<div id="subirVideo" class="jumbotron" style="display:none">
			<div class="container">
				<div class="marco hidden-xs center-block">
					<img src="{{url()}}/img/corazon-peruano-subir.png" alt="#corazónperuano" class="img-responsive center-block">
					<h2 class="text-center">
						¡Participa por tres iPhone 6!
					</h2>
					<p>
						<strong>
							Para concursar, solo tienes que demostrar tu corazón peruano<br>
							y grabarte haciendo eso que te identifique con orgullo como peruano.
						</strong>
					</p>
					<p>
						Puedes aparecer solo o en grupo, comiendo un ceviche o un pan con<br>
						chicharrón, tomándote un pisco sour o un emoliente, tocando cajón<br>
						o bailando festejo. Aquí tienes una referencia, pero...<br>
						<strong>
							¡¡tienes total libertad para demostrar tu peruanidad!!
						</strong>
					</p>
					<div class="botones center-block">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/d_FqF3u22Lc?rel=0&amp;controls=1&amp;showinfo=0"></iframe>
						</div>
						<div class="paso-1">
							<div class="tyc">
								Acepto los <a href="http://corazonperuano.pe/docs/Bases%20-%20Corazo%CC%81n%20Orgullo%20Peruano.pdf" target="_blank">Términos y Condiciones</a><br>
								y el <a href="http://corazonperuano.pe/docs/Aceptacio%CC%81n%20del%20Uso%20de%20Derechos%20de%20imagen.pdf" target="_blank">Acuerdo de Privacidad</a>
							</div>
							<a href="#" class="elegirArchivo pull-right">
								<img src="{{url()}}/img/boton-subir-video.png" alt="" class="img-responsive">
							</a>
							<div class="clearfix"></div>
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
							<span class="archivo text-right" style="display:none"></span>
							<a href="#" id="confirmar" class="pull-right" style="display:none">
								<img src="{{url()}}/img/boton-confirmar.png" alt="" class="img-responsive">
							</a>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div id="mensaje" class="jumbotron" style="display:none">
			<div class="container">
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
		<div id="mensajeGracias" class="jumbotron" style="display:none">
			<div class="container">
				<div class="marco center-block">
					<img src="{{url()}}/img/corazon-peruano-subir.png" alt="#corazónperuano" class="img-responsive center-block">
					<h3 class="text-center">
						¡Muchas gracias por habernos ayudado!
					</h3>
					<p class="text-center">
						Muy pronto, demostraremos a todo el Perú que nuestro corazón
						es bien peruano. No dejes de seguir nuestra página de Facebook
						y <strong>comparte el video final cuando lo lancemos</strong>.
						<br><br>
						Los ganadores de los premios, los comunicaremos vía e-mail.<br>
						<strong>¡Suerte!</strong>
					</p>
				</div>
			</div>
		</div>
		<div style="display:none">
			
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