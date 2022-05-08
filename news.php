<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="design/default.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;1,300&family=Roboto:wght@100&display=swap" rel="stylesheet">
	<!--bootstrap CSS-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- propriétés de la pages -->

	<head>
		<style>
			.carousel-inner>.item>img {
				width: 300px;
				height: 200px;
			}
		</style>
	</head>
	<title>Les New's de la </title>
</head>

<!-- corps de la page -->

<body>

	<!-- entetes -->
	<?php
	// header
	require_once 'front/header.php';
	// navigation connection
	require_once 'front/nav-top.php';
	// navigation menu 
	require_once 'front/nav.php';
	?>
	<section>
		<h3>LES NEWS DE LA WOLFBLUE ESPORT !</h3>

		<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

			<div class="carousel-indicators">
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">1</button>
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2">2</button>
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3">3</button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class picture src="picture/maillot_wolfblue_face.png" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Les maillots sont là !!!</h5>
						<span class="date-project">07 DÉCEMBRE 2021</span>
						<!-- <p>On l'attendait depuis un moment maintenant, le design des maillots vient tout juste d'arriver ! </p> -->
					</div>
				</div>
				<div class="carousel-item">
					<img class picture src="picture/wolfblue.gif" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Nouveau Partenaire !</h5>
						<span class="date-project">04 janvier 2022</span>
						<!-- <p>Retrouvez le nouvel équipementier officiel de l'association WOlfblue Esport : TeamPulse !! </p> -->
					</div>
				</div>
				<div class="carousel-item">
					<img class picture src="picture/geekfest.png" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Le titre du projet</h5>
						<span class="date-project">19/03/2022</span>
						<!-- <p>Pour l'édition 2021, la Fédération Française de Jeux-Vidéo a tenu un stand à la Angers GeekFest. 10 Pc était mis à disposition afin de faire une animation sur des petits jeu indépendants, les jeux du moments et bien sur les fameux jeux en équipe de style Rocket league, Valorant, ou encore Rugby 20.</p> -->

					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>





	</section>
	<?php
	// Contact
	require_once 'front/contact.php';
	// Footer
	require_once 'front/footer.php';
	?>





</body>

</html>