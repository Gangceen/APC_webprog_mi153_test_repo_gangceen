<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TriviaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trivias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trivia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Trivia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->User_ID), ['view', 'id' => $model->User_ID]);
        },
    ]) ?>
</div>
