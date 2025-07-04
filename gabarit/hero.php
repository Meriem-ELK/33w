<?php
/*
* Template-part Hero.php
* Permet d'afficher la section hero  !
*/

$hero_couleur = get_theme_mod ('hero_couleur');

$hero_title = get_theme_mod('hero_title', '');
$hero_auteur = get_theme_mod('hero_auteur', '');

$hero_email = get_theme_mod('hero_email', '');
$hero_adresse = get_theme_mod('hero_adresse', '');
$hero_telephone = get_theme_mod('hero_telephone', '');

$hero_subtitle = get_theme_mod('hero_subtitle', 'Découvrez des destinations uniques et inoubliables avec Exclu Voyages.');

$hero_cta_text = get_theme_mod('hero_cta_text', 'INSCRIPTION');
$hero_cta_link = get_theme_mod('hero_cta_link', '#');

?>

<style>
.hero__contenu{
  color: <?= $hero_couleur ?> !important;
}

</style>


       <div class="hero__contenu">
            <h1 class="hero__titre"><?= $hero_title ?></h1>
            <div class="hero__description">
                <p class="hero__texte"><?= $hero_subtitle ?></p>
                <p class="hero__texte">Nous vous offrons des expériences authentiques, des paysages à couper le souffle et des aventures sur mesure. Partez à la découverte du monde avec nous et créez des souvenirs impérissables.</p>
            </div>
            <div class="hero__contact">
                <p class="hero__contact-info">Auteur du thème : <?= $hero_auteur ?></p>
                <p class="hero__contact-info"><?= $hero_email ?></p>
                <p class="hero__contact-info"><?= $hero_adresse ?></p>
                <p class="hero__contact-info"><?= $hero_telephone ?></p>
                <a href="<?= $hero_cta_link ?>" class="hero__inscrire-btn"><?= $hero_cta_text ?></a>
                <div class="hero__social">
                  <div class="social-links">
                    <?php icone_sociaux ()?>
                    </div>
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