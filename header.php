<!----------------------------:-:
:-:                           :-:
:-:       hej@jeppe.io        :-:
:-:                           :-:
:-:----------------------------->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(true,' · ','right'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php get_template_part('template-parts/header/top','nav'); ?>
<?php get_template_part('template-parts/header/site','header'); ?>
<?php get_template_part('template-parts/side/site','nav'); ?>
