<body>
<?php
    $query = $this->db->get('location');

    // Vérifiez s'il y a des résultats
    if ($query->num_rows() > 0) {
        // Affichez les résultats sous forme de tableau HTML
        echo '<table border="1">';
        echo '<thead><tr><th>ID</th><th>Date début</th><th>Date retour prévue</th><th>Date retour effective</th><th>Prix total</th><th>Utilisateur ID</th><th>Produit ID</th></tr></thead>';
        echo '<tbody>';
        foreach ($query->result() as $row) {
            echo '<tr>';
            echo '<td>' . $row->id . '</td>';
            echo '<td>' . $row->date_debut . '</td>';
            echo '<td>' . $row->date_retour_prevue . '</td>';
            echo '<td>' . $row->date_retour_effective . '</td>';
            echo '<td>' . $row->prix_total . '</td>';
            echo '<td>' . $row->utilisateur_id . '</td>';
            echo '<td>' . $row->produit_id . '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else {
        // Affichez un message si aucune réservation n'est en cours
        echo '<p>Aucune réservation en cours.</p>';
    }
?>

</body>