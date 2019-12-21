<script src="assets/js/jQuery3.4.1.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script>
    $(document).ready(function () {

        var swiper = new Swiper('.the-slider .swiper-container', {
            pagination: {
                el: '.the-slider .swiper-pagination',
                type: 'fraction',
            },
            navigation: {
                nextEl: '.the-slider .swiper-button-next',
                prevEl: '.the-slider .swiper-button-prev',
            },
        });
        var swiper = new Swiper('.costums .swiper-container', {
            slidesPerView: 5,
            spaceBetween: 30,
            freeMode: true,
            pagination: {
                el: '.costums .swiper-pagination',
                clickable: true,
            },
        });

        $('.header .menu-icon').on('click', function () {
            $('body').toggleClass('mobile-menu-active')
        });

        $(".header .searchicon").on('click', function () {
            $('body').toggleClass('search-active');
        });

        // $('.header .searchicon').on('blur', function () {
        //     $('body').removeClass('search-active')
        // });

        // make asmooth scrull
        var offset = 400,
            duration = 500;
        $(".header .links li a").on("click", function () {

            $("html, body").animate({

                scrollTop: $("#" + $(this).data('value')).offset().top + 40

            }, 1000);

        });
        // $(document).on('click mouseover', '.a', function () {
        //     alert("Hi");
        // });

    });
</script>