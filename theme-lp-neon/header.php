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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?> /css/main.min.css" />

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
    <header id='js-header'>
      <div class="container">
        <a href="<?php echo get_permalink(get_page_by_path('Home')) ?>" class="logo"></a>
        <nav>
          <div class="dropdown js-dropdown">
            <div class="item">
              <strong>Cartão de crédito</strong>
              <p>Cartão de crédito sem anuidade</p>
            </div>
            <div class="item">
              <strong>Cartão pré-pago</strong>
              <p>Cartão de débito internacional Neon</p>
            </div>
            <div class="item">
              <strong>Neon Mais</strong>
              <p>4 saques grátis para quem compra com a Neon</p>
            </div>
            <div class="item">
              <strong>Investimentos</strong>
              <p>A evolução da poupança</p>
            </div>
            <div class="item">
              <strong>Empréstimo pessoal</strong>
              <p>Faça uma simulação de empréstimo pessoal</p>
            </div>
          </div>
          
          <?php
            $args = array(
              'menu' => 'Header Principal',
              'theme_location' => 'header-principal',
              'container' => false
            );
            wp_nav_menu( $args );
          ?>

          <button class="btn-secondary white">Abra sua conta digital</button>
          <button class="btn-mobile" id="js-btn-menu-mobile">
            <img src="<?php echo get_template_directory_uri()?> /img/btn-mobile.svg" alt="" />
          </button>
        </nav>
      </div>
    </header>



<div class="menu-mobile">
  <div class="overlay js-overlay"></div>
  <aside>
    <img src="<?php echo get_template_directory_uri()?> /img/logo-neon-color.svg" class="logo" alt="">

    <?php
            $args = array(
              'menu' => 'Header Principal',
              'theme_location' => 'header-principal',
              'container' => false
            );
            wp_nav_menu( $args );
          ?>
  </aside>
</div>