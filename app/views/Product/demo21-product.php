﻿<?php include("app/views/header.php"); ?>
<main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="demo21.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="demo21-shop.html">Shop</a></li>
                        <li class="breadcrumb-item"><a href="demo21-shop.html">Electronic</a>, <a href="demo21-shop.html">Motors</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $product->name ?></li>
                    </ol>
                </div>
            </nav>

            <div class="container">
                <div class="product-single-container product-single-default">
                    <div class="cart-message d-none">
                        <strong class="single-cart-notice">“A white Chiar”</strong>
                        <span>has been added to your cart.</span>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-6 product-single-gallery">
                            <div class="product-slider-container">
                                <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                                    <div class="product-item">
                                        <img class="product-single-image" src="assets/images/demoes/demo21/products/zoom/product-1.jpg" data-zoom-image="assets/images/demoes/demo21/products/zoom/product-1-big.jpg" width="468" height="468" alt="product">
                                    </div>
                                </div>
                                <!-- End .product-single-carousel -->
                                <span class="prod-full-screen">
                                    <i class="icon-plus"></i>
                                </span>
                            </div>

                            <div class="prod-thumbnail owl-dots">
                                <div class="owl-dot">
                                    <img src="assets/images/demoes/demo21/products/zoom/product-1.jpg" width="110" height="110" alt="product-thumbnail">
                                </div>
                            </div>
                        </div>
                        <!-- End .product-single-gallery -->

                        <div class="col-lg-7 col-md-6 product-single-details">
                            <h1 class="font1 product-title"><?= $product->name ?></h1>

                            <div class="product-nav">
                                <div class="product-prev">
                                    <a href="#">
                                        <span class="product-link"></span>

                                        <span class="product-popup">
                                            <span class="box-content">
                                                <img alt="product" width="150" height="150" src="assets/images/demoes/demo21/products/product-10.jpg" style="padding-top: 0px;">

                                                <span>Blue Backpack</span>
                                        </span>
                                        </span>
                                    </a>
                                </div>

                                <div class="product-next">
                                    <a href="#">
                                        <span class="product-link"></span>

                                        <span class="product-popup">
                                            <span class="box-content">
                                                <img alt="product" width="150" height="150" src="assets/images/demoes/demo21/products/product-4.jpg" style="padding-top: 0px;">

                                                <span>Battery Charger</span>
                                        </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:60%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->

                                <a href="#" class="rating-link">( 6 Reviews )</a>
                            </div>
                            <!-- End .ratings-container -->

                            <hr class="short-divider">

                            <div class="price-box">
                                <span class="old-price"><?= $product->price ?> TND</span>
                                <span class="product-price"><?= $product->new_price ?> TND</span>
                            </div>
                            <!-- End .price-box -->

                            <div class="product-desc mb-2">
                                <p>
                                    <?= $product->description ?>
                                </p>
                            </div>
                            <!-- End .product-desc -->

                            <ul class="single-info-list">

                                <li>
                                    SKU: <strong>654111995-1-1-<?= $product->id ?></strong>
                                </li>
                            </ul>

                            <div class="product-action">
                                <div class="product-single-qty">
                                    <input class="horizontal-quantity form-control" id="qty" type="number">
                                </div>
                                <!-- End .product-single-qty -->

                                <a onclick="addToCart(<?= $product->id ?>)" class="btn btn-dark add-cart mr-2" title="Add to Cart">Add to
                                    Cart</a>

                                <a href="cart.html" class="btn btn-gray view-cart d-none">View cart</a>
                            </div>
                            <!-- End .product-action -->

                            <hr class="divider mb-0 mt-0">

                            <div class="product-single-share mb-3">
                                <label class="sr-only">Share:</label>

                                <div class="social-icons mr-2">
                                    <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                                    <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                                    <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
                                    <a href="#" class="social-icon social-gplus fab fa-google-plus-g" target="_blank" title="Google +"></a>
                                    <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank" title="Mail"></a>
                                </div>
                                <!-- End .social-icons -->

                                <a href="wishlist.html" class="btn-icon-wish add-wishlist" title="Add to Wishlist"><i class="icon-wishlist-2"></i><span>Add to
                                        Wishlist</span></a>
                            </div>
                            <!-- End .product single-share -->
                        </div>
                        <!-- End .product-single-details -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .product-single-container -->

                <div class="product-single-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content" role="tab" aria-controls="product-tags-content" aria-selected="false">Additional
                                Information</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews (1)</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                            <div class="product-desc-content">
                                <p><?= $product->description ?></p>
                                <ul>
                                    <li>Brand: <strong><?= $product->brand ?></strong></li>
                                    </li>
                                    <li>Downloadable/Digital Products, Virtual Products
                                    </li>
                                    <li>Inventory Management with Backordered items
                                    </li>
                                </ul>
                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            </div>
                            <!-- End .product-desc-content -->
                        </div>
                        <!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-tags-content" role="tabpanel" aria-labelledby="product-tab-tags">
                            <table class="table table-striped mt-2">
                                <tbody>
                                    <tr>
                                        <th>Weight</th>
                                        <td>23 kg</td>
                                    </tr>

                                    <tr>
                                        <th>Dimensions</th>
                                        <td>12 × 24 × 35 cm</td>
                                    </tr>

                                    <tr>
                                        <th>Color</th>
                                        <td>Black, Green, Indigo</td>
                                    </tr>

                                    <tr>
                                        <th>Size</th>
                                        <td>Large, Medium, Small</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
                            <div class="product-reviews-content">
                                <h3 class="reviews-title">1 review for Men Black Sports Shoes</h3>

                                <div class="comment-list">
                                    <div class="comments">
                                        <figure class="img-thumbnail">
                                            <img src="assets/images/blog/author.jpg" alt="author" width="80" height="80">
                                        </figure>

                                        <div class="comment-block">
                                            <div class="comment-header">
                                                <div class="comment-arrow"></div>

                                                <div class="ratings-container float-sm-right">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:60%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <!-- End .product-ratings -->
                                                </div>

                                                <span class="comment-by">
                                                    <strong>Joe Doe</strong> – April 12, 2018
                                                </span>
                                            </div>

                                            <div class="comment-content">
                                                <p>Excellent.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="divider"></div>

                                <div class="add-product-review">
                                    <h3 class="review-title">Add a review</h3>

                                    <form action="#" class="comment-form m-0">
                                        <div class="rating-form">
                                            <label for="rating">Your rating <span class="required">*</span></label>
                                            <span class="rating-stars">
                                                <a class="star-1" href="#">1</a>
                                                <a class="star-2" href="#">2</a>
                                                <a class="star-3" href="#">3</a>
                                                <a class="star-4" href="#">4</a>
                                                <a class="star-5" href="#">5</a>
                                            </span>

                                            <select name="rating" id="rating" required="" style="display: none;">
                                                <option value="">Rate…</option>
                                                <option value="5">Perfect</option>
                                                <option value="4">Good</option>
                                                <option value="3">Average</option>
                                                <option value="2">Not that bad</option>
                                                <option value="1">Very poor</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Your review <span class="required">*</span></label>
                                            <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                        </div>
                                        <!-- End .form-group -->


                                        <div class="row">
                                            <div class="col-md-6 col-xl-12">
                                                <div class="form-group">
                                                    <label>Name <span class="required">*</span></label>
                                                    <input type="text" class="form-control form-control-sm" required="">
                                                </div>
                                                <!-- End .form-group -->
                                            </div>

                                            <div class="col-md-6 col-xl-12">
                                                <div class="form-group">
                                                    <label>Email <span class="required">*</span></label>
                                                    <input type="text" class="form-control form-control-sm" required="">
                                                </div>
                                                <!-- End .form-group -->
                                            </div>

                                            <div class="col-md-12">
                                                <div class=" custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="save-name">
                                                    <label class="custom-control-label mb-0" for="save-name">Save my
                                                        name, email, and website in this browser for the next time I
                                                        comment.</label>
                                                </div>
                                            </div>
                                        </div>

                                        <input type="submit" class="btn btn-primary" value="Submit">
                                    </form>
                                </div>
                                <!-- End .add-product-review -->
                            </div>
                            <!-- End .product-reviews-content -->
                        </div>
                        <!-- End .tab-pane -->
                    </div>
                    <!-- End .tab-content -->
                </div>
                <!-- End .product-single-tabs -->

                <div class="products-section pt-0">
                    <h2 class="section-title font1 font-weight-bold mb-2">Related Products</h2>

                    <div class="products-slider 5col owl-carousel owl-theme dots-top dots-small" data-owl-options="{
                        'dots': true
                    }">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="demo21-product.html">
                                    <img src="assets/images/demoes/demo21/products/product-6.jpg" width="217" height="217" alt="product">
                                </a>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="demo21-shop.html" class="product-category">category</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="demo21-product.html">Casual Note Bag</a>
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
                                    <span class="product-price">$299.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="demo21-product.html">
                                    <img src="assets/images/demoes/demo21/products/product-7.jpg" width="217" height="217" alt="product">
                                </a>
                                <div class="btn-icon-group">
                                    <a href="demo21-product.html" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="demo21-shop.html" class="product-category">category</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="demo21-product.html">
                                    <img src="assets/images/demoes/demo21/products/product-10.jpg" width="217" height="217" alt="product">
                                    <img src="assets/images/demoes/demo21/products/product-10-2.jpg" width="217" height="217" alt="product">
                                </a>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="demo21-shop.html" class="product-category">category</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="demo21-product.html">Blue Backpack</a>
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
                                    <span class="product-price">$299.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="demo21-product.html">
                                    <img src="assets/images/demoes/demo21/products/product-4.jpg" width="217" height="217" alt="product">
                                </a>
                                <div class="label-group">
                                    <div class="product-label label-hot">HOT</div>
                                    <div class="product-label label-sale">-13%</div>
                                </div>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="demo21-shop.html" class="product-category">category</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="demo21-product.html">Battery Charger</a>
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
                                    <span class="old-price">$299.00</span>
                                    <span class="product-price">$259.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="demo21-product.html">
                                    <img src="assets/images/demoes/demo21/products/product-12.jpg" width="217" height="217" alt="product">
                                </a>
                                <div class="btn-icon-group">
                                    <a href="demo21-product.html" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="demo21-shop.html" class="product-category">Category</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="demo21-product.html">Laptop Case Bag</a>
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
                                    <span class="product-price">$1,999.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="demo21-product.html">
                                    <img src="assets/images/demoes/demo21/products/product-11.jpg" width="217" height="217" alt="product">
                                </a>
                                <div class="label-group">
                                    <div class="product-label label-sale">-50%</div>
                                </div>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                                <div class="product-countdown-container">
                                    <span class="product-countdown-title">offer ends in:</span>
                                    <div class="product-countdown countdown-compact" data-until="2021, 10, 5" data-compact="true">
                                    </div>
                                    <!-- End .product-countdown -->
                                </div>
                                <!-- End .product-countdown-container -->
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="demo21-product.html" class="product-category">Category</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="demo21-product.html">1080p Wifi Ip Camera</a>
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
                    <!-- End .products-slider -->
                </div>
                <!-- End .products-section -->

                <hr class="mt-0 m-b-5">

                <div class="product-widgets-container row pt-0 pb-2">
                    <div class="col-md-6 col-lg-3 mb-2 mb-lg-0">
                        <h4 class="section-sub-title ls-n-10 pb-2 mb-1">Featured Products</h4>
                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="demo21-product.html">
                                    <img src="assets/images/demoes/demo21/products/small/product-7.jpg" width="84" height="84" alt="product">
                                    <img src="assets/images/demoes/demo21/products/small/product-7-2.jpg" width="84" height="84" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="demo21-product.html">Digital Camera 16x</a> </h3>

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
                                    <span class="product-price">$101.00 &ndash; $108.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>

                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="demo21-product.html">
                                    <img src="assets/images/demoes/demo21/products/small/product-8.jpg" width="84" height="84" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="demo21-product.html">Porto Extended Camera</a> </h3>

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

                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="demo21-product.html">
                                    <img src="assets/images/demoes/demo21/products/small/product-6.jpg" width="84" height="84" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="demo21-product.html">Black Grey Headset</a> </h3>

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
                    </div>
                    <div class="col-md-6 col-lg-3 mb-2 mb-lg-0">
                        <h4 class="section-sub-title ls-n-10 pb-2 mb-1">Best Selling Products</h4>
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
                    <div class="col-md-6 col-lg-3 mb-2 mb-lg-0">
                        <h4 class="section-sub-title ls-n-10 pb-2 m-b-1">Latest Products</h4>
                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="demo21-product.html">
                                    <img src="assets/images/demoes/demo21/products/small/product-9.jpg" width="84" height="84" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="demo21-product.html">Computer Mouse</a> </h3>

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

                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="demo21-product.html">
                                    <img src="assets/images/demoes/demo21/products/small/product-7.jpg" width="84" height="84" alt="product">
                                    <img src="assets/images/demoes/demo21/products/small/product-7-2.jpg" width="84" height="84" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="demo21-product.html">Digital Camera 16x</a> </h3>

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
                                    <span class="product-price">$101.00 &ndash; $108.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>

                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="demo21-product.html">
                                    <img src="assets/images/demoes/demo21/products/small/product-8.jpg" width="84" height="84" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="demo21-product.html">Porto Extended Camera</a> </h3>

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
                    <div class="col-md-6 col-lg-3 mb-2 mb-lg-0">
                        <h4 class="section-sub-title ls-n-10 pb-2 m-b-1">Top Rated Products</h4>
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
                                <h3 class="product-title"> <a href="demo21-product.html">1080p Wifi IP Camera</a> </h3>

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
                </div>
                <!-- End .row -->
            </div>
        </main>
        <!-- End .main -->

        <script type="text/javascript">
        function addToCart(id) {
            quantity =document.getElementById("qty").value;
            var xhr = getXMLHttpRequest();
            xhr.open("POST", "/?url=updateCart", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send("id=" + id + "&quantity=" + quantity);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log(xhr.status);
                }
            }
        }
    </script>

<?php include("app/views/footer.php"); ?>