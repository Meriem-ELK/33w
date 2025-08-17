<?php
/**
 * Template du pied de page
 */

$footer_contact_titre = get_theme_mod('footer_contact_titre', '');

$footer_adresse_label = get_theme_mod('footer_adresse_label', ' :');
$footer_adresse = get_theme_mod('footer_adresse', '');

$footer_tel_label = get_theme_mod('footer_tel_label', ' :');
$footer_tel =  get_theme_mod('footer_tel', '');

$footer_email_label = get_theme_mod('footer_email_label', ' :');
$footer_email = get_theme_mod('footer_email', '');


$footer_services_titre = get_theme_mod('footer_services_titre', '');
$footer_navigation_titre = get_theme_mod('footer_navigation_titre', '');


$footer_search_titre = get_theme_mod('footer_search_titre', '');
$footer_social_titre = get_theme_mod('footer_search_titre', '');

$footer_site_nom = get_theme_mod('footer_site_nom', '');
$footer_copyright_text = get_theme_mod('footer_copyright_text', '');

?>

</main>

<!-- Appel du fonction vague-->
<footer class="site-footer">
    <?php vague(); ?>
    <div class="footer-container">

        <!-- Coordonnées du club -->
        <div class="footer-section">
            <h3><?= $footer_contact_titre ?></h3>
            <div class="contact-info">
                <p><strong><?= $footer_adresse_label ?></strong><br>
                <?= $footer_adresse ?></p>
                
                <p><strong><?= $footer_tel_label ?></strong><br>
                <a href="tel:5141234567"><?= $footer_tel ?></a></p>
                
                <p><strong><?= $footer_email_label ?></strong><br>
                <a href="mailto:<?= $footer_email ?>"><?= $footer_email ?></a><p>

            </div>
        </div>
        
        <!-- Liste de liens externes -->
        <div class="footer-section">
            <h3><?= $footer_services_titre ?></h3>
            <?php
            wp_nav_menu(array(
                "menu" => "footer-menu",
                'container' => false,
                'menu_class' => 'footer-links'
            ));
            ?>
        </div>

        <!-- Menu principal -->
        <div class="footer-section">
            <h3><?= $footer_navigation_titre ?></h3>
            <?php
            wp_nav_menu(array(
                "menu" => "principal",
                'container' => false,
                'menu_class' => 'footer-nav'
            ));
            ?> 
        </div>


        <div>

            <!-- Zone de recherche -->
            <div class="footer-recherche">
                <h3><?= $footer_search_titre?></h3>
                <?php get_search_form(); ?>
            </div>

            <!-- Réseaux sociaux -->
            <div class="social-section">
                <h3><?= $footer_social_titre ?></h3>
                <div class="social-links">
                    <?php icone_sociaux ()?>
                </div>
            </div>
        </div>
       
    </div>


    <!-- Copyright -->   
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> <?= $footer_site_nom ?> - <?= $footer_copyright_text ?></p>
    </div>
</footer>
<?php wp_footer(); ?>