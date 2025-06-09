<?php

/**
 * le modèle index
 * Représente le modèle par défaut
 */

?>

<?php get_header() ?>
<div>
   <section class="error-page">
        <h1 class="error-page__number">404</h1>
        <h2 class="error-page__title">L'adresse que vous demandez n'existe pas</h2>
        <div class="error-page__message">
            <p>Il se peut que la page ait été déplacée, supprimée ou que l'URL soit incorrecte.</p>
        </div>
        <a href="<?php echo home_url(); ?>" class="error-page__button"> Retour à l'accueil</a>
    </section>
</div>
<?php get_footer();