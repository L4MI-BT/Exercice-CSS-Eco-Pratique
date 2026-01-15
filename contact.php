<?php require_once "require/header.php" ?>
<main class="container contact">
    <h1 class="title">Contact: </h1>
    <div class="flex media-flex">
        <div class="corps">
            <div class="form">
                <form action="#">
                    <label for="nom">Votre nom :</label>
                    <input class="inp-form" type="text" id="nom" placeholder="Nom">
                    <label for="prenom">Votre prénom :</label>
                    <input class="inp-form" type="text" id="prenom" placeholder="Prenom">
                    <label for="email">Votre email :</label>
                    <input class="inp-form" type="text" id="email" placeholder="Email">
                    <label for="msg">Votre message :</label>
                    <textarea class="inp-form" name="msg" id="msg" placeholder="Message"></textarea>
                    <input class="btn-form" type="submit" value="Envoyer">
                </form>
            </div>
        </div>
        <hr>
       <div class="sidebar flex"><?php require "require/sidebar.php" ?></div>
    </div>
   

</main>

<?php require_once "require/footer.php" ?>