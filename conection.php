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
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-2 col-md-offset-1 col-md-10 col-lg-8
        blanc corps_page">
                    <center>
                        <div class="alert alert-info">
                            Vous n'avez pas encore de compte ?
                            <a href="nouveau_compte">Inscrivez-vous</a> maintenant !
                        </div>
                    </center>
                    <form class="form-horizontal" style="padding-right:20px;">
                        <div class="form-group">
                            <h4 class="gros_titre">Se connecter</h4>
                        </div>
                        <div class="row">
                            <div class="form-group" id="form_login_utilisateur">
                                <label for="login_utilisateur" class="col-lg-3 col-sm-4 control-label">
                                    Nom d'utilisateur
                                </label>
                                <div class="col-lg-9 col-sm-8">
                                    <input type="text" class="form-control" id="login_utilisateur">
                                    <span class="help-block message_erreur" id="login_incorrect"
                                        style="position: relative; top: 6px;">
                                        Le nom d'utilisateur ou le mot de passe est incorrect.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group" id="form_login_password">
                                <label for="login_password" class="col-lg-3 col-sm-4 control-label">
                                    Mot de passe
                                </label>
                                <div class="col-lg-9 col-sm-8">
                                    <input type="password" class="form-control" id="login_password"
                                        onkeypress="verifier_enter(event, this, login);">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="pull-right btn btn-primary" style="margin-top: -8px; margin-bottom: 16px;"
                                onclick="login();">
                                Login
                            </span>
                        </div>
                    </form>
                    <div class="col-lg-offset-2 col-md-offset-1"></div>
                </div>
            </div>


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