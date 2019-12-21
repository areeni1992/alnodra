<script src="assets/js/jQuery3.4.1.js"></script>
<script>
    $(document).ready(function () {

        $('.videopannel .video-play-link').on('click', function(e){
            e.preventDefault();
            var $link = $(this).attr('href'),
                $parent = $(this).parents('.videopannel');

            $parent.find('.video-play').addClass('d-none');
            $parent.find('.video-player').removeClass('d-none').addClass('d-block');
            $parent.find('.video-player iframe').attr('src', $link);
        });


    });
</script>