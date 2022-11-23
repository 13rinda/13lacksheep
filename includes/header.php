<div class="wrap" style="text-align:center">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <p class="mb-0 phone"><span class="mailus"></span> <a href="#"></a><span
                        class="mailus">email us:</span> <a href="#">blacksheepeventhouse@gmail.com</a></p>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center
                  justify-content-center"><span class="fa fa-facebook"><i
                                    class="sr-only">Facebook</i></span></a>
                        <a href="https://www.instagram.com/13lacksheep/?hl=en"
                           class="d-flex align-items-center justify-content-center"><span
                                class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                    </p>
                </div>
                <a href="#googtrans(en|en)" class="lang-en lang-select"
                   data-lang="en" style="color:white"><img src="images/u.png"
                                                           height="20px" width="20px"> English </a>&nbsp; &nbsp;

                <a href="#googtrans(en|fr)" class="lang-es lang-select"
                   data-lang="fr" style="color:white"><img src="images/f.png"
                                                           height="20px" width="20px"> French</a>
            </div>
        </div>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en',
                    layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT
                }, 'google_translate_element');
            }

            function triggerphpEvent(element, eventName) {
                var event;
                if (document.createEvent) {
                    event = document.createEvent('phpEvents');
                    event.initEvent(eventName, true, true);
                    element.dispatchEvent(event);
                } else {
                    event = document.createEventObject();
                    event.eventType = eventName;
                    element.fireEvent('on' + event.eventType, event);
                }
            }

            jQuery('.lang-select').click(function () {
                var theLang = jQuery(this).attr('data-lang');
                jQuery('.goog-te-combo').val(theLang);

                //alert(jQuery(this).attr('href'));
                window.location = jQuery(this).attr('href');
                location.reload();

            });
        </script>
        <script type="text/javascript"
                src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark
      ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php">13lackSheep <span></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="rooms.php" class="nav-link">Special
                        Pricing</a></li>
                <li class="nav-item"><a href="gift_shop.php" class="nav-link">Gift
                        Shop</a></li>
                <li class="nav-item"><a href="blog.php" class="nav-link">Publications</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>