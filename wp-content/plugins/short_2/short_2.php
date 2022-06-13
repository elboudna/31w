<?php

/*
*pluging name : short_2
*Description : structure dd'extenstion utilisant plusieurs dossiers
*Author : elboudna
*Pluging URI: https://github.com/elboudna
*/

function sh2_31w_enqueue()
{
    $version_css = filemtime(plugin_dir_path(__FILE__) . 'style.css');
    $version_js = filemtime(plugin_dir_path(__FILE__) . 'script/message.js');

    wp_enqueue_style(   'sh2_31w_css',
                        plugin_dir_url(__FILE__, "/style.css"),
                        array(),
                        $version_css);
    
    wp_enqueue_script(   'sh2_31w_js',
                        plugin_dir_url(__FILE__, "/script/message.js"),
                        array(),
                        $version_js, true);

}

add_action('wp_enqueue_style','wp_enqueue_script');

function genere_adresse(){ 
    $contenu = '<code class="code__adresse">';
    $contenu .= "3800, rue Sherbrooke Est
    Montréal (Québec) H1X 2A2 | 514 254-7131 ";
    $contenu .= '</code>';
    $contenu .= '<button id="mon_bouton">OK</button>';
    /////////////////////////////////////script
    return $contenu;
}

add_shortcode('adresse', 'genere_adresse');  