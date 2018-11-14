<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

</main><!-- / end page container, begun in the header -->
<div id="callback" class="white-popup popup mfp-with-anim mfp-hide">
    <span class="close">x</span>
    <p class="popup__caption">Вызов мастера</p>
    <p class="popup__sub">Введите ваше имя и телефон. Наш специалист свяжется с вами, чтобы ответить на ваши вопросы</p>
    <?php echo do_shortcode("[contact-form-7 id='4' title='Заказать звонок']"); ?>
    <div class="popup__bigtriangle"></div>
    <div class="popup__triangles"></div>
</div>

<footer class="footer clearfix">
	<div class="wrap">
        <span class="footer__copy">&copy; <?php echo date('Y').' '.esc_attr( get_bloginfo( 'name', 'display' ) );?></span>
        <?php wp_nav_menu(array('menu'=>'main-menu',  'menu_class' => 'main-menu', 'container' => '', 'container_class' => '',  'theme_location'  => 'main-menu')); ?>
    </div>
</footer><!-- #colophon .site-footer -->

<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>

</body>
</html>
