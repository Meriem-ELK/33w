<?php

/**
 * le modèle index
 * Représente le modèle par défaut
 */

?>

<?php get_header() ?>
<div class="post">
<?php if (have_posts()) : 
    while (have_posts()) :
    the_post(); 
    ?>  

    <article class="post__contenu">

        <div class="post__details">
            <!-- -->            
            <div class="post__image">
                <?php
                    /* Affiche l'image "mise en avant" miniature (150px x150px) */ 
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('medium', array('class' => 'category__image'));
                }?>
            </div>

            <!-- -->    
            <h2>
                <?php 
                /* Affiche le titre principal du `post`*/ 
                the_title(); ?>
            </h2>

            <!-- --> 
            <div class="post__meta"> 
    
                <span class="post__date">
                    <i class="icon-calendar"></i>
                    <?php echo get_the_date('d F Y'); ?>
                </span> - 
                <?php if (has_category()) : ?>
                    <span class="post__category">
                        <i class="icon-tag"></i>
                        <?php the_category(', '); ?>
                    </span>
                <?php endif; ?>
            </div>

            <!-- -->        
            <div>
                <?php 
                /* Cette fonction permet d'afficher l'ensemblre du contenu du post (article ou page) */
                the_content(); ?>
            </div>

        </div>
         
    </article>

    <?php endwhile; endif; ?>
 
</div>


<?php get_footer();