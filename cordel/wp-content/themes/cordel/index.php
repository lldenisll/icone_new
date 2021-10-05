<?php get_header(); ?>

	<!--	MAIN INTRO	-->
	<main class="main">
		<!--	SLIDER INTRO	-->
		<section class="home-slider position-relative pt-50">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">Trade-in offer</h4>
                                    <h2 class="animated fw-900">Supper value deals</h2>
                                    <h1 class="animated fw-900 text-brand">On all products</h1>
                                    <p class="animated">Save more with coupons & up to 70% off</p>
                                    <a class="animated btn btn-brush btn-brush-3" href="shop-product-right.html"> Shop Now </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-1" src="<?php echo get_template_directory_uri();?>/assets/imgs/slider/slider-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">Hot dogs promotions</h4>
                                    <h2 class="animated fw-900">Fashion Trending</h2>
                                    <h1 class="animated fw-900 text-7">Great Collection</h1>
                                    <p class="animated">Save more with coupons & up to 20% off</p>
                                    <a class="animated btn btn-brush btn-brush-2" href="shop-product-right.html"> Discover Now </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-2" src="<?php echo get_template_directory_uri();?>/assets/imgs/slider/slider-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">Upcoming Offer</h4>
                                    <h2 class="animated fw-900">Big Deals From</h2>
                                    <h1 class="animated fw-900 text-8">Manufacturer</h1>
                                    <p class="animated">Clothing, Shoes, Bags, Wallets...</p>
                                    <a class="animated btn btn-brush btn-brush-1" href="shop-product-right.html"> Shop Now </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-3" src="<?php echo get_template_directory_uri();?>/assets/imgs/slider/slider-3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section>
		<!--	SLIDER END	-->

		<!--	CATALOGO INTRO	-->
		<section class="product-tabs section-padding position-relative wow fadeIn animated">
            <div class="bg-square"></div>
            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Popular</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">New added</button>
                        </li>
                    </ul>
                    <a href="#" class="view-more d-none d-md-flex">View More<i class="fi-rs-angle-double-small-right"></i></a>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
						<div class="row product-grid-4">
							<?php echo do_shortcode( '[products limit="8" columns="4" orderby="popularity"]' ); ?>
						</div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab one (Featured)-->
                    <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
						<div class="row product-grid-4">
							<?php echo do_shortcode( '[products limit="8" columns="4" orderby="popularity" best_selling="true"]' ); ?>
						</div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab two (Popular)-->
                    <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
						<div class="row product-grid-4">
							<?php echo do_shortcode( '[products limit="8" columns="4" orderby="popularity"]' ); ?>
						</div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab three (New added)-->
                </div>
                <!--End tab-content-->
            </div>
        </section>
		<!--	CATALOGO 1 END	-->

		<!--	BANNER INTRO	-->
		<section class="banner-2 section-padding pb-0">
            <div class="container">
                <div class="banner-img banner-big wow fadeIn animated f-none">
                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/banner/banner-4.png" alt="">
                    <div class="banner-text d-md-block d-none">
                        <h4 class="mb-15 mt-40 text-brand">Repair Services</h4>
                        <h1 class="fw-600 mb-20">We're an Apple <br>Authorised Service Provider</h1>
                        <a href="shop-grid-right.html" class="btn">Learn More <i class="fi-rs-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
		<!--	BANNER END	-->

		<!--	POPULAR CATEGORIES INTRO	-->
		<section class="popular-categories section-padding mt-15 mb-25">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>Popular</span> Categories</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img src="<?php echo get_template_directory_uri();?>/assets/imgs/shop/category-thumb-1.jpg" alt=""></a>
                            </figure>
                            <h5><a href="shop-grid-right.html">T-Shirt</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"> <img src="<?php echo get_template_directory_uri();?>/assets/imgs/shop/category-thumb-2.jpg" alt=""></a>
                            </figure>
                            <h5><a href="shop-grid-right.html">Bags</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img src="<?php echo get_template_directory_uri();?>/assets/imgs/shop/category-thumb-3.jpg" alt=""></a>
                            </figure>
                            <h5><a href="shop-grid-right.html">Sandan</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img src="<?php echo get_template_directory_uri();?>/assets/imgs/shop/category-thumb-4.jpg" alt=""></a>
                            </figure>
                            <h5><a href="shop-grid-right.html">Scarf Cap</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img src="<?php echo get_template_directory_uri();?>/assets/imgs/shop/category-thumb-5.jpg" alt=""></a>
                            </figure>
                            <h5><a href="shop-grid-right.html">Shoes</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img src="<?php echo get_template_directory_uri();?>/assets/imgs/shop/category-thumb-6.jpg" alt=""></a>
                            </figure>
                            <h5><a href="shop-grid-right.html">Pillowcase</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img src="<?php echo get_template_directory_uri();?>/assets/imgs/shop/category-thumb-7.jpg" alt=""></a>
                            </figure>
                            <h5><a href="shop-grid-right.html">Jumpsuits</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img src="<?php echo get_template_directory_uri();?>/assets/imgs/shop/category-thumb-8.jpg" alt=""></a>
                            </figure>
                            <h5><a href="shop-grid-right.html">Hats</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!--	POPULAR CATEGORIES END	-->

	</main>
	<!--	MAIN END	-->

<?php get_footer(); ?>