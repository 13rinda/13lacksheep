<!DOCTYPE html>
<?php include('includes/head.php')?>
  <body>

  <?php include("includes/header.php")?>
    <!-- Second container -->

    <section class="hero-wrap" id="content-mobile">
      <img src="images/shopping.jpg" height="200px" width="100%">
      
    </section>
    <section class="hero-wrap hero-wrap-2" id="content-desktop">
      <img src="images/shopping.jpg" height="400px" width="100%">
      <div class="overlay"></div>
   
    </section>
  
    <section>
      <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

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
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media screen and (max-width: 600px) {
    .text {
        font-size: 11px
    }
    img1 {
      height: 300px;
      width: 300px;
    }
}
.box{
    font-family: 'Poppins', sans-serif;
    text-align: center;
    overflow: hidden;
    position: relative;
}
.box:before,
.box:after{
    content: "";
    background: #333;
    transform: scale(0);
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    transition: all 0.5s ease 0s;
}
.box:after{
    background: #000;
    border: 1px solid #aaa;
    top: 10px;
    left: 10px;
    right: 10px;
    bottom: 10px;
    transition: all 0.5s ease 0.2s;
}
.box:hover:before{
    opacity: 0.5;
    transform: scale(1);
}
.box:hover:after{
    opacity: 0.35;
    transform: scale(1);
}
.box img{
    width: 100%;
    height: auto;
}
.box .box-content{
    color: #fff;
    width: 85%;
    filter: blur(5px);
    opacity: 0;
    transform: translateX(-50%) translateY(-50%);
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 2;
    transition: all 0.4s ease 0.3s;
}
.box:hover .box-content{
    filter: blur(0);
    opacity: 1;
}
.box .title{
    font-size: 25px;
    font-weight: 200;
    text-transform: capitalize;
    margin: 0 0 1px;
    color: white;
}
.box .post{
    font-size: 15px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
    display: block;
    margin: 0 0 10px;
}
.box .icon{
    padding: 0;
    margin: 0;
    list-style: none;
}
.box .icon li{
    margin: 0 3px;
    display: inline-block;
}
.box .icon li a{
    color: #fff;
    font-size: 14px;
    line-height: 24px;
    height: 27px;
    width: 27px;
    border: 1px solid rgba(255,255,255,0.5);
    box-shadow: 5px 5px 0 rgba(0, 0, 0, 0.7);
    display: block;
    transition: all 0.3s ease 0s;
}
.box .icon li a:hover{
    color: #fff;
    background-color: #000;
}
@media only screen and (max-width:990px){
    .box{ margin: 0 0 30px; }
}

</style>
</head>
<body>
</br>
</br>

 <div class="container">
    <div class="row">
        <div class="col-md-3 col-md-offset-1">
            <div class="box">
                <img src="images/earring.jpg">
                <div class="box-content">
                    <h3 class="title">$3.00</h3>
                    <span class="post">Earrings</span>
                </div>
                <ul class="icon">
                  
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box">
                <img src="images/men.jpg">
                <div class="box-content">
                    <h3 class="title">$3.00</h3>
                    <span class="post">Men's Jewlery</span>
                </div>
                <ul class="icon">
                  
                </ul>
            </div>
        </div>
          <div class="col-md-3">
            <div class="box">
                <img src="images/pNecklace.jpg">
                <div class="box-content">
                    <h3 class="title">$3.00</h3>
                    <span class="post">Premium Necklaces</span>
                </div>
                <ul class="icon">
                  
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box">
                <img src="images/necklace.jpg">
                <div class="box-content">
                    <h3 class="title">$2.00</h3>
                    <span class="post">Basic Neckalces</span>
                </div>
                <ul class="icon">
                  
                </ul>
            </div>
        </div>
           <div class="col-md-3">
            <br>
            <div class="box">
                <img src="images/star.jpg">
                <div class="box-content">
                    <h3 class="title">$10.00</h3>
                    <span class="post">Bath Bomb Set</span>
                </div>
                <ul class="icon">
                  
                </ul>
            </div>
        </div>

           <div class="col-md-3" >
             <br>
            <div class="box">

                <img src="images/lotion.jpg">
                <div class="box-content">
                    <h3 class="title">$20.00</h3>
                    <span class="post">Mist & Lotion Set</span>
                </div>
                <ul class="icon">
                  
                </ul>
            </div>
        </div>
           <div class="col-md-3">
              <br>
            <div class="box">
         
                <img src="images/diamond.jpg" >
                <div class="box-content">
                    <h3 class="title">$4.00</h3>
                    <span class="post">Dimond Bath Bomb</span>
                </div>
                <ul class="icon">
                  
                </ul>
            </div>
        </div>
           <div class="col-md-3">
              <br>
            <div class="box">
            
                <img src="images/">
                <div class="box-content">
                    <h3 class="title">Description</h3>
                    <span class="post">price</span>
                </div>
                <ul class="icon">
                  
                </ul>
            </div>
        </div>
    </div>
</div>
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
 <?php include("includes/footer.php")?>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<?php include("includes/scripts.php")?>
  </body>
</html>