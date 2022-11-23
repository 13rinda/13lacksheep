<!DOCTYPE html>
<?php include('includes/head.php')?>
<body>

<?php include("includes/header.php")?>
<!-- Second container -->

<section class="hero-wrap " id="content-mobile">
    <img src="images/test.jpg" height="200px" width="100%">
    <div class="overlay"></div>

</section>
<section class="hero-wrap hero-wrap-2" id="content-desktop">
    <img src="images/test.jpg" height="400px" width="100%">
    <div class="overlay"></div>

</section>


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 320px;
            position: relative;
            margin: auto;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 1.5s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 5s;
            animation-name: fade;
            animation-duration: 5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media screen and (max-width: 600px) {
            .text {
                font-size: 11px
            }

            .img1 {
                height: 300px;
                width: 300px;
            }
        }
    </style>
</head>

</br>
</br>
<h2>
    <center>Service 1: Custom Cakes</center>
</h2>
<p></p>

<div class="slideshow-container" data-cycle="3000">

    <div class="mySlides fade">
        <div class="numbertext">1 / 8</div>
        <img class="img1" src='services/cake/0.jpg' height="400px" min-width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 8</div>
        <img src='services/cake/1.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 8</div>
        <img src='services/cake/2.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">4 / 8</div>
        <img src='services/cake/3.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">5 / 8</div>
        <img src='services/cake/4.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">6 / 8</div>
        <img src='services/cake/5.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">7 / 8</div>
        <img src='services/cake/6.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">8 / 8</div>
        <img src='services/cake/7.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

</div>
<br>
<h2>
    <center>Service 2: Decor</center>
</h2>
<p></p>
<div class="slideshow-container" data-cycle="3000">

    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src='services/decor/0.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src='services/decor/1.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3/ 3</div>
        <img src='services/decor/2.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

</div>
<br>
<h2>
    <center>Service 3: Snack</center>
</h2>
<p></p>
<div class="slideshow-container" data-cycle="3000">

    <div class="mySlides fade">
        <div class="numbertext">1 / 12</div>
        <img src='services/snack/1.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 12</div>
        <img src='services/decor/2.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3/ 12</div>
        <img src='services/snack/3.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>
    <div class="mySlides fade">
        <div class="numbertext">4 / 12</div>
        <img src='services/snack/4.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">5 / 12</div>
        <img src='services/snack/5.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">6/ 12</div>
        <img src='services/snack/6.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>
    <div class="mySlides fade">
        <div class="numbertext">7 / 12</div>
        <img src='services/snack/7.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">8 / 12</div>
        <img src='services/snack/8.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">9/ 12</div>
        <img src='services/snack/9.webp' height="400px" width="100%">
        <div class="text"></div>
    </div>
    <div class="mySlides fade">
        <div class="numbertext">10 / 12</div>
        <img src='services/snack/10.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">11 / 12</div>
        <img src='services/snack/11.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">12/ 12</div>
        <img src='services/snack/12.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>
</div>
<br>
<h2>
    <center>Service 4: Servers</center>
</h2>
<p></p>
<div class="slideshow-container" data-cycle="3000">

    <div class="mySlides fade">
        <div class="numbertext">1 / 4</div>
        <img src='services/servers/0.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 4</div>
        <img src='services/servers/1.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3/ 4</div>
        <img src='services/servers/2.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">4/ 4</div>
        <img src='services/servers/3.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

</div>
<br>
<h2>
    <center>Service 5: ALFY'S</center>
</h2>
<p></p>
<div class="slideshow-container" data-cycle="3000">

    <div class="mySlides fade">
        <div class="numbertext">1 / 9</div>
        <img src='services/alfys/1.png' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 9</div>
        <img src='services/alfys/2.png' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3/ 9</div>
        <img src='services/alfys/3.png' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">4/ 9</div>
        <img src='services/alfys/4.png' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">5/ 9</div>
        <img src='services/alfys/5.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">6/ 9</div>
        <img src='services/alfys/6.png' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">7/ 9</div>
        <img src='services/alfys/7.png' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">8/ 9</div>
        <img src='services/alfys/8.png' height="400px" width="100%">
        <div class="text"></div>
    </div>
    <div class="mySlides fade">
        <div class="numbertext">9/ 9</div>
        <img src='services/alfys/9.png' height="400px" width="100%">
        <div class="text"></div>
    </div>
</div>
<br>
<h2>
    <center>Service 6: DJ</center>
</h2>
<p></p>
<div class="slideshow-container" data-cycle="3000">

    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src='services/DJ/0.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src='services/DJ/1.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3/ 3</div>
        <img src='services/DJ/2jpg.jpg' height="400px" width="100%">
        <div class="text"></div>
    </div>

</div>
<script>
    var slideshowContainers = document.getElementsByClassName("slideshow-container");
    /* For each container get starting variables */
    for (let s = 0; s < slideshowContainers.length; s++) {
        /* Read the new data attribute */
        var cycle = slideshowContainers[s].dataset.cycle;
        /* Find all the child nodes with class mySlides */
        var slides = slideshowContainers[s].querySelectorAll('.mySlides');
        var slideIndex = 0;
        /* Now we can cycle slides, but this recursive function must have parameters */
        /* slides and cycle never change, those are unique for each slide container */
        /* slideIndex will increase during each iteration */
        showSlides(slides, slideIndex, cycle);
    }
    ;

    /* Function is alsmost same, but now it uses 3 new parameters */
    function showSlides(slides, slideIndex, cycle) {
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        ;
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        ;
        slides[slideIndex - 1].style.display = "block";
        /* Calling same function, but with new parameters and cycle time */
        setTimeout(function () {
            showSlides(slides, slideIndex, cycle)
        }, cycle);
    }
</script>
</body>
</br>
</br>
</section>
<!-------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------->
<section>
    </br>
    </br>
</section>
<!--------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------->
<?php include("includes/footer.php");?>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>

<?php include("includes/scripts.php");?>


</body>
</html>
