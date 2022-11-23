<!DOCTYPE html>
<?php include('includes/head.php')?>
  <body>

  <?php include("includes/header.php")?>
    <!-- Second container -->

    <div class="hero-wrap js-fullheight header-bgimage-mobile"
      style="background-image: url('images/bg1.jpg');"
      data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
    </div>
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-6 wrap-about">
            <h2>Come check out this Black Sheep!</h2>
            <p>This was previously a commercial property, which has been
              renovated for over $150 000 into this luxury 3990 square feet
              estate. Not only does this black house stand out on its block, but
              it stands out, period. It. Is. A. Black Sheep. Atypical. Unique.
              One of One. </p>
            <div class="img img-2 mb-4" id="content-desktop"
              style="background-image: url(images/about.jpg);">
            </div>
            <div id="content-mobile">
              <center> <img src="images/about.jpg" height="400px" width="350px">
              </center>
            </div>
            <div class="ftco-section ftco-book col-md-8" style="top: 40%; left:
              6%;" id="content-desktop">
              <center>
                <form method="POST" id="appointment-form"
                  name="appointment-form" class="appointment-form "
                  action="https://script.google.com/macros/s/AKfycbxhQoLZxC8rNxN6BXoKqT8bjumniftaQ7JVomMLe89TpIzYR2rpOnwYEXBzqcM4SLMYAw/exec">
                  <!-- <input type="hidden" class="form-control" id="mailto" value="blacksheepeventhouse@gmail.com"> -->
                  <input type="hidden" class="form-control" name="emailtype"
                    id="emailtype" value="reservation">
                  <center><a
                      href="https://www.airbnb.ca/rooms/49062148?preview_for_ml=true&source_impression_id=p3_1636679453_osGa%2FA7KVRlyVWBa&guests=1&adults=1"
                      class="btn btn-primary">Book on AirBnb</a>
                    <a href="https://13lacksheep.com/rooms.html" class="btn
                      btn-primary">Book with Discounts</a> </center>
                  <br><br>
                  <h3 class="mb-3">Send Reservation Request</h3>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control"
                          placeholder="Full Name" id="fullname" name="fullname">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="email" class="form-control" name="mailfrom"
                          id="mailfrom" placeholder="Email">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-wrap">
                          <div class="icon"><span class="ion-md-calendar"></span></div>
                          <input type="text" class="form-control
                            appointment_date-check-in" placeholder="Check-In"
                            id="checkin" name="checkin">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-wrap">
                          <div class="icon"><span class="ion-md-calendar"></span></div>
                          <input type="text" class="form-control
                            appointment_date-check-out" placeholder="Check-Out"
                            id="checkout" name="checkout">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="form-field">
                          <div class="select-wrap">
                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                            <select name="adults" id="adults"
                              class="form-control">
                              <option value="">Guests</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="5"><5</option>
                              <option value="10"><10</option>
                              <option value="20"><20</option>
                              <option value="30"><30</option>
                              <option value="40"><40</option>
                              <option value="50"><=50</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-wrap">
                          <div class="select-wrap">
                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                            <div class="icon"><span class="ion-ios-clock"></span></div>
                            <input type="text" class="form-control
                              appointment_time" placeholder="Check-in Time"
                              id="time" name="time">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control"
                          placeholder="Phone number" id="phone" name="phone">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-wrap">
                          <div class="icon"><span class="ion-ios-clock"></span></div>
                          <input type="text" class="form-control"
                            placeholder="Promo Code" id="promo code" name="promo
                            code">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="g-recaptcha"
                        data-sitekey="6LfciCUjAAAAAOgp6mqTQQLC5zuuVujIp6351gYH"></div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="submit" value="Book Now" class="btn
                          btn-primary py-3 px-4" id="booking-now">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </center>
            <br>
            <div id="content-mobile">
              <center><a
                  href="https://www.airbnb.ca/rooms/49062148?preview_for_ml=true&source_impression_id=p3_1636679453_osGa%2FA7KVRlyVWBa&guests=1&adults=1"
                  class="btn btn-primary">Book on AirBnb</a>
                <a href="https://13lacksheep.com/rooms.html" class="btn
                  btn-primary">Book with Discounts</a> </center> </div>
            <center>
              <div class="ftco-section ftco-book col-md-8" id="content-mobile"
                style="bottom: 2%; border-radius: 10%;">

                <form method="POST" id="appointment-form"
                  name="appointment-form" class="appointment-form "
                  action="https://script.google.com/macros/s/AKfycbxhQoLZxC8rNxN6BXoKqT8bjumniftaQ7JVomMLe89TpIzYR2rpOnwYEXBzqcM4SLMYAw/exec">
                  <!-- <input type="hidden" class="form-control" id="mailto" value="blacksheepeventhouse@gmail.com"> -->
                  <input type="hidden" class="form-control" name="emailtype"
                    id="emailtype" value="reservation">
                  <h4 class="mb-3">Send Reservation Request</h4>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control"
                          placeholder="Full Name" id="fullname" name="fullname">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="email" class="form-control" name="mailfrom"
                          id="mailfrom" placeholder="Email">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-wrap">
                          <div class="icon"><span class="ion-md-calendar"></span></div>
                          <input type="text" class="form-control
                            appointment_date-check-in" placeholder="Check-In"
                            id="checkin" name="checkin">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-wrap">
                          <div class="icon"><span class="ion-md-calendar"></span></div>
                          <input type="text" class="form-control
                            appointment_date-check-out" placeholder="Check-Out"
                            id="checkout" name="checkout">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="form-field">
                          <div class="select-wrap">
                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                            <select name="adults" id="adults"
                              class="form-control">
                              <option value="">Guests</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="5"><5</option>
                              <option value="10"><10</option>
                              <option value="20"><20</option>
                              <option value="30"><30</option>
                              <option value="40"><40</option>
                              <option value="50"><=50</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-wrap">
                          <div class="select-wrap">
                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                            <div class="icon"><span class="ion-ios-clock"></span></div>
                            <input type="text" class="form-control
                              appointment_time" placeholder="Check-in Time"
                              id="time" name="time">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control"
                          placeholder="Phone number" id="phone" name="phone">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-wrap">
                          <div class="icon"><span class="ion-ios-clock"></span></div>
                          <input type="text" class="form-control"
                            placeholder="Promo Code" id="promo code" name="promo
                            code">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="submit" value="Book Now" class="btn
                          btn-primary py-3 px-4" id="booking-now">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </center>

          </div>

          <div class="col-md-6 wrap-about ftco-animate">
            <div class="heading-section">
              <div class="pl-md-5">
                <h2 class="mb-2">Amenities</h2>
              </div>
            </div>
            <div class="pl-md-5">
              <p> </p>
              <div class="row">
                <div class="services-2 col-lg-6 d-flex w-100">
                  <div class="icon d-flex justify-content-center
                    align-items-center">
                    <span class="flaticon-first"></span>
                  </div>
                  <div class="media-body pl-3">
                    <h3 class="heading">Multiple Parking Spots</h3>
                    <p>At 13lacksheep there are 3-4 driveway parking spaces and
                      free street parking. If free parking doesn't excite you,
                      then you must be the passenger, and it's time you pay your
                      friend some gas money! </p>
                  </div>
                </div>
                <div class="services-2 col-lg-6 d-flex w-100">
                  <div class="icon d-flex justify-content-center
                    align-items-center">
                    <span class="flaticon-first"></span>
                  </div>
                  <div class="media-body pl-3">
                    <h3 class="heading">Multi-Purpose Open Space</h3>
                    <p>This front foyer is nearly 1900 square feet! This makes
                      it a great dance floor, lounge, movie room [with our 65
                      inch smart wall mounted TV], the possibilities are truly
                      endless. </p>
                  </div>
                </div>
                <div class="services-2 col-lg-6 d-flex w-100">
                  <div class="icon d-flex justify-content-center
                    align-items-center">
                    <span class="flaticon-first"></span>
                  </div>
                  <div class="media-body pl-3">
                    <h3 class="heading">Versatile Outdoor Space</h3>
                    <p>This unique "L" shaped property has a front-side space
                      that can be used for various purposes. We got the plugs!
                      There's outlets outside for you to plug in a BBQ, custom
                      lighting, you can even charge your phone outside while you
                      cry about your ex's wedding we hosted.</p>
                  </div>
                </div>
                <div class="services-2 col-lg-6 d-flex w-100">
                  <div class="icon d-flex justify-content-center
                    align-items-center">
                    <span class="flaticon-first"></span>
                  </div>
                  <div class="media-body pl-3">
                    <h3 class="heading">Kitchen and Gift Shop</h3>
                    <p>As if the new kitchen appliances are not enough, there is
                      even a wine cooler! This open concept kitchen with a 16
                      feet counter, 6 bar stools, and next to a walk-in pantry
                      that has been converted into a gift shop! No price
                      gouging, everything is 5$ or less!</p>
                  </div>
                </div>
                <div class="services-2 col-lg-6 d-flex w-100">
                  <div class="icon d-flex justify-content-center
                    align-items-center">
                    <span class="flaticon-first"></span>
                  </div>
                  <div class="media-body pl-3">
                    <h3 class="heading">Wifi</h3>
                    <p>Okay do you really think we would forget about the wifi?
                      ... How else would you tag our instagram @13lacksheep with
                      your event pictures? Tag us and maybe we will gift you
                      with a future discount... key word MAYBE. Depends how well
                      you clean up after yourselves. Hmmph. </p>
                  </div>
                </div>
                <div class="services-2 col-lg-6 d-flex w-100">
                  <div class="icon d-flex justify-content-center
                    align-items-center">
                    <span class="flaticon-first"></span>
                  </div>
                  <div class="media-body pl-3">
                    <h3 class="heading">Central Heating/Air Conditioning</h3>
                    <p>"Well woman the way the time cold, I wanna be keepin' you
                      warm
                      I got the right temperature fi shelter you from the storm"
                      ... If you are reading this in french, the previous line
                      probably made no sense, but you should listen to
                      Temperature by Sean Paul.</p>
                  </div>
                </div>
                <div class="services-2 col-lg-6 d-flex w-100">
                  <div class="icon d-flex justify-content-center
                    align-items-center">
                    <span class="flaticon-first"></span>
                  </div>
                  <div class="media-body pl-3">
                    <h3 class="heading">Fireman's Pole</h3>
                    <p>If you think this pole has anything to do with a
                      fireman... honey, you're too young for this event house.
                      This aint no Ronald Mcdonald playhouse. Please don't
                      'Bruk' your headtop trying to 'bruk it down'!</p>
                  </div>
                </div>
                <div class="services-2 col-lg-6 d-flex w-100">
                  <div class="icon d-flex justify-content-center
                    align-items-center">
                    <span class="flaticon-first"></span>
                  </div>
                  <div class="media-body pl-3">
                    <h3 class="heading">Sleeping Accommodations</h3>
                    <p>We chose not to take up space with typical bedrooms and
                      stationary beds. Instead we have 8 foldable full size 6
                      inch mattresses. See our instagram for visuals. Karen, if
                      you got a sensative back, bring your own bed.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-4 d-flex services align-self-stretch px-4
            ftco-animate">
            <div class="d-block services-wrap text-center">
              <div class="img" style="background-image:
                url(images/location.png);"></div>
              <div class="media-body py-4 px-3">
                <h3 class="heading">Map Direction</h3>
                <p>This mesmerizing venue is located in Saint-Janvier, 5 km past
                  Blainville and Mirabel Premium Outlets. Only about a ~25 min.
                  drive from Montreal--I mean that's how long it takes me, but I
                  also have only one demerit point left because of speeding
                  tickets...so...perhaps I should not comment. Anyways, if you
                  search our property on google images, note that this view is
                  outdated and reflect this property before the 150k glow-up!</p>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex services align-self-stretch px-4
            ftco-animate">
            <div class="d-block services-wrap text-center">
              <div class="img" style="background-image: url(images/);"></div>
              <div class="media-body py-4 px-3">
                <h3 class="heading">Our Services [A.K.A: We have friends🔌]</h3>
                <p>Do you need sound systems? Dj set up? Dance floor lights? We
                  offer great prices! We can even provide decorations for your
                  special occassions or give you DIY decor rentals. We also have
                  professional make-up artists, nail technicians and
                  aestheticians to visit you right at our location. Oh yeah! We
                  even have security cameras and lawyers which you may be
                  needing when we pursue you for property damages! LOL</p>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex services align-self-stretch px-4
            ftco-animate">
            <div class="d-block services-wrap text-center">
              <div class="img" style="background-image:
                url(images/services-3.jpg);"></div>
              <div class="media-body py-4 px-3">
                <h3 class="heading">Catering</h3>
                <p>"What she order, fish fillet?" Let us know what you want, and
                  we will check with our partner restaurants and private chefs
                  if they can fulfil your order! From custom cakes, desserts,
                  appetizers, to dinner... just tell us what you need and we
                  will gladly provide you with a quote! Depending on what you
                  need, we can have it set up at 13lacksheep prior to your
                  check-in, or we can deliver them at your time of choice.</p>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div>
      <center>
        <video controls width="400">


          <source src="images/jimmy.mp4"
            type="video/mp4">

          Sorry, your browser doesn't support embedded videos.
        </video>
      </center>
    </div>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Your Feedback is Important...</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image:
                    url(images/logo_1.png)">
                  </div>
                  <div class="text pl-4">
                    <span class="quote d-flex align-items-center
                      justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Book with us, leave an honest feedback and obtain a
                      discount for your next reservation!</p>
                    <p class="name">13lackSheep</p>
                    <span class="position">Event House</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image:
                    url(images/logo_1.png)">
                  </div>
                  <div class="text pl-4">
                    <span class="quote d-flex align-items-center
                      justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Book with us, leave an honest feedback and obtain a
                      discount for your next reservation!</p>
                    <p class="name">13lackSheep</p>
                    <span class="position">Event House</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image:
                    url(images/logo_1.png)">
                  </div>
                  <div class="text pl-4">
                    <span class="quote d-flex align-items-center
                      justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Book with us, leave an honest feedback and obtain a
                      discount for your next reservation!</p>
                    <p class="name">13lackSheep</p>
                    <span class="position">Event House</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image:
                    url(images/logo_1.png)">
                  </div>
                  <div class="text pl-4">
                    <span class="quote d-flex align-items-center
                      justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Book with us, leave an honest feedback and obtain a
                      discount for your next reservation!</p>
                    <p class="name">13lackSheep</p>
                    <span class="position">Event House</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image:
                    url(images/logo_1.png)">
                  </div>
                  <div class="text pl-4">
                    <span class="quote d-flex align-items-center
                      justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Book with us, leave an honest feedback and obtain a
                      discount for your next reservation!</p>
                    <p class="name">13lackSheep</p>
                    <span class="position">Event House</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="ftco-intro" style="background-image: url(images/bg_1.jpg);"
      data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-9 text-center">
            <h2>Ready to get started</h2>
            <p class="mb-4">It’s safe to book online with us! Get your dream
              stay in clicks or drop us a line with your questions.</p>
            <p class="mb-0"><a href="#appointment-form" class="btn btn-primary
                px-4 py-3">Book now</a> <a href="contact.html#contact-wrapper"
                class="btn btn-white px-4 py-3">Contact us</a></p>
          </div>
        </div>
      </div>
    </section>
<?php include("includes/footer.php")?>

  <div id="ftco-loader" class="show fullscreen"><svg class="circular"
      width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22"
        fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path"
          cx="24" cy="24" r="22" fill="none" stroke-width="4"
          stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<?php include("includes/scripts.php")?>
    </body>
  </html>
