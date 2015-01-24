<?php
    use yii\helpers\Html;
    use yii\widgets\LinkPager;
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