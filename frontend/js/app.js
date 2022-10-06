import jQuery from "jquery";
window.$ = window.jQuery = jQuery;

$('[data-component] .tab').click(function () {
    $(this).addClass('active').siblings().removeClass('active')
    let $component = $(this).parent().data('component')
    let $index = $(this).index()
    $('.' + $component).eq($index).show().siblings().hide()
})

$('select').on('change', function () {
    if ($(this).find('option:selected').val() !== '0') {
        $(this).addClass('active')
    } else {
        $(this).removeClass('active')
    }
})