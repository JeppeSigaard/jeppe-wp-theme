<?php
/* 	Jeg nørkler med en switchboard-agtig løsning på template files
	Mest for at få en templates/ dir til alle de filer, der normalt ligger og roder i temaets rod.
	Jeg har været nød til at oprette en seperat 404.php for for at få korrekt responskode.
	Hvis du ved hvordan jeg kan gøre det anderledes, smid mig en besked.
*/

get_header();

// 	Start wrapper
get_template_part('template-parts/common/content','before');

// Billeder (redirect)
if ( is_attachment() ){
    echo 'attachment';
    global $post;
    wp_redirect(get_permalink($post->post_parent));
}

// 	Home og front page
elseif(is_home() || is_front_page()){require 'templates/home.php';}

//	Arkiver
elseif(is_archive() || is_category() ){require 'templates/archive.php';}

//	Sider (post type page, dvs. i princippet også CPT'er)
elseif(is_page()){require 'templates/page.php';}

//	Posts (post type post, dvs. i princippet også CPT'er)
elseif(is_single()){require 'templates/single.php';}

// 	End wrapper
get_template_part('template-parts/common/content','after');

//	K thanks bye :-)
get_footer();