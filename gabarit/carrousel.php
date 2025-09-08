<?php
/**
 * Template part carrousel.php
 * Affiche le carrousel dynamique de la section Hero
 */

// Récupérer le nombre d'images configuré dans le customizer
$nombre_images = get_theme_mod('hero_carrousel_count', 3);
$hero_couleur = get_theme_mod('hero_couleur');
?>

<style>
.hero__contenu {
    color: <?= $hero_couleur ?> !important;
}
</style>

<div class="hero__carrousel">
    <!-- Boucle pour générer les radio boutons de navigation -->
    <div class="carrousel__navigation">
        <?php for ($i = 0; $i < $nombre_images; $i++) : ?>
            <input type="radio" 
                   name="carrousel" 
                   id="slide<?= $i ?>" 
                   class="carrousel__radio" 
                   <?= ($i === 0) ? 'checked' : '' ?>>
            <label for="slide<?= $i ?>" class="carrousel__label"></label>
        <?php endfor; ?>
    </div>

    <!-- Boucle pour générer les images du carrousel -->
    <div class="carrousel__images">
        <?php for ($i = 0; $i < $nombre_images; $i++) : ?>
            <?php 
            // Récupérer l'URL de l'image depuis le customizer
            $image_url = get_theme_mod("hero_background_$i", '');
            ?>
            
            <?php if ($image_url) : ?>
                <div class="carrousel carrousel--<?= $i ?>" 
                     style="<?= ($i === 0) ? 'opacity: 1;' : 'opacity: 0;' ?>">
                    <img src="<?= esc_url($image_url) ?>" 
                         alt="Image carrousel <?= $i + 1 ?>" 
                         class="carrousel__image">
                </div>
            <?php endif; ?>
        <?php endfor; ?>
    </div>

 <?php get_template_part ("gabarit/hero"); ?>
</div>