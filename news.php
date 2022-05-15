<!DOCTYPE html>
<html lang="en">
<?php
require_once 'front/head.php'
?>

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

		<div id="myCarousel" class="carousel slide carousel-dark" data-bs-ride="carousel">

			<div class="carousel-indicators">
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
				<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
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