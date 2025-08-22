<?php
/**
 * Gabarit pour la page d'erreur 404
 */

// Récupération des valeurs du customizer

$bg_image = get_theme_mod("erreur_404_background_image");
//$bg_image = get_theme_mod('erreur_404_background_image', get_template_directory_uri() . '/images/404-background.jpg');
$button_color = get_theme_mod('erreur_404_couleur', '#ff9800');

$title_404 = get_theme_mod('erreur_404_titre', 'Oops, vous avez échoué sur l\'ile 404 !');
$message_404 = get_theme_mod('erreur_404_message', 'Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur "Accueil" pour découvrir à nouveau nos voyages d\'exception !');
?>

<section class="erreur-404" style="background-image: url('<?php echo esc_url($bg_image); ?>');">
        <div class="erreur-404__container">
            
            <!-- Titre principal -->
            <h1 class="erreur-404__titre"><?php echo esc_html($title_404); ?></h1>
            
            <!-- Message d'erreur -->
            <div class="erreur-404__message">
                <p><?php echo esc_html($message_404); ?></p>
            </div>
            
            <!-- Bouton retour à l'accueil -->
            <div class="erreur-404__actions">
                <a href="<?php echo esc_url(home_url('/')); ?>" 
                   class="erreur-404__bouton erreur-404__bouton--principal"
                   style="background-color: <?php echo esc_attr($button_color); ?>;">
                    Retour à l'accueil
                </a>
            </div>
            
            <!-- Menu des destinations -->
            <div class="erreur-404__destinations">
                <h3 class="erreur-404__destinations-titre">Ou explorez nos destinations :</h3>
                <nav class="erreur-404__nav">
                    
                    <?php
                    wp_nav_menu(array(
                        'menu' => "menu_404_destinations",
                        'menu_class' => 'erreur-404__menu',
                        'container' => false
                    ));
                    ?>

                </nav>
            </div>
            
            <!-- Zone de recherche -->
            <div class="erreur-404__recherche">
                <form class="erreur-404__form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                    <div class="erreur-404__search-wrapper">
                        <input type="search" 
                               class="erreur-404__search-input" 
                               placeholder="Rechercher une destination..." 
                               value="<?php echo get_search_query(); ?>" 
                               name="s"
                               style="border-color: <?php echo esc_attr($button_color); ?>;">
                        <button type="submit" 
                                class="erreur-404__search-button"
                                style="background-color: <?php echo esc_attr($button_color); ?>;">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            
        </div>
</section>