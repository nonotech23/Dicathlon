<body id="connexion-bg">
    <main id="main-co">
        <!-- Dans votre fichier connexion.php -->

        <div class="connexion-container">
            <h2 class="connexion-text">Formulaire de Connexion</h2>

            <form action="votre_action_de_formulaire" method="post">
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" id="username" name="username" required placeholder="Nom d'utilisateur">

                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required placeholder="Mot de passe">
                <a href="" class="oublié">
                    Mot de passe oublié
                </a>
                <div class="buttons-co">
                    <button type="submit">Se connecter</button>
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