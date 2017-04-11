<?php

use yii\helpers\Html;

/* @var $this  yii\web\View */
/* @var $model common\models\Post */
/* @var $index int */
?>

<div class="<?= ($index+1)%2 == 0 ? 'green-item' : 'blue-item' ?> comment-item">
	<div class="header">
		<?= $model->name ?>
	</div>
	<div class="email">
		<?= $model->email ?>
	</div>
	<div class="comment" title="<?= $model->comment ?>">
		<?= mb_strlen($model->comment, 'utf-8') > 50 ? mb_substr($model->comment, 0, 50, 'utf-8').'...' : $model->comment ?>
	</div>
</div>


