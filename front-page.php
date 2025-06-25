<?php
/**
 * Le modèle  front-page
 * Permet d'afficher la page d'accueil 
 */
?>

<?php get_header(); ?>
    <!-- Hero Section -->
<section class="hero">
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
            <?php get_template_part("gabarit/carte"); ?>
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