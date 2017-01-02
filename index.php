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
							<img src="assests/images/7ed80e5772d6328829c7add2928b3542.jpg" alt="work1 image" />
						</div>
						<div class="single-item popular">
							<img src="assests/images/1.0x0.jpg" alt="work1 image" />
						</div>
						<div class="single-item latest">
							<img src="assests/images/1438728825207-P-2916320.jpg" alt="work1 image" />
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
							<img src="assests/images/Dioufond-New-Pullover-font-b-Men-b-font-Gradient-O-Neck-font-b-Mens-b-font.jpg" alt="work1 image" />
						</div>
						<div class="single-item popular">
							<img src="assests/images/-font-b-Men-b-font-font-b-Polo-b-font-font-b-Sweater-b-font.jpg" alt="work1 image" />
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
                        <a href="#">see more.. &gt;</a>
                        <a href="#">buy &gt;</a>
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
                        <a href="#">see more.. ></a>
                        <a href="#">buy ></a>
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
                        <div class="col-xs-12 col-sm-4 col-md-4"><img src="assests/images/1.0x0.jpg" alt="work1 image" /></div>
                        <div class="col-xs-12 col-sm-4 col-md-4"><img src="assests/images/7ed80e5772d6328829c7add2928b3542.jpg" alt="work1 image" /></div>
                        <div class="col-xs-12 col-sm-4 col-md-4"><img src="assests/images/1438728825207-P-2916320.jpg" alt="work1 image" /></div>
                        <div class="col-xs-12 col-sm-4 col-md-4"><img src="assests/images/1443050487403-P-3164497.jpg" alt="work1 image" /></div>
                        <div class="col-xs-12 col-sm-4 col-md-4"><img src="assests/images/1447812673525-P-3464558.jpg" alt="work1 image" /></div>
                        <div class="col-xs-12 col-sm-4 col-md-4"><img src="assests/images/20160906101300_35902.jpg" alt="work1 image" /></div>
                        <div class="col-xs-12 col-sm-4 col-md-4"><img src="assests/images/Dioufond-New-Pullover-font-b-Men-b-font-Gradient-O-Neck-font-b-Mens-b-font.jpg" alt="work1 image" /></div>
                        <div class="col-xs-12 col-sm-4 col-md-4"><img src="assests/images/-font-b-Men-b-font-font-b-Polo-b-font-font-b-Sweater-b-font.jpg" alt="work1 image" /></div>
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