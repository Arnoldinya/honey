<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\ListView;
use yii\widgets\Pjax;

/* @var $this         yii\web\View */
/* @var $post         common\models\Post */
/* @var $form         yii\bootstrap\ActiveForm */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'HoneyHunters';
?>
<?php Pjax::begin() ?>
<div class="row top-form">
    <div class="col-sm-12">
        <a href="/">
            <img src="/images/logo.png" class="logo-img" alt="HoneyHunters">
        </a>
        
        <div class="mail">
            <img src="/images/mail.png" class="" alt="mail">
        </div>
        <?php $form = ActiveForm::begin([
            'id'          => 'post-form',
            'options'     => [
                'class'     => 'form-horizontal',
                'data-pajx' => '',
            ],
            'fieldConfig' => [
                'template'  => "{label}\n{input}",
            ],
        ]); ?>

        <div class="row">
            <div class="col-sm-6">
                <?= $form->field($post, 'name')->textInput([
                    'maxlength' => true,
                    'class'     => 'form-control form-control-text',
                ]) ?>

                <?= $form->field($post, 'email')->textInput([
                    'maxlength' => true,
                    'class'     => 'form-control form-control-text',
                ]) ?>
            </div>

            <div class="col-sm-6 textarea-container">
                <?= $form->field($post, 'comment')->textarea([
                    'rows'  => 6,
                    'class' => 'form-control form-control-textarea',
                ]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 btn-container">
                <?= Html::submitButton('Записать', ['class' => 'btn btn-red']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
<div class="row comment-container">
    <h2>
        Выводим комментарии
    </h2>
    <div class="">
        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView'     => function ($model, $key, $index) {
                return $this->render('_post', [
                    'model' => $model,
                    'key'   => $key,
                    'index' => $index,
                ]);
            },
            'summary'     => false,
            'options'     => [
                'tag'   => 'div',
                'class' => 'commnet-items row',
            ],
            'itemOptions' => [
                'tag'   => 'div',
                'class' => 'col-sm-4',
            ],
        ]) ?>
    </div>
</div>
<?php Pjax::end() ?>