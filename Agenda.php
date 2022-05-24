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
        <h1>Agenda de l'association</h1>
        <iframe src="https://calendar.google.com/calendar/embed?src=kkevin203%40gmail.com&ctz=Europe%2FBrussels"
            style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>

    </section>
    <?php
    // Contact
    require_once 'front/contact.php';
    // Footer
    require_once 'front/footer.php';
    ?>



</body>


</html>