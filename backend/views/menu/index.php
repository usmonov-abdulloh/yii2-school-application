<?php

use common\models\Menu;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\MenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Menus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Menu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            [
                    'attribute'=>'parent_id',
                    'content'=>function($data){
                        $parent = Menu::findOne(['id'=>$data->parent_id]);
                        return $parent ? $parent->name : "O'zi ota";
                    }
            ],
            'order_by',
            [
                    'attribute'=>'status',
                    'content'=>function($data){
                        return Html::tag('span',$data->status ? "Aktiv" : "Aktiv emas",['class'=>$data->status ? "badge badge-success" : "badge badge-danger"]);
                    },
                    'contentOptions'=>['style' => 'width: 50px']
            ],
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
    <?php Pjax::end(); ?>

</div>
