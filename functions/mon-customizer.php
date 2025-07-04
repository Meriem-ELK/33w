<?php

/*
* Configuration des nouveaux panneaux du customizer
*/

function theme_31w_customize_register($wp_customize) 
{
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.

    $wp_customize->add_section('hero_section', array(
    'title' => __('Section Hero - Accueil', 'theme_31w'),
    'priority' => 30,
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
                'sanitize_callback' => 'esc_url_raw',
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

}

add_action('customize_register', 'theme_31w_customize_register');



?>