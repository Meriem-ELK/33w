<?php

/*
* Gabarits sous forme de fonctions
* Chacune peut être paramétré
*/


function icone_sociaux()
{
?>
    <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="#" class="hero__social-lien" target="_blank"><i class="fab fa-github"></i></a>
<?php
}

/* +++++++==================================
/* Générateur de vague pour séparer 2 sections
*/

function vague()
{
?>

<svg xmlns="http://www.w3.org/2000/svg"
       viewBox="0 0 1440 320"
       preserveAspectRatio="none"
       class="hero__wave">
    <path fill="#333333" fill-opacity="1"
      d="M0,96L120,133.3C240,171,480,245,720,266.7C960,288,1200,256,1320,240L1440,224L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
    </path>
</svg> 

<?php
}

/* +++++++==================================
/* Ajouter le function carte pour rempalcer la template-part
*/

function carte($post_id = null) {
    // Si aucun ID n'est passé, utiliser le post courant
    $post = $post_id ? get_post($post_id) : get_post();
    if (!$post) return;

    setup_postdata($post);
    ?>

        <?php 
        if (has_post_thumbnail()) {
            the_post_thumbnail('medium', array('class' => 'populaire__image'));
        }
        ?>
        
        <div class="populaire__contenu">
          

          <h2 class="populaire__contenu_titre"><?php the_title(); ?></h2>

          <div class="populaire__contenu_texte">
      
              <div class="populaire__contenu_carte">
                        <div class="populaire__contenu_carte-min">
                            <div class="populaire__contenu_carte-label">Température Minimale</div>
                            <div class="populaire__contenu_carte-nombre"><?php the_field('temperature_minimum'); ?>°C</div>
                        </div>
                        <div class="populaire__contenu_carte-max">
                            <div class="populaire__contenu_carte-label">Température Maximale</div>
                            <div class="populaire__contenu_carte-nombre"><?php the_field('temperature_maximum'); ?>°C</div>
                        </div>
                        <div class="populaire__contenu_carte-moy">
                            <div class="populaire__contenu_carte-label">Température Moyenne</div>
                            <div class="populaire__contenu_carte-nombre"><?php the_field('temperature_moyenne'); ?>°C</div>
                        </div>
              </div>

              <div class="populaire__contenu-note">
                Satisfaction client - Note : <?php the_field('appreciation'); ?> <i class="fas fa-star"></i>
             </div>

              <?php 
                $lien = "<a href='" . get_permalink() . "' class='populaire__lien'>Lire la suite <i class='fas fa-arrow-right'></i></a>";
                echo wp_trim_words(get_the_excerpt(), 15, $lien);
              ?>
          </div>
        </div>
    <?php
    wp_reset_postdata();
}
