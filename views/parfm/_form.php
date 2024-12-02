<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Parfm $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="parfm-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Название')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Тип')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Объем')->textInput() ?>

    <?= $form->field($model, 'Цена')->textInput() ?>

    <?= $form->field($model, 'Бренд')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Рейтинг')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
