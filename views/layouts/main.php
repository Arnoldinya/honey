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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?= $content ?>
</div>

<footer class="footer">
    <div class="logo-bottom">
        <a href="/" class="">
            <img src="/images/logo.png" class="logo-img-bottom" alt="HoneyHunters">
        </a>
    </div>
    <div class="social-icons">
        <a href="https://vk.com" class="social">
            <img src="/images/vk.png" alt="vk">
        </a>
        <a href="https://fb.com" class="social">
            <img src="/images/fb.png" alt="vk">
        </a>
    </div>
    <div class="clear"></div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
