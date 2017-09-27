<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Про нас';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content">
    <div class="container no-padding">
        <div class="row">
            <div class="site-about">
                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    This is the About page. You may modify the following file to customize its content:
                </p>

                <code><?= __FILE__ ?></code>
            </div>
        </div>
    </div>
</div>