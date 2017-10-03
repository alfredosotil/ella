<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" data-ng-app="ella-app">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?= Yii::$app->request->baseUrl; ?>/img/favicon.ico">        
             <!--<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl; ?>/fonts/font-awesome-4.3.0/css/font-awesome.min.css" />-->
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body data-ng-controller="MainController">
        <?php $this->beginBody() ?>
        <!-- HEADER : begin -->
        <header id="header" class="m-animated">
            <div class="header-bg">
                <div class="header-inner">
                    <!-- HEADER BRANDING : begin -->
                    <div class="header-branding">
                        <a href="<?= Url::toRoute("/index") ?>"><img src="<?= Yii::$app->request->baseUrl; ?>/img/elladondesanar-logo.png" alt="BeautySpot" width="291"></a>
                    </div>
                    <!-- HEADER BRANDING : end -->
                    <!-- HEADER NAVIGATION : begin -->
                    <div class="header-navigation">
                        <!-- HEADER MENU : begin -->
                        <nav class="header-menu">
                            <button class="header-menu-toggle" type="button"><i class="fa fa-bars"></i>MENU</button>
                            <ul>
                                <li class="m-active">
                                    <span><a href="<?= Url::toRoute("/index") ?>">Inicio</a></span>
                                </li>
                                <li>
                                    <span><a href="<?= Url::toRoute("/products") ?>">Producto</a></span>
                                </li>
                                <li>
                                    <span><a href="<?= Url::toRoute("/services") ?>">Servicios</a></span>
                                    <ul class="sub-menu">
                                        <li><a href="<?= Url::toRoute(["/services", "#" => "cosmetics"]) ?>">Cosm&eacute;tico Facial</a></li>
                                        <li><a href="<?= Url::toRoute(["/services", "#" => "body-treatments"]) ?>">Tratamientos de Cuerpo</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <span><a href="<?= Url::toRoute("/shop") ?>">Comprar</a></span>
                                    <!--                                    <ul class="sub-menu">
                                                                            <li><a href="shop-list.html">Product List</a></li>
                                                                            <li><a href="shop-detail.html">Product Detail</a></li>
                                                                            <li><a href="shop-cart.html">Cart Detail</a></li>
                                                                            <li><a href="shop-checkout.html">Checkout</a></li>
                                                                        </ul>-->
                                </li>
                                <li>
                                    <span><a href="<?= Url::toRoute("/contact") ?>">Contactos</a></span>
                                </li>
                            </ul>
                        </nav>
                        <!-- HEADER MENU : end -->
                        <!-- HEADER CART : begin -->
                        <!--                        <div class="header-cart">
                                                    <div class="header-cart-inner">
                                                        <a href="shop-cart.html"><i class="cart-ico fa fa-shopping-cart"></i><span class="cart-label">Cart</span><span class="cart-count">(3 items)</span></a>
                                                    </div>
                                                </div>-->
                        <!-- HEADER CART : end -->
                        <!-- HEADER SEARCH : begin -->
                        <!--                        <div class="header-search">
                                                    <div class="header-search-inner">
                                                        <form class="search-form" action="http://demos.lsvr.sk/beautyspot.html/demo/search-results.html">
                                                            <i class="search-ico fa fa-search"></i>
                                                            <input class="search-input" type="text" placeholder="Search for...">
                                                            <button class="search-submit" type="submit"><i class="fa fa-angle-right"></i></button>
                                                            <button class="search-toggle" type="button">Search</button>
                                                        </form>
                                                    </div>
                                                    <button class="search-toggle-mobile" type="button"><i class="fa"></i></button>
                                                </div>-->
                        <!-- HEADER SEARCH : end -->
                    </div>
                    <!-- HEADER NAVIGATION : end -->
                    <!-- HEADER PANEL : begin -->
                    <div class="header-panel">
                        <button class="header-panel-toggle" type="button"><i class="fa"></i></button>
                        <!-- HEADER RESERVATION : begin -->
                        <div class="header-reservation">
                            <a href="ajax/reservation-form.html" class="c-button m-open-ajax-modal">Arma tu Grupo</a>
                        </div>
                        <!-- HEADER RESERVATION : end -->
                        <!-- HEADER CONTACT : begin -->
                        <div class="header-contact">
                            <ul>
                                <!-- PHONE : begin -->
                                <li>
                                    <div class="item-inner">
                                        <i class="ico fa fa-phone"></i>
                                        <strong>+ 51 954 722 495 </strong>
                                    </div>
                                    <div class="item-inner">
                                        <i class="ico fa fa-phone"></i>
                                        <strong>+ 51 980 727 281 </strong>
                                    </div>
                                </li>
                                <!-- PHONE : end -->
                                <!-- EMAIL : begin -->
                                <li>
                                    <div class="item-inner">
                                        <i class="ico fa fa-envelope-o"></i>
                                        <a href="#">hello@elladondesanar.com</a>
                                    </div>
                                    <div class="item-inner">
                                        <i class="ico fa fa-envelope-o"></i>
                                        <a href="#">elladondesanar@gmail.com</a>
                                    </div>
                                </li>
                                <!-- EMAIL : end -->
                                <!-- ADDRESS : begin -->
                                <li>
                                    <div class="item-inner">
                                        <i class="ico fa fa-map-marker"></i>
                                        <strong>Ella</strong><br>
                                        Avenida Brigida Silva de Ochoa, San Miguel<br>
                                    </div>
                                </li>
                                <!-- ADDRESS : end -->
                                <!-- HOURS : begin -->
                                <li>
                                    <div class="item-inner">
                                        <i class="ico fa fa-clock-o"></i>
                                        <dl>
                                            <dt>Lu. - Vi.:</dt>
                                            <dd>10:00 - 19:00</dd>
                                            <dt>Sa.:</dt>
                                            <dd>10:00 - 14:00</dd>
                                            <dt>Do.:</dt>
                                            <dd>Cerrado</dd>
                                        </dl>
                                    </div>
                                </li>
                                <!-- HOURS : end -->
                            </ul>
                        </div>
                        <!-- HEADER CONTACT : end -->
                        <!-- HEADER SOCIAL : begin -->
                        <div class="header-social">
                            <ul>
                                <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com/elladondesanar/" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <!-- HEADER SOCIAL : end -->
                    </div>
                    <!-- HEADER PANEL : end -->
                </div>
            </div>
        </header>
        <!-- HEADER : end -->
        <!-- WRAPPER : begin -->
        <div id="wrapper">
            <p ng-cloak>{{test}}</p>            
            <?= $content ?>
            <!-- BOTTOM PANEL : begin -->
            <div id="bottom-panel">
                <div class="bottom-panel-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">

                                <!-- BOTTOM TEXT : begin -->
                                <div class="bottom-text various-content">

                                    <h3>Acerca de Ella</h3>
                                    <p><strong>ELLA</strong> is an ideal template for <strong>beauty salon, hairdressers, wellness or spa</strong>. Clean code and top-notch web design techniques are wrapped with <strong>several gorgeous color schemes</strong> to choose from.</p>

                                </div>
                                <!-- BOTTOM TEXT : end -->

                            </div>
                            <div class="col-md-6">

                                <!-- BOTTOM SUBSCRIBE : begin -->
                                <div class="bottom-subscribe various-content">

                                    <h3>Not&iacute;cias de ELLA</h3>
                                    <p>Ella, te presenta su ultima variedad de productos.</p>
                                    <form id="subscribe-form" action="" method="get">

                                        <!-- VALIDATION ERROR MESSAGE : begin -->
                                        <p style="display: none;" class="c-alert-message m-warning m-validation-error"><i class="ico fa fa-exclamation-circle"></i>Email address is required.</p>
                                        <!-- VALIDATION ERROR MESSAGE : end -->

                                        <!-- SENDING REQUEST ERROR MESSAGE : begin -->
                                        <p style="display: none;" class="c-alert-message m-warning m-request-error"><i class="ico fa fa-exclamation-circle"></i>There was a connection problem. Try again later.</p>
                                        <!-- SENDING REQUEST ERROR MESSAGE : end -->

                                        <!-- SUCCESS MESSAGE : begin -->
                                        <p style="display: none;" class="c-alert-message m-success"><i class="ico fa fa-check-circle"></i><strong>Sent successfully.</strong></p>
                                        <!-- SUCCESS MESSAGE : end -->

                                        <div class="form-fields">
                                            <input class="m-required m-email" name="EMAIL" type="text" data-placeholder="Tu correo" title="Tu correo aquí">
                                            <button class="c-button submit-btn" type="submit" data-label="Subscribe" data-loading-label="Enviando...">Suscribete aqu&iacute;</button>
                                        </div>
                                    </form>

                                </div>
                                <!-- BOTTOM SUBSCRIBE : end -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BOTTOM PANEL : end -->
            <footer id="footer">
                <div class="container">
                    <!-- FOOTER TWITTER : begin -->
                    <!--                    <div class="footer-twitter m-paginated" data-id="LSVRthemes" data-limit="3" data-interval="12000">
                                            <div class="footer-twitter-inner">
                                                <i class="ico fa fa-twitter"></i>
                                                <h4 class="twitter-title"><a href="https://twitter.com/LSVRthemes">@LSVRthemes</a></h4>
                                                <div class="twitter-feed">
                                                    <span class="c-loading-anim"><span></span></span>
                                                </div>
                                            </div>
                                        </div>-->
                    <!-- FOOTER TWITTER : end -->
                    <!-- FOOTER BOTTOM : begin -->
                    <div class="footer-bottom">
                        <div class="row">
                            <div class="col-md-6 col-md-push-6">
                                <!-- FOOTER MENU : begin -->
                                <nav class="footer-menu">
                                    <ul>
                                        <li><a href="index.html">Inicio</a></li>
                                        <li><a href="services.html">Servicios</a></li>
                                    </ul>
                                </nav>
                                <!-- FOOTER MENU : end -->
                            </div>
                        </div>
                    </div>
                    <!-- FOOTER BOTTOM : end -->
                </div>
            </footer>
            <!-- FOOTER : end -->
        </div>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
