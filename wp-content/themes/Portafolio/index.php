<?php get_header(); ?>
<body>
    <h1><?php bloginfo(name)?></h1>
    <h1><?php get_sidebar();?></h1>
    <ul>
        <li><b>Descripcion: </b><?php bloginfo(descripcion)?></li>
        <li><?php bloginfo(url)?></li>
        <li><?php bloginfo(language)?></li>
        <li><?php bloginfo(stylesheet_url)?></li>
        <li><?php bloginfo(stylesheet_directory)?></li>
    </ul>
    <?php get_footer(); ?>