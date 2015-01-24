<?php
    use yii\helpers\Html;
    use yii\widgets\LinkPager;
    use yii\helpers\Url;
?>
<h1>Guestbook entries:</h1>

<ul>
    <?php foreach ($entries as $entry): ?>
        <li>
            <?= $entry->name; ?> (<?= $entry->email; ?>) left a message:<br>
            <?= $entry->message; ?>
        </li>
    <?php endforeach; ?>
</ul>

<?= LinkPager::widget(["pagination" => $pagination]); ?>
<br>
<a href="<?= Url::to(["guestbook/form"]); ?>" class="btn btn-primary">Create a post</a>