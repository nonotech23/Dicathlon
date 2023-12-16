<body>
    <div class="list-sports">
        <div class="container">
            <?php
            if (!empty($produits)) {
                foreach ($produits as $p) {
                    // Construire l'URL avec le nom de la marque et l'ID du produit comme paramètres
                    $url = site_url('Welcome/listeproduitmarque/' . urlencode($p['marque']) . '/' . $p['id']);

                    echo '    <a href="' . $url . '">';
                    echo '        <div class="div-contenu-sport">';
                    echo '            <img src="http://placehold.it/250x250/000/fff" alt="IMAGE SPORT" />';
                    echo '            <div class="titre-sport">';
                    echo '                <h4>' . $p["type"] . '</h4>';
                    echo '            </div>';
                    echo '        </div>';
                    echo '    </a>';
                }
            } else {
                echo '<p>Aucun produit disponible.</p>';
            }
            ?>
        </div>
    </div>
</body>

</html>
