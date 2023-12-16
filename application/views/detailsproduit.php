<body>
    <main class="main-description">
        <?php if (!empty($produit)) : ?>
            <div class="photo1">
                <img class="img-desc" src="https://place-hold.it/500x500/666/fff/000" alt="IMAGE PRODUIT" />
                <div class="img-desc2">
                    <img src="https://place-hold.it/100x100/666/fff/000" alt="IMAGE PRODUIT" class="img-desc2">
                    <img src="https://place-hold.it/100x100/666/fff/000" alt="IMAGE PRODUIT" class="img-desc2">
                    <img src="https://place-hold.it/100x100/666/fff/000" alt="IMAGE PRODUIT" class="img-desc2">
                </div>
            </div>

            <div class="description">
                <div class="content-desc1">
                    <p class="prix-desc"><?php echo $produit['prix_location']; ?>€ / Mois</p>
                    <div class="title-desc">
                        <h1><?php echo htmlspecialchars($produit['marque']); ?></h1>
                        <h2><?php echo strtoupper($produit['type'] . ' - ' . $produit['modele']); ?></h2>
                        <p><?php echo htmlspecialchars($produit['description']); ?></p>
                    </div>

                    <!-- Formulaire de réservation -->
                    <form method="post" action="<?php echo site_url('Welcome/ajout_resa_article/' . $produit_id); ?>">
                        <label for="date_debut">Date de début :</label>
                        <input type="date" name="date_debut" required>

                        <label for="date_retour_prevue">Date de retour prévue :</label>
                        <input type="date" name="date_retour_prevue" required>

                        <!-- Ajoutez d'autres champs du formulaire si nécessaire -->

                        <input type="hidden" name="prix_total" value="<?php echo $produit['prix_location']; ?>">
                        <input type="submit" value="Réserver">
                    </form>


                    
                </div>
            </div>
        <?php else : ?>
            <p>Produit non trouvé.</p>
        <?php endif; ?>
    </main>
</body>
