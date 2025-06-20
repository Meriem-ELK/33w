<?php

/**
 * le gabarit searchform.php
 * permet d'afficher un formulaire de recherche
 */
?>
    <form class="recherche__form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <div class="recherche__champ">
            <input type="search" class="recherche__input" aria-label="Recherche" placeholder="Recherche..." value="<?php echo get_search_query(); ?>" name="s">
            <button class="recherche__bouton" type="submit">
            <i class="fas fa-search recherche__icon"></i>
            </button>
        </div>
    </form>
</form>