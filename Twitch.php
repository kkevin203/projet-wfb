<?php
require_once 'front/head.php'
?>

<!-- corps de la page -->

<body>
    <!-- entetes -->

    <!-- entetes -->
    <?php
	// header
	require_once 'front/header.php';
	// navigation connection
	require_once 'front/nav-top.php';
	// navigation menu 
	require_once 'front/nav.php';
	?>
    <div class="container">
        <iframe src="https://player.twitch.tv/?channel=wolfblueesport&parent=www.example.com" frameborder="0"
            allowfullscreen="true" scrolling="no" height="378" width="620"></iframe>
        <iframe id="chat_embed" src="https://www.twitch.tv/embed/wolfblueesport/chat?parent=www.example.com"
            height="500" width="350">
        </iframe>
    </div>

    </script>
</body>
<!-- contact -->
<?php
	require_once 'front/contact.php';
	require_once 'front/footer.php';
	?>


</html>