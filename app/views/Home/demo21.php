﻿<?php include("app/views/header.php"); ?>

        <main class="main">
            <section class="intro-section">
                <div class="home-slider slide-animate owl-carousel owl-theme owl-carousel-lazy dot-inside" data-owl-options="{
                    'nav': false,
                    'dots': true,
                    'responsive': {
                        '576': {
                            'dots': false
                        }
                    }
                }">
                    <div class="home-slide banner" style="background-image: url('assets/images/demoes/demo21/slider/slide1.jpg');">
                        <div class="banner-layer banner-layer-middle">
                            <div class="container banner-content">
                                <h2 class="font1 font-weight-normal text-uppercase mb-0 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200">start the revolution
                                </h2>
                                <h1 class="font1 font-weight-bold text-uppercase appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="500">
                                    drone pro 4
                                </h1>
                                <h2 class="font1 font-weight-normal text-uppercase mb-3 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="800">from
                                    <strong>$499</strong></h2>
                                <a class="btn btn-dark btn-buy appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="1100" href="demo21-shop.html">BUY NOW</a>
                            </div>
                        </div>
                        <!-- End .home-slide-content -->
                    </div>
                    <!-- End .home-slide -->

                    <div class="home-slide banner" style="background-image: url('assets/images/demoes/demo21/slider/slide2.jpg');">
                        <div class="banner-layer banner-layer-middle">
                            <div class="container banner-content">
                                <h2 class="font1 font-weight-normal text-uppercase mb-0 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200">amazing deals</h2>
                                <h1 class="font1 font-weight-bold text-uppercase appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="500">
                                    smartphone
                                </h1>
                                <h2 class="font1 font-weight-normal text-uppercase mb-3 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="800">from
                                    <strong>$199</strong></h2>
                                <a class="btn btn-dark btn-buy appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="1100" href="demo21-shop.html">BUY NOW</a>
                            </div>
                        </div>
                        <!-- End .home-slide-content -->
                    </div>
                    <!-- End .home-slide -->

                    <div class="home-slide banner" style="background-image: url('assets/images/demoes/demo21/slider/slide3.jpg');">
                        <div class="banner-layer banner-layer-middle">
                            <div class="container banner-content">
                                <h2 class="font1 font-weight-normal text-uppercase mb-0 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200">best price of the year
                                </h2>
                                <h1 class="font1 font-weight-bold text-uppercase appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="500">
                                    top accessories
                                </h1>
                                <h2 class="font1 font-weight-normal text-uppercase mb-3 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="800">from
                                    <strong>$19</strong></h2>
                                <a class="btn btn-dark btn-buy appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="1100" href="demo21-shop.html">BUY NOW</a>
                            </div>
                        </div>
                        <!-- End .home-slide-content -->
                    </div>
                    <!-- End .home-slide -->
                </div>

                <div class="home-slider-sidebar d-none d-sm-block">
                    <div class="container">
                        <ul>
                            <li class="active">Drones</li>
                            <li>Phones</li>
                            <li>Accessories</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="featured-products-section appear-animate" data-animation-name="fadeIn" data-animation-delay="200">
                <div class="container">
                    <h2 class="section-title ls-n-10 pb-3 m-b-4">Featured Products</h2>

                    <div class="row mt-2 divide-line row-joined up-effect">
                        <?php $i = 0;
                        foreach ($products as $product): ?>
                            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                            <div class="product-default">
                                <figure>
                                    <a href="/?url=products/show/<?= $product->id ?>">
                                        <img src="assets/images/products/product-13.jpg" width="280" height="280" alt="product">
                                    </a>

                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                        <div class="product-label label-sale">-20%</div>
                                    </div>
                                </figure>

                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category"><?= $product->category_name ?></a>
                                        </div>
                                    </div>

                                    <h3 class="product-title"> <a href="/?url=products/show/<?= $product->id ?>"><?= $product->product_name ?></a>
                                    </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price"><?= $product->price ?> TND</span>
                                        <span class="product-price"><?= $product->new_price ?> TND</span>
                                    </div>
                                    <!-- End .price-box -->

                                    <div class="product-action">
                                        <a href="/?url=products/show/<?= $product->id ?>" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i><span>SHOW</span></a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->
                            <?php $i++;
                            if ($i >= 6) {
                                break;
                            }
                        endforeach; ?>
                    </div>
                </div>
            </section>

            <section class="cat-section bg-gray">
                <div class="container">
                    <div class="categories-slider owl-carousel owl-theme appear-animate" data-owl-options="{
                        'nav': false,
                        'responsive': {
                            '992': {
                                'items': 4
                            },
                            '1200': {
                                'items': 6
                            }
                        }
                    }" data-animation-name="fadeIn">
                        <?php foreach ($categories as $category) : ?>
                            <div class="product-category">
                                <a href="demo21-shop.html">
                                    <div class="category-content">
                                        <i class="icon-category-fashion"></i>
                                        <h3><?= $category->name ?></h3>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <section class="new-products-section">
                <div class="container">
                    <div class="row m-b-3 appear-animate" data-animation-name="fadeIn" data-animation-delay="300">
                        <div class="col-md-6">
                            <div class="banner banner1" style="background-color: #f4f4f4;">
                                <figure>
                                    <img src="assets/images/demoes/demo21/banners/banner-1.jpg" alt="banner">
                                </figure>

                                <div class="banner-layer banner-layer-middle row justify-content-between align-items-center no-gutters">
                                    <div class="col-6 col-lg-4">
                                        <h3 class="font1 text-uppercase ls-0 mb-0">Action<br>Cameras</h3>
                                    </div>
                                    <div class="col-6 col-lg-4 text-right text-lg-left">
                                        <h4 class="font1 ls-n-10">Starting From<b>$399</b></h4>
                                        <a href="demo21-shop.html" class="btn btn-primary ls-n-25">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner banner2" style="background-color: #f4f4f4;">
                                <figure>
                                    <img src="assets/images/demoes/demo21/banners/banner-2.jpg" alt="banner">
                                </figure>

                                <div class="banner-layer banner-layer-middle row justify-content-between align-items-center no-gutters">
                                    <div class="col-6 col-lg-4 text-left text-lg-right">
                                        <h4 class="font1 ls-n-10">Starting From<b>$199</b></h4>
                                        <a href="demo21-shop.html" class="btn btn-primary ls-n-25">Shop Now</a>
                                    </div>
                                    <div class="col-6 col-lg-4 text-right text-lg-left">
                                        <h3 class="font1 text-uppercase ls-0 mb-0">For All<br>Styles</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="section-title ls-n-10 pb-3 m-b-4 appear-animate" data-animation-name="fadeIn" data-animation-delay="300">New Arrivals</h2>

                    <div class="row no-gutters appear-animate" data-animation-name="fadeIn" data-animation-delay="300">
                        <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo21-product.html">
                                        <img src="assets/images/demoes/demo21/products/product-7.jpg" width="217" height="217" alt="product">
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="demo21-product.html" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo21-shop.html" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo21-product.html">Computer Mouse</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$55.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo21-product.html">
                                        <img src="assets/images/demoes/demo21/products/product-1.jpg" width="217" height="217" alt="product">
                                        <img src="assets/images/demoes/demo21/products/product-1-2.jpg" width="217" height="217" alt="product">
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                    </div>
                                    <div class="btn-icon-group">
                                        <a href="demo21-product.html" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo21-shop.html" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo21-product.html">Digital Camera 16x</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$101.00 &ndash; $111.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo21-product.html">
                                        <img src="assets/images/demoes/demo21/products/product-2.jpg" width="217" height="217" alt="product">
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="demo21-product.html" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo21-shop.html" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo21-product.html">Porto Extended Camera</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:0%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$599.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo21-product.html">
                                        <img src="assets/images/demoes/demo21/products/product-8.jpg" width="217" height="217" alt="product">
                                        <img src="assets/images/demoes/demo21/products/product-8-2.jpg" width="217" height="217" alt="product">
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="demo21-product.html" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo21-shop.html" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo21-product.html">Sports Shoes</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$101.00 &ndash; $111.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo21-product.html">
                                        <img src="assets/images/demoes/demo21/products/product-8-2.jpg" width="217" height="217" alt="product">
                                        <img src="assets/images/demoes/demo21/products/product-8.jpg" width="217" height="217" alt="product">
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="demo21-product.html" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo21-shop.html" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo21-product.html">Black Porto Men Shoes</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$101.00 &ndash; $111.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo21-product.html">
                                        <img src="assets/images/demoes/demo21/products/product-9.jpg" width="217" height="217" alt="product">
                                        <img src="assets/images/demoes/demo21/products/product-9-2.jpg" width="217" height="217" alt="product">
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="demo21-product.html" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo21-shop.html" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo21-product.html">Casual Blue Shoes</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$101.00 &ndash; $108.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="special-offer-section bg-gray appear-animate" data-animation-name="fadeIn" data-animation-delay="200">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4">
                            <h3 class="subtitle font1 ls-0 mb-3">Special Offer</h3>

                            <div class="banner banner3" style="background-color: #fff;">
                                <figure>
                                    <img src="assets/images/demoes/demo21/banners/banner-3.jpg" alt="banner" width="450" height="257">
                                </figure>

                                <div class="banner-layer banner-layer-middle banner-layer-left">
                                    <h3 class="font1 ls-0 m-b-2">Elec Deals</h3>
                                    <h4 class="font1 ls-n-10 m-b-3"><del>$59.00</del>$49.00</h4>
                                    <a href="demo21-shop.html" class="btn btn-primary">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <ul class="nav nav-tabs mb-3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#best-sellers">Best Sellers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#audio-speakers">Audio Speakers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#cameras">Cameras</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#lamps">Lamps</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#computer">Computer</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#mobile-phones">Mobile Phones</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="best-sellers">
                                    <div class="row no-gutters">
                                        <div class="col-6 col-sm-4 col-lg-3">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="demo21-product.html">
                                                        <img src="assets/images/demoes/demo21/products/special/product-1.jpg" width="217" height="217" alt="product">
                                                    </a>
                                                    <div class="btn-icon-group">
                                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="title-wrap">
                                                        <h3 class="product-title">
                                                            <a href="demo21-product.html">Casual Note Bag</a>
                                                        </h3>
                                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$299.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 col-lg-3">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="demo21-product.html">
                                                        <img src="assets/images/demoes/demo21/products/special/product-2.jpg" width="217" height="217" alt="product">
                                                        <img src="assets/images/demoes/demo21/products/special/product-2-2.jpg" width="217" height="217" alt="product">
                                                    </a>
                                                    <div class="btn-icon-group">
                                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="title-wrap">
                                                        <h3 class="product-title">
                                                            <a href="demo21-product.html">Blue Backpack</a>
                                                        </h3>
                                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$299.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 col-lg-3">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="demo21-product.html">
                                                        <img src="assets/images/demoes/demo21/products/special/product-3.jpg" width="217" height="217" alt="product">
                                                    </a>
                                                    <div class="label-group">
                                                        <div class="product-label label-hot">HOT</div>
                                                        <div class="product-label label-sale">-13%</div>
                                                    </div>
                                                    <div class="btn-icon-group">
                                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="title-wrap">
                                                        <h3 class="product-title">
                                                            <a href="demo21-product.html">Battery Charger</a>
                                                        </h3>
                                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="old-price">$299.00</span>
                                                        <span class="product-price">$259.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 col-lg-3">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="demo21-product.html">
                                                        <img src="assets/images/demoes/demo21/products/special/product-4.jpg" width="217" height="217" alt="product">
                                                    </a>
                                                    <div class="btn-icon-group">
                                                        <a href="#" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                                                    </div>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="title-wrap">
                                                        <h3 class="product-title">
                                                            <a href="demo21-product.html">Computer Mouse</a>
                                                        </h3>
                                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$55.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="audio-speakers">
                                    <div class="row no-gutters">
                                        <div class="col-6 col-sm-4 col-lg-3">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="demo21-product.html">
                                                        <img src="assets/images/demoes/demo21/products/special/product-5.jpg" width="217" height="217" alt="product">
                                                        <img src="assets/images/demoes/demo21/products/special/product-5-2.jpg" width="217" height="217" alt="product">
                                                    </a>
                                                    <div class="label-group">
                                                        <div class="product-label label-hot">HOT</div>
                                                        <div class="product-label label-sale">-26%</div>
                                                    </div>
                                                    <div class="btn-icon-group">
                                                        <a href="#" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                                                    </div>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="title-wrap">
                                                        <h3 class="product-title">
                                                            <a href="demo21-product.html">Black Grey Headset</a>
                                                        </h3>
                                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$29.00 &ndash; $39.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 col-lg-3">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="demo21-product.html">
                                                        <img src="assets/images/demoes/demo21/products/special/product-2.jpg" width="217" height="217" alt="product">
                                                        <img src="assets/images/demoes/demo21/products/special/product-2-2.jpg" width="217" height="217" alt="product">
                                                    </a>
                                                    <div class="btn-icon-group">
                                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="title-wrap">
                                                        <h3 class="product-title">
                                                            <a href="demo21-product.html">Blue Backpack</a>
                                                        </h3>
                                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$299.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 col-lg-3">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="demo21-product.html">
                                                        <img src="assets/images/demoes/demo21/products/special/product-3.jpg" width="217" height="217" alt="product">
                                                    </a>
                                                    <div class="btn-icon-group">
                                                        <a href="#" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                                                    </div>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="title-wrap">
                                                        <h3 class="product-title">
                                                            <a href="demo21-product.html">Computer Mouse</a>
                                                        </h3>
                                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$55.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 col-lg-3">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="demo21-product.html">
                                                        <img src="assets/images/demoes/demo21/products/special/product-6.jpg" width="217" height="217" alt="product">
                                                        <img src="assets/images/demoes/demo21/products/special/product-6-2.jpg" width="217" height="217" alt="product">
                                                    </a>
                                                    <div class="label-group">
                                                        <div class="product-label label-hot">HOT</div>
                                                    </div>
                                                    <div class="btn-icon-group">
                                                        <a href="#" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                                                    </div>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="title-wrap">
                                                        <h3 class="product-title">
                                                            <a href="demo21-product.html">Digital Camera 16x</a>
                                                        </h3>
                                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$101.00 &ndash; $111.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="cameras">
                                    <div class="row no-gutters">
                                        <div class="col-6 col-sm-4 col-lg-3">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="demo21-product.html">
                                                        <img src="assets/images/demoes/demo21/products/special/product-5.jpg" width="217" height="217" alt="product">
                                                        <img src="assets/images/demoes/demo21/products/special/product-5-2.jpg" width="217" height="217" alt="product">
                                                    </a>
                                                    <div class="label-group">
                                                        <div class="product-label label-hot">HOT</div>
                                                        <div class="product-label label-sale">-26%</div>
                                                    </div>
                                                    <div class="btn-icon-group">
                                                        <a href="#" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                                                    </div>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="title-wrap">
                                                        <h3 class="product-title">
                                                            <a href="demo21-product.html">Black Grey Headset</a>
                                                        </h3>
                                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$29.00 &ndash; $39.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 col-lg-3">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="demo21-product.html">
                                                        <img src="assets/images/demoes/demo21/products/special/product-2.jpg" width="217" height="217" alt="product">
                                                        <img src="assets/images/demoes/demo21/products/special/product-2-2.jpg" width="217" height="217" alt="product">
                                                    </a>
                                                    <div class="btn-icon-group">
                                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="title-wrap">
                                                        <h3 class="product-title">
                                                            <a href="demo21-product.html">Blue Backpack</a>
                                                        </h3>
                                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$299.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 col-lg-3">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="demo21-product.html">
                                                        <img src="assets/images/demoes/demo21/products/special/product-6.jpg" width="217" height="217" alt="product">
                                                        <img src="assets/images/demoes/demo21/products/special/product-6-2.jpg" width="217" height="217" alt="product">
                                                    </a>
                                                    <div class="label-group">
                                                        <div class="product-label label-hot">HOT</div>
                                                    </div>
                                                    <div class="btn-icon-group">
                                                        <a href="#" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                                                    </div>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="title-wrap">
                                                        <h3 class="product-title">
                                                            <a href="demo21-product.html">Digital Camera 16x</a>
                                                        </h3>
                                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$101.00 &ndash; $111.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 col-lg-3">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="demo21-product.html">
                                                        <img src="assets/images/demoes/demo21/products/special/product-7.jpg" width="217" height="217" alt="product">
                                                    </a>
                                                    <div class="btn-icon-group">
                                                        <a href="#" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                                                    </div>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="title-wrap">
                                                        <h3 class="product-title">
                                                            <a href="demo21-product.html">Porto Extended Camera</a>
                                                        </h3>
                                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$599.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="lamps">
                                    <div class="row no-gutters">
                                        <div class="col-6 col-sm-4 col-lg-3">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="demo21-product.html">
                                                        <img src="assets/images/demoes/demo21/products/special/product-8.jpg" width="217" height="217" alt="product">
                                                    </a>
                                                    <div class="btn-icon-group">
                                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="title-wrap">
                                                        <h3 class="product-title">
                                                            <a href="demo21-product.html">Brown Bag</a>
                                                        </h3>
                                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$299.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 col-lg-3">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="demo21-product.html">
                                                        <img src="assets/images/demoes/demo21/products/special/product-9.jpg" width="217" height="217" alt="product">
                                                    </a>
                                                    <div class="btn-icon-group">
                                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="title-wrap">
                                                        <h3 class="product-title">
                                                            <a href="demo21-product.html">Casual Note Bag</a>
                                                        </h3>
                                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$299.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 col-lg-3">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="demo21-product.html">
                                                        <img src="assets/images/demoes/demo21/products/special/product-10.jpg" width="217" height="217" alt="product">
                                                    </a>
                                                    <div class="btn-icon-group">
                                                        <a href="#" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                                                    </div>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="title-wrap">
                                                        <h3 class="product-title">
                                                            <a href="demo21-product.html">Laptop Case Bag</a>
                                                        </h3>
                                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$1,999.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="computer">
                                    <div class="row no-gutters">
                                        <div class="col-6 col-sm-4 col-lg-3">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="demo21-product.html">
                                                        <img src="assets/images/demoes/demo21/products/special/product-11.jpg" width="217" height="217" alt="product">
                                                    </a>
                                                    <div class="label-group">
                                                        <div class="product-label label-sale">-50%</div>
                                                    </div>
                                                    <div class="btn-icon-group">
                                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                                    <div class="product-countdown-container">
                                                        <span class="product-countdown-title">offer ends in:</span>
                                                        <div class="product-countdown countdown-compact" data-until="2021, 10, 5" data-compact="true">
                                                        </div>
                                                        <!-- End .product-countdown -->
                                                    </div>
                                                    <!-- End .product-countdown-container -->
                                                </figure>
                                                <div class="product-details">
                                                    <div class="title-wrap">
                                                        <h3 class="product-title">
                                                            <a href="demo21-product.html">1080p Wifi Ip Camera</a>
                                                        </h3>
                                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="old-price">$596.00</span>
                                                        <span class="product-price">$299.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 col-lg-3">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="demo21-product.html">
                                                        <img src="assets/images/demoes/demo21/products/special/product-4.jpg" width="217" height="217" alt="product">
                                                    </a>
                                                    <div class="label-group">
                                                        <div class="product-label label-hot">HOT</div>
                                                        <div class="product-label label-sale">-13%</div>
                                                    </div>
                                                    <div class="btn-icon-group">
                                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="title-wrap">
                                                        <h3 class="product-title">
                                                            <a href="demo21-product.html">Battery Charger</a>
                                                        </h3>
                                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="old-price">$299.00</span>
                                                        <span class="product-price">$259.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 col-lg-3">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="demo21-product.html">
                                                        <img src="assets/images/demoes/demo21/products/special/product-5.jpg" width="217" height="217" alt="product">
                                                        <img src="assets/images/demoes/demo21/products/special/product-5-2.jpg" width="217" height="217" alt="product">
                                                    </a>
                                                    <div class="label-group">
                                                        <div class="product-label label-hot">HOT</div>
                                                        <div class="product-label label-sale">-26%</div>
                                                    </div>
                                                    <div class="btn-icon-group">
                                                        <a href="#" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                                                    </div>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="title-wrap">
                                                        <h3 class="product-title">
                                                            <a href="demo21-product.html">Black Grey Headset</a>
                                                        </h3>
                                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$29.00 &ndash; $39.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 col-lg-3">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="demo21-product.html">
                                                        <img src="assets/images/demoes/demo21/products/special/product-2.jpg" width="217" height="217" alt="product">
                                                        <img src="assets/images/demoes/demo21/products/special/product-2-2.jpg" width="217" height="217" alt="product">
                                                    </a>
                                                    <div class="btn-icon-group">
                                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="title-wrap">
                                                        <h3 class="product-title">
                                                            <a href="demo21-product.html">Blue Backpack</a>
                                                        </h3>
                                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$299.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="mobile-phones">
                                    <div class="row no-gutters">
                                        <div class="col-6 col-sm-4 col-lg-3">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="demo21-product.html">
                                                        <img src="assets/images/demoes/demo21/products/special/product-2.jpg" width="217" height="217" alt="product">
                                                        <img src="assets/images/demoes/demo21/products/special/product-2-2.jpg" width="217" height="217" alt="product">
                                                    </a>
                                                    <div class="btn-icon-group">
                                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="title-wrap">
                                                        <h3 class="product-title">
                                                            <a href="demo21-product.html">Blue Backpack</a>
                                                        </h3>
                                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$299.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 col-lg-3">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="demo21-product.html">
                                                        <img src="assets/images/demoes/demo21/products/special/product-12.jpg" width="217" height="217" alt="product">
                                                        <img src="assets/images/demoes/demo21/products/special/product-12-2.jpg" width="217" height="217" alt="product">
                                                    </a>
                                                    <div class="btn-icon-group">
                                                        <a href="#" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                                                    </div>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="title-wrap">
                                                        <h3 class="product-title">
                                                            <a href="demo21-product.html">Black Porto Men Shoes</a>
                                                        </h3>
                                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$101.00 &ndash; $111.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 col-lg-3">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="demo21-product.html">
                                                        <img src="assets/images/demoes/demo21/products/special/product-13.jpg" width="217" height="217" alt="product">
                                                        <img src="assets/images/demoes/demo21/products/special/product-13-2.jpg" width="217" height="217" alt="product">
                                                    </a>
                                                    <div class="btn-icon-group">
                                                        <a href="#" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                                                    </div>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="title-wrap">
                                                        <h3 class="product-title">
                                                            <a href="demo21-product.html">Sports Shoes</a>
                                                        </h3>
                                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$101.00 &ndash; $111.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 col-lg-3">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="demo21-product.html">
                                                        <img src="assets/images/demoes/demo21/products/special/product-14.jpg" width="217" height="217" alt="product">
                                                        <img src="assets/images/demoes/demo21/products/special/product-14-2.jpg" width="217" height="217" alt="product">
                                                    </a>
                                                    <div class="btn-icon-group">
                                                        <a href="#" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                                                    </div>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="title-wrap">
                                                        <h3 class="product-title">
                                                            <a href="demo21-product.html">Casual Blue Shoes</a>
                                                        </h3>
                                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$101.00 &ndash; $108.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="cat-banners-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-xl-3">
                            <div class="cat-banner appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="800">
                                <figure>
                                    <img src="assets/images/demoes/demo21/products/categories/cat-1.jpg" alt="category" width="107" height="107">
                                </figure>

                                <div class="cat-content">
                                    <h3 class="mb-1">Top Sharp<br>Knives</h3>
                                    <a href="demo21-shop.html" class="btn btn-dark">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="cat-banner appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="600">
                                <figure>
                                    <img src="assets/images/demoes/demo21/products/categories/cat-2.jpg" alt="category" width="107" height="107">
                                </figure>

                                <div class="cat-content">
                                    <h3 class="mb-1">HD Vision<br>Web Cameras</h3>
                                    <a href="demo21-shop.html" class="btn btn-dark">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="cat-banner appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="400">
                                <figure>
                                    <img src="assets/images/demoes/demo21/products/categories/cat-3.jpg" alt="category" width="107" height="107">
                                </figure>

                                <div class="cat-content">
                                    <h3 class="mb-1">Mobiles And<br>Tablets</h3>
                                    <a href="demo21-shop.html" class="btn btn-dark">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="cat-banner appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="200">
                                <figure>
                                    <img src="assets/images/demoes/demo21/products/categories/cat-4.jpg" alt="category" width="107" height="107">
                                </figure>

                                <div class="cat-content">
                                    <h3 class="mb-1">Smart<br>Watches</h3>
                                    <a href="demo21-shop.html" class="btn btn-dark">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="feature-boxes-container bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="feature-box feature-box-simple text-center mb-2 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="200">
                                <div class="feature-box-icon">
                                    <i class="icon-shipping"></i>
                                </div>

                                <div class="feature-box-content p-0">
                                    <h3 class="font1 ls-n-10">Free Shipping &amp; Returns</h3>
                                    <h5 class="font1 m-b-3">All Orders Over $99</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus.</p>
                                </div>
                                <!-- End .feature-box-content -->
                            </div>
                            <!-- End .feature-box -->
                        </div>
                        <!-- End .col-md-4 -->

                        <div class="col-md-4">
                            <div class="feature-box feature-box-simple text-center mb-2 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="400">
                                <div class="feature-box-icon">
                                    <i class="icon-money"></i>
                                </div>

                                <div class="feature-box-content p-0">
                                    <h3 class="font1 ls-n-10">Money Back Guarantee</h3>
                                    <h5 class="font1 m-b-3">Safe &amp; Fast</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus.</p>
                                </div>
                                <!-- End .feature-box-content -->
                            </div>
                            <!-- End .feature-box -->
                        </div>
                        <!-- End .col-md-4 -->

                        <div class="col-md-4">
                            <div class="feature-box feature-box-simple text-center mb-2 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="600">
                                <div class="feature-box-icon">
                                    <i class="icon-support"></i>
                                </div>
                                <div class="feature-box-content p-0">
                                    <h3 class="font1 ls-n-10">Online Support</h3>
                                    <h5 class="font1 m-b-3">Need Assistence?</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus.</p>
                                </div>
                                <!-- End .feature-box-content -->
                            </div>
                            <!-- End .feature-box -->
                        </div>
                        <!-- End .col-md-4 -->
                    </div>
                    <!-- End .row -->
                </div>
            </div>

            <div class="product-widgets-container lg-images appear-animate mb-0" data-animation-name="fadeIn" data-animation-delay="200">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <h4 class="section-sub-title ls-n-10 pb-3 m-b-4">Top Rated Products</h4>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="demo21-product.html">
                                        <img src="assets/images/demoes/demo21/products/small/product-1.jpg" width="84" height="84" alt="product">
                                        <img src="assets/images/demoes/demo21/products/small/product-1-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <h3 class="product-title"> <a href="demo21-product.html">Casual Blue Shoes</a> </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="product-price">$101.00 &ndash; $108.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>

                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="demo21-product.html">
                                        <img src="assets/images/demoes/demo21/products/small/product-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <h3 class="product-title"> <a href="demo21-product.html">1080p Wifi IP Camera</a>
                                    </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top">5.00</span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">$596.00</span>
                                        <span class="product-price">$299.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>

                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="demo21-product.html">
                                        <img src="assets/images/demoes/demo21/products/small/product-3.jpg" width="84" height="84" alt="product">
                                        <img src="assets/images/demoes/demo21/products/small/product-3-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <h3 class="product-title"> <a href="demo21-product.html">Blue BackPack</a> </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="product-price">$299.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <h4 class="section-sub-title ls-n-10 pb-3 m-b-4">Top Selling Products</h4>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="demo21-product.html">
                                        <img src="assets/images/demoes/demo21/products/small/product-4.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <h3 class="product-title"> <a href="demo21-product.html">Casual Note Bag</a> </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="product-price">$299.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>

                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="demo21-product.html">
                                        <img src="assets/images/demoes/demo21/products/small/product-3.jpg" width="84" height="84" alt="product">
                                        <img src="assets/images/demoes/demo21/products/small/product-3-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <h3 class="product-title"> <a href="demo21-product.html">Blue BackPack</a> </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top">5.00</span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="product-price">$299.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>

                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="demo21-product.html">
                                        <img src="assets/images/demoes/demo21/products/small/product-5.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <h3 class="product-title"> <a href="demo21-product.html">Battery Charger</a> </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:0%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">$299.00</span>
                                        <span class="product-price">$259.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <h4 class="section-sub-title ls-n-10 pb-3 m-b-4">On Sale Products</h4>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="demo21-product.html">
                                        <img src="assets/images/demoes/demo21/products/small/product-6.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <h3 class="product-title"> <a href="demo21-product.html">Black Grey Headset</a>
                                    </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="product-price">$29.00 &ndash; $39.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>

                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="demo21-product.html">
                                        <img src="assets/images/demoes/demo21/products/small/product-5.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <h3 class="product-title"> <a href="demo21-product.html">Battery Charger</a> </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:0%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">$299.00</span>
                                        <span class="product-price">$259.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>

                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="demo21-product.html">
                                        <img src="assets/images/demoes/demo21/products/small/product-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <h3 class="product-title"> <a href="demo21-product.html">1080p Wifi IP Camera</a>
                                    </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top">5.00</span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">$596.00</span>
                                        <span class="product-price">$299.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="product-default count-down">
                                <h3 class="product-name">Flash Deals</h3>
                                <figure>
                                    <a href="demo21-product.html">
                                        <img src="assets/images/demoes/demo21/products/featured-sale.jpg" width="217" height="217" alt="product">
                                    </a>
                                    <div class="label-group">
                                        <span class="product-label label-primary">SALE</span>
                                        <span class="product-label label-dark">-50%</span>
                                    </div>
                                    <div class="product-countdown-container">
                                        <span class="product-countdown-title">offer ends in:</span>
                                        <div class="product-countdown countdown-compact" data-until="2021, 10, 5" data-compact="true">
                                        </div>
                                        <!-- End .product-countdown -->
                                    </div>
                                    <!-- End .product-countdown-container -->
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="demo21-product.html">1080p Wifi IP Camera</a>
                                    </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">$596.00</span>
                                        <span class="product-price">$299.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="brands-section">
                <div class="container">
                    <h2 class="section-title ls-n-10 pb-3 mb-5 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200" data-animation-duration="400">Top Brands</h2>

                    <div class="brands-slider owl-carousel owl-theme images-center appear-animate" data-animation-name="fadeIn" data-animation-delay="400" data-owl-options="{
                        'margin': 30,
                        'responsive': {
                            '991': {
                                'items': 4
                            },
                            '1200': {
                                'items': 5
                            }
                        }
                    }">
                        <img src="assets/images/demoes/demo21/brands/brand1.png" width="200" height="50" alt="brand">
                        <img src="assets/images/demoes/demo21/brands/brand2.png" width="200" height="50" alt="brand">
                        <img src="assets/images/demoes/demo21/brands/brand3.png" width="200" height="50" alt="brand">
                        <img src="assets/images/demoes/demo21/brands/brand4.png" width="200" height="50" alt="brand">
                        <img src="assets/images/demoes/demo21/brands/brand5.png" width="200" height="50" alt="brand">
                    </div>
                    <!-- End .brands-slider -->
                </div>
            </section>
        </main>
        <!-- End .main -->
<?php include("app/views/footer.php"); ?>
