<?php
/**
 * Header file for the Charis Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Charis
 * @since 1.0.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Charis In Action</title>
<link rel="profile" href="http://gmpg.org/xfn/11">
    <script src="https://kit.fontawesome.com/aa36ddf53c.js" crossorigin="anonymous"></script>
<?php wp_head(); ?>
</head>

<div class="topnav" id="myTopnav">
    <div class = "logo">
        <a href="http://charisinaction.org/">
            <img src = "http://charis-in-action-2020.local/wp-content/uploads/2020/09/logo-icon.png" alt = "logo">
        </a>
    </div>

    <div class = "pushypushy">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        <a href="javascript:void(0);" style="font-size:25px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
</div>

<body <?php body_class(); ?>>