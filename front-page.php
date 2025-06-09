<?php
/**
 * Le modèle  front-page
 * Permet d'afficher la page d'accueil 
 */
?>

<?php get_header(); ?>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero__contenu">
            <h1 class="hero__titre">Voyagez Autrement avec Exclu Voyages !</h1>
            <div class="hero__description">
                <p class="hero__texte">Découvrez des destinations uniques et inoubliables avec Exclu Voyages.</p>
                <p class="hero__texte">Nous vous offrons des expériences authentiques, des paysages à couper le souffle et des aventures sur mesure. Partez à la découverte du monde avec nous et créez des souvenirs impérissables.</p>
            </div>
            <div class="hero__contact">
                <p class="hero__contact-info">info@cmaisonneuve.qc.ca</p>
                <p class="hero__contact-info">3800, rue Sherbrooke, Montréal</p>
                <p class="hero__contact-info">514-254-7131</p>
                <a href="#" class="hero__inscrire-btn">S'INSCRIRE</a>
                <div class="hero__social">
                    <a href="#" class="hero__social-lien"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="hero__social-lien"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
<!-- Formulaire inscription -->
        <form class="form-inscription" action="">
            <div class="form-inscription__label-input">
              <label class="inscription__label" for="nom">Nom</label>
              <input class="form-inscription__input" id="nom" type="text" placeholder="Ecrivez votre nom">
            </div>
            <div class="form-inscription__label-input">
              <label class="form-inscription__label" for="prenom">Prénom</label>
              <input class="form-inscription__input" id="prenom" type="text" placeholder="Ecrivez votre prénom">
            </div>
            <div class="form-inscription__label-input">
              <label class="inscription__label" for="courriel">Courriel</label>
              <input class="form-inscription__input" id="courriel" type="email" placeholder="Ecrivez votre courriel">
            </div>
            <div class="form-inscription__label-input">
              <label class="form-inscription__label" for="telephone">Téléphone</label>
              <input class="form-inscription__input" id="telephone" type="text" placeholder="Ecrivez votre téléphone">
            </div>
            <div class="form-inscription__bouton-contenu">
              <button class="form-inscription__bouton">S'inscrire</button>
            </div>
          </form>

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


<section class="populaire">
    <?php if (have_posts()) : 
        while (have_posts()) :
        the_post(); ?>
        
        <article class="populaire__article">
            <?php 
            /* Affiche l'image "mise en avant" miniature (150px x150px) */ 
            if (has_post_thumbnail()) {
                the_post_thumbnail('thumbnail', array('class' => 'populaire__image'));
            }
            ?>
            
            <div class="populaire__contenu">
                <h2 class="populaire__contenu_titre"><?php 
                /* Affiche le titre principal du `post`*/ 
                the_title(); ?></h2>
            
                <div class="populaire__contenu_texte"><?php 
                /* Cette fonction permet d'afficher l'ensemble du contenu du post (article ou page) */
                $lien = " <a href='" . get_permalink() . "' class='populaire__lien'>Lire la suite <i class='fas fa-arrow-right'></i>
</a>";
                echo wp_trim_words(get_the_excerpt(), 15, $lien);
                ?></div>
            </div>
        </article>
        
    <?php endwhile; 
    else : ?>
        <p>Aucun article trouvé.</p>
    <?php endif; ?>
</section>

<?php get_footer(); ?>

</body>
</html>