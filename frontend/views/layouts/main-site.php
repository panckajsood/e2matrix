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
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
<div class="se-pre-con"></div>

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
      <li class="current"><a href="#home">Home</a></li>
      <li class=""><a href="#section-one">Why Us</a></li>
      <li class=""><a href="#section-two">Our Offerings</a></li>
      <li><a href="#section-three">Our Achievers</a></li>
      <li><a href="#section-four">Testimonials</a></li-->
      <li><a href="#section-five">Contact Us</a></li>
	  <li><a href="<?= Url::to(['site/signup']) ?>">Signup</a></li>
    </ul>
	</div>
  </div>
</nav>
<div class="clearfix" style=""></div>
 
    <div>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer skin-light pad-t-60">
  <div class="container">
    <div class="promo-block">
            <div class="promo-text">Get in touch</div>
            <div class="center-line"></div>
    </div>
    <div class="pad-tb-20"></div>
    <div class="row" id="contact">
    
    <div class="col-md-6 left ">
        <form method="post"><input type="hidden" name="form-name" value="form 1">
            <input type="text" placeholder="Name*" required="">
            <input type="email" placeholder="Email*" required="">
            <textarea placeholder="Message*" required=""></textarea>
            <input type="submit" value="send message">
        </form>
    </div>
    <div class="col-md-6 left ">
        <div class="part address-container ">
            
            <h3 class="heading" style="background-position:bottom center"> <i class="fa fa-location-arrow" aria-hidden="true"></i> Location</h3>
            <ul>
            <li>#6639, St.No.3, Guru Nanak Nagar, Daba Lohara Road, Ludhiana, India 141016</li>
            <li> <br> <strong>Opening Hours</strong><br>
            08:00 AM – 06:00 PM</li>
            </ul>
        </div>
    </div>
        
    <div class="col-sm-12">
    <div id="info" class="clearfix">
        <div class="part-o col-sm-3">
            <div class="part">
                <i class="fa fa-user" aria-hidden="true"></i>
                <p>Panckaj Sood</p>
            </div>
        </div>
        <div class="part-o col-sm-3">
            <div class="part">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p>89683-37425, 96465-81420</p>
            </div>
        </div>
        
        <div class="part-o col-sm-3">
            <div class="part">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <p>pankaj.sood205@gmail.com</p>
            </div>
        </div>
        
    
        <div class="part-o col-sm-3">
            <div class="part ">
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
    
  </div>

 <div class="copyright_info pad-tb-40">
<div class="container">
<div class="text-center">&copy; 2017 E2Matrix Study Accademy. All Rights Reserved</div>
</div>
</div>

</footer>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
