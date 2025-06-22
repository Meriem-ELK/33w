<?php
/*
*Template-part Hero.php
* Permet d'afficher la section hero
*/
?>

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