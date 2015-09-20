<?php get_header(); ?>
<div id="content" class="site-content">
<?php

if(is_home() || is_front_page()){
	require 'pages/home.php';
}

else if(is_page()){
	require 'pages/page.php';
}

else if(is_single()){
	require 'pages/single.php';
}

else{
	require 'pages/404.php';
}

?>
</div>
<?php get_footer();
