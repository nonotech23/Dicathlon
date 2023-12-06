<body>
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