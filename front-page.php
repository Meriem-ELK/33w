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
    <h2 class="galerie__titre">Nos destinations favorites</h2>
    <div class="galerie__grid">
        <div class="galerie__element">
            <img src="<?php echo get_template_directory_uri(); ?>/images/galerie/galerie1.jpg" alt="destination1" class="galerie__image">
        </div>
        <div class="galerie__element">
            <img src="<?php echo get_template_directory_uri(); ?>/images/galerie/galerie2.jpg" alt="destination2" class="galerie__image">
        </div>
        <div class="galerie__element">
            <img src="<?php echo get_template_directory_uri(); ?>/images/galerie/galerie3.jpg" alt="destination3" class="galerie__image">
        </div>
        <div class="galerie__element">
            <img src="<?php echo get_template_directory_uri(); ?>/images/galerie/galerie4.jpg" alt="destination4" class="galerie__image">
        </div>
        <div class="galerie__element">
            <img src="<?php echo get_template_directory_uri(); ?>/images/galerie/galerie5.jpg" alt="destination5" class="galerie__image">
        </div>
        <div class="galerie__element">
            <img src="<?php echo get_template_directory_uri(); ?>/images/galerie/galerie6.jpg" alt="destination6" class="galerie__image">
        </div>
        <div class="galerie__element">
            <img src="<?php echo get_template_directory_uri(); ?>/images/galerie/galerie7.jpg" alt="destination7" class="galerie__image">
        </div>
        <div class="galerie__element">
            <img src="<?php echo get_template_directory_uri(); ?>/images/galerie/galerie8.jpg" alt="destination8" class="galerie__image">
        </div>
        <div class="galerie__element">
            <img src="<?php echo get_template_directory_uri(); ?>/images/galerie/galerie9.jpg" alt="destination9" class="galerie__image">
        </div>
        <div class="galerie__element">
            <img src="<?php echo get_template_directory_uri(); ?>/images/galerie/galerie10.jpg" alt="destination10" class="galerie__image">
        </div>
    </div>
</section>

<!-- Section populaire -->
<section class="populaire">
<?php get_template_part ("gabarit/carte"); ?>
</section>

<!-- Footer -->
<?php get_footer(); ?>

</body>
</html>