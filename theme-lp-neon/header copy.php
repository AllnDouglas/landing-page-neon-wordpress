<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" href="<?php echo get_template_directory_uri()?> /favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?> /css/main.min.css" />

    <!-- Primary Meta Tags -->
    <title><?php bloginfo('name') ?><?php wp_title('-') ?></title>
    <meta name="title" content="Redesign - Landing Page Neon" />
    <meta
      name="description"
      content="A conta digital certa pra cuidar bem do seu dinheiro"
    />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://landing-pg-neon.netlify.app/" />
    <meta property="og:title" content="Redesign - Landing Page Neon" />
    <meta
      property="og:description"
      content="A conta digital certa pra cuidar bem do seu dinheiro"
    />
    <meta
      property="og:image"
      content="https://landing-pg-neon.netlify.app/share-img.jpg"
    />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta
      property="twitter:url"
      content="https://landing-pg-neon.netlify.app/"
    />
    <meta property="twitter:title" content="Redesign - Landing Page Neon" />
    <meta
      property="twitter:description"
      content="A conta digital certa pra cuidar bem do seu dinheiro"
    />
    <meta
      property="twitter:image"
      content="https://landing-pg-neon.netlify.app/share-img.jpg"
    />
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="container">
        <a href="<?php echo get_permalink(get_page_by_path('Home')) ?>" class="logo"><img src="<?php echo get_template_directory_uri()?> /img/logo.svg" alt="Logo Neon" /></a>
        <nav>
          <?php 
          if(is_page('Home')){
          ?>
          <?php
            $args = array(
              'menu' => 'Header Principal',
              'theme_location' => 'header-principal',
              'container' => false
            );
            wp_nav_menu( $args );
          ?>


          <ul>
            <li><a href="#">Produtos</a></li>
            <li><a href="#">Conta digital PJ</a></li>
            <li><a href="<?php echo get_permalink(get_page_by_path('Sobre')) ?>"> Quem somos</a></li>
            <li><a href="<?php echo get_permalink(get_page_by_path('Blog')) ?>">Blog</a></li>
            <li><a href="<?php echo get_permalink(get_page_by_path('Contato')) ?>">Ajuda</a></li>
          </ul>


          <?php } else { ?>
            <ul>
  
            <li><a href="<?php echo get_permalink(get_page_by_path('Sobre')) ?>"> Quem somos</a></li>
            <li><a href="<?php echo get_permalink(get_page_by_path('Blog')) ?>">Blog</a></li>
         
          </ul>
            <?php }?>
          <button class="btn-secondary white">Abra sua conta digital</button>
          <button class="btn-mobile">
            <img src="<?php echo get_template_directory_uri()?> /img/btn-mobile.svg" alt="" />
          </button>
        </nav>
      </div>
    </header>


