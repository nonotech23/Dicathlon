<body id="connexion-bg">
    <main id="main-co">
        <!-- Dans votre fichier connexion.php -->

        <div class="connexion-container">
            <h2 class="connexion-text">Formulaire de Connexion</h2>

            <form action="<?php echo(site_url("Utilisateur/creer_lecompte")); ?>" method="post">
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required placeholder="prenom">

                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required placeholder="nom">

                <label for="ddn">Date de naissance :</label>
                <input type="date" id="ddn" name="ddn" required placeholder="ddn">

                <label for="email">Adresse mail :</label>
                <input type="text" id="email" name="email" required placeholder="email">

                <label for="username">Nom d'utilisateur :</label>
                <input type="text" id="login" name="login" required placeholder="Nom d'utilisateur">

                <label for="password">Mot de passe :</label>
                <input type="password" id="motdepasse" name="password" required placeholder="Mot de passe">

                <div class="buttons-co">
                    <button type="submit">Créer mon compte</button>
                </div>
            </form>

        </div>
    </main>
    <section id="footer">
        <footer>
            <div class="credits">
                <h3>Noan DELANEAU / Baptiste Cadio BUT MMI Lannion 2023</h3>
            </div>
        </footer>
    </section>
</body>

</html>