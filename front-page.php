<?php
/**
 * Le modèle  front-page
 * Permet d'afficher la page d'accueil 
 */
$hero_background = get_theme_mod('hero_background', '');
?>

<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero" style="background-image: url('<?= $hero_background ?>');">
    <?php get_template_part ("gabarit/hero"); ?>
</section>


<!-- Hero Galerie -->
<section class="galerie">
    <?= get_template_part("gabarit/galerie"); ?>
</section> 

<!-- Section populaire -->
<section class="populaire">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php if (!in_category('galerie')) : ?>
                    <article class="populaire__article">
                        <!-- Appel composant carte -->
                        <?php carte ()?>
                    </article>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Aucun article trouvé.</p>
        <?php endif; ?>

</section>


<!-- Footer -->
<?php get_footer(); ?>

</body>
</html>