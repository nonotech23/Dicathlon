<body>
    <div class="list-sports">
        <div class="container">
            <?php
            $marques = $this->Internships_model->get_marques();
            if (!empty($marques)) {
                foreach ($marques as $marque) {
                    $marqueName = urldecode($marque['marque']);
                    $url = site_url('Welcome/listeproduitmarque/' . urlencode($marque['marque']));
                    echo '<a href="' . $url . '">';
                    echo '    <div class="div-contenu-sport">';
                    echo '        <img src="http://placehold.it/250x250/000/fff" alt="IMAGE SPORT" />';
                    echo '        <div class="titre-sport">';
                    echo '            <h4>' . htmlspecialchars($marqueName, ENT_QUOTES) . '</h4>';
                    echo '        </div>';
                    echo '    </div>';
                    echo '</a>';
                }
            } else {
                echo '<p>Aucune marque disponible.</p>';
            }
            ?>
        </div>
    </div>
    <div class="container-2">
        <div id="slider-carou">
            <div class="">
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
