<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\student\models\student */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="student-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'studID' => $model->studID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'studID' => $model->studID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'studID',
            'name',
            'program',
            'year',
        ],
    ]) ?>

</div>
