<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?></title>
  </head>

  <body <?php body_class(); ?>>
      <div class="header clearfix">
        <div class="container">
          <?php
            wp_nav_menu(array(
              'theme_location'  => 'primary',
              'depth'           => 2,
              'container'       => false,
              'menu_class'      => 'nav nav-pills pull-right',
              'fallback'        => 'wp_bootstrap_navwalker::fallback',
              'walker'          => new wp_bootstrap_navwalker()
            ));
          ?>
          
          <?php if(has_custom_logo()): ?>
            <?php the_custom_logo(); ?>
          <?php else: ?>
            <h1 class="title-text-heading"><?php bloginfo('name'); ?></h1>
          <?php endif; ?>
        </div>
      </div>