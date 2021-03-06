<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserinfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Userinfos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userinfo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Userinfo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'User_ID',
            'Name',
            'Nickname',
            'Email:email',
            'Home_Address',
            // 'Gender',
            // 'Cp_Num',
            // 'Comment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
