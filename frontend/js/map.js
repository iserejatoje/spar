let mapInit = false

function elementInViewport(el) {
    let top = el.offsetTop
    let left = el.offsetLeft
    let width = el.offsetWidth
    let height = el.offsetHeight
    while (el.offsetParent) {
        el = el.offsetParent
        top += el.offsetTop
        left += el.offsetLeft
    }
    return (
        top < (window.scrollY + window.innerHeight) &&
        left < (window.scrollX + window.innerWidth) &&
        (top + height) > window.scrollY &&
        (left + width) > window.scrollX
    )
}

function initMap() {
    if (elementInViewport(document.getElementById('map')) && !mapInit) {
        mapInit = true
        let script = document.createElement("script")
        script.src = "https://api-maps.yandex.ru/2.1/?load=package.standard&apikey=f44f9a2d-2cef-4d09-a399-6ea9b5cedf55&lang=ru-RU"
        document.getElementsByTagName('body')[0].appendChild(script)
        script.onload = function () {
            ymaps.ready(function () {

                let map = new ymaps.Map('map', {
                    center: [55.358777, 86.038414],
                    zoom: 13,
                    controls: []
                }, {})
                let placemarkData = {
                    iconLayout: 'default#image',
                    iconImageHref: "data:image/svg+xml,%3Csvg width='61' height='73' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='30.26' cy='30.66' r='29.92' fill='%2328A928'/%3E%3Cpath fill='%2328A928' d='m10.13 52.78 20.1-20.1 20.1 20.1-20.1 20.1z'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M41.77 40.66c-1.87 1.59-3.9 3.26-6.5 2.74a3.75 3.75 0 0 1-1.8-.95 3.58 3.58 0 0 1-1-1.72 8.96 8.96 0 0 1-.08-3.5l10.58-.01-.29-.36a71.54 71.54 0 0 1-12.4-20.84 82.79 82.79 0 0 1-12.42 21.24l10.37-.02c-.06 1.38.26 3.07-.38 4.25-.64 1.3-2.16 1.95-3.55 1.98-4.18-.39-6.96-4.06-8.56-7.53-1.85-4.26-1.16-10.12 1.74-13.76 4.05-5.37 11.2-7.53 17.86-5.48a15.7 15.7 0 0 1 9.46 8.44 14.79 14.79 0 0 1-3.03 15.52Zm5.98-18.4a20.18 20.18 0 0 0-6.43-6.93c-5.8-3.84-14.43-4.14-20.5-.9-6.23 3.18-10.52 9.85-10.07 17.1.38 7.77 6.06 14.54 13.4 16.66 7.78 2.46 16.6-.17 21.63-6.16 4.35-5.3 5.45-13.62 1.97-19.78Z' fill='%23fff'/%3E%3C/svg%3E",
                    iconImageSize: [60, 72],
                    iconImageOffset: [-30, -72],
                }

                let objects = []

                if (typeof shopListData === 'undefined') {
                    let shopListData = [
                        {name: 'MEGASPAR', time: '9:00-23:00', coordinates: '43.319290224476,76.93276024057', address: 'Алматы, ул. Абая, 156'},
                    ]
                    Object.keys(shopListData).forEach((key) => {
                        let coordinatesPart = shopListData[key]["coordinates"].split(',')
                        let coordinates = [coordinatesPart[0], coordinatesPart[1]]
                        objects.push(new ymaps.Placemark(coordinates, {
                            "balloonContent": '<div style="padding: 10px;"><h3 style="margin: 0 0 10px 0;">' + shopListData[key]["name"] + '</h3>' +  shopListData[key]["address"] + '<br/>Время работы: ' + shopListData[key]["time"] + '</div>'
                        }, placemarkData))
                    });

                } else {
                    Object.keys(shopListData).forEach((key) => {
                        let coordinatesPart = shopListData[key]["coordinates"].split(',')
                        let coordinates = [coordinatesPart[0], coordinatesPart[1]]
                        objects.push(new ymaps.Placemark(coordinates, {
                            "balloonContent": '<div style="padding: 10px;"><h3 style="margin: 0 0 10px 0;">' + shopListData[key]["name"] + '</h3>' +  shopListData[key]["address"] + '<br/>Время работы: ' + shopListData[key]["time"] + '</div>'
                        }, placemarkData))
                    });
                }
                map.behaviors.disable('scrollZoom')

                ymaps.geoQuery(objects).addToMap(map);

                map.setBounds(map.geoObjects.getBounds())
                map.setZoom(map.getZoom() - 0.5)

                $('.map-item').click(function (e) {
                    map.setCenter([$(this).data('lat'), $(this).data('lng')]);
                    map.setZoom(17)
                    e.preventDefault()
                })
            })
        }
    }
}

if (document.getElementById('map')) {
    initMap()

    window.addEventListener('scroll', () => {
        initMap()
    })
}