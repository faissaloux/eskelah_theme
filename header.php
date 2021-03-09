<!-- 
 * Copyright (C) Soulaimane Takiddine 
 * SITE  : http://takiddine.com
 * EMAIL : takiddine.job@gmail.com
-->





<?php global $theme_setting; ?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js" lang="zxx" > <!--<![endif]-->
<head>
 
    <!--=== META TAGS ===-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>" />
    <meta name="author" content="Name">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     
    <!--=== LINK TAGS ===-->
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
 
    <!-- Browser Color Styling -->
    <meta name="theme-color" content="#FFBE2E"/>
    <meta name="msapplication-navbutton-color" content="#FFBE2E"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#FFBE2E" />
  
    <!--=== TITLE ===-->  
    <title><?php if (is_home()) { echo bloginfo('name');
    } elseif (is_404()) {
    echo '404 الصفحة غير موجودة';
    } elseif (is_category()) {
    echo 'تصنيف:'; wp_title('');
    } elseif (is_search()) {
    echo 'نتائج البحث';
    } elseif ( is_day() || is_month() || is_year() ) {
    echo 'الارشيف:'; wp_title('');
    } else {
    echo wp_title('');
    }
    ?></title>
    
    <!-- For Google -->
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <meta name="author" content="" />
    <meta name="copyright" content="" />
    <meta name="application-name" content="" />

    <!-- For Facebook -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:description" content="" />

    <!-- For Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:image" content="" />

    <?php wp_head(); ?>
    

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://eskelah.com/wp-content/themes/eskelah-wp-theme/core/assets/vectors/logo.png" />

  





    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />
<style>
.contact-form input[type=email], .contact-form input[type=tel], .contact-form input[type=text], .contact-form input[type=url] {
    width: 100%;
}
</style>


</head>

<body <?php body_class(); ?> >
    


<!-- Phone Menu -->
<div class="menu hidden-lg hidden-sm hidden-md">
  <nav class="menu__nav">
    <ul class="r-list menu__list">
    <?php
        $menuLocations = get_nav_menu_locations(); 
        $menuID = $menuLocations['primary_menu']; 
        $primaryNav = wp_get_nav_menu_items($menuID);
        foreach ( $primaryNav as $navItem ) {
        echo '<li class="menu__group">
              <a class="r-link menu__link" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>
              </li>';
        }
    ?>
    </ul>
  </nav>
  <div class="hamburger">
    <button class="r-button hamburger__button menu__toggle">
      <span class="hamburger__label">Open menu</span>
    </button>
  </div>  
</div>