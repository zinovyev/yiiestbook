<?php
    use yii\helpers\Html;
    use yii\widgets\LinkPager;
    use yii\helpers\Url;
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
        <div>
            <?php foreach ($entries as $entry): ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?= $entry->name; ?> (<?= $entry->email; ?>) left a message:</h3>
                    </div>
                    <div class="panel-body">
                        <?= $entry->message; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 text-center">
        <?= LinkPager::widget(["pagination" => $pagination]); ?>        
    </div>
    <div class="col-md-6 text-center">
        <a href="<?= Url::to(["guestbook/form"]); ?>" class="btn btn-lg btn-primary">Create a post</a>        
    </div>
</div>