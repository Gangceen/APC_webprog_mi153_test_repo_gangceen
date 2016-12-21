<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Trivia */

$this->title = $model->User_ID;
$this->params['breadcrumbs'][] = ['label' => 'Trivias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trivia-view">

    <h1><?= Html::encode($this->title) ?></h1>
	
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'User_ID',
            'Question',
            'Answer',
        ],
    ]) ?>

</div>
