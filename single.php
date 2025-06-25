<?php

/**
 * le modèle single.php
 * Représente le modèle par défaut
 */

?>

<?php get_header() ?>
<!-- Détails de l'article -->
<?php if (have_posts()) : 
    while (have_posts()) :
    the_post(); 
    ?>  

<div class="post">
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
                </span>
                
                <!-- Afficher catégorie-->
                <?php
                    $categories = get_the_category();
                    $child_cats = [];

                    foreach ( $categories as $cat ) {
                        if ( $cat->category_parent != 0 ) {
                            $child_cats[] = $cat->name;
                        }
                    }

                    if ( !empty($child_cats) ) : ?>
                        <div class="category__categories">
                            <i class="fas fa-folder"></i>
                            <?php echo implode(', ', $child_cats); ?>
                        </div>
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

        <!-- Sidebar -->
        <aside class="post__sidebar">
            <!-- Partage social -->
            <div class="post__share">
                <h3>Partager cet article</h3>
                <div class="share-buttons">
                    <a href="#" target="_blank" class="share-btn facebook">
                       <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" target="_blank" class="share-btn twitter">
                        <i class="fab fa-instagram"></i>
                    </a>
                    
                </div>
            </div>

</div>

<?php get_footer();