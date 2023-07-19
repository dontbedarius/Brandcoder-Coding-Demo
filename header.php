<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html <?php language_attributes(); ?>>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title></title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <header class="bg-dark py-12">
      <nav class="navbar">
         <a href="<?php echo esc_url(home_url('/')); ?>">
            <h3 class="text-2xl font-bold">Coding Demo</h3>
         </a>
      </nav>
   </header>