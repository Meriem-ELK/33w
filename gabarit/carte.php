
            <?php 
            /* Affiche l'image "mise en avant" miniature (150px x150px) */ 
            if (has_post_thumbnail()) {
                the_post_thumbnail('medium', array('class' => 'populaire__image'));
            }
            ?>
            
            <div class="populaire__contenu">
            <div class="populaire__contenu-note">
                <?php the_field('appreciation'); ?><i class="fas fa-star"></i>
            </div>

                <h2 class="populaire__contenu_titre"><?php 
                /* Affiche le titre principal du `post`*/ 
                the_title(); ?></h2>
            
                    <div class="populaire__contenu_texte">
                            <!-- Informations température -->
                            <div class="populaire__contenu_temperature">
                                <div class="populaire__contenu_info">
                                    <p><span><i class="fas fa-temperature-low"></i> Température min: <strong></span> <?php the_field('temperature_minimum'); ?>°C</strong></p>
                                    <p><span><i class="fas fa-temperature-high"></i> Température max:<strong></span> <?php the_field('temperature_maximum'); ?>°C</strong></p>
                                    <p><span><i class="fas fa-thermometer-half"></i> Température moyenne: <strong></span> <?php the_field('temperature_moyenne'); ?>°C</strong></p>
                                </div>
                            </div>

                            <?php 
                            /* Cette fonction permet d'afficher l'ensemble du contenu du post (article ou page) */
                            $lien = "<a href='" . get_permalink() . "' class='populaire__lien'>Lire la suite <i class='fas fa-arrow-right'></i></a>";
                                            echo wp_trim_words(get_the_excerpt(), 15, $lien);
                            ?>
                    </div>

            </div>
  
        