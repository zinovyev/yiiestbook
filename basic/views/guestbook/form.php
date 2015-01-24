<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\captcha\Captcha;
    use yii\helpers\Url
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
        <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($guestbook, "name"); ?>
            <?= $form->field($guestbook, "email"); ?>
            <?= $form->field($guestbook, "message")->textarea(); ?>
            <?= $form->field($guestbook, "verification", [
                "labelOptions" => ["label" => "Captcha"],
            ])->widget(Captcha::className(), ['captchaAction' => 'guestbook/captcha']); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-6 pull-right">
        <div class="form-group text-center">
            <?= Html::submitButton("Submit", ["class" => "btn btn-primary btn-lg"]); ?>    
        </div>

        <?php ActiveForm::end(); ?>
    </div>
    <div class="col-md-6 text-center pull-left">
        <a href="<?= Url::to(["guestbook/index"]); ?>" class="btn btn-default btn-lg">Go back button</a>
    </div>    
</div>