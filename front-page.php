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

 <?php if (have_posts()) {
      while (have_posts()) {
        /* affiche l'image « mise en avant » miniature */
        the_post();
        if (!in_category('galerie')) :
            get_template_part("gabarit/carte"); 
        endif;
      }
    } ?>

</section>





<!-- Footer -->
<?php get_footer(); ?>

</body>
</html>