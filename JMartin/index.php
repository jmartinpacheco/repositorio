<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	   <link rel="stylesheet" type="text/css" href="css/micss.css">
	<title>PaginaWeb</title>
	<!--Pacheco Perez Juan Martin-->
	</head>

	<style>
   		footer{
   			background-image: url("img/spider.jpg");
   			background-size: 100% 500px;
   			width: 100%;
            height:380px;
   		}
	</style>

	<body style="background-color:#343434">

		<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color:#343434">
  			<div class="container-fluid">
			<div class="navbar-header">

				<button type="button" class="navbar-toggle collapsed" datatoggle="collapse" data-targer="#bs-example-navbar-collapse-1">

					<span class="icon-bar"><a href="temas.html"></a></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="temas.html" class="navbar-brand"><img src="img/5.png" height="16" width="16" > TemasInteresantes</a>

			</div>

			<div class="navbar-text navbar-right">
				<ul class="nav navbar-nav">
					<li><a href="inicio.php">Iniciar Sesion</a></li>
				</ul>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="acercade.html">Acerca de</a></li>
					<li><a href="temas.html">Temas</a></li>
				</ul>
			</div>

		</div>
		</nav>

		<header>		
		</header>

		<section>
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  				<!-- Indicators -->
  					<ol class="carousel-indicators">
    					<li data-target="#carousel-example-generic" data-slide-to="0" class="active" ></li>
    					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
    					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
  					</ol>

  					<!-- Wrapper for slides -->
  					<div class="carousel-inner">
    					<div class="item active">
      						<img src="img/1.jpg" alt="...">
      						<div class="carousel-caption">
        						...
      						</div>
    					</div>
    					<div class="item">
      						<img src="img/2.jpg" alt="...">
      						<div class="carousel-caption">
        						...
      						</div>
    					</div>
    					<div class="item">
      						<img src="img/3.jpg" alt="...">
      						<div class="carousel-caption">
        						...
      						</div>
    					</div>
    						...
  					</div>

  					<!-- Controls -->
  					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    					<span class="glyphicon glyphicon-chevron-left"></span>
  					</a>
  					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    					<span class="glyphicon glyphicon-chevron-right"></span>
  					</a>
					</div>

			<script src="js/jquery.js"></script>
			<script src="js/bootstrap.js"></script>


		<div class="row">
        	<div class="col-md-4">       		
        	</div>
        	<div class="col-md-4">
          		<h2 class="text-white">Heading</h2>
          		<p class="text-white">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          		<button type="button" class="btn btn-primary">View details >></button>
        	</div>
        	<div class="col-md-4">
        	</div>
      	</div>
			<br>
			<br>

		</section>

		<footer>
			<div class="parte-inferior">
				<h3>Sigueme</h3>
				<div>
					<a href="http://fb.com"><img src="img/facebook.png"/></a>
					<a href="http://www.gmail.com"><img src="img/google.png"/></a>
					<a href="https://twitter.com/jmartinpacheco"><img src="img/twitter.png"/></a>
				</div>
			</div>

			<div class="parte-inferior">
				<h3>Inscribete para mas notificaciones</h3>
				<form>
					<label>Email: </label>
					<input type="email" name="miemail" id="miemail" placeholder="Escribir aqui">
					<input type="submit" value="enviar">
				</form>
			</div>

			<div class="parte-inferior">
				<h3>Powered by:</h3>
				<ul>
					<li>
						<br>
						<iframe src="http://proteco.fi-b.unam.mx" width=400 height=200></iframe>
					</li>
				</ul>
			</div>

		</footer>
	</body>
</html>