<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <!-- <div class="wrap"> -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="page-header">
                        <h1>Yiiestbook <small>A simple guestbook powerd by Yii</small></h1>
                    </div>
                </div>
            </div>        
            <?= $content ?>
        </div>
    <!-- </div> -->

    <footer class="footer">
        <div class="container">
            <p class="pull-left">
                &copy; Ivan Zinovyev
                <a href="mailto: vanyazin@gmail.com">vanyazin@gmail.com</a>
            </p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
