<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Knigi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="knigi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'название')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'автор')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Количество_страниц')->textInput() ?>

    <?= $form->field($model, 'Год_издания')->textInput() ?>

    <?= $form->field($model, 'Город_издания')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Рейтинг')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
