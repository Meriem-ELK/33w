<?php
/**
 * Le modèle  front-page
 * Permet d'afficher la page d'accueil 
 */
$hero_background = get_theme_mod('hero_background', '');
?>

<?php get_header(); ?>

<!-- Hero Section -->
<div class="hero">
    <?php get_template_part('gabarit/carrousel');?>
</div>


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
                        <?php carte(); ?>
                    </article>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Aucun article trouvé.</p>
        <?php endif; ?>

</section>

<!-- section rest-api avec accordéon -->
<section class="destination">
    <div class="destination__container">
        <h2 class="destination__titre">Destinations par catégorie</h2>
        
        <!-- Liste des catégories (boutons de l'accordéon) -->
        <div class="destination__categories">
            <?php extraire_list_categories("destination"); ?>
        </div>
        
        <!-- Accordéon pour afficher les articles -->
        <div class="destination__accordion">
            <div class="destination__accordion-content">
                <div class="destination__list">
                    <!-- Le contenu sera chargé dynamiquement par JavaScript -->
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Footer -->
<?php get_footer(); ?>

</body>
</html>