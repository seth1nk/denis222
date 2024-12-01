<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Библиотека';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Добро пожаловать в нашу библиотеку!</h1>

        <p class="lead">Здесь вы найдете множество интересных книг.</p>

        <p><a class="btn btn-lg btn-success" href="http://localhost:7777/index.php?r=knigi">Начать чтение</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h2 class="card-title">Новинки</h2>
                        <p class="card-text">Ознакомьтесь с последними поступлениями в нашу библиотеку.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h2 class="card-title">Популярные книги</h2>
                        <p class="card-text">Список самых читаемых книг в нашей библиотеке.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h2 class="card-title">Категории</h2>
                        <p class="card-text">Просмотрите книги по различным категориям.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>