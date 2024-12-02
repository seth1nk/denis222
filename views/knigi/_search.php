<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\KnigiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="knigi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'название') ?>

    <?= $form->field($model, 'автор') ?>

    <?= $form->field($model, 'Количество_страниц') ?>

    <?= $form->field($model, 'Год_издания') ?>

    <?php // echo $form->field($model, 'Город_издания') ?>

    <?php // echo $form->field($model, 'Рейтинг') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
