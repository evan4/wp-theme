<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" >
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>

<?php // We are loading our theme directory style.css by queuing scripts in our functions.php file, 
	// so if you want to load other stylesheets,
	// I would load them with an @import call in your style.css
?>

<?php wp_head(); 
// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website. 
// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions. 
// Move it if you like, but I would keep it around.
?>

</head>

<body>
<header class="header">
	<div class="wrap">
        <div class="clearfix">
            <a href="<?php echo esc_url( home_url( '/' ) );?>" class="header__logo"
               title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) );?>">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo.png"
                     alt="<?php bloginfo( 'description' );?>">
            </a>
            <?php wp_nav_menu(array('menu'=>'main-menu',  'menu_class' => 'main-menu', 'container' => '', 'container_class' => '',  'theme_location'  => 'main-menu')); ?>
            <ul class="header__right">
                <li>
                    <a class="btn btn_transparent callback" href="#callback">Заказать звонок</a>
                </li>
                <li>
                    <a href="tel:+73462990222">+7 (3462) 99-02-22</a>
                </li>
            </ul>
        </div>
        <h1 class="header__caption"><?php bloginfo( 'description' );?></h1>
        <p class="header__desc">Мы на совесть отремонтируем вашу технику за короткий срок и по доступной цене с гарантией 90 дней!</p>
        <a class="btn callback" href="#callback">Вызвать мастера в течение 1 часа</a>
        <div class="header__man"></div>
	</div>
</header><!-- #masthead .site-header -->
<div class="header__trinagle"></div>

<main class="main"><!-- start the page containter -->
