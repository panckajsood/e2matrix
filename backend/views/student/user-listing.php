<?php

use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
$this->title = "Users";
?>
<div class="content-wrapper">

<section class="content">
<!-- Nisha Work Space ---->

<div class="clearfix"></div>

</section>

</div>
<script>
  jQuery(function () {
 //Date picker
    jQuery('#datepicker').datepicker({
      autoclose: true
    });
 });
</script>