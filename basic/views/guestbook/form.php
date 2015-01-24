<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($guestbook, "name"); ?>
    <?= $form->field($guestbook, "email"); ?>
    <?= $form->field($guestbook, "message")->textarea(); ?>

    <div class="form-group">
        <?= Html::submitButton("Submit", ["class" => "btn btn-primary"]); ?>    
    </div>

<?php ActiveForm::end(); ?>