<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\captcha\Captcha;
?>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($guestbook, "name"); ?>
    <?= $form->field($guestbook, "email"); ?>
    <?= $form->field($guestbook, "message")->textarea(); ?>
    <?= $form->field($guestbook, "verification", [
        "labelOptions" => ["label" => "Captcha"],
    ])->widget(Captcha::className(), ['captchaAction' => 'guestbook/captcha']); ?>

    <div class="form-group">
        <?= Html::submitButton("Submit", ["class" => "btn btn-primary"]); ?>    
    </div>

<?php ActiveForm::end(); ?>