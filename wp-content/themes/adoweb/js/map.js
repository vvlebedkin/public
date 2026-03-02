document.addEventListener("DOMContentLoaded", () => {



	if (document.getElementById('map')) {

		let map = document.getElementById('map'),
		    coordinates = map.dataset.coordinates,
        arr = JSON.parse("[" + coordinates + "]");


	ymaps.ready(init);
    function init(){
        // Создание карты.
        var myMap = new ymaps.Map("map", {
            // Координаты центра карты.
            // Порядок по умолчанию: «широта, долгота».
            // Чтобы не определять координаты центра карты вручную,
            // воспользуйтесь инструментом Определение координат.
            center: arr,
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            zoom: 17
        }),
        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            hintContent: '',
            balloonContent: ''
        }, {

            iconColor: '#f2443c'
            // preset: 'islands#dotIcon'
            // // Опции.
            // // Необходимо указать данный тип макета.
            // iconLayout: 'default#image',
            // // Своё изображение иконки метки.
            // iconImageHref: 'images/baloon.png',
            // // Размеры метки.
            // iconImageSize: [70, 70],
            // // Смещение левого верхнего угла иконки относительно
            // // её "ножки" (точки привязки).
            // iconImageOffset: [-5, -38]
        }

        );

        myMap.behaviors.disable('scrollZoom');
        myMap.geoObjects.add(myPlacemark);
    }


		
	 }
    
 });

alert('map')