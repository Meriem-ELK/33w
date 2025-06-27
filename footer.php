<?php
/**
 * Template du pied de page
 */
?>

</main>

<footer class="site-footer">
    <div class="footer-container">

        <!-- Coordonnées du club -->
        <div class="footer-section">
            <h3>Contact</h3>
            <div class="contact-info">
                <p><strong>Adresse :</strong><br>
                123 Rue Example<br>
                Montréal, QC H1A 1A1</p>
                
                <p><strong>Téléphone :</strong><br>
                <a href="tel:5141234567">(514) 123-4567</a></p>
                
                <p><strong>Courriel :</strong><br>
                <a href="mailto:info@monclub.com">info@exclu-voyages.com</a></p>
            </div>
        </div>
        
        <!-- Liste de liens externes -->
        <div class="footer-section">
            <h3>Liens utiles</h3>
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
            <h3>Navigation</h3>
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
                <div class="footer-section">
                    <h3>Rechercher</h3>
                    <?php get_search_form(); ?>
                </div>

                <!-- Réseaux sociaux -->
                <div class="social-section">
                    <h3>Suivez-nous</h3>
                    <div class="social-links">
                        <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://github.com/Meriem-ELK/33w" class="hero__social-lien" target="_blank"><i class="fab fa-github"></i></a>
                    </div>
                </div>

        </div>
       

    </div>


    <!-- Copyright -->
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - Tous droits réservés</p>
    </div>
</footer>