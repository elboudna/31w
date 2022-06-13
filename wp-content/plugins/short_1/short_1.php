<?php
/**
 * Plugin Name: short_1
 * Authot: Auristela Echeverria
 * Description: Un premier exemple de plugin utilisant shortcode
 * Plugin URI: https://github.com/AuriEcheand/extension-31w
 */

function genere_adresse(){
    ///////////////////////////CSS
    $contenu = "<style> 
                .code__adresse {
                   margin : 10px;
                   padding : 10px;
                   border-left : 4px solid #005;
                   background-color : #bbb;
                }
                </style>";

    ///////////////////////////HTML
    $contenu .= '<code class="code__adresse">';
    $contenu .= "3800, rue Sherbrooke Est
    Montréal (Québec) H1X 2A2 | 514 254-7131 ";
    $contenu .= '</code>';
    $contenu .= '<button id="mon_bouton">OK</button>';
    /////////////////////////////////////script 
    $contenu .= "<script>
    (function(){
        let elmOK = document.querySelector('#mon_bouton')
        elmOK.addEventListener('mousedown', function(){
            console.log('Bravo le script fonctionne')
        })
    })()
    </script>";
    return $contenu;
}
add_shortcode('adresse', 'genere_adresse');  