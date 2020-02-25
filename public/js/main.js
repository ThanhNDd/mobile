var swiper = new Swiper('.swiper1', {
    pagination: {
        el: '.swiper-pagination1',
        dynamicBullets: true,
        paginationClickable: true
    },
});

var swiper2 = new Swiper('.swiper2',{
    slidesPerView: 3
});
var swiper3 = new Swiper('.swiper3',{
    slidesPerView: 3
});
var swiper4 = new Swiper('.swiper4',{
    slidesPerView: 3
});
var swiper5 = new Swiper('.swiper5',{
    slidesPerView: 3
});
var swiper6 = new Swiper('.swiper6',{
    slidesPerView: 3
});
$(document).ready(function () {
    $('a[href="#tab-home"]').click(function(){
        set_active_tab('tab-home');
        // $(this).addClass('tab-link-active');
    });
    $('a[href="#tab-wishlist"]').click(function(){
        set_active_tab('tab-wishlist');
        // $(this).addClass('tab-link-active');
    });
    $('a[href="#tab-brand"]').click(function(){
        set_active_tab('tab-brand');
        // $(this).addClass('tab-link-active');
    });
    $('a[href="#tab-cart"]').click(function(){
        set_active_tab('tab-cart');
        // $(this).addClass('tab-link-active');
    });
    $('a[href="#tab-account"]').click(function(){
        set_active_tab('tab-account');
        // $(this).addClass('tab-link-active');
    });

});

function set_active_tab(id) {
    let idactive = $('.page').find('.tab-active').attr('id');
    $("[id="+idactive+"]").removeClass('tab-active');
    $('.page').find('[id='+id+']').addClass('tab-active');
    $('a[href="#'+idactive+'"]').removeClass('tab-link-active');
    $('a[href="#'+id+'"]').addClass('tab-link-active');
}
