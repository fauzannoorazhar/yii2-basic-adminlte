<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\UserRole;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar User';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index box box-primary">

    <div class="box-header">
        <?= Html::a('<i class="fa fa-plus"></i> Tambah User', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-print"></i> Export Excel User', Yii::$app->request->url.'&export=1', ['class' => 'btn btn-success btn-flat']) ?>

    </div>

    <div class="box-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => 'No',
                'headerOptions' => ['style' => 'text-align:center'],
                'contentOptions' => ['style' => 'text-align:center']
            ],

            [
                'attribute' => 'id_user_role',
                'filter' => UserRole::getList(),
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
                'value' => function($data) {
                    return $data->getRole();
                }
            ],
            [
                'attribute' => 'username',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'label' => '',
                'format' => 'raw',
                'contentOptions' => ['style' => 'text-align:center;'],
                'value' => function($data) {
                    return Html::a('<i class="glyphicon glyphicon-lock">', ['set-password'], ['data-toggle' => 'tooltip', 'title' => 'Set Password']);
                }
            ],
            [
                'class' => 'app\components\ToggleActionColumn',
                'contentOptions' => ['style' => 'text-align:center;width:80px']
            ],
        ],
    ]); ?>
    </div>
</div>
