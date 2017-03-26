<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SessionMap */

$this->title = 'Create Session Map';
$this->params['breadcrumbs'][] = ['label' => 'Session Maps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="session-map-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
