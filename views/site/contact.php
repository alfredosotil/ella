<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- CORE : begin -->
<div id="core">

    <!-- PAGE HEADER : begin -->
    <div id="page-header">
        <div class="container">
            <h1>Contact</h1>
            <ul class="breadcrumbs">
                <li><a href="index-2.html">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
    <!-- PAGE HEADER : begin -->

    <div class="container">

        <!-- PAGE CONTENT : begin -->
        <div id="page-content">
            <div class="various-content">

                <!-- ADDRESS SECTION : begin -->
                <section>

                    <h2>Where you can find us</h2>

                    <div class="row">
                        <div class="col-lg-8">

                            <!-- MAP : begin -->
                            <div class="c-map">
                                <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Sunset+Boulevard,+Los+Angeles,+CA,+United+States&amp;aq=0&amp;oq=sunset+boul&amp;sll=37.0625,-95.677068&amp;sspn=61.323728,135.263672&amp;ie=UTF8&amp;hq=&amp;hnear=Sunset+Blvd,+Los+Angeles&amp;ll=34.080988,-118.412647&amp;spn=0.003985,0.008256&amp;t=m&amp;z=14&amp;output=embed"></iframe>
                            </div>
                            <!-- MAP : end -->

                        </div>
                        <div class="col-lg-4">

                            <p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.Aliquam lorem ante, dapibus in.</p>

                            <!-- ICON BLOCK : begin -->
                            <div class="c-icon-block">
                                <i class="ico fa fa-map-marker"></i>
                                <div class="icon-block-inner">
                                    <p>
                                        <strong>BEAUTYSPOT</strong><br>
                                        9015 Sunset Boulevard<br>
                                        Ca 90069
                                    </p>
                                </div>
                            </div>
                            <!-- ICON BLOCK : end -->

                            <!-- ICON BLOCK : begin -->
                            <div class="c-icon-block">
                                <i class="ico fa fa-clock-o"></i>
                                <div class="icon-block-inner">
                                    <dl>
                                        <dt>Mo. - Fr.:</dt>
                                        <dd>10:00 - 16:00</dd>
                                        <dt>Sa.:</dt>
                                        <dd>10:00 - 14:00</dd>
                                        <dt>Su.:</dt>
                                        <dd>Closed</dd>
                                    </dl>
                                </div>
                            </div>
                            <!-- ICON BLOCK : end -->

                        </div>
                    </div>

                </section>
                <!-- ADDRESS SECTION : end -->

                <!-- FORM SECTION : begin -->
                <section>

                    <h2>Send us a message</h2>

                    <div class="row">
                        <div class="col-lg-8">

                            <!-- CONTACT FORM : begin -->
                            <form id="contact-form" class="default-form m-ajax-form" action="http://demos.lsvr.sk/beautyspot.html/demo/ajax/contact-form.php" method="post" >
                                <input type="hidden" name="contact-form">

                                <!-- FORM VALIDATION ERROR MESSAGE : begin -->
                                <p class="c-alert-message m-warning m-validation-error" style="display: none;"><i class="ico fa fa-exclamation-circle"></i>Please fill in all required (*) fields.</p>
                                <!-- FORM VALIDATION ERROR MESSAGE : end -->

                                <!-- SENDING REQUEST ERROR MESSAGE : begin -->
                                <p class="c-alert-message m-warning m-request-error" style="display: none;"><i class="ico fa fa-exclamation-circle"></i>There was a connection problem. Try again later.</p>
                                <!-- SENDING REQUEST ERROR MESSAGE : end -->

                                <div class="row">
                                    <div class="col-sm-6">

                                        <!-- NAME FIELD : begin -->
                                        <div class="form-field">
                                            <label for="contact-name">Your Name <span>*</span></label>
                                            <input id="contact-name" name="contact-name" class="m-required">
                                        </div>
                                        <!-- NAME FIELD : end -->

                                        <!-- EMAIL FIELD : begin -->
                                        <div class="form-field">
                                            <label for="contact-email">Your Email Address <span>*</span></label>
                                            <input id="contact-email" name="contact-email" class="m-required m-email">
                                        </div>
                                        <p style="display: none;">
                                            <label for="contact-email-hp">Re Email Address</label>
                                            <input id="contact-email-hp" name="contact-email-hp">
                                        </p>
                                        <!-- EMAIL FIELD : end -->

                                        <!-- PHONE FIELD : begin -->
                                        <div class="form-field">
                                            <label for="contact-phone">Your Phone Number</label>
                                            <input id="contact-phone" name="contact-phone">
                                        </div>
                                        <!-- PHONE FIELD : end -->

                                    </div>
                                    <div class="col-sm-6">

                                        <!-- SUBJECT FIELD : begin -->
                                        <div class="form-field">
                                            <label for="contact-subject">Message Subject</label>
                                            <input id="contact-subject" name="contact-subject">
                                        </div>
                                        <!-- SUBJECT FIELD : end -->

                                        <!-- MESSAGE FIELD : begin -->
                                        <div class="form-field">
                                            <label for="contact-message">Message <span>*</span></label>
                                            <textarea id="contact-message" name="contact-message" class="m-required"></textarea>
                                        </div>
                                        <!-- MESSAGE FIELD : end -->

                                        <!-- SUBMIT BUTTON : begin -->
                                        <div class="form-field">
                                            <button class="submit-btn c-button" type="submit" data-label="Send Message" data-loading-label="Sending...">Send Message</button>
                                        </div>
                                        <!-- SUBMIT BUTTON : end -->

                                    </div>
                                </div>

                            </form>
                            <!-- CONTACT FORM : end -->

                        </div>
                        <div class="col-lg-4">

                            <!-- ICON BLOCK : begin -->
                            <div class="c-icon-block">
                                <i class="ico fa fa-info-circle"></i>
                                <div class="icon-block-inner">
                                    <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
                                    <p><a href="ajax/reservation-form.html" class="c-button m-type-2 m-open-ajax-modal">Make a Reservation</a></p>
                                </div>
                            </div>
                            <!-- ICON BLOCK : end -->

                        </div>
                    </div>

                </section>
                <!-- FORM SECTION : end -->

            </div>
        </div>
        <!-- PAGE CONTENT : end -->

    </div>

</div>
<!-- CORE : end -->
