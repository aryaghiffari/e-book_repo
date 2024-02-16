<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?= $title; ?></title>

    <!-- 

Sentra Template

https://templatemo.com/tm-518-sentra

-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="/sentra/css/bootstrap.min.css">
    <link rel="stylesheet" href="/sentra/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/sentra/css/fontAwesome.css">
    <link rel="stylesheet" href="/sentra/css/light-box.css">
    <link rel="stylesheet" href="/sentra/css/owl-carousel.css">
    <link rel="stylesheet" href="/sentra/css/templatemo-style.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <script src="/sentra/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>



    <?= $this->renderSection('konten'); ?>

    <section class="footer">
        <p>Created by Arya Ghiffari 210511004 TI21D</p>
    </section>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="/sentra/js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>

    <script src="/sentra/js/vendor/bootstrap.min.js"></script>

    <script src="/sentra/js/plugins.js"></script>
    <script src="/sentra/js/main.js"></script>

    <script>
        // Hide Header on on scroll down
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = $('header').outerHeight();

        $(window).scroll(function(event) {
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = $(this).scrollTop();

            // Make sure they scroll more than delta
            if (Math.abs(lastScrollTop - st) <= delta)
                return;

            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight) {
                // Scroll Down
                $('header').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if (st + $(window).height() < $(document).height()) {
                    $('header').removeClass('nav-up').addClass('nav-down');
                }
            }

            lastScrollTop = st;
        }
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

</body>

</html>