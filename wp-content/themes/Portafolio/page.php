<?php get_header(); ?>
<h1>Pagina Común</h1>
<h2></h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php bloginfo(name)?></h1>
            </div>
            <div class="col-md-12">
                Ultimos trabajos
            </div>
                <?php
                    if(have_posts()) :
                        while (have_posts()) :
                            the_post();
                ?>
                    <div class="col-md-4">
                        <h2><?php the_title();?></h2>
                        <p><?php the_content(); ?></p>
                    </div>
                <?php
                        endwhile;
                    else :
                ?>
                <p>No hay posts</p>
                <?php 
                    endif;
                    /*Esta funcion se coloca cuando en un mismo archivo se tienen varios query,
                    y de esta manera el limpia variables, condicionales, que se puedan tener y 
                    asi afectar al resto de los query*/
                    wp_reset_postdata();
                ?>
                <?php/*
                    if(have_posts()){
                        while (have_posts()) {
                            the_post();
                            ?>
                            <div class="col-md-4">
                                <h2><?php the_title();?></h2>
                                <p><?php the_excerpt(); ?></p>
                                <p><?php the_tags(); ?></p>
                                <p><?php the_author(); ?></p>
                            </div>
                            <?php
                        }
                    }
                */?>
        </div>
    </div>
    <?php get_footer(); ?>