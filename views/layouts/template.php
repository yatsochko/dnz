<?php

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= $this->title ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <div class="container">
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><?= Html::a('�������', '/web/') ?></li>
                <li role="presentation"><?= Html::a('������', ['post/index']) ?></li>
                <li role="presentation"><?= Html::a('������', ['post/show']) ?></li>
            </ul>

            <?php if(isset($this->blocks['block1'])): ?>
                <?php echo $this->blocks['block1']; ?>
            <?php endif; ?>

            <?= $content ?>

        </div>
    </div>




    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>