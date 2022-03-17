<?php
$data = file_get_contents("image.json");
$image = json_decode($data, true);
$image = $image["data"]
?>
<html>

    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        
        <h2>All menu</h2>

        <div class="row">
            <?php foreach ($image as $row) :?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="img/<?= $row["url"];?>" alt="">
                </div>
            </div>
            <?php endforeach;?>
        </div>

    </body>
</html>
