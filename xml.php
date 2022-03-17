<?php
$xml=simplexml_load_file("image.xml") or die("Error: Cannot create object");
print_r($xml);
echo $xml->image[0]->img;
foreach ($xml->children() as $row){
    echo $row->img;
}
?>
<html>

    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        
        <h2>All menu</h2>
    
        <div class="row">
            <?php foreach ($xml->children() as $row) :?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="img/<?php echo $row->img?>" alt="">
                </div>
            </div>
            <?php endforeach;?>
        </div>

    </body>
</html>