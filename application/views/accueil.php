<body>

<section class="accueil">
    <nav>
        <a href="<?php echo(site_url()); ?>/Welcome">
            <h2 class="logo"><img src="<?php echo(base_url());?>IMG/dicathlon-light.png" alt="logo dicathlon"></h2>
        </a>
        <ul id="primary">
            <!-- <li><a href="<?php echo(site_url()); ?>/Welcome/bonplan">Bon plans</a></li> -->
            <li><a href="<?php echo(site_url()); ?>/Welcome/sports">Marques</a></li>
            <li><a href="<?php echo(site_url()); ?>/Welcome/réservations">Mes réservations</a></li>
        </ul>
        <a href="<?php echo(site_url()); ?>/Utilisateur/connexion">
            <h2 class="logo"><img src="<?php echo(base_url());?>IMG/icons/user-light.svg" alt="user icon"></h2>
        </a>
    </nav>
</section>

        <main id="main">
            <div class="contenu">
                <div class="recherche">
                    <input class="barrederecherche" placeholder="Recherche">
                    <img src="<?php echo(base_url());?>IMG/icons/loupe-arrondie.png" alt="loupe">
                </div>
            </div>
            <ul>
                <?php foreach($produits as $p):?>
                <?php echo "<li > ".$p['type'].". ".$p['description']." </li >";?>
                <?php endforeach ?>
            </ul>
        </main>
    

        <section id="footer">
            <footer>

            </footer>
        </section>
</body>

</html>