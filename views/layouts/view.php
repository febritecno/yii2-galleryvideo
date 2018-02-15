<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    
<style>
    .card {
padding-top: 20px;
    margin: 10px 0 20px 0;
    background-color: #ffffff;
    border: 1px solid #c5c5c5;
    border-top-width: 0;
    border-bottom-width: 2px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: content-box;
}


.card.hovercard {
    position: relative;
    padding-top: 0;
    padding-left: 1%;
    overflow: hidden;
    text-align: left;
    background-color: #f2f2f2;
    border-radius: 10px;
    height: 1000px;
}

.card.hovercard .video {
  padding-top: 10px;
  width: 100%;
  height: 50%;
}

.card.hovercard .avatar {
 position: relative;
top: -40px;
margin-bottom: -10px;
}

.card.hovercard .avatar .video {
  width: 80px;
  height: 80px;
  max-width: 80px;
  max-height: 80px;
  -webkit-border-radius: 50%;
     -moz-border-radius: 50%;
          border-radius: 50%;
}

.card.hovercard .info {
  padding: 5px 50px 100px;
    margin-top: 50px;
    padding-top: 10px;
}

.card.hovercard .info .title {
  font-size: xx-large;
    font-family: fantasy;
    margin-bottom: -50px;
    margin-top: -10px;
}

.card.hovercard .info .desc {
    overflow: hidden;
    font-size: 15px;
    padding-top: 20px;
    line-height: 20px;
    margin: 10px;
    color: #737373;
    text-overflow: ellipsis;
}

</style>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Gallery Video',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
             Yii::$app->user->isGuest ? (
                ['label' => 'Info', 'url' => ['/site/info']]
            ) : (
                '<li>'
                . Html::beginForm(['/admin'], 'post')
                . Html::submitButton(
                    'Admin Panel',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            ),
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    
        <?= $content ?>
    </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
