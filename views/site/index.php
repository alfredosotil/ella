<?php
/* @var $this yii\web\View */

$this->title = 'Inicio';
?>
<!-- MAIN SLIDER : begin -->
<div id="main-slider" data-interval="8000">
    <div class="slide-list">

        <!-- SLIDE 1 : begin -->
        <div class="slide slide-1" data-label="Bienvenida a ELLA" style="background-image: url( '<?= Yii::$app->request->baseUrl; ?>/img/slide_01.jpg' );">
            <div class="slide-bg">
                <div class="container">
                    <div class="slide-inner">
                        <div class="slide-content various-content textalign-left valign-middle">

                            <h1>Bienvenida<br>a ELLA!</h1>
                            <h3>ELLA es un Beauty Salon,<br> Wellness o Spa</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SLIDE 1 : end -->

        <!-- SLIDE 2 : begin -->
        <div class="slide slide-2" data-label="20% desc. en Masajes" style="background-image: url( '<?= Yii::$app->request->baseUrl; ?>/img/slide_02.jpg' );">
            <div class="slide-bg">
                <div class="container">
                    <div class="slide-inner">
                        <div class="slide-content various-content textalign-right valign-middle">

                            <h2>20% descuento<br>Masajes</h2>
                            <h3>Este viernes unicamente!<br><a href="ajax/reservation-form.html" class="m-open-ajax-modal">Has una Reservaci&oacute;n</a></h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SLIDE 2 : end -->

        <!-- SLIDE 3 : begin -->
        <div class="slide slide-3" data-label="Eshop Lanzada" style="background-image: url( '<?= Yii::$app->request->baseUrl; ?>/img/slide_03.jpg' );">
            <div class="slide-bg">
                <div class="container">
                    <div class="slide-inner">
                        <div class="slide-content various-content textalign-left valign-middle">

                            <h2>E - shop<br>Lanzada</h2>
                            <h3><a href="shop.html">Ech&aacute; un vistazo</a> a nuestros Cat&aacute;logo</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SLIDE 3 : end -->

    </div>
</div>
<!-- MAIN SLIDER : end -->

<!-- CORE : begin -->
<div id="core">
    
    

    <!-- PAGE CONTENT : begin -->
    <div id="page-content">
        <div class="various-content">

            <!-- SERVICES SECTION : begin -->
            <section>

                <!-- SECTION HEADER : begin -->
                <header>
                    <div class="container">
                        <h2>Nuestros Servicios</h2>
                        <p class="subtitle">Ofrecemos servicios variados de belleza</p>
                        <p class="more"><a href="services.html" class="c-button m-type-2">Ver todos</a></p>
                    </div>
                </header>
                <!-- SECTION HEADER : end -->

                <!-- SERVICE LIST : begin -->
                <div class="c-service-list m-paginated" data-items="4" data-items-desktop="4" data-items-desktop-small="3" data-items-tablet="2" data-items-mobile="1">
                    <div class="container">
                        <div class="service-list-inner">
                            <div class="service-list-item">

                                <!-- SERVICE : begin -->
                                <div class="c-service">
                                    <div class="service-image">
                                        <a href="services.html#cosmetics"><img src="<?= Yii::$app->request->baseUrl; ?>/img/service_01.jpg" alt=""></a>
                                    </div>
                                    <h3 class="service-title"><a href="services.html#cosmetics">Cosm&eacute;ticos</a></h3>
                                    <div class="service-description">
                                        <p>Faciales, Exfoliaciones, Tratamientos de Acn&eacute;, Anti-envejecimiento</p>
                                    </div>
                                </div>
                                <!-- SERVICE : end -->

                            </div>
                            <div class="service-list-item">

                                <!-- SERVICE : begin -->
                                <div class="c-service">
                                    <div class="service-image">
                                        <a href="services.html#hairdressing"><img src="<?= Yii::$app->request->baseUrl; ?>/img/service_02.jpg" alt=""></a>
                                    </div>
                                    <h3 class="service-title"><a href="services.html#hairdressing">Pelo Saludable</a></h3>
                                    <div class="service-description">
                                        <p>Lavado cl&aacute;sico, Lavado natural, Secado</p>
                                    </div>
                                </div>
                                <!-- SERVICE : end -->

                            </div>
                            <div class="service-list-item">

                                <!-- SERVICE : begin -->
                                <div class="c-service">
                                    <div class="service-image">
                                        <a href="services.html#body-treatments"><img src="<?= Yii::$app->request->baseUrl; ?>/img/service_03.jpg" alt=""></a>
                                    </div>
                                    <h3 class="service-title"><a href="services.html#body-treatments">Tratamientos de Cuerpo</a></h3>
                                    <div class="service-description">
                                        <p>Envolturas Corporales, Tratamiento de exfoliaciones corporales, Tratamiento de Celulitis</p>
                                    </div>
                                </div>
                                <!-- SERVICE : end -->

                            </div>
                            <div class="service-list-item">

                                <!-- SERVICE : begin -->
                                <div class="c-service">
                                    <div class="service-image">
                                        <a href="services.html#massages"><img src="<?= Yii::$app->request->baseUrl; ?>/img/service_04.jpg" alt=""></a>
                                    </div>
                                    <h3 class="service-title"><a href="services.html#massages">Masajes</a></h3>
                                    <div class="service-description">
                                        <p>Masajes en la cabeza y manos, Aromateerapia Masaje</p>
                                    </div>
                                </div>
                                <!-- SERVICE : end -->

                            </div>
                            <div class="service-list-item">

                                <!-- SERVICE : begin -->
                                <div class="c-service">
                                    <div class="service-image">
                                        <a href="services.html"><img src="<?= Yii::$app->request->baseUrl; ?>/img/service_05.jpg" alt=""></a>
                                    </div>
                                    <h3 class="service-title"><a href="services.html">Manicure Pedicure</a></h3>
                                    <div class="service-description">
                                        <p>Limpieza, Pintado, Arte, Acr&iacute;licos</p>
                                    </div>
                                </div>
                                <!-- SERVICE : end -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- SERVICE LIST : end -->

            </section>
            <!-- SERVICES SECTION : end -->

            <!-- GALLERY SECTION : begin -->
            <section>

                <!-- SECTION HEADER : begin -->
                <header>
                    <div class="container">
                        <h2>Galer&iacute;a</h2>
                        <p class="subtitle">Mira como se ve nuestro mundo</p>
                        <!--<p class="more"><a href="gallery.html" class="c-button m-type-2">Enter Gallery</a></p>-->
                    </div>
                </header>
                <!-- SECTION HEADER : end -->

                <!-- GALLERY : begin -->
                <div class="c-gallery m-paginated" data-items="4" data-items-desktop="4" data-items-desktop-small="3" data-items-tablet="2" data-items-mobile="1">
                    <div class="thumb-list">
                        <div class="thumb"><a href="<?= Yii::$app->request->baseUrl; ?>/img/gallery_01.jpg" class="lightbox" data-lightbox-group="gallery"><img src="<?= Yii::$app->request->baseUrl; ?>/img/gallery_01.jpg" alt=""></a></div>
                        <div class="thumb"><a href="<?= Yii::$app->request->baseUrl; ?>/img/gallery_02.jpg" class="lightbox" data-lightbox-group="gallery"><img src="<?= Yii::$app->request->baseUrl; ?>/img/gallery_02.jpg" alt=""></a></div>
                        <div class="thumb"><a href="<?= Yii::$app->request->baseUrl; ?>/img/gallery_03.jpg" class="lightbox" data-lightbox-group="gallery"><img src="<?= Yii::$app->request->baseUrl; ?>/img/gallery_03.jpg" alt=""></a></div>
                        <div class="thumb"><a href="<?= Yii::$app->request->baseUrl; ?>/img/gallery_04.jpg" class="lightbox" data-lightbox-group="gallery"><img src="<?= Yii::$app->request->baseUrl; ?>/img/gallery_04.jpg" alt=""></a></div>
                        <div class="thumb"><a href="<?= Yii::$app->request->baseUrl; ?>/img/gallery_05.jpg" class="lightbox" data-lightbox-group="gallery"><img src="<?= Yii::$app->request->baseUrl; ?>/img/gallery_05.jpg" alt=""></a></div>
                        <div class="thumb"><a href="<?= Yii::$app->request->baseUrl; ?>/img/gallery_06.jpg" class="lightbox" data-lightbox-group="gallery"><img src="<?= Yii::$app->request->baseUrl; ?>/img/gallery_06.jpg" alt=""></a></div>
                        <div class="thumb"><a href="<?= Yii::$app->request->baseUrl; ?>/img/gallery_07.jpg" class="lightbox" data-lightbox-group="gallery"><img src="<?= Yii::$app->request->baseUrl; ?>/img/gallery_07.jpg" alt=""></a></div>
                        <div class="thumb"><a href="<?= Yii::$app->request->baseUrl; ?>/img/gallery_08.jpg" class="lightbox" data-lightbox-group="gallery"><img src="<?= Yii::$app->request->baseUrl; ?>/img/gallery_08.jpg" alt=""></a></div>
                    </div>
                </div>
                <!-- GALLERY : end -->

            </section>
            <!-- GALLERY SECTION : end -->

            <!-- TESTIMONIALS SECTION : begin -->
            <section>

                <!-- SECTION HEADER : begin -->
                <header>
                    <div class="container">
                        <h2>Nuestros Clientes</h2>
                        <p class="subtitle">Lee porque ellos nos prefieren</p>
                        <p class="more"><a href="contact.html" class="c-button m-type-2">Se como ELLA</a></p>
                    </div>
                </header>
                <!-- SECTION HEADER : end -->

                <!-- TESTIMONIAL LIST : begin -->
                <div class="c-testimonial-list m-paginated">
                    <div class="container">
                        <div class="testimonial-list-inner">
                            <div class="testimonial-list-item">

                                <!-- TESTIMONIAL : begin -->
                                <div class="c-testimonial m-has-portrait">
                                    <div class="testimonial-inner">
                                        <p class="testimonial-portrait"><span><img src="<?= Yii::$app->request->baseUrl; ?>/img/client_01.jpg" alt=""></span></p>
                                        <blockquote>
                                            <p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.</p>
                                            <footer><strong>Floor Simons</strong>, Startup CEO</footer>
                                        </blockquote>
                                    </div>
                                </div>
                                <!-- TESTIMONIAL : end -->

                            </div>
                            <div class="testimonial-list-item">

                                <!-- TESTIMONIAL : begin -->
                                <div class="c-testimonial m-has-portrait">
                                    <div class="testimonial-inner">
                                        <p class="testimonial-portrait"><span><img src="<?= Yii::$app->request->baseUrl; ?>/img/client_02.jpg" alt=""></span></p>
                                        <blockquote>
                                            <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean imperdiet.</p>
                                            <footer><strong>Nikki Neil</strong>, Blogger</footer>
                                        </blockquote>
                                    </div>
                                </div>
                                <!-- TESTIMONIAL : end -->

                            </div>
                            <div class="testimonial-list-item">

                                <!-- TESTIMONIAL : begin -->
                                <div class="c-testimonial m-has-portrait">
                                    <div class="testimonial-inner">
                                        <p class="testimonial-portrait"><span><img src="<?= Yii::$app->request->baseUrl; ?>/img/client_03.jpg" alt=""></span></p>
                                        <blockquote>
                                            <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Aenean imperdiet. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Nam quam nunc.</p>
                                            <footer><strong>Tarja Lee</strong>, Writer</footer>
                                        </blockquote>
                                    </div>
                                </div>
                                <!-- TESTIMONIAL : end -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- TESTIMONIAL LIST : end -->

            </section>
            <!-- TESTIMONIALS SECTION : end -->

            <!-- BRANDS SECTION : begin -->
            <section>

                <!-- SECTION HEADER : begin -->
                <header>
                    <div class="container">
                        <h2>Nuestras Marcas Favoritas</h2>
                        <p class="subtitle">Solo usamos productos de Calidad</p>
                    </div>
                </header>
                <!-- SECTION HEADER : end -->

                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="textalign-center">

                                <!-- BRAND LOGO : begin -->
                                <a href="#" class="no-border"><img src="<?= Yii::$app->request->baseUrl; ?>/img/brand_01.png" alt=""></a>
                                <!-- BRAND LOGO : end -->

                            </p>
                        </div>
                        <div class="col-sm-3">
                            <p class="textalign-center">

                                <!-- BRAND LOGO : begin -->
                                <a href="#" class="no-border"><img src="<?= Yii::$app->request->baseUrl; ?>/img/brand_02.png" alt=""></a>
                                <!-- BRAND LOGO : end -->

                            </p>
                        </div>
                        <div class="col-sm-3">
                            <p class="textalign-center">

                                <!-- BRAND LOGO : begin -->
                                <a href="#" class="no-border"><img src="<?= Yii::$app->request->baseUrl; ?>/img/brand_03.png" alt=""></a>
                                <!-- BRAND LOGO : end -->

                            </p>
                        </div>
                        <div class="col-sm-3">
                            <p class="textalign-center">

                                <!-- BRAND LOGO : begin -->
                                <a href="#" class="no-border"><img src="<?= Yii::$app->request->baseUrl; ?>/img/brand_04.png" alt=""></a>
                                <!-- BRAND LOGO : end -->

                            </p>
                        </div>
                    </div>
                </div>

            </section>
            <!-- BRANDS SECTION : end -->

        </div>
    </div>
    <!-- PAGE CONTENT : end -->

</div>
<!-- CORE : end -->
