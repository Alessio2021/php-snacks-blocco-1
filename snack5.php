<!-- ## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php

$lorem = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod officiis libero eos voluptatem reiciendis assumenda velit dolores nisi aliquam, laborum voluptatum maxime fugiat veritatis dolorum porro laudantium quaerat reprehenderit minima. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod officiis libero eos voluptatem reiciendis assumenda velit dolores nisi aliquam, laborum voluptatum maxime fugiat veritatis dolorum porro laudantium quaerat reprehenderit minima.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod officiis libero eos voluptatem reiciendis assumenda velit dolores nisi aliquam, laborum voluptatum maxime fugiat veritatis dolorum porro laudantium quaerat reprehenderit minima. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod officiis libero eos voluptatem reiciendis assumenda velit dolores nisi aliquam, laborum voluptatum maxime fugiat veritatis dolorum porro laudantium quaerat reprehenderit minima.';
echo $lorem . '<br>';

$explosion = explode('. ', $lorem);
foreach ($explosion as $key => $value) {
    
    echo $key . ' ' . $value . '<br>';
}


?>