<?php

/*
* Configuration des nouveaux panneaux du customizer
*/

function theme_31w_customize_register($wp_customize) 
{
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.

    // Section hero 
    $wp_customize->add_section('hero_section', array(
    'title' => __('Section Hero - Accueil', 'theme_31w'),
    'priority' => 30,
        ));


    // Section Footer 
    $wp_customize->add_section('footer_section', array(
        'title' => __('Pied de page - Footer', 'theme_31w'),
        'priority' => 40,
    ));


/* ================================================  Hero titre */ 
             /* Configuration du champ */ 
            $wp_customize->add_setting('hero_title', array(
                'default' => __('Voyagez Autrement avec Exclu Voyages', 'theme_31w'),
                'sanitize_callback' => 'sanitize_text_field'
            ));
            /* Configuration du contrôleur */ 
            $wp_customize->add_control('hero_title', array(
                'label' => __('Titre', 'theme_31w'),
                'section' => 'hero_section',
                'type' => 'text',
            ));

/* ================================================  Hero Auteur */ 
            /* Configuration du champ */ 
            $wp_customize->add_setting('hero_auteur', array(
                'default' => __('', 'theme_31w'),
                'sanitize_callback' => 'sanitize_text_field'
            ));
            /* Configuration du contrôleur */
            $wp_customize->add_control('hero_auteur', array(
                'label' => __('Auteur', 'theme_31w'),
                'section' => 'hero_section',
                'type' => 'text',
            ));

/* ================================================  Hero email */ 
            /* Configuration du champ */ 
            $wp_customize->add_setting('hero_email', array(
                'default' => __('', 'theme_31w'),
                'sanitize_callback' => 'sanitize_text_field'
            ));
            /* Configuration du contrôleur */
            $wp_customize->add_control('hero_email', array(
                'label' => __('Email', 'theme_31w'),
                'section' => 'hero_section',
                'type' => 'text',
            )); 
           

 /* ================================================  Hero adresse */ 
            /* Configuration du champ */ 
            $wp_customize->add_setting('hero_adresse', array(
                'default' => __('3800 sherbrook-est', 'theme_31w'),
                'sanitize_callback' => 'sanitize_text_field'
            ));
            /* Configuration du contrôleur */
            $wp_customize->add_control('hero_adresse', array(
                'label' => __('Adresse', 'theme_31w'),
                'section' => 'hero_section',
                'type' => 'text',
            ));  
            


 /* ================================================  Hero Téléphone */ 
            /* Configuration du champ */ 
            $wp_customize->add_setting('hero_telephone', array(
                'default' => __('', 'theme_31w'),
                'sanitize_callback' => 'sanitize_text_field'
            ));
            /* Configuration du contrôleur */
            $wp_customize->add_control('hero_telephone', array(
                'label' => __('Téléphone', 'theme_31w'),
                'section' => 'hero_section',
                'type' => 'text',
            ));  


 /* ================================================  Hero sous-titre */ 
            /* Configuration du champ */ 
            $wp_customize->add_setting('hero_subtitle', array(
                'default' => __('', 'theme_31w'),
                'sanitize_callback' => 'sanitize_text_field'
            ));
            /* Configuration du contrôleur */
            $wp_customize->add_control('hero_subtitle', array(
                'label' => __('Sous-titre', 'theme_31w'),
                'section' => 'hero_section',
                'type' => 'text',
            ));  

/* ================================================  Hero Bouton inscription */ 
            /* Configuration du champ */ 
            $wp_customize->add_setting('hero_cta_text', array(
                'default' => __('', 'theme_31w'),
                'sanitize_callback' => 'sanitize_text_field'
            ));
            /* Configuration du contrôleur */
            $wp_customize->add_control('hero_cta_text', array(
                'label' => __('Bouton', 'theme_31w'),
                'section' => 'hero_section',
                'type' => 'text',
            )); 


/* ================================================  Hero Lien bouton */ 
            /* Configuration du champ */ 
            $wp_customize->add_setting('hero_cta_link', array(
                'default' => __('', 'theme_31w'),
                'sanitize_callback' => 'sanitize_text_field'
            ));
            /* Configuration du contrôleur */
            $wp_customize->add_control('hero_cta_link', array(
                'label' => __('Lien bouton', 'theme_31w'),
                'section' => 'hero_section',
                'type' => 'text',
            )); 

/* ================================================  L'image de Background */ 
            /* Configuration du champ */
            $wp_customize->add_setting('hero_background', array(
                'default' => '',
                'sanitize_callback' => 'esc_url_raw'
            ));

            /* Configuration du contrôleur */
            $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
                'label' => __('Image en arrière plan', 'theme_31w'),
                'section' => 'hero_section',
            )));


/* ================================================  Couleur du texte de la section hero  (Champ couleur)*/ 
            /* Configuration du champ */
            $wp_customize->add_setting('hero_couleur', array(
                'default' => '',
                'sanitize_callback' => 'esc_url_raw',
            ));

            /* Configuration du contrôleur */
            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
                'label' => __('Couleur du texte', 'theme_31w'),
                'section' => 'hero_section',
            )));



     // ================================================
    // TITRES DES SECTIONS
    // ================================================
    
    // Titre section Contact
    $wp_customize->add_setting('footer_contact_titre', array(
            'default' => __('', 'theme_31w'),
            'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control('footer_contact_titre', array(
        'label' => __('Titre section Contact', 'theme_31w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    // Titre section Services
    $wp_customize->add_setting('footer_services_titre', array(
        'default' => __('', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control('footer_services_titre', array(
        'label' => __('Titre section Services', 'theme_31w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    // Titre section Navigation
    $wp_customize->add_setting('footer_navigation_titre', array(
        'default' => __('', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control('footer_navigation_titre', array(
        'label' => __('Titre section Navigation', 'theme_31w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    // Titre section Recherche
    $wp_customize->add_setting('footer_search_titre', array(
        'default' => __('', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control('footer_search_titre', array(
        'label' => __('Titre section Recherche', 'theme_31w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    // Titre section Réseaux sociaux
    $wp_customize->add_setting('footer_social_titre', array(
        'default' => __('', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control('footer_social_titre', array(
        'label' => __('Titre section Réseaux sociaux', 'theme_31w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    // ================================================
    // INFORMATIONS DE CONTACT
    // ================================================
    
    // Label Adresse
    $wp_customize->add_setting('footer_adresse_label', array(
        'default' => __('', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control('footer_adresse_label', array(
        'label' => __('Label Adresse', 'theme_31w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    // Adresse complète
    $wp_customize->add_setting('footer_adresse', array(
        'default' => __('', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control('footer_adresse', array(
        'label' => __('Adresse complète', 'theme_31w'),
        'section' => 'footer_section',
        'type' => 'textarea'
    ));

    // Label Téléphone
    $wp_customize->add_setting('footer_tel_label', array(
        'default' => __('', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control('footer_tel_label', array(
        'label' => __('Label Téléphone', 'theme_31w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    // Numéro de téléphone
    $wp_customize->add_setting('footer_tel', array(
        'default' => __('', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control('footer_tel', array(
        'label' => __('Numéro de téléphone', 'theme_31w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    // Label Email
    $wp_customize->add_setting('footer_email_label', array(
        'default' => __('', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control('footer_email_label', array(
        'label' => __('Label Email', 'theme_31w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    // Adresse email
    $wp_customize->add_setting('footer_email', array(
        'default' => __('', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control('footer_email', array(
        'label' => __('Adresse email', 'theme_31w'),
        'section' => 'footer_section',
        'type' => 'email',
    ));

    // ================================================
    // COPYRIGHT
    // ================================================
    
    // Nom du site
    $wp_customize->add_setting('footer_site_nom', array(
        'default' => __('', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control('footer_site_nom', array(
        'label' => __('Nom du site (copyright)', 'theme_31w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    // Texte du copyright
    $wp_customize->add_setting('footer_copyright_text', array(
        'default' => __('', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control('footer_copyright_text', array(
        'label' => __('Texte du copyright', 'theme_31w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));
}


add_action('customize_register', 'theme_31w_customize_register');

?>