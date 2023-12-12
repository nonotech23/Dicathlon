<body>
    <div class="list-sports">
        <div class="container">
            <?php
            // Utilisez votre fonction pour récupérer les marques
            $marques = $this->Internships_model->get_marques();

            // Vérifiez si des marques ont été récupérées
            if (!empty($marques)) {
                // Affichez les marques dans des balises div avec des balises h4 et des liens
                foreach ($marques as $marque) {
                    // Construire l'URL avec le nom de la marque comme paramètre
                    $url = site_url('Welcome/listeproduitmarque/' . urlencode($marque['marque']));

                    echo '<a href="' . $url . '">';
                    echo '    <div class="div-contenu-sport">';
                    echo '        <img src="http://placehold.it/250x250/000/fff" alt="IMAGE SPORT" />';
                    echo '        <div class="titre-sport">';
                    echo '            <h4>' . htmlspecialchars($marque['marque']) . '</h4>';
                    echo '        </div>';
                    echo '    </div>';
                    echo '</a>';
                }
            } else {
                // Gérez le cas où aucune marque n'a été récupérée
                echo '<p>Aucune marque disponible.</p>';
            }
            ?>
        </div>
    </div>
    <div class="container-2">
        <div id="slider-carou">
            <div class="slide">
                <img src="http://placehold.it/250x250/000/fff" alt="IMAGE SPORT" />
                <div class="titre-sport">
                    <h4>TITRE SPORT</h4>
                </div>
            </div>
            <div class="slide">
                <img src="http://placehold.it/250x250/000/fff" alt="IMAGE SPORT" />
                <div class="titre-sport">
                    <h4>TITRE SPORT</h4>
                </div>
            </div>
            <div class="slide">
                <img src="http://placehold.it/250x250/000/fff" alt="IMAGE SPORT" />
                <div class="titre-sport">
                    <h4>TITRE SPORT</h4>
                </div>
            </div>
            <div class="slide">
                <img src="http://placehold.it/250x250/000/fff" alt="IMAGE SPORT" />
                <div class="titre-sport">
                    <h4>TITRE SPORT</h4>
                </div>
            </div>
            <div class="slide">
                <img src="http://placehold.it/250x250/000/fff" alt="IMAGE SPORT" />
                <div class="titre-sport">
                    <h4>TITRE SPORT</h4>
                </div>
            </div>
            <div class="slide">
                <img src="http://placehold.it/250x250/000/fff" alt="IMAGE SPORT" />
                <div class="titre-sport">
                    <h4>TITRE SPORT</h4>
                </div>
            </div>
            <div class="slide">
                <img src="http://placehold.it/250x250/000/fff" alt="IMAGE SPORT" />
                <div class="titre-sport">
                    <h4>TITRE SPORT</h4>
                </div>
            </div>
            <div class="slide">
                <img src="http://placehold.it/250x250/000/fff" alt="IMAGE SPORT" />
                <div class="titre-sport">
                    <h4>TITRE SPORT</h4>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


</body>