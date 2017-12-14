<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UserRole */

$this->title = "Detail User Role";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Role'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-role-view box box-primary">

    <div class="box-header">
        <h3 class="box-title">Detail User Role</h3>
    </div>

    <div class="box-body">

    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            [
                'attribute' => 'id',
                'format' => 'raw',
                'value' => $model->id,
            ],
            [
                'attribute' => 'nama',
                'format' => 'raw',
                'value' => $model->nama,
            ],
        ],
    ]) ?>

    </div>

    <div class="box-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting User Role', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Daftar User Role', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
    </div>

</div>
