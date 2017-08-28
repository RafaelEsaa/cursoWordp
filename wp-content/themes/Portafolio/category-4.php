<?php
    /*Con este nombre de archivo se refiere a la categoria con ese ID
    en especial, se puede colocar tambien en vez del ID, el nombre de
    la categoria luego del parentesis*/
?>
<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Categoria: ID 4 <?php single_cat_title();?></h1>
            </div>
                <?php
                    if(have_posts()) :
                        while (have_posts()) :
                            the_post();
                ?>
                    <div class="col-md-4">
                        <h2><?php the_title();?></h2>
                        <p><?php the_excerpt(); ?></p>
                        <p><?php the_tags(); ?></p>
                        <p><?php the_author(); ?></p>
                        <a href="<?php the_permalink(); ?>">Leer mas</a>
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