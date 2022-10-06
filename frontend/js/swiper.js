import Swiper, {Navigation, Pagination, Autoplay} from 'swiper';
import 'swiper/css';

let newsSliderParams = {
    speed: 800,
    modules: [Navigation],
    watchOverflow: true,
    navigation: {
        prevEl: '.news-slider .prev',
        nextEl: '.news-slider .next',
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        970: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1290: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
    },
}
new Swiper('.news-slider .swiper-container', newsSliderParams)

let saleSliderParams = {
    speed: 800,
    modules: [Navigation, Pagination],
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        el: ".sale-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + "</span>";
        },
    },
}
new Swiper('.sale-slider', saleSliderParams)