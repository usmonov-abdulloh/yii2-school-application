<?php

use common\models\StaticFunctions;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ClassesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Classes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Classes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'title',
            [
                'attribute'=>'text',
                'value'=>function($data){
                    return StaticFunctions::getShortDescription($data->text);
                }
            ],
            [
                    'attribute'=>'image',
                    'value'=>function($data){
                        $img = StaticFunctions::getImage('classes',$data->id,$data->image);
                        return Html::img($img,['style'=>'width:100px']);
                    },
                'format'=>'html'
            ],
            [
                    'attribute'=>'date',
                    'value'=>function($data){
                        $date = date('d.m.Y',strtotime($data->date));
                        return $date;
                    }
            ],
            //'age',
            //'minSize',
            //'maxSize',
            //'duration',
            //'price',
            [
                'class' => 'yii\grid\ActionColumn',

                'headerOptions' => ['style' => 'text-align:center'],

                'template' => '{buttons}',

                'contentOptions' => ['style' => 'width:240px', 'class' => 'v-align-middle'],

                'buttons' => [

                    'buttons' => function ($url, $model) {

                        $controller = Yii::$app->controller->id;

                        $code = <<<BUTTONS

                                                  <div class="project-actions text-center">

                                                      <a href="/backend/{$controller}/view?id={$model->id}" class="btn btn-primary btn-sm"><i class="fas fa-folder mr-1"></i>View</a>

                                                        <a href="/backend/{$controller}/update?id={$model->id}" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt mr-1"></i>Edit</a>

                                                      <a href="/backend/{$controller}/remove?id={$model->id}" class="btn btn-danger btn-sm"><i class="fas fa-trash mr-1" ></i> Delete</a>

                                                  </div>

BUTTONS;

                        return $code;

                    }



                ],


            ],
        ],
    ]); ?>


</div>
