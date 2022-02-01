<!-- ## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php

$lorem = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod officiis libero eos voluptatem reiciendis assumenda velit dolores nisi aliquam, laborum voluptatum maxime fugiat veritatis dolorum porro laudantium quaerat reprehenderit minima. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod officiis libero eos voluptatem reiciendis assumenda velit dolores nisi aliquam, laborum voluptatum maxime fugiat veritatis dolorum porro laudantium quaerat reprehenderit minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod officiis libero eos voluptatem reiciendis assumenda velit dolores nisi aliquam, laborum voluptatum maxime fugiat veritatis dolorum porro laudantium quaerat reprehenderit minima. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod officiis libero eos voluptatem reiciendis assumenda velit dolores nisi aliquam, laborum voluptatum maxime fugiat veritatis dolorum porro laudantium quaerat reprehenderit minima.';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo $lorem . '<br>';

    $explosion = explode('. ', $lorem);
        foreach ($explosion as $key => $value) {
            echo $key . ' ' . $value . '<br>';
        }


    ?>
</body>

</html>