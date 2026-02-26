<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="site-title">BYS Store</div>
    <nav>
        <a href="<?php echo home_url(); ?>">Shop</a>
        <a href="#">My Orders</a>
        <a href="#">Account</a>
        <a href="#">Help & Support</a>
    </nav>
</header>
