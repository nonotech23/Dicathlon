<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $content;?> - CodeIgniter 3 Tuto</title>
</head>
<body>
    <div id="global">
        <div id="entete">
            <h1> CodeIgniter 3 Tuto</h1>
        </div>
        <div id="contenu">
            <?php $this->load->view($content);?>
        </div>
        <div id="pied">
            <strong>&copy; 2021</strong>
        </div>
    </div>
    
</body>
</html>