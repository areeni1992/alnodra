<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/swiper.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.fancybox.min.js" type="text/javascript"></script>


<script>

    $(document).ready(function () {
        var swiper = new Swiper('.theSlider .swiper-container', {
            navigation: {
                nextEl: '.theSlider .swiper-button-next',
                prevEl: '.theSlider .swiper-button-prev',
            },
            pagination: {
                el: '.theSlider .swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
        var swiper = new Swiper('.new .swiper-container', {
            slidesPerView: 4,
            spaceBetween: 0,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.new .swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.new .swiper-button-next',
                prevEl: '.new .swiper-button-prev',
            },
        });
    });



</script>

