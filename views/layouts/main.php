<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header" class="bg-secondary" style="height: 3rem;">
    <div class="container d-flex justify-content-end align-items-center" style="height: 100%;">
        <?php
        NavBar::begin([
            'brandLabel' => '',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => ['class' => 'navbar-expand-md']
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [
                Yii::$app->user->isGuest
                    ? ['label' => 'Вход', 'url' => ['/site/login'], 'class' => 'nav-item']
                    : '<li class="nav-item">'
                        . Html::beginForm(['/site/logout'])
                        . Html::submitButton(
                            'Выход (' . Yii::$app->user->identity->username . ')',
                            ['class' => 'nav-link btn btn-link logout']
                        )
                        . Html::endForm()
                        . '</li>',
                ['label' => 'Главная', 'url' => ['/site/index'], 'class' => 'nav-item'],
                ['label' => 'О нас', 'url' => ['/site/about'], 'class' => 'nav-item'],
                ['label' => 'Контакты', 'url' => ['/site/contact'], 'class' => 'nav-item'],
                ['label' => 'Книги', 'url' => ['/knigi/index'], 'class' => 'nav-item'],
            ]
        ]);
        NavBar::end();
        ?>
    </div>
</header>

<div class="brand-container bg-secondary rounded-circle d-flex justify-content-center align-items-center" style="position: absolute; top: 0.5rem; left: 1rem; width: 10rem; height: 3rem;">
    <span class="brand-text text-white">Библиотека</span>
</div>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="mt-auto py-3 bg-light">
    <div class="container">
        <div class="row text-muted">
            <div class="col-md-6 text-center text-md-start">&copy; My Company <?= date('Y') ?></div>
            <div class="col-md-6 text-center text-md-end"><?= Yii::powered() ?></div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>