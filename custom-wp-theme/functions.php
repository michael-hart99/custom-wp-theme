<?php

wp_enqueue_style('style', get_stylesheet_uri());

wp_enqueue_script('index', get_template_directory_uri() . '/js/index.js', array (), 1.0, true);
