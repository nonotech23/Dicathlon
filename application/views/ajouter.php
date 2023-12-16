<div class="connexion-container">
            <h2 class="connexion-text">Ajouter un produit</h2>

            <form action="<?php echo(site_url("Utilisateur/ajouter_article")); ?>" method="post">
                <label for="type">Type :</label>
                <input type="text" id="type" name="type" required placeholder="type">

                <label for="description">Description :</label>
                <input type="text" id="description" name="description" required placeholder="description">

                <label for="marque">Marque :</label>
                <input type="text" id="marque" name="marque" required placeholder="marque">

                <label for="modele">Modèle :</label>
                <input type="text" id="modele" name="modele" required placeholder="modele">

                <label for="prix_location">Prix location :</label>
                <input type="text" id="prix_location" name="prix_location" required placeholder="prix_location">

                <label for="etat">État :</label>
                <input type="text" id="etat" name="etat" required placeholder="etat">

                <div class="buttons-co">
                    <button type="submit">Ajouter l'article</button>
                </div>
            </form>

        </div>