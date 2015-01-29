<?php
    use yii\helpers\Html;
    use yii\widgets\LinkPager;
    use yii\helpers\Url;

    // Create page title
    $this->title = isset($title) ? (string) $title : '';
?>

<div class="row">
    <div class="col-md-12">
        <div>
            <?php foreach ($entries as $entry): ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="pull-right"><?= $entry->created; ?></p>
                        <h3 class="panel-title">
                            <?= Html::encode($entry->name); ?> (<i><?= Html::encode($entry->email); ?></i>) left a message:
                        </h3>
                    </div>
                    <div class="panel-body">
                        <?= Html::encode($entry->message); ?>
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