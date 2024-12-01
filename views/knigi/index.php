<?php

use app\models\Knigi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Книги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="knigi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить книгу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'код_книги',
            'название',
            'автор',
            'колличество_страниц',
            'год_выпуска',
            'город_издания',
            'рейтинг',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Knigi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'код_книги' => $model->код_книги]);
                 }
            ],
        ],
    ]); ?>


</div>
