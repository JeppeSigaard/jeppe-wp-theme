<?php 

$mb[] = array(
    'id' => 'comment_meta',
    'title' => __( 'tl:dr;', 'rwmb' ),
    'pages' => array('post'),
    'context' => 'side',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Tekst', 'rwmb' ),
            'id'    => "tldr",
            'type' => 'textarea',
            ),
    ),
);