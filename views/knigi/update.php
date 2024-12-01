<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Knigi $model */

$this->title = 'Обновить страницу Книги: ' . $model->код_книги;
$this->params['breadcrumbs'][] = ['label' => 'Knigis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->код_книги, 'url' => ['view', 'код_книги' => $model->код_книги]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="knigi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
