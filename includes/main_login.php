<main>



    <form action="./assets/php/process-inscription.php" method="get">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" placeholder="prénom" required>

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" placeholder="nom" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" placeholder="adresse email" required>

        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" placeholder="mot de passe" required>

        <label for="verif_mot_de_passe">Vérification du mot de passe :</label>
        <input type="password" id="verif_mot_de_passe" name="verif_mot_de_passe" placeholder="verif mot de passe" required>

        <input type="submit" value="S'inscrire">
    </form>


        <?php

        if(isset($_GET['msg'])) {
            echo '<p class="errormsg">' . urldecode($_GET['msg']) . '</p>';
        }
        ?>


