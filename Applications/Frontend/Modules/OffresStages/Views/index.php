<!DOCTYPE html>
<html >
 	<head>
	    <meta charset="UTF-8">
	    <link rel="stylesheet" href="css/indexOffresStagesFrontend.css">
      <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	    <style>
	    	* {
				-webkit-box-sizing: border-box;
			  	-moz-box-sizing: border-box;
				box-sizing: border-box;
			}

			html, body{
				background-color:#F2F2F2;
				margin:0;
				padding:0;
				height:100%;
				width:100%;
				text-align:center;
				color:#404040;
				position:relative;
			}

			.wrapper{
				width:1000px;
				margin:30px auto 0;
				background-color:#FFFFFF;
				-webkit-box-sizing: border-box;
			  	-moz-box-sizing: border-box;
				box-sizing: border-box;
				box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
			}
			@media (max-width: 600px) {
    			.wrapper {
        			width: 400px;
    			}
    			.box{
    				position : absolute;
    				margin-left: 90px;
    			}
			}

			header{
				text-align:center;
				font-family: 'Open Sans', sans-serif;
				padding:30px;
				background-color:#33b5e5;
				color: #fff;
			}

			.container{
				padding:10px 0 10px 10px;
			}

			.container a{
				float:left;
				width:980px;
				height: 120px;
				margin-bottom: 20px;
				clear:left;
			  	list-style:none;
			  	background-color:#f2f2f2;
			  	border-left:5px solid #003842;
			  	cursor:pointer;
			  	color:#333;
			  	position:relative;
			  	z-index:2;
			  	text-decoration: none;
			}
			.container a:hover {
			  background-color:#f9f9f9;
			  border-color:#00BDE8;
			}

			.wrapper .container{
				padding-right:10px;
			}
			.navbar {
			    margin-bottom: 0;
			    font-family: Montserrat, sans-serif !important;
			    background-color: #2c3e50;
			    border: 0;
			    font-size: 12px !important;
			    letter-spacing: 3px;
			    opacity:0.9;
			}

			.navbar-brand {
			    font-size: 17px !important;
			}

			.navbar li a, .navbar .navbar-brand {
			    color: #fff !important;
			}

			.navbar-nav li a:hover {
			    color: #fff !important;
			    background-color: #3498db !important;
			}

			.navbar-nav li.active a {
			    color: #fff !important;
			    background-color:#3498db !important;
			}

			.navbar-default .navbar-toggle {
			    border-color: transparent;
			}

			/* Dropdown */
			.open .dropdown-toggle {
			    color: #fff ;
			    background-color: #3498db !important;
			}

			/* Dropdown links */
			.dropdown-menu li a {
			    color: #3498db !important;
			}

			/* On hover, the dropdown links will turn blue */
			.dropdown-menu li a:hover {
			    background-color: #3498db !important;
			}

			.content-wrap {
			    padding: 50px 120px;
			    font-family: 'Open Sans', sans-serif;
			}

			.alert {
			    margin-top: 50px;
			    text-align: center;
			}
			form {
			    margin-bottom: 100px;
			}
			form button {
			    border: 0 !important;
			    padding: 10px 15px;
			    background: #33b5e5 !important;
			    width: 100%;
			}
			footer {
			    background-color: #2c3e50;
			    color: #fff;
			    padding: 32px;
			    width: 100%;
			}
			footer .glyphicon{
			    color: #fff;
			}
	    </style>
	</head>

	<body>
	<?php
		if (!empty($listeOffres)){ ?>
			<div class="wrapper">
			<header id="top">
				<h2>Liste des offres de stages d'été</h2>
			</header>
			<div class="container">
				<?php
				foreach ($listeOffres as $offre) {
				?>
					<a href="offre-<?php echo $offre['id']; ?>.html">
						<div class="box">
							<h3><?php echo strtoupper($offre['titre']); ?></h3>

							<p><small>Ajoutée le <?php echo $offre['dateAjout']; ?></small></p>

							<?php if ($offre['dateAjout'] != $offre['dateModif']) { ?>
							<p><small>Modifiée le <?php echo $offre['dateModif']; ?></small></p>
				<?php } ?>
					</div>
					</a>
				<?php } ?>
			</div></div>
	<?php
		}
		else{
			echo "<h3 id='top'> Pas d'offres diponibles pour le moment !</h3>";}
	?>
	</body>
