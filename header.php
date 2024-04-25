<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
</head>
<body>

<nav>
    <ul>
        <li><a href="/frontpage">Forside</a></li>
        <li><a href="/shop">Shop</a></li>        
        <li><a href="/product-category/brudekjoler">Brudekjoler</a></li>
        <li><a href="/product-category/gallakjoler">Fest- & Gallakjoler</a></li>
        <li><a href="/product-category/konfirmationskjoler">Konfirmationskjoler</a></li>
    </ul>
    <a href="/cart"><button>Kurv</button></a>
</nav>