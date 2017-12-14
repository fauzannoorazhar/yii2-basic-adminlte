<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Set Password';

$this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin([            
    'layout'=>'horizontal',
    'fieldConfig' => [
        'horizontalCssClasses' => [
            'label' => 'col-sm-2 col-xs-12',
            'wrapper' => 'col-sm-4 col-xs-12',
            'error' => '',
            'hint' => '',
        ],
    ]
]); ?>

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Form Set Password</h3>
        </div>
        <div class="box-body">
            <div class="row">

                <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'password_konfirmasi')->passwordInput(['maxlength' => true]) ?>

            </div>
        </div>
        <div class="box-footer">
            <div class="row">
                <div class="col-sm-offset-2 col-sm-3">
                    <?= Html::submitButton('<i class="fa fa-check"></i> Set Password', ['class' => 'btn btn-success btn-flat', 'name' => 'register-button']) ?>
                </div>
            </div>
        </div>
    </div>

<?php ActiveForm::end(); ?>
