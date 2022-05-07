<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="design/default.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;1,300&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!--bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- propriétés de la pages -->
    <title>Les New's de la WFB</title>
</head>

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



</html>