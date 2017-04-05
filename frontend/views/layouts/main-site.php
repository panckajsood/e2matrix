<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\web\UrlManager;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\WebsiteAsset;
use common\widgets\Alert;

WebsiteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl; ?>/favicon.ico" type="image/x-icon" />
    <style>
/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url(../../images/Preloader_2.gif) center no-repeat #fff;
}
</style>

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap"> 
   <div class="se-pre-con" > </div>
    <nav class="navbar navbar-default nav-top navbar-fixed-top page-navigation" data-spy="affix" data-offset-top="200">

  <div class="container">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="<?= yii\helpers\Url::to('@web/frontend/web/images/logo-c.png')?>"/></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="#home">Home</a></li>
      <li class=""><a href="#section-one">About Us</a></li>
      <li class=""><a href="#section-two">Subjects</a></li>
      <li><a href="#section-three">Our Achievers</a></li>
      <li><a href="#section-four">Testimonials</a></li-->
      <li><a href="#section-five">Contact Us</a></li>
    </ul>
    </div>
  </div>
</nav>

     <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    
</div>

<footer class="footer skin-light pad-tb-40">
  <div class="container">
    <div class="promo-block">
            <div class="promo-text">Get in touch</div>
            <div class="center-line"></div>
    </div>
    <div class="pad-tb-20"></div>
    <div class="row" id="contact">
        <div class="col-md-6 left">
            <form method="post"><input type="hidden" name="form-name" value="form 1">
                <input type="text" placeholder="Name*" required="">
                <input type="email" placeholder="Email*" required="">
                <textarea placeholder="Message*" required=""></textarea>
                <input type="submit" value="send message">
            </form>
        </div>
            <div id="info" class="col-sm-6">
        <div class="part-o col-sm-6">
            <div class="part">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p>+ 999 999 99</p>
            </div>
        </div>
        
        <div class="part-o col-sm-6">
            <div class="part">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <p>name@mywebsite.com</p>
            </div>
        </div>
        
        <div class="part-o col-sm-6">
            <div class="part">
                <i class="fa fa-location-arrow" aria-hidden="true"></i>
                <p>29 m.qodus street, shoubra, egypt</p>
            </div>
        </div>
        
        <div class="part-o col-sm-6">
            <div class="part">
                <h4>follow me</h4>
                <div class="social-media">
                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    </div>
    

  </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
