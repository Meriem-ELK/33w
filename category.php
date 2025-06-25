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
            
        <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('medium', array('class' => 'category__image')); ?>
        </a>
        <?php endif; ?>

          
    <div class="category__details">
            <h2 class="category__titre">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <!-- Affiche le contenu complet de l'article -->
            <?php the_content(); ?>

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
</div>
    <?php
        }
    } ?>
</section>
<?php get_footer(); ?>