<?php

use common\models\Menu;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Menu */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="menu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'name',
            [
                'attribute'=>'status',
                'value'=>function($data){
                    return Html::tag('span',$data->status ? "Aktiv" : "Aktiv emas",['class'=>$data->status ? "badge badge-success" : "badge badge-danger"]);
                },
                'format'=>'html'
            ],
            [
                'attribute'=>'parent_id',
                'value'=>function($data){
                    $parent = Menu::findOne(['id'=>$data->parent_id]);
                    return $parent ? $parent->name : "Yo'q";
                }
            ],
            'order_by',
        ],
    ]) ?>

</div>
