<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<h1>Test</h1>

<?php
//debug($model);
?>

<?php $form = ActiveForm::begin() ?>
<?= $form->field($model, 'name')->label('Имя') ?>
<?//= $form->field($model, 'password')->label('Пароль')->passwordInput() ?>
<?= $form->field($model, 'email')->input('email') ?>
<?= $form->field($model, 'text')->label('Текст сообщения')->textarea(['rows' => 5]) ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success']); ?>
<?php $form = ActiveForm::end() ?>


