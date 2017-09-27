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

