<?php
require_once 'front/head.php'
?>


<body>
    <?php
	// header
	require_once 'front/header.php';
	// navigation menu 
	require_once 'front/nav.php';
	?>
    <div class="container">
        <div class="card mb-2-g3" style="max-width: 540px;" d-flex justify-content-center>
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="picture/teampulse_logo.png" class="img-fluid rounded-start" alt="TeamPulse">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">TeamPulseShop</h5>
                        <p class="card-text">L'application gratuite qui simplifie la vie des entraineurs et des joueurs
                            dans le sport Amateur.
                            Equipementier sportif officielle de la Wolfblue Esport !.</p>
                        <a href="https://fr.teampulseshop.com/" class="btn btn-primary">Découvrire</a>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="picture/FFJV_logo02_CMJN.png" class="img-fluid rounded-start" alt="FFJV">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Fédération Française du jeu vidéo</h5>
                        <p class="card-text">Créée en 2013, la FFJV mène des actions visant à démocratiser le jeu vidéo
                            en France. Le but premier de la fédération est de changer l'image du gamer encore trop
                            péjorative..</p>
                        <a href="https://www.ffjv.org/fr/accueil" class="btn btn-primary">Découvrire</a>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
	// <!-- contact -->
	require_once 'front/contact.php';
	require_once 'front/footer.php';
	?>

</body>

</html>