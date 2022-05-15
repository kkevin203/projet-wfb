<!DOCTYPE html>
<html lang="en">
<?php
require_once 'front/head.php'
?>

<body>

    <!-- entetes -->
    <?php
    // header
    require_once 'front/header.php';
    // navigation menu 
    require_once 'front/nav.php';
    ?>

    <section class="bienvenue">
        <h3>Bienvenue</h3>

        <!-- description -->
        <p>bienvenue sur notre site </p>
        <p>Nous sommes une association de jeu vidéo en multigaming.</p>
    </section>
    <?php
    // articles
    require_once 'front/articles.php';
    // Contact
    require_once 'front/contact.php';
    // Footer
    require_once 'front/footer.php';
    ?>



</body>


<footer>
    <p>Bonnet Kevin &copy; 2022</p>

</footer>

</html>