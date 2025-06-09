<?php
/**
 * Modèle category.php
 * Template de catégorie
 */
?>
<?php get_header() ?>
<section class="category">
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
        <div class="category__contenu">
            
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail('thumbnail', array('class' => 'category__image')); //afficher l'image miniature
            
              }?>
          
    <div class="category__details">
            <h2 class="category__titre"><?php the_title(); ?></h2>
            <!-- Affiche le contenu complet de l'article -->
            <?php the_content(); ?>

            <?php if (get_the_category()) : ?>
                        <div class="category__categories">
                            <i class="fas fa-folder"></i><?php the_category(', '); ?>
                        </div>
            <?php endif; ?>

    </div>
        </div>
    <?php
        }
    } ?>
</section>
<?php get_footer(); ?>
