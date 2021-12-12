
<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>
<?php include('includes/slider.php'); ?>
<section class="py-3 bg-primary">
    <div class="container">
    	<div class="row">
    		<div class="row no-gutters">
    			<div class="col-md-4 d-flex">
<div class="intro d-lg-flex w-100">    					
	<div class="icon">
    						<span class="fa fa-home"></span>
    					</div>
    					<div class="text">
    						<h2>ACCOMODATION</h2>
    						<p>Designed to envelop guests in classic ambiance while offering every contemporary amenity sought by the modern traveller</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex">
    				<div class="intro d-lg-flex w-100">
    					<div class="icon">
    						<span class="fa fa-bars"></span>
    					</div>
    					<div class="text">
    						<h2>GAZEBOS</h2>
    						<p>At RivahSide Hotels we aim at offering the highest standards of hospitality and service at all of our hotels and lodges located at the best places in Kisumu county</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex">
    			<div class="intro d-lg-flex w-100 ">	
    					<div class="icon">
    						<span class ="fa fa-truck"></span>
    					</div>
    					<div class="text">
    						<h2>EXQUISITE BAR</h2>
    						<p>RivahSide Hotels and Resort has exquisite bars for the discerning drinker, by offering beers, soft drinks and whiskies with a huge heart</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
<section class="py-3 bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="main-heading text-white">RIVAHSIDE HOTELS</h4>
                <div class="underline bg-white mx-auto"></div>
                <p class="text-white">
                    Get the Best Price on booking your hotel rooms at Rivahsidehotels Booking.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="main-heading">Book Rooms</h4>
                <div class="underline mb-0"></div>
                <hr class="my-0">
            </div>
            
            <div class="col-md-12 mt-4">
                <div class="row">
                    <?php
                        $room_query = " SELECT * FROM rooms WHERE status='0' ";
                        $room_query_run = mysqli_query($con, $room_query);

                        if(mysqli_num_rows($room_query_run) > 0)
                        {
                            foreach($room_query_run as $room)
                            {
                                ?>
                                    <div class="col-md-4">
                                        <a href="view.php?room=<?= $room['id']; ?>" class="text-decoration-none">
                                            <div class="card-box">
                                                <div class="roomimage">
                                                    <img src="uploads/<?= $room['room_image']; ?>" class="" alt="<?= $room['room_name'] ?>">
                                                </div>
                                                <div class="card-box-body">
                                                    <h4 class="card-heading"><?= $room['room_name']; ?>
                                                        <button class="btn btn-sm btn-primary float-end text-white">Ksh.<?= $room['price']; ?></button>
                                                    </h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php
                            }
                        }
                        else
                        {
                            ?>
                                <h2 class="heading">No rooms found</h2>
                            <?php
                        }
                    ?>

                </div>
            </div>
        </div>    
    </div>
</section>
<link rel="shortcut icon" href="/university/img/logo.png" />

<section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center">
							<div class="img" style="background-image: url(images/kind-1.jpg);"></div>
							<h3>Brandy</h3>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center">
							<div class="img" style="background-image: url(images/prod-9.jpeg);"></div>
							<h3>Gin</h3>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center">
							<div class="img" style="background-image: url(images/kind-3.jpg);"></div>
							<h3>Rum</h3>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center">
							<div class="img" style="background-image: url(images/kind-4.jpg);"></div>
							<h3>Tequila</h3>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center ">
							<div class="img" style="background-image: url(images/kind-5.jpg);"></div>
							<h3>Vodka</h3>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center">
							<div class="img" style="background-image: url(images/kind-6.jpg);"></div>
							<h3>Whiskey</h3>
						</div>
					</div>

				</div>
			</div>
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section text-center">
          	<span class="subheading">Our Delightful offerings</span>
            <h2>PHOTO GALLERY</h2>
          </div>
        </div>
				<div class="row">
					<div class="col-md-3 d-flex">
						<div class="product ">
							<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-1.jpg);">
								<div class="desc">
									<p class="meta-prod d-flex">
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
									</p>
								</div>
							</div>
							<div class="text text-center">
								<span class="sale">book</span>
								<span class="category">ACCOMODATION</span>
								<h2></h2>
								<p class="mb-0"><span class="price price-sale"></span> <span class="price"></span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-flex">
						<div class="product ">
							<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-2.jpg);">
								<div class="desc">
									<p class="meta-prod d-flex">
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
									</p>
								</div>
							</div>
							<div class="text text-center">
								<span class="seller">book</span>
								<span class="category">GAZEBOS</span>
								<h2></h2>
								<span class="price"></span>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-flex">
						<div class="product ">
							<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/bg-13.jpeg);">
								<div class="desc">
									<p class="meta-prod d-flex">
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
									</p>
								</div>
							</div>
							<div class="text text-center">
								<span class="new">book</span>
								<span class="category">COTTAGES</span>
								<h2></h2>
								<span class="price"></span>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-flex">
						<div class="product ">
							<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-4.jpg);">
								<div class="desc">
									<p class="meta-prod d-flex">
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
									</p>
								</div>
							</div>
							<div class="text text-center">
								<span class="category">LIVE BAND</span>
								<h2></h2>
								<span class="price"></span>
							</div>
						</div>
					</div>

					<div class="col-md-3 d-flex">
						<div class="product">
							<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-5.jpg);">
								<div class="desc">
									<p class="meta-prod d-flex">
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
									</p>
								</div>
							</div>
							<div class="text text-center">
								<span class="category">Whiskey</span>
								<h2>Black Label</h2>
								<span class="price"></span>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-flex">
						<div class="product ">
							<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-6.jpg);">
								<div class="desc">
									<p class="meta-prod d-flex">
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
									</p>
								</div>
							</div>
							<div class="text text-center">
								<span class="category">Tequila</span>
								<h2>Macallan</h2>
								<span class="price"></span>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-flex">
						<div class="product">
							<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-7.jpg);">
								<div class="desc">
									<p class="meta-prod d-flex">
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
									</p>
								</div>
							</div>
							<div class="text text-center">
								<span class="category">Vodka</span>
								<h2>Old Monk</h2>
								<span class="price"></span>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-flex">
						<div class="product ">
							<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-8.jpg);">
								<div class="desc">
									<p class="meta-prod d-flex">
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
									</p>
								</div>
							</div>
							<div class="text text-center">
								<span class="category">Whiskey</span>
								<h2>Jameson Irish Whiskey</h2>
								<span class="price"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-4">
						<a href="#" class="btn btn-primary d-block">View All Products <span class="fa fa-long-arrow-right"></span></a>
					</div>
				</div>
			</div>
		</section>
  
    
<section class="section bg-lightgray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mb-3 text-center">
                <h4 class="main-heading">Our Testimonials</h4>
                <div class="underline mx-auto"></div>
                <p>
                    What people tell about our Riversidehotels Hotel Booking
                </p>
            </div>

            <div class="col-md-8">
                    <div class="owl-carousel testimonials owl-theme">

                        <div class="item text-center">
                            <div class="testi-card">
                                <div class="testi-content">
                                    <p>
                                        <i class="left-q-icon text-white fa fa-quote-left "> </i>
                                        Daraja Mbili Resort has a live music venue hosting home-grown talent from the likes of "zilizovuma" etc.Both of these factors attempt to create the original Kenyan atmosphere of and rich heritage
                                    </p>
                                    <h5 class="testi-title">Roger oduor</h5></br>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="item text-center">
                            <div class="testi-card">
                                <div class="testi-content">
                                    <p>
                                        <i class="left-q-icon text-white fa fa-quote-left "> </i>
                                        Enjoy both local and international cuisine and experience an array of culinary specialties prepared by our highly trained chefs. Start your day with a hearty breakfast or a nutritious light bite, innovative dishes prepared with only the freshest ingredients and dine in style at all our hotels.
                                    </p>
                                    <h5 class="testi-title">David</h5></br>
                                    <span class="position">business man</span>
                                </div>
                            </div>
                        </div>

                        <div class="item text-center">
                            <div class="testi-card">
                                <div class="testi-content">
                                    <p>
                                        <i class="left-q-icon text-white fa fa-quote-left "> </i>
                                       Ojola Resort is a convenient and quite environment for holding corporate meetings, seminars, workshops. The hotel is endowed with a spacious garden, serene environment and scenic beauty. This offers an ideal location for both social and corporate events.
                                    </p>
                                    <h5 class="testi-title">mungai</h5>
                                    </br>
                                    <span class="position">business man</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
            </div>
        </div>
    </div>
</section>

 <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center">
          	<span class="subheading">our</span>
            <h2>Services</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-lg-6 d-flex align-items-stretch">
          	<div class="blog-entry d-flex">
          		<a href="blog-single.html" class="block-20 img" style="background-image: url('images/image.jpg');">
              </a>
              <div class="text p-4 bg-light">
              	<div class="meta">
              		<p><span class="fa fa-calendar"></span> </p>
              	</div>
                <h3 class="heading mb-3"><a href="#">ACCOMODATION</a></h3>
                <p>Designed to envelop guests in classic ambiance while offering every contemporary amenity sought by the modern traveller, accommodation at our hotel merges African elegance, comfort and luxury with the latest 21st century technology. You will enjoy thoughtful complimentary touches like homemade cookies, chilled mineral water, newspapers and handpicked seasonal fruits.</p>
                <a href="#" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>

              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-stretch">
          	<div class="blog-entry d-flex">
          		<a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text p-4 bg-light">
              	<div class="meta">
              		<p><span class="fa fa-calendar"></span></p>
              	</div>
                <h3 class="heading mb-3"><a href="#">TRANQUIL BEAUTIFUL GAZEBOS</a></h3>
                <p>At RivahSide Hotels we aim at offering the highest standards of hospitality and service at all of our hotels and lodges located at the best places in Kisumu county. RivahSide Hotels offers high quality service in accommodation and conference room facilities at very competitive rates. You will enjoy the tranquil beauty gazebos.</p>
                <a href="#" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>

              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-stretch">
          	<div class="blog-entry d-flex">
          		<a href="blog-single.html" class="block-20 img" style="background-image: url('images/bg-20.jpeg');">
              </a>
              <div class="text p-4 bg-light">
              	<div class="meta">
              		<p><span class="fa fa-calendar"></span></p>
              	</div>
                <h3 class="heading mb-3"><a href="#">OJOLA COTTAGES & RESORT</a></h3>
                <p>Ojola Resort is a convenient and quite environment for holding corporate meetings, seminars, workshops. The hotel is endowed with a spacious garden, serene environment and scenic beauty</p>
                <a href="#" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>

              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-stretch">
          	<div class="blog-entry d-flex">
          		<a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_4.jpg');">
              </a>
              <div class="text p-4 bg-light">
              	<div class="meta">
              		<p><span class="fa fa-calendar"></span></p>
              	</div>
                <h3 class="heading mb-3"><a href="#">EXQUISITE BAR WITH
					LIVE BAND MUSIC</a></h3>
                <p>RivahSide Hotels and Resort has exquisite bars for the discerning drinker, by offering beers, soft drinks and whiskies with a huge heart. In addition, Daraja Mbili Resort has a live music venue hosting home-grown talent from the likes of "zilizovuma" etc</p>
                <a href="#" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>	

<?php include('includes/footer.php'); ?>
</body>
<script>
$(document).ready(function () {
        
    $('.testimonials').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })

});
</script>
<script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>
</html>