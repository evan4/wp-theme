(function () {
    // Как только будет загружен API и готов DOM, выполняем инициализацию
    ymaps.ready(init);

    function init() {

        // Создание экземпляра карты и его привязка к контейнеру с
        // заданным id ("map")
        var myMap = new ymaps.Map('map', {
            // При инициализации карты, обязательно нужно указать
            // ее центр и коэффициент масштабирования
            center: [61.285472, 73.357271],
            zoom: 16,
            controls: []
        });

        // Создаём макет содержимого.
        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div class="iconLayout" style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        );

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Размеры метки.
            iconImageSize: [88, 117],
            // Своё изображение иконки метки.
            iconImageHref: '/wp-content/themes/asu/img/placeholder-filled-tool-shape-for-maps.svg',
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-50, -117]
        });


        // Добавление метки на карту
        myMap.geoObjects.add(myPlacemark);

        myMap.behaviors.disable('scrollZoom');

        myMap.container.fitToViewport();


        // map2
        var myMap1 = new ymaps.Map('map1', {
            // При инициализации карты, обязательно нужно указать
            // ее центр и коэффициент масштабирования
            center: [61.254662, 73.386358],
            zoom: 16,
            controls: []
        });

        // Создаём макет содержимого.
        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div class="iconLayout" style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        );

        myPlacemark1 = new ymaps.Placemark(myMap1.getCenter(), {}, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Размеры метки.
            iconImageSize: [88, 117],
            // Своё изображение иконки метки.
            iconImageHref: '/wp-content/themes/asu/img/placeholder-filled-tool-shape-for-maps.svg',
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-50, -117]
        });

        // Добавление метки на карту
        myMap1.geoObjects.add(myPlacemark1);

        myMap1.behaviors.disable('scrollZoom');

        myMap1.container.fitToViewport();

        // map3
        var myMap2 = new ymaps.Map('map2', {
            // При инициализации карты, обязательно нужно указать
            // ее центр и коэффициент масштабирования
            center: [61.238488, 73.452070],
            zoom: 16,
            controls: []
        });

        // Создаём макет содержимого.
        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div class="iconLayout" style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        );

        myPlacemark2 = new ymaps.Placemark(myMap2.getCenter(), {}, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Размеры метки.
            iconImageSize: [88, 117],
            // Своё изображение иконки метки.
            iconImageHref: '/wp-content/themes/asu/img/placeholder-filled-tool-shape-for-maps.svg',
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-50, -117]
        });

        // Добавление метки на карту
        myMap2.geoObjects.add(myPlacemark2);

        myMap2.behaviors.disable('scrollZoom');

        myMap2.container.fitToViewport();
    }

})();