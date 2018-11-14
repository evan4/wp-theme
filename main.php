<?php /* Template Name: Main */ ?>
<?php
get_header(); ?>
<?php if (have_posts()) {
    // Do we have any posts/pages in the databse that match our query?

    // лист услуг

    echo apply_filters('the_content', get_page(11)->post_content);

    // Мы ремонтируем

    echo apply_filters('the_content', get_page(13)->post_content);

    // Типичные неисправности

    echo apply_filters('the_content', get_page(18)->post_content);

    // Расчет стоимости

    echo apply_filters('the_content', get_page(36)->post_content);

    // Обратная связь

    echo apply_filters('the_content', get_page(26)->post_content); ?>
    <div class="map clearfix">
        <div class="wrap">
            <ul class="map__list">
                <li class="map__item">
                    <p>Сургут, Крылова 36</p>
                    <p>+7 (3462) 888-888</p>
                    <p>09:00-22:00</p>
                    <div class="map__container" id="map"></div>
                </li>
                <li class="map__item">
                    <p>Сургут, Ленина 41</p>
                    <p>+7 (3462) 333-100</p>
                    <p>09:00-22:00</p>
                    <div class="map__container" id="map1"></div>
                </li>
                <li class="map__item">
                    <p>Сургут, Комсомольски 21</p>
                    <p>+7 (3462) 70-70-98</p>
                    <p>09:00-22:00</p>
                    <div class="map__container" id="map2"></div>
                </li>
            </ul>
        </div>
    </div>

    <?php
} // OK, I think that takes care of both scenarios (having a page or not having a page to show) ?>

<?php
get_footer(); ?>