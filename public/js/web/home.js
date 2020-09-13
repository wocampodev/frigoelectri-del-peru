window.addEventListener('load', function(){
    new Glider(document.querySelector('.carousel__list'), {
        slidesToShow: 1,
        slidesToScroll: 1,
        //scrollLock: true,
        scrollLockDelay: 150,
        draggable: true,
        dots: '.carousel__indicators',
        arrows: {
            prev: '.carousel__previous',
            next: '.carousel__next'
        }
    });
});