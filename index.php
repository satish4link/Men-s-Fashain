<?php include ('header.php'); ?>
<!-- isotopes section starts -->
    <section class="isotopes">
        <div class="container-fluid">
 			<div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="isotopes-content">
                        <ul>
							<li class="active" data-filter="*"><a href="">all</a></li>
							<li data-filter=".latest"><a href="">latest products</a></li>
							<li  data-filter=".popular"><a href="">popular products</a></li>
						</ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-1"></div>
                <div class="col-xs-12 col-sm-12 col-md-10">
					<div class="product-items">
						<div class="single-item latest">
							<img src="assests/images/$_32.JPG" alt="work1 image" />
						</div>
						<div class="single-item popular">
							<img src="assests/images/gucci-mens-watch-2016.jpeg" alt="work1 image" />
						</div>
						<div class="single-item latest">
							<img src="assests/images/jeans.png" alt="work1 image" />
						</div>
						<div class="single-item popular">
							<img src="assests/images/1443050487403-P-3164497.jpg" alt="work1 image" />
						</div>
						<div class="single-item latest">
							<img src="assests/images/1447812673525-P-3464558.jpg" alt="work1 image" />
						</div>
						<div class="single-item popular">
							<img src="assests/images/20160906101300_35902.jpg" alt="work1 image" />
						</div>
						<div class="single-item latest">
							<img src="assests/images/Nice-track-pants-for-men-2015-newest.jpg" alt="work1 image" />
						</div>
						<div class="single-item popular">
							<img src="assests/images/image1xl.jpg" alt="work1 image" />
						</div>
					</div>
				</div>
                <div class="col-xs-12 col-sm-12 col-md-1"></div>
            </div>
       </div>
    </section>
<!-- isotopes section ends -->


<!-- products section starts -->
    <section class="products">
        <div class="container">
 			<div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="products-content">
                        <h2>check this out.</h2>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="wear">
                        <h3>hoodie</h3>
                        <p>stremm life white</p>
                        <a href="topwear.php">see more.. &gt;</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="items-product">
                        <img src="assests/images/redhoodie.jpg" alt="hoodie" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="items-product">
                        <img src="assests/images/jeans.png" alt="jeans" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="wear">
                        <h3>jeans</h3>
                        <a href="bottomwear.php">see more.. ></a>
                    </div>
                </div>
            </div>
       </div>
    </section>
<!-- products section ends -->


<!-- slide section starts -->
    <section class="slider">
        <div class="row">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="slick-slider-heading">
                        <h2>accesories</h2>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="slick-slider">
                        <div class="col-xs-12 col-sm-4 col-md-4"><img src="assests/images/gucci-mens-watch-2016.jpeg" alt="work1 image" /></div>
                        <div class="col-xs-12 col-sm-4 col-md-4"><img src="assests/images/Hot-Sale-Cowather-font-b-Mens-b-font-font-b-Wallets-b-font-Leather-Genuine-Luxury.jpg" alt="work1 image" /></div>
                        <div class="col-xs-12 col-sm-4 col-md-4"><img src="assests/images/khaki-leather-bag-genuine-leather-canvas-bag-men-leather-satchel-briefcase-messenger-bag-laptop-bag-510x443.jpg" alt="work1 image" /></div>
                        <div class="col-xs-12 col-sm-4 col-md-4"><img src="assests/images/-font-b-Men-b-font-Hasp-font-b-Wallet-b-font-font-b-Leather-b.jpg" alt="work1 image" /></div>
                        <div class="col-xs-12 col-sm-4 col-md-4"><img src="assests/images/$_32.JPG" alt="work1 image" /></div>
                        <div class="col-xs-12 col-sm-4 col-md-4"><img src="assests/images/download.jpg" alt="work1 image" /></div>
                        <div class="col-xs-12 col-sm-4 col-md-4"><img src="assests/images/3809BELT.jpg" alt="work1 image" /></div>
                        <div class="col-xs-12 col-sm-4 col-md-4"><img src="assests/images/New York Nite.jpg" alt="work1 image" /></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- slide section ends -->
    <script type="text/javascript" src="assests/slick/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          $('.slick-slider').slick({
              slidesToShow: 3,
              slidesToScroll: 1,
              autoplay: true,
              autoplaySpeed: 2000,
            });
        });
    </script>
    
<?php
include ('contactus.php');
include ('footer.php');
?>