<?php
    include __DIR__ . '/../database.php';

    $titolo = '';
    $autore = '';
    $anno = '';
    $url = '';

    
    
    

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <title>Dischi</title>
    </head>
    <body>
        <main>
            <div class="container">
                <?php
                    foreach($database as $data){
                        $titolo = $data['title'];
                        $autore = $data['author'];
                        $anno = $data['year'];
                        $url = $data['poster'];
                ?>

                        <div class="card">
                            <div class="img">
                                <img src="<?php echo $url; ?>">
                            </div>
                            <h3><?php echo $titolo; ?></h3>
                            <div class="text"><?php echo $autore; ?></div>
                            <div class="text"><?php echo $anno; ?></div>
                        </div>


                <?php
                    }
                ?>
            </div>
        </main>
    </body>
</html>