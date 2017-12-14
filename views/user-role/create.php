<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserRole */

$this->title = "Tambah User Role";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Roles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-role-create">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
