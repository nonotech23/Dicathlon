<body>
    <div class="list-sports">
        <div class="container">
            <?php
            if (!empty($produits)) {
                foreach ($produits as $p) {
                    echo("<div>".$p["type"]."</div>");
                }
            } else {
                echo '<p>Aucun produit disponible.</p>';
            }
            ?>
        </div>
    </div>
</body>

</html>


</body>