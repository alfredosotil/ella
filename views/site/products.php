<?php
/* @var $this yii\web\View */

$this->title = 'Productos';
$this->registerJs(
        "
         (function() {
				var slideshow = new CircleSlideshow(document.getElementById('slideshow'));
			})();   
            ", yii\web\View::POS_END, uniqid()
);
?>
<div class="container-product">
    <div class="deco deco--title"></div>
    <div id="slideshow" class="slideshow">
        <div class="slideproduct">
            <h2 class="slide__title slide__title--preview">Macadamia Skin Oil <span class="slide__price">$39</span></h2>
            <div class="slide__item">
                <div class="slide__inner">
                    <img class="slide__img slide__img--small" src="<?= Yii::$app->request->baseUrl; ?>/img/small/1.png" alt="Some image" />
                    <button class="action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                </div>
            </div>
            <div class="slide__content">
                <div class="slide__content-scroller">
                    <img class="slide__img slide__img--large" src="<?= Yii::$app->request->baseUrl; ?>/img/1.png" alt="Some image" />
                    <div class="slide__details">
                        <h2 class="slide__title slide__title--main">Macadamia Skin Oil</h2>
                        <p class="slide__description">Hydration for very dry skin</p>
                        <div>
                            <span class="slide__price slide__price--large">$39</span>
                            <button class="button button--buy">Add to cart</button>
                        </div>
                    </div><!-- /slide__details -->
                </div><!-- slide__content-scroller -->
            </div><!-- slide__content -->
        </div>
        <div class="slideproduct">
            <h2 class="slide__title slide__title--preview">Grapeseed Skin Oil <span class="slide__price">$19</span></h2>
            <div class="slide__item">
                <div class="slide__inner">
                    <img class="slide__img slide__img--small" src="<?= Yii::$app->request->baseUrl; ?>/img/small/2.png" alt="Some image" />
                    <button class="action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                </div>
            </div>
            <div class="slide__content">
                <div class="slide__content-scroller">
                    <img class="slide__img slide__img--large" src="<?= Yii::$app->request->baseUrl; ?>/img/2.png" alt="Some image" />
                    <div class="slide__details">
                        <h2 class="slide__title slide__title--main">Grapeseed Skin Oil</h2>
                        <p class="slide__description">Moisture control for all skin types</p>
                        <div>
                            <span class="slide__price slide__price--large">$19</span>
                            <button class="button button--buy">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slideproduct">
            <h2 class="slide__title slide__title--preview">Jojoba Skin Oil <span class="slide__price">$35</span></h2>
            <div class="slide__item">
                <div class="slide__inner">
                    <img class="slide__img slide__img--small" src="<?= Yii::$app->request->baseUrl; ?>/img/small/3.png" alt="Some image" />
                    <button class="action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                </div>
            </div>
            <div class="slide__content">
                <div class="slide__content-scroller">
                    <img class="slide__img slide__img--large" src="<?= Yii::$app->request->baseUrl; ?>/img/3.png" alt="Some image" />
                    <div class="slide__details">
                        <h2 class="slide__title slide__title--main">Jojoba Skin Oil</h2>
                        <p class="slide__description">Protection for sensitive skin</p>
                        <div>
                            <span class="slide__price slide__price--large">$35</span>
                            <button class="button button--buy">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slideproduct">
            <h2 class="slide__title slide__title--preview">Amaranth Skin Oil <span class="slide__price">$29</span></h2>
            <div class="slide__item">
                <div class="slide__inner">
                    <img class="slide__img slide__img--small" src="<?= Yii::$app->request->baseUrl; ?>/img/small/4.png" alt="Some image" />
                    <button class="action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                </div>
            </div>
            <div class="slide__content">
                <div class="slide__content-scroller">
                    <img class="slide__img slide__img--large" src="<?= Yii::$app->request->baseUrl; ?>/img/4.png" alt="Some image" />
                    <div class="slide__details">
                        <h2 class="slide__title slide__title--main">Amaranth Skin Oil</h2>
                        <p class="slide__description">Rich hydration for mature skin</p>
                        <div>
                            <span class="slide__price slide__price--large">$29</span>
                            <button class="button button--buy">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slideproduct">
            <h2 class="slide__title slide__title--preview">Argan Skin Oil <span class="slide__price">$59</span></h2>
            <div class="slide__item">
                <div class="slide__inner">
                    <img class="slide__img slide__img--small" src="<?= Yii::$app->request->baseUrl; ?>/img/small/5.png" alt="Some image" />
                    <button class="action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                </div>
            </div>
            <div class="slide__content">
                <div class="slide__content-scroller">
                    <img class="slide__img slide__img--large" src="<?= Yii::$app->request->baseUrl; ?>/img/5.png" alt="Some image" />
                    <div class="slide__details">
                        <h2 class="slide__title slide__title--main">Argan Skin Oil</h2>
                        <p class="slide__description">Moisture for problematic &amp; dry skin</p>
                        <div>
                            <span class="slide__price slide__price--large">$59</span>
                            <button class="button button--buy">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slideproduct">
            <h2 class="slide__title slide__title--preview">Avocado Skin Oil <span class="slide__price">$39</span></h2>
            <div class="slide__item">
                <div class="slide__inner">
                    <img class="slide__img slide__img--small" src="<?= Yii::$app->request->baseUrl; ?>/img/small/6.png" alt="Some image" />
                    <button class="action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                </div>
            </div>
            <div class="slide__content">
                <div class="slide__content-scroller">
                    <img class="slide__img slide__img--large" src="<?= Yii::$app->request->baseUrl; ?>/img/6.png" alt="Some image" />
                    <div class="slide__details">
                        <h2 class="slide__title slide__title--main">Avocado Skin Oil</h2>
                        <p class="slide__description">Deep repair for stressed skin</p>
                        <div>
                            <span class="slide__price slide__price--large">$39</span>
                            <button class="button button--buy">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="action action--close" aria-label="Close"><i class="fa fa-close"></i></button>
    </div>  
</div>
