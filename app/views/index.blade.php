<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Corazón Peruano</title>
		<link href="{{url()}}/css/bootstrap.min.css" rel="stylesheet">
		<link href="{{url()}}/css/main.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
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
					fadeOutTime:1000
				});
			});
		</script>
		<script src="{{url()}}/js/jquery.min.js"></script>
		<script src="{{url()}}/js/bootstrap.min.js"></script>
		<script src="{{url()}}/js/jquery.form.min.js"></script>
		<script src="{{url()}}/js/main.js"></script>
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
							<a href="https://www.facebook.com/EntelPeru" target="_blank">
								<img src="{{url()}}/img/compartir-facebook.png" alt="">
							</a>
							<span class="hidden-xs">&nbsp;&nbsp;</span>
							<a href="https://twitter.com/EntelPeru" target="_blank">
								<img src="{{url()}}/img/compartir-twitter.png" alt="">
							</a>
						</p>
					</div>
				</div>
			</section>
		</header>
		<div id="inicio" class="jumbotron">
			<div class="container">
				<img src="{{url()}}/img/corazon-peruano-home.png" alt="#corazónperuano" class="img-responsive center-block">
				<label class="center-block text-center">
					Ingresa tu DNI para acceder:
					<br>
					<input type="text" name="dni" id="dni" maxlength="8">
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
				<div class="marco center-block">
					<img src="{{url()}}/img/corazon-peruano-subir.png" alt="#corazónperuano" class="img-responsive center-block">
					<p class="text-center">
						<strong>Demuestra tu corazón peruano y participa por tres iPhone 6.</strong><br>
						Para concursar, solo tienes que grabarte haciendo eso que te identifique<br>
						con orgullo como peruano. <strong>Si lo haces con tu uniforme Entel, mejor ;)</strong>
						<br><br>
						Puedes grabarte solo o en grupo, comiendo ceviche o bailando festejo.<br>
						<strong>¡¡Tienes total libertad para demostrar tu peruanidad!!</strong>
						<br><br>
						Ten en cuenta que el ritmo del video final será<br>
						como en la siguiente referencia:
					</p>
					<div class="botones center-block">
						<img src="{{url()}}/img/video-player.jpg" alt="" class="center-block img-responsive">
						<div class="paso-1">
							<a href="#" class="tyc">
								&nbsp;
							</a>
							<a href="#" id="elegirArchivo" class="pull-right">
								<img src="{{url()}}/img/boton-subir-video.png" alt="" class="img-responsive">
							</a>
							<div class="clearfix"></div>
						</div>
						<div class="paso-2" style="display:none">
							<div class="progreso pull-left" id="progress-div">
								<div id="progress-bar">
									<div id="progress-status">
									</div>
								</div>
							</div>
							<span class="archivo text-right"></span>
							<a href="#" id="confirmar" class="pull-right">
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
		<div style="display:none">
			<form id="enviarDatos" action="{{url()}}/enviarDatos" method="post" enctype="multipart/form-data">
				<input type="file" id="archivo" name="archivo" accept="video/*">
				<input type="hidden" name="dni" id="tuDni">
			</form>
		</div>
		<footer>
			<section class="container">
				<p class="text-center">
					<img src="{{url()}}/img/entel-footer.jpg" alt="">
					<br>
					Copyright Entel Perú S.A., Todos los derechos reservados.
				</p>
			</section>
		</footer>
	</body>
</html>