<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Knigi $model */

$this->title = 'Добавить книги';
$this->params['breadcrumbs'][] = ['label' => 'Knigis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="knigi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
