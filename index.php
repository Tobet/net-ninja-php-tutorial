<?php

// conditional statements
$price = 20;

//if ($price < 10) {
//    echo 'the condition is met';
//} else if ($price < 30) {
//    echo 'else if condition met';
//} else {
//    echo 'the condition not met';
//}

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2],
];

foreach ($products as $product) {

//    if ($product['price'] < 15 && $product['price'] > 2) {
//        echo $product['name'] . '<br />';
//    }

//    if ($product['price'] > 20 || $product['price'] < 10) {
//        echo $product['name'] . '<br />';
//    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<div>
    <ul>
        <?php foreach($products as $product) {?>
            <?php if($product['price'] > 15) { ?>
                <li><?php echo $product['name'] ?></li>
            <?php } ?>
        <?php } ?>
    </ul>
</div>

</body>
</html>
