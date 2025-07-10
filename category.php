<?php
/**
 * Modèle category.php
 * Template de catégorie
 */
?>
<?php get_header() ?>
<section class="category">
    <div>
        <h2><?php echo single_cat_title(); ?></h2>
        <?php echo category_description(); ?>
    </div>

    <div class="category__content">
        <?php if (have_posts()) {
            while (have_posts()) {
                the_post();
            ?>
                <div class="category__details">
                    <!-- Appel composant carte -->
                    <?php carte ()?>
                </div>
             <?php
                }
            } else {
        // Aucun post trouvé
        echo '<div class="aucun_post"><p>Aucun article pour cette catégorie.</p></div>';
    }
    ?>
    </div>
    
</div>
</section>

<?php get_footer(); ?>