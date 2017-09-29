<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Productos';
$this->registerJs(
        "
            ", yii\web\View::POS_END, uniqid()
);
?>

<!-- CORE : begin -->
<div id="core" class="core-bg-2">

    <!-- PAGE HEADER : begin -->
    <div id="page-header">
        <div class="container">
            <h1>Arcilla Volcanica y Aceites Naturales</h1>
        </div>
    </div>
    <!-- PAGE HEADER : begin -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- PAGE CONTENT : begin -->
                <div id="page-content">

                    <!-- PRODUCT DETAIL : begin -->
                    <div class="product-detail">

                        <div class="row">
                            <div class="col-sm-6">

                                <!-- PRODUCT IMAGES : begin -->
                                <div class="product-images">
                                    <p class="main-image"><a href="<?= Yii::$app->request->baseUrl; ?>/img/product_01_big.jpg" class="lightbox" data-lightbox-group="product"><img src="<?= Yii::$app->request->baseUrl; ?>/img/product_01_big.jpg" alt=""></a></p>
                                    <ul>
                                        <li><a href="<?= Yii::$app->request->baseUrl; ?>/img/product_01_big_02.jpg" class="lightbox" data-lightbox-group="product"><img src="<?= Yii::$app->request->baseUrl; ?>/img/product_01_thumb_02.jpg" alt=""></a></li>
                                        <li><a href="<?= Yii::$app->request->baseUrl; ?>/img/product_01_big_03.jpg" class="lightbox" data-lightbox-group="product"><img src="<?= Yii::$app->request->baseUrl; ?>/img/product_01_thumb_03.jpg" alt=""></a></li>
                                        <li><a href="<?= Yii::$app->request->baseUrl; ?>/img/product_01_big_04.jpg" class="lightbox" data-lightbox-group="product"><img src="<?= Yii::$app->request->baseUrl; ?>/img/product_01_thumb_04.jpg" alt=""></a></li>
                                    </ul>
                                </div>
                                <!-- PRODUCT IMAGES : end -->

                            </div>
                            <div class="col-sm-6">

                                <!-- PRODUCT RATING : begin -->
                                <div class="product-rating">
                                    <a href="#product-tabs">
                                        <span class="rating-stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></span>
                                        <span class="rating-label">3 Opiniones</span>
                                    </a>
                                </div>
                                <!-- PRODUCT RATING : end -->

                                <!-- PRODUCT SHORT DESCRIPTION : begin -->
                                <div class="product-short-description various-content">
                                    <p><strong>Aenean imperdiet</strong>. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus.</p>
                                </div>
                                <!-- PRODUCT SHORT DESCRIPTION : end -->

                                <!-- PRODUCT INFO : begin -->
                                <div class="product-info">

                                    <!-- PRODUCT STATUS : begin -->
                                    <div class="product-status m-available">
                                        <div class="product-status-inner">
                                            <i class="ico fa fa-check"></i>
                                            <h5>En Stock</h5>
                                            <p>Entrega en 24h</p>
                                        </div>
                                    </div>
                                    <!--div class="product-status m-unavailable">
                                            <div class="product-status-inner">
                                                    <i class="ico fa fa-times"></i>
                                                    <h5>Unavailable</h5>
                                                    <p>Product unavailable</p>
                                            </div>
                                    </div-->
                                    <!--div class="product-status m-info">
                                            <div class="product-status-inner">
                                                    <i class="ico fa fa-clock-o"></i>
                                                    <h5>Back Order</h5>
                                                    <p>Out of stock</p>
                                            </div>
                                    </div-->
                                    <!-- PRODUCT STATUS : end -->

                                    <!-- PRODUCT PRICE : begin -->
                                    <div class="product-price">
                                        <span class="old-price">$29,99</span>
                                        <strong class="price">$21,89</strong>
                                    </div>
                                    <!-- PRODUCT PRICE : end -->

                                </div>
                                <!-- PRODUCT INFO : end -->

                                <!-- PRODUCT TOOLS : begin -->
<!--                                <form action="<?= Url::toRoute(["/shop"]) ?>" class="product-tools default-form">

                                    <div class="quantity-input">
                                        <input type="number" class="m-type-2" value="1" min="1" max="100" step="1">
                                    </div>
                                    <button class="c-button product-cart-btn" type="submit">Add To Cart</button>

                                </form>-->
                                <a href="<?= Url::toRoute(["/shop"]) ?>" class="c-button product-cart-btn">Comprar</a>
                                <!-- PRODUCT TOOLS : end -->

                            </div>
                        </div>

                        <!-- PRODUCT TABS : begin -->
                        <div class="c-tabs product-tabs" id="product-tabs">
                            <ul class="tab-list">
                                <li class="m-active">Descripcion</li>
                                <li class="product-reviews-tab">Opiniones (3)</li>
                            </ul>
                            <ul class="content-list">
                                <li>

                                    <!-- PRODUCT DESCRIPTION : begin -->
                                    <div class="product-description various-content">

                                        <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
                                        <ul>
                                            <li>Maecenas nec odio et ante tincidunt tempus.</li>
                                            <li>Donec vitae sapien ut libero venenatis faucibus.</li>
                                            <li>Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</li>
                                        </ul>
                                        <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.</p>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Maecenas</th>
                                                    <th>Condime</th>
                                                    <th>Adipiscing</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Sed consequat, leo eget</td>
                                                    <td>Duis arcu tortor, suscipit eget</td>
                                                    <td>Phasellus ullamcorper ipsum</td>
                                                </tr>
                                                <tr>
                                                    <td>Phasellus ullamcorper ipsum</td>
                                                    <td>Curabitur ligula sapien, tincidunt</td>
                                                    <td>Sed consequat, leo eget</td>
                                                </tr>
                                                <tr>
                                                    <td>Sed consequat, leo eget</td>
                                                    <td>Duis arcu tortor, suscipit eget</td>
                                                    <td>Phasellus ullamcorper ipsum</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- PRODUCT DESCRIPTION : end -->

                                </li>
                                <li style="display: none;">

                                    <!-- PRODUCT REVIEWS : begin -->
                                    <div class="product-reviews">

                                        <!-- REVIEW LIST: begin -->
                                        <ul class="review-list" id="product-reviews">
                                            <li>

                                                <!-- REVIEW : begin -->
                                                <div class="review">
                                                    <p class="review-portrait"><img alt="" src="<?= Yii::$app->request->baseUrl; ?>/img/comment_author_01.jpg"></p>
                                                    <h4 class="review-author">Floor Simons</h4>
                                                    <p class="review-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></p>
                                                    <div class="review-content various-content">
                                                        <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                                    </div>
                                                    <div class="review-info">
                                                        <div class="review-date">May 7, 2014</div>
                                                    </div>
                                                </div>
                                                <!-- REVIEW : end -->

                                            </li>
                                            <li>

                                                <!-- REVIEW : begin -->
                                                <div class="review">
                                                    <p class="review-portrait"><img src="<?= Yii::$app->request->baseUrl; ?>/img/comment_author_02.jpg" alt=""></p>
                                                    <h4 class="review-author">Nikki Neil</h4>
                                                    <p class="review-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></p>
                                                    <div class="review-content various-content">
                                                        <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas.</p>
                                                    </div>
                                                    <div class="review-info">
                                                        <div class="review-date">May 7, 2014</div>
                                                    </div>
                                                </div>
                                                <!-- REVIEW : end -->

                                            </li>
                                            <li>

                                                <!-- REVIEW : begin -->
                                                <div class="review">
                                                    <p class="review-portrait"><img src="<?= Yii::$app->request->baseUrl; ?>/img/comment_author_03.jpg" alt=""></p>
                                                    <h4 class="review-author">Tarja Lee</h4>
                                                    <p class="review-rating"><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></p>
                                                    <div class="review-content various-content">
                                                        <p>When she reached the first hills of the Italic Mountains.</p>
                                                    </div>
                                                    <div class="review-info">
                                                        <div class="review-date">May 7, 2014</div>
                                                    </div>
                                                </div>
                                                <!-- REVIEW : end -->

                                            </li>
                                        </ul>
                                        <!-- REVIEW LIST: end -->

                                        <!-- REVIEW FORM : begin -->
                                        <form id="review-form" class="review-form default-form m-validate" action="http://demos.lsvr.sk/beautyspot.html/demo/shop-detail.html" method="post">

                                            <h3 class="review-form-title">Add a comment</h3>

                                            <!-- FORM VALIDATION ERROR MESSAGE : begin -->
                                            <p class="c-alert-message m-warning m-validation-error" style="display: none;"><i class="ico fa fa-exclamation-circle"></i>Please fill in all required (*) fields.</p>
                                            <!-- FORM VALIDATION ERROR MESSAGE : end -->

                                            <div class="row">
                                                <div class="col-sm-6">

                                                    <!-- NAME FIELD : begin -->
                                                    <div class="form-field">
                                                        <label for="review-name">Your Name<span>*</span></label>
                                                        <input id="review-name" class="m-required">
                                                    </div>
                                                    <!-- NAME FIELD : end -->

                                                    <!-- EMAIL FIELD : begin -->
                                                    <div class="form-field">
                                                        <label for="review-email">Your Email Address <span>*</span></label>
                                                        <input id="review-email" class="m-required m-email">
                                                    </div>
                                                    <!-- EMAIL FIELD : end -->

                                                </div>
                                                <div class="col-sm-6">

                                                    <!-- REVIEW FIELD : begin -->
                                                    <div class="form-field">
                                                        <label for="review-message">Review <span>*</span></label>
                                                        <textarea id="review-message" class="m-required"></textarea>
                                                    </div>
                                                    <!-- REVIEW FIELD : end -->

                                                    <!-- RATING FIELD : begin -->
                                                    <div class="form-field">
                                                        <div class="review-rating">
                                                            <label>Rating</label>
                                                            <span class="rating-stars">
                                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                            </span>
                                                            <input type="hidden">
                                                        </div>
                                                    </div>
                                                    <!-- RATING FIELD : end -->

                                                    <!-- SUBMIT BUTTON : begin -->
                                                    <div class="form-field">
                                                        <button class="submit-btn c-button" type="submit" data-label="Submit" data-loading-label="Sending...">Submit</button>
                                                    </div>
                                                    <!-- SUBMIT BUTTON : end -->

                                                </div>
                                            </div>

                                        </form>
                                        <!-- REVIEW FORM : end -->

                                    </div>
                                    <!-- PRODUCT REVIEWS : end -->

                                </li>
                            </ul>
                        </div>
                        <!-- PRODUCT TABS : end -->
                    </div>
                    <!-- PRODUCT DETAIL : end -->
                </div>
                <!-- PAGE CONTENT : end -->
            </div>            
        </div>
    </div>

</div>
<!-- CORE : end -->