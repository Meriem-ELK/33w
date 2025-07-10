<?php
/**
 * le modèle index
 * Représente le modèle par défaut
 */
?>

<?php get_header(); ?>

<?php if ( is_search() ) : ?>
    <?php
    global $wp_query;
    $count = $wp_query->found_posts;
    $search_term = get_search_query();
    $classe_vide = ($count == 0) ? ' recherche__stats--vide' : '';
    ?>
    
    <div class="recherche__stats<?php echo $classe_vide; ?>">
        <p>
            <span class="recherche__count">
                <?php
                if ($count == 0) {
                    echo 'Aucun résultat trouvé';
                } else {
                    echo $count . ' résultat' . ($count > 1 ? 's' : '') . ' trouvé' . ($count > 1 ? 's' : '');
                }
                ?>
            </span>
            pour
            <span class="recherche__terme">
                "<?php echo esc_html($search_term); ?>"
            </span>
        </p>
    </div>
<?php endif; ?>

<section class="category">
        <div class="category__content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>      
                <div class="category__details">
                    <!-- Appel composant carte -->
                    <?php carte ()?>
                </div>
            <?php endwhile; endif; ?>
        </div>
</section>


<?php get_footer(); ?>
