<?php

get_header();

if(is_home()){
	require 'pages/home.php';
}

else if(is_page()){
	require 'pages/page.php';
}

else if(is_singular()){
	require 'pages/singular.php';
}

else{
	require 'pages/404.php';
}

get_footer();
