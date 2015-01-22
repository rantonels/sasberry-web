<!DOCTYPE html>
<html lang="it">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sasberry Pi</title>

	
	
	
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!--
		<script type="text/javascript">
jQuery(document).ready(function ($) {
$('#tabs').tab();
});
</script> 
    
-->
	<link rel="icon" href="favicon.ico">



<body>
<div class="container">

	<div class="jumbotron">

		<h1 class="text-center">Sasberry Pi</h1> 
		<p class="lead text-center	">Questo server gira su un umile 
e onesto microcomputer ARM nella stanza 330 del collegio Morgagni. 
Risponde ai nomi di sasberry.ngrok.com e sasberrypi.local sulla rete 
di ateneo con avahi</p>

		<div class="text-center">
			<a class="btn btn-primary btn-lg btn-center" href="#" role="button"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Ah, ok</a>
		</div>

	</div>

	<div class="row marketing">
		<div class="col-lg-5">
	        
	        <div class="row">
	        
		        <div class="col-xs-5 col-lg-5">
					<img src="logo.png" class="img-responsive center-block">
		        </div>
		        
		        
		        <div class="col-xs-7 col-lg-7">
					<h3>/proc/meminfo</h3>
					<p>
						<?php
							$fh = fopen('/proc/meminfo','r');
							$mem = 0;
							$counter = 0;
							  while ($counter<5) {
								  
								$line = fgets($fh);
								
								echo "$line<br>";
								$counter += 1;
								
							  }
							  fclose($fh);
							
							  ?>
							  
					</p>
		        
		        </div>
		        
	        
	        </div>
	        
	        <div class="row">
	        
				<blockquote>
					<p>È come un telefono, ma più scrauso.</p>
					<footer>Anonimo</footer>
				</blockquote>
	        
	        </div>
	        
		
		</div>


		<div class="col-lg-7" role="navigation">
			 <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
				<li class="active"><a href="#pinoir" data-toggle="tab">PiNoIR</a></li>
				<li><a href="#sasha" data-toggle="tab">Sasha</a></li>
			</ul>
			
			
<div id="my-tab-content" class="tab-content">

	<div class="tab-pane active" id="pinoir">
		<h2>PiNoIR</h2>
		<p>webcam interna per chi non può fare a meno della mia scrivania 24h</p>
		<div class="row">
					<img class="img-responsive center-block" src="webcam.jpg">
	</div>

	</div>
		<div class="tab-pane" id="sasha">
		<h2>sasha-assout.jpg</h2>
		<div class="row">
			<img class="img-responsive center-block" src="sasha-assout-jpg">
		</div>
	</div>
</div> 
		
			
        
        </div>
    </div>

	<!-- <div class="row">

		<p>(basta webcam perché non si vede niente da una stanza ESU del terzo piano!)</p>


		<div class="span4">
		<p class="lead">Il collegio in tempo reale! Si aggiorna circa ogni 6 secondi (aggiornare la pagina). Questa è una PiNoIR con un filtro passa-IR, quindi le immagini sono nell'infrarosso vicino a circa 800 nm.</p>
		</div>

		<div class="span8">
		<img class="img-responsive" src="webcam.jpg">
		</div>

		

	</div> !-->

</div>



<script type="text/javascript" src="js/bootstrap-tab.js"></script>

<script type="text/javascript" src="js/bootstrap.js"></script>

</body></html>

