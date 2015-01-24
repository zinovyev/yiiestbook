<?php
    use yii\helpers\Html;
?>
<div class="row">
    <div class="col-md-12">

        <div class="page-header">
            <h1>Yiiestbook <small>A simple guestbook powerd by Yii</small></h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success" role="alert">
            Thank you for your feedback, <?= Html::encode($guestbook->name); ?>!
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <p>You will be redirected in <b>5 seconds!</b></p>
    </div>
</div>