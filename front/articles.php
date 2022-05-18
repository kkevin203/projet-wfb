<section>
    <h3>articles</h3>

    <div class="container">
        <!-- conteneur -->

        <?php
        require_once 'front/card.php';
        $maillot1 = new Card('Maillot Face', 'notre nouveau maillot', '07 / 12 / 2021', 'picture/ARRIERE-WOLFBLUE.png');
        $maillot2 = new Card('Maillot Dos', 'Notre maillot de dos', '07 / 12 / 2021', 'picture\AVANT-WOLFBLUE.png');

        $maillot1->displayCard();
        $maillot2->displayCard();

        ?>

    </div>

</section>